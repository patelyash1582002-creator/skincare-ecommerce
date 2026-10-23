<?php

declare(strict_types=1);
if (session_status() !== PHP_SESSION_ACTIVE) session_start();

function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}
function require_login(): void
{
    if (empty($_SESSION['user_id'])) {
        header('Location: /skincare-ecommerce/auth/login.php');
        exit;
    }
}
function require_admin(): void
{
    if (empty($_SESSION['user_id']) || ($_SESSION['role'] ?? '') !== 'admin') {
        header('Location: /skincare-ecommerce/admin/login.php');
        exit;
    }
}
function csrf_token(): string
{
    if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(32));
    return $_SESSION['csrf'];
}
function verify_csrf(?string $token): bool
{
    return !empty($token) && !empty($_SESSION['csrf']) && hash_equals($_SESSION['csrf'], $token);
}

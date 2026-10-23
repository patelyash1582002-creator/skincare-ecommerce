<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Login — Glow Nest</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="auth-page">
        <div class="auth-visual">
            <div class="product-art"><small>SKINCARE</small><strong>GLOW NEST</strong><small>BOTANICAL FORMULA</small>
            </div>
        </div>
        <div class="auth-panel">
            <div class="auth-box">
                <div class="eyebrow">Private access</div>
                <h1>Admin login.</h1>
                <p style="color:var(--muted)">Authorized administration only.</p>
                <?php require_once __DIR__ . '/../config/db.php';
                require_once __DIR__ . '/../config/auth.php';
                $error = '';
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (!verify_csrf($_POST['csrf'] ?? ''))
                        $error = 'Security token expired.';
                    else {
                        $s = $pdo->prepare("SELECT * FROM users WHERE email=? AND role='admin' LIMIT 1");
                        $s->execute([trim($_POST['email'] ?? '')]);
                        $u = $s->fetch();
                        if ($u && $u['status'] === 'active' && password_verify($_POST['password'] ?? '', $u['password'])) {
                            session_regenerate_id(true);
                            $_SESSION['user_id'] = $u['id'];
                            $_SESSION['role'] = 'admin';
                            $_SESSION['name'] = $u['first_name'];
                            header('Location: dashboard.php');
                            exit;
                        } else
                            $error = 'Invalid admin credentials.';
                    }
                }
                if ($error)
                    echo '<div class="error">' . e($error) . '</div>';
                ?>
                <form method="post" data-validate><input type="hidden" name="csrf"
                        value="<?php echo e(csrf_token()); ?>">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input id="password" type="password" name="password" required>
                    </div>
                    <button class="btn primary" style="width:100%">LOGIN</button>
                </form>
                <p style="font-size:12px">Admin registration is intentionally disabled.</p>
            </div>
        </div>
    </div>
    <script src="../assets/js/validation.js"></script>
</body>

</html>
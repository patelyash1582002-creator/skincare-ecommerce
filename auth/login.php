<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login — glownest</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="auth-page">
        <div class="auth-visual">
            <div class="product-art">
                <img src="../assets/images/logo.png" alt="image not found">
            </div>
        </div>
        <div class="auth-panel">
            <div class="auth-box">
                <div class="eyebrow">Welcome back</div>
                <h1>Sign in.</h1>
                <p style="color:var(--muted)">Continue your skincare journey.</p>
                <?php
                require_once __DIR__ . '/../config/db.php';
                require_once __DIR__ . '/../config/auth.php';
                $error = '';
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (!verify_csrf($_POST['csrf'] ?? '')) {
                        $error = 'Security token expired. Please try again.';
                    } else {
                        $stmt = $pdo->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
                        $stmt->execute([trim($_POST['email'] ?? '')]);
                        $u = $stmt->fetch();
                        if ($u && password_verify($_POST['password'] ?? '', $u['password']) && $u['status'] === 'active') {
                            session_regenerate_id(true);
                            $_SESSION['user_id'] = $u['id'];
                            $_SESSION['role'] = $u['role'];
                            $_SESSION['name'] = $u['first_name'];
                            header('Location: ' . ($u['role'] === 'admin' ? '../admin/dashboard.php' : '../account/dashboard.php'));
                            exit;
                        } else $error = 'Invalid credentials or blocked account.';
                    }
                }
                if ($error) echo '<div class="error">' . e($error) . '</div>';
                ?><form method="post" data-validate><input type="hidden" name="csrf" value="<?php echo e(csrf_token()); ?>">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" required></div>
                    <div class="form-group"><label>Password</label>
                        <div style="display:flex">
                        <input id="password" type="password" name="password" required>
                        <button type="button" id="togglePassword" data-password-toggle data-password-toggle="password">Show</button>
                    </div>
                    </div>
                    <div class="form-meta"><label>
                        <input type="checkbox"> Remember me</label>
                    <a href="forgot-password.php">Forgot Password?</a>
                </div>
                <button class="btn primary" style="width:100%" style="border-radius: 15px">LOGIN</button>
                </form>
                <p style="font-size:13px">Don't have an account? 
                    <a href="register.php">
                        <b>Create account</b>
                    </a>
                </p>
            </div>
        </div>
    </div>
    <script src="../assets/js/login.js"></script>
    <script src="../assets/js/auth.js"></script>
    <script src="../assets/js/validation.js"></script>
</body>

</html>
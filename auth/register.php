<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Create Account — glow nest</title>
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
                <div class="eyebrow">Begin your ritual</div>
                <h1>Create account.</h1>
                <?php
                require_once __DIR__ . '/../config/db.php';
                require_once __DIR__ . '/../config/auth.php';
                $error = '';
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $first = trim($_POST['first_name'] ?? '');
                    $last = trim($_POST['last_name'] ?? '');
                    $email = trim($_POST['email'] ?? '');
                    $phone = trim($_POST['phone'] ?? '');
                    $pass = $_POST['password'] ?? '';
                    if (!verify_csrf($_POST['csrf'] ?? '')) $error = 'Security token expired.';
                    elseif (!$first || !$last || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($pass) < 8 || !isset($_POST['terms'])) $error = 'Please complete all fields. Password must be at least 8 characters.';
                    else {
                        $s = $pdo->prepare("SELECT id FROM users WHERE email=?");
                        $s->execute([$email]);
                        if ($s->fetch()) $error = 'An account with this email already exists.';
                        else {
                            $s = $pdo->prepare("INSERT INTO users(first_name,last_name,email,phone,password) VALUES(?,?,?,?,?)");
                            $s->execute([$first, $last, $email, $phone, password_hash($pass, PASSWORD_DEFAULT)]);
                            session_regenerate_id(true);
                            $_SESSION['user_id'] = $pdo->lastInsertId();
                            $_SESSION['role'] = 'user';
                            $_SESSION['name'] = $first;
                            header('Location: ../account/dashboard.php');
                            exit;
                        }
                    }
                }
                if ($error) echo '<div class="error">' . e($error) . '</div>';
                ?><form method="post" data-validate><input type="hidden" name="csrf" value="<?php echo e(csrf_token()); ?>">
                    <div class="form-row">
                        <div class="form-group"><label>First Name</label><input name="first_name" required></div>
                        <div class="form-group"><label>Last Name</label><input name="last_name" required></div>
                    </div>
                    <div class="form-group"><label>Email</label><input type="email" name="email" required></div>
                    <div class="form-group"><label>Mobile Number</label><input name="phone" required></div>
                    <div class="form-row">
                        <div class="form-group"><label>Password</label><input id="password" type="password" name="password" required></div>
                        <div class="form-group"><label>Confirm Password</label><input type="password" name="confirm_password" required></div>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="terms" required> I agree to the Terms & Conditions</label>
                        </div><button class="btn primary" style="width:100%">CREATE ACCOUNT
                            
                        </button>
                </form>
                <p style="font-size:13px">Already have an account? <a href="login.php"><b>Login</b></a></p>
            </div>
        </div>
    </div>
    <script src="../assets/js/auth.js"></script>
    <script src="../assets/js/validation.js"></script>
</body>

</html>
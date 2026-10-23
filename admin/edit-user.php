<?php require_once __DIR__ . '/../config/auth.php';
require_admin(); ?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edit User — Glow Nest</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="announcement">FREE SHIPPING ON ORDERS ABOVE ₹999</div>
    <header class="header">
        <div class="container nav">
            <a class="logo" href="/skincare-ecommerce/index.php">GLOW NEST</a>
            <button class="menu-btn">☰</button>
            <nav class="navlinks"><a href="/skincare-ecommerce/index.php">Home</a><a
                    href="/skincare-ecommerce/shop.php">Shop</a><a href="/skincare-ecommerce/about.php">About</a><a
                    href="/skincare-ecommerce/contact.php">Contact</a></nav>
            <div class="actions"><a class="iconbtn" href="/skincare-ecommerce/shop.php">⌕</a><a class="iconbtn"
                    href="/skincare-ecommerce/account/dashboard.php">♙</a><a class="iconbtn"
                    href="/skincare-ecommerce/shop.php">♡</a><a class="iconbtn"
                    href="/skincare-ecommerce/shop.php">🛍</a></div>
        </div>
    </header>
    <div class="dashboard">
        <aside class="sidebar"><b>ADMIN</b><a class="side-link active" href="dashboard.php">Dashboard</a><a
                class="side-link" href="users.php">Users</a><a class="side-link" href="products.php">Products</a><a
                class="side-link" href="#">Categories</a><a class="side-link" href="orders.php">Orders</a><a
                class="side-link" href="#">Reviews</a><a class="side-link" href="#">Coupons</a><a class="side-link"
                href="reports.php">Reports</a><a class="side-link" href="settings.php">Settings</a><a class="side-link"
                href="../auth/logout.php">Logout</a></aside>
        <main class="dash-main">
            <?php require_once __DIR__ . '/../config/db.php';
            $id = (int) ($_GET['id'] ?? 0);
            $s = $pdo->prepare("SELECT * FROM users WHERE id=?");
            $s->execute([$id]);
            $u = $s->fetch();
            if (!$u)
                exit("User not found");
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && verify_csrf($_POST['csrf'] ?? '')) {
                $s = $pdo->prepare("UPDATE users SET first_name=?,last_name=?,email=?,phone=?,role=?,status=? WHERE id=?");
                $s->execute([trim($_POST['first_name']), trim($_POST['last_name']), trim($_POST['email']), trim($_POST['phone']), $_POST['role'], $_POST['status'], $id]);
                header("Location: users.php");
                exit;
            } ?>
            <div class="eyebrow">User #<?php echo $id; ?></div>
            <h1>Edit User</h1>
            <form method="post" style="max-width:650px"><input type="hidden" name="csrf"
                    value="<?php echo e(csrf_token()); ?>">
                <div class="form-row">
                    <div class="form-group"><label>First Name</label><input name="first_name"
                            value="<?php echo e($u['first_name']); ?>" required></div>
                    <div class="form-group"><label>Last Name</label><input name="last_name"
                            value="<?php echo e($u['last_name']); ?>" required></div>
                </div>
                <div class="form-group"><label>Email</label><input name="email" value="<?php echo e($u['email']); ?>"
                        required></div>
                <div class="form-group"><label>Phone</label><input name="phone" value="<?php echo e($u['phone']); ?>">
                </div>
                <div class="form-row">
                    <div class="form-group"><label>Role</label><select name="role">
                            <option value="user" <?php echo $u['role'] === 'user' ? 'selected' : ''; ?>>User</option>
                            <option value="admin" <?php echo $u['role'] === 'admin' ? 'selected' : ''; ?>>Admin</option>
                        </select></div>
                    <div class="form-group"><label>Status</label><select name="status">
                            <option value="active" <?php echo $u['status'] === 'active' ? 'selected' : ''; ?>>Active</option>
                            <option value="blocked" <?php echo $u['status'] === 'blocked' ? 'selected' : ''; ?>>Blocked
                            </option>
                        </select></div>
                </div><button class="btn primary">SAVE USER</button>
            </form>
        </main>
    </div>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>
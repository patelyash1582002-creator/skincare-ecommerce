<?php require_once __DIR__ . '/../config/auth.php';
require_admin(); ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>User Management — Glow Nest</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="announcement">FREE SHIPPING ON ORDERS ABOVE ₹999</div>
    <header class="header">
        <div class="container nav">
            <a class="logo" href="/skincare-ecommerce/index.php">Glow Nest</a>
            <button class="menu-btn">☰</button>
            <nav class="navlinks">
                <a href="/skincare-ecommerce/index.php">Home</a>
                <a href="/skincare-ecommerce/shop.php">Shop</a>
                <a href="/skincare-ecommerce/about.php">About</a>
                <a href="/skincare-ecommerce/contact.php">Contact</a>
            </nav>
            <div class="actions">
                <a class="iconbtn" href="/skincare-ecommerce/shop.php">⌕</a>
                <a class="iconbtn" href="/skincare-ecommerce/account/dashboard.php">♙</a>
                <a class="iconbtn" href="/skincare-ecommerce/shop.php">♡</a>
                <a class="iconbtn" href="/skincare-ecommerce/shop.php">🛍</a>
            </div>
        </div>
    </header>
    <div class="dashboard">
        <aside class="sidebar">
            <b>ADMIN</b>
            <a class="side-link active" href="dashboard.php">Dashboard</a>
            <a class="side-link" href="users.php">Users</a>
            <a class="side-link" href="products.php">Products</a>
            <a class="side-link" href="#">Categories</a>
            <a class="side-link" href="orders.php">Orders</a>
            <a class="side-link" href="#">Reviews</a>
            <a class="side-link" href="#">Coupons</a>
            <a class="side-link" href="reports.php">Reports</a>
            <a class="side-link" href="settings.php">Settings</a>
            <a class="side-link" href="../auth/logout.php">Logout</a>
        </aside>
        <main class="dash-main"><?php require_once __DIR__ . '/../config/db.php';
                                $users = $pdo->query("SELECT id,first_name,last_name,email,phone,role,status,created_at FROM users ORDER BY id DESC")->fetchAll(); ?><div class="eyebrow">Customers</div>
            <h1>User Management</h1>
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Joined</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody><?php foreach ($users as $u): ?><tr>
                                <td><?php echo e((string)$u['id']); ?></td>
                                <td><?php echo e($u['first_name'] . ' ' . $u['last_name']); ?></td>
                                <td><?php echo e($u['email']); ?></td>
                                <td><?php echo e($u['phone']); ?></td>
                                <td><?php echo e($u['role']); ?></td>
                                <td><span class="badge <?php echo $u['status'] === 'blocked' ? 'blocked' : ''; ?>"><?php echo e($u['status']); ?></span></td>
                                <td><?php echo e($u['created_at']); ?></td>
                                <td><a class="btn" href="edit-user.php?id=<?php echo (int)$u['id']; ?>">Edit</a></td>
                            </tr><?php endforeach; ?></tbody>
                </table>
            </div>
        </main>
    </div>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>
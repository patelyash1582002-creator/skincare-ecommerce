<?php require_once __DIR__ . '/../config/auth.php';
require_login(); ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>My Dashboard — Glow Nest</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="announcement">FREE SHIPPING ON ORDERS ABOVE ₹999</div>
    <header class="header">
        <div class="container nav">
            <a class="logo" href="/skincare-ecommerce/index.php">GLOW NEST</a>
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
        <aside class="sidebar"><b>MY ACCOUNT</b><a class="side-link active" href="dashboard.php">Dashboard</a><a class="side-link" href="profile.php">Profile</a><a class="side-link" href="orders.php">My Orders</a><a class="side-link" href="wishlist.php">Wishlist</a><a class="side-link" href="settings.php">Settings</a><a class="side-link" href="../auth/logout.php">Logout</a></aside>
        <main class="dash-main">
            <div class="eyebrow">Welcome</div>
            <h1>Hello, <?php echo e($_SESSION['name'] ?? 'there'); ?>.</h1>
            <div class="stat-grid">
                <div class="stat"><small>Account Status</small><strong>Active</strong></div>
                <div class="stat"><small>My Orders</small><strong>0</strong></div>
                <div class="stat"><small>Wishlist</small><strong>0</strong></div>
                <div class="stat"><small>Recently Viewed</small><strong>0</strong></div>
            </div>
            <section class="section" style="padding-top:50px">
                <h2>Your skincare space</h2>
                <p style="color:var(--muted)">Orders, wishlist, addresses and recently viewed products are prepared as placeholders for future phases.</p>
            </section>
        </main>
    </div>
</body>

</html>
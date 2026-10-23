<?php require_once __DIR__ . '/../config/auth.php';
require_admin(); ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard — Glow Nest</title>
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
        <aside class="sidebar"><b>ADMIN</b><a class="side-link active" href="dashboard.php">Dashboard</a><a class="side-link" href="users.php">Users</a><a class="side-link" href="products.php">Products</a><a class="side-link" href="#">Categories</a><a class="side-link" href="orders.php">Orders</a><a class="side-link" href="#">Reviews</a><a class="side-link" href="#">Coupons</a><a class="side-link" href="reports.php">Reports</a><a class="side-link" href="settings.php">Settings</a><a class="side-link" href="../auth/logout.php">Logout</a></aside>
        <main class="dash-main">
            <div class="eyebrow">Overview</div>
            <h1>Dashboard</h1>
            <div class="stat-grid">
                <div class="stat"><small>Total Users</small><strong>1,248</strong></div>
                <div class="stat"><small>Active Users</small><strong>1,201</strong></div>
                <div class="stat"><small>Blocked Users</small><strong>47</strong></div>
                <div class="stat"><small>Total Products</small><strong>36</strong></div>
            </div>
            <section class="section">
                <div class="section-head">
                    <div>
                        <div class="eyebrow">Analytics</div>
                        <h2>User Growth</h2>
                    </div>
                </div>
                <div style="height:270px;background:#fff;border:1px solid var(--line);padding:25px;display:flex;align-items:end;gap:8px">
                    <div style="height:40px;flex:1;background:var(--sage);opacity:.8" title="Month 1"></div>
                    <div style="height:58px;flex:1;background:var(--sage);opacity:.8" title="Month 2"></div>
                    <div style="height:76px;flex:1;background:var(--sage);opacity:.8" title="Month 3"></div>
                    <div style="height:94px;flex:1;background:var(--sage);opacity:.8" title="Month 4"></div>
                    <div style="height:112px;flex:1;background:var(--sage);opacity:.8" title="Month 5"></div>
                    <div style="height:130px;flex:1;background:var(--sage);opacity:.8" title="Month 6"></div>
                    <div style="height:148px;flex:1;background:var(--sage);opacity:.8" title="Month 7"></div>
                    <div style="height:166px;flex:1;background:var(--sage);opacity:.8" title="Month 8"></div>
                    <div style="height:184px;flex:1;background:var(--sage);opacity:.8" title="Month 9"></div>
                    <div style="height:202px;flex:1;background:var(--sage);opacity:.8" title="Month 10"></div>
                    <div style="height:220px;flex:1;background:var(--sage);opacity:.8" title="Month 11"></div>
                    <div style="height:238px;flex:1;background:var(--sage);opacity:.8" title="Month 12"></div>
                </div>
                <p style="color:var(--muted)">Demo visualization. Connect real MySQL analytics in a future phase.</p>
            </section>
        </main>
    </div>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>
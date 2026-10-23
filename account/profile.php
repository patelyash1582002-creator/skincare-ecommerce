<?php require_once __DIR__ . '/../config/auth.php';
require_login(); ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Profile — Glow Nest</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="announcement">FREE SHIPPING ON ORDERS ABOVE ₹999</div>
    <header class="header">
        <div class="container nav">
            <a class="logo" href="/skincare-ecommerce/index.php">GLOW NEST</a>
            <button class="menu-btn">☰</button>
            <nav class="navlinks"><a href="/skincare-ecommerce/index.php">Home</a><a href="/skincare-ecommerce/shop.php">Shop</a><a href="/skincare-ecommerce/about.php">About</a><a href="/skincare-ecommerce/contact.php">Contact</a></nav>
            <div class="actions"><a class="iconbtn" href="/skincare-ecommerce/shop.php">⌕</a><a class="iconbtn" href="/skincare-ecommerce/account/dashboard.php">♙</a><a class="iconbtn" href="/skincare-ecommerce/shop.php">♡</a><a class="iconbtn" href="/skincare-ecommerce/shop.php">🛍</a></div>
        </div>
    </header>
    <div class="dashboard">
        <aside class="sidebar"><b>MY ACCOUNT</b><a class="side-link active" href="dashboard.php">Dashboard</a><a class="side-link" href="profile.php">Profile</a><a class="side-link" href="orders.php">My Orders</a><a class="side-link" href="wishlist.php">Wishlist</a><a class="side-link" href="settings.php">Settings</a><a class="side-link" href="../auth/logout.php">Logout</a></aside>
        <main class="dash-main">
            <div class="eyebrow">Account</div>
            <h1>Your Profile</h1>
            <form style="max-width:600px">
                <div class="form-row">
                    <div class="form-group"><label>First Name</label><input></div>
                    <div class="form-group"><label>Last Name</label><input></div>
                </div>
                <div class="form-group"><label>Email</label><input type="email">
            </div>
                <div class="form-group"><label>Phone</label><input>
            </div>
                <div class="form-group"><label>Address</label><input>
            </div>
                <button class="btn primary">SAVE CHANGES</button>
            </form>
            <hr style="margin:40px 0;border:0;border-top:1px solid var(--line)">
            <h2>Change Password</h2>
            <div class="form-group" style="max-width:600px">
                <label>Current Password</label><input type="password">
            </div>
            <div class="form-group" style="max-width:600px">
                <label>New Password</label><input type="password">
            </div>
            <div class="form-group" style="max-width:600px">
                <label>Confirm Password</label><input type="password">
            </div>
        </main>
    </div>
</body>

</html>
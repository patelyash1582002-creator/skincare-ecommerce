<?php session_start(); ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Glow Nest — Skincare</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
    <section class="hero">
        <div class="hero-copy">
            <div>
                <div class="eyebrow">Thoughtfully formulated skincare</div>
                <h1>Healthy Skin<br>Starts Here.</h1>
                <p>Discover thoughtfully formulated skincare designed for your everyday glow.</p>
                <div style="display:flex;gap:10px;margin-top:25px"><a class="btn primary" href="shop.php">Shop Now</a><a class="btn" href="#collections">Explore Collection</a></div>
            </div>
        </div>
        <div class="hero-image">
            
            <div class="product-art">
                <img src="./assets/images/serum1.png" alt="Glow Serum">
            </div>
        </div>
    </section>
    <section class="section" id="collections">
        <div class="container">
            <div class="section-head">
                <div>
                    <div class="eyebrow">Explore</div>
                    <h2>Rituals for every skin day</h2>
                </div>
            </div>
            <div class="category-grid">
                <a class="category" href="shop.php">
                    <img src="./assets/images/c1.png" alt="image is missing">
                </a>
                    <a class="category" href="shop.php">
                        <img src="./assets/images/c2.png" alt="Moisturizer">
                    </a>
                    <a class="category" href="shop.php">
                        <img src="./assets/images/c3.png" alt="Cleanser">
                    </a>
                    <a class="category" href="shop.php">
                        <img src="./assets/images/c4.png" alt="Serum">
                    </a>
                    <a class="category" href="shop.php">
                        <img src="./assets/images/c5.png" alt="Sunscreen">
                    </a>
                    <a class="category" href="shop.php">
                        <img src="./assets/images/c6.png" alt="Body Care">
                    </a>
                    <a class="category" href="shop.php">
                        <img src="./assets/images/c7.png" alt="Hairs Care">
                    </a>
                    <a class="category" href="shop.php">
                        <img src="./assets/images/c8.png" alt="Lip Care">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="section-head">
                <div>
                    <div class="eyebrow">Curated for you</div>
                    <h2>Best Sellers</h2>
                    <p>Everyday essentials, elevated.</p>
                </div><a class="btn" href="shop.php">View All</a>
            </div>
            <div class="products">
                <article class="card" data-price="899">
                    <div class="card-image">
                        <!-- <div class="product-art"> -->
                            <img src="./assets/images/facewash1.png" alt="Glow Serum">
                        <!-- </div> -->
                        <button class="wish">♡</button>
                    </div>
                    <div class="card-info">
                        <div class="category-label">body wash</div>
                        <div class="card-title">GlowNest Body Wash</div>
                        <div class="rating">★★★★★ <span>(22)</span></div>
                        <div class="price"><span class="sale">₹899</span><span class="old">₹1,199</span></div>
                    </div>
                </article>
                <article class="card" data-price="749">
                    <div class="card-image">
                        <!-- <div class="product-art"> -->
                            <img src="./assets/images/FaceScrub.png" alt="Cloud Cream">
                        <!-- </div> -->
                        <button class="wish">♡</button>
                    </div>
                    <div class="card-info">
                        <div class="category-label">FaceScrub</div>
                        <div class="card-title">GlowNest FaceScrub</div>
                        <div class="rating">★★★★★ <span>(23)</span></div>
                        <div class="price"><span class="sale">₹749</span><span class="old">₹999</span></div>
                    </div>
                </article>
                <article class="card" data-price="699">
                    <div class="card-image">
                        <!-- <div class="product-art"> -->
                            <img src="./assets/images/facelotion.png" alt="Daily Shield">
                        <!-- </div> -->
                        <button class="wish">♡</button>
                    </div>
                    <div class="card-info">
                        <div class="category-label">facelotion</div>
                        <div class="card-title">GlowNest Face Lotion</div>
                        <div class="rating">★★★★★ <span>(24)</span></div>
                        <div class="price"><span class="sale">₹699</span><span class="old">₹899</span></div>
                    </div>
                </article>
                <article class="card" data-price="599">
                    <div class="card-image">
                        <!-- <div class="product-art"> -->
                            <img src="./assets/images/drycream.png" alt="Gentle Cleanse">
                        <!-- </div> -->
                        <button class="wish">♡</button>
                    </div>
                    <div class="card-info">
                        <div class="category-label">drycream</div>
                        <div class="card-title">GlowNest Dry Cream</div>
                        <div class="rating">★★★★★ <span>(26)</span></div>
                        <div class="price"><span class="sale">₹599</span><span class="old">₹799</span></div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="promo">
        <div class="container">
            <div class="eyebrow">Your daily ritual</div>
            <h2>YOUR DAILY RITUAL FOR<br>HEALTHIER-LOOKING SKIN</h2><a class="btn primary" href="shop.php">Discover More</a>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="benefits">
                <div class="benefit"><b>Dermatologically Tested</b><span>Carefully developed formulas.</span></div>
                <div class="benefit"><b>Cruelty-Free</b><span>Never tested on animals.</span></div>
                <div class="benefit"><b>Clean Ingredients</b><span>Thoughtful ingredient choices.</span></div>
                <div class="benefit"><b>Paraben-Free</b><span>Made for modern routines.</span></div>
                <div class="benefit"><b>Fast Delivery</b><span>Reliable delivery experience.</span></div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="section-head">
                <div>
                    <div class="eyebrow">Loved by our community</div>
                    <h2>Kind words</h2>
                </div>
            </div>
            <div class="reviews">
                <div class="review">
                    <div>★★★★★</div>
                    <p>“A beautiful addition to my daily skincare ritual. My skin feels comfortable and cared for.”</p><b>Aarohi</b><small> — Glow Serum</small>
                </div>
                <div class="review">
                    <div>★★★★★</div>
                    <p>“A beautiful addition to my daily skincare ritual. My skin feels comfortable and cared for.”</p><b>Meera</b><small> — Cloud Cream</small>
                </div>
                <div class="review">
                    <div>★★★★★</div>
                    <p>“A beautiful addition to my daily skincare ritual. My skin feels comfortable and cared for.”</p><b>Riya</b><small> — Daily Shield</small>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter">
        <div class="container">
            <div class="eyebrow">Join the glow club</div>
            <h2>Small rituals. Beautiful skin.</h2>
            <p>Get skincare notes, new launches and special offers.</p>
            <form><input type="email" placeholder="Your email address"><button class="btn primary" type="submit">Subscribe</button></form>
        </div>
    </section>
    <footer class="footer">
        <div class="container footer-grid">
            <div>
                <div class="logo">GLOW NEST</div>
                <p>Thoughtfully formulated skincare for your everyday glow.</p>
            </div>
            <div><b>SHOP</b><a href="#">Face Care</a><a href="#">Serums</a><a href="#">Moisturizers</a><a href="#">Sunscreen</a></div>
            <div><b>CARE</b><a href="#">Shipping</a><a href="#">Returns</a><a href="#">Privacy</a><a href="#">Terms</a></div>
            <div><b>CONNECT</b><a href="#">Instagram</a><a href="#">Facebook</a><a href="#">Contact</a></div>
        </div>
        <div class="container copyright">© 2026 Glow Nest Skincare. All rights reserved.</div>
    </footer>
    <div class="toast"></div>
    <script src="assets/js/main.js"></script>
</body>

</html>
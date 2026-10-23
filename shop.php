<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Shop — Glow Nest</title>
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
    <main class="container">
        <div class="breadcrumb">Home / Shop</div>
        <div class="section-head">
            <div>
                <div class="eyebrow">The collection</div>
                <h2>Shop Skincare</h2>
            </div>
        </div>
        <div class="shop-layout">
            <aside class="filters">
                <div class="filter-group">
                    <h4>Categories</h4><label><input type="checkbox"> Face Care</label><label><input type="checkbox"> Body Care</label><label><input type="checkbox"> Hair Care</label>
                </div>
                <div class="filter-group">
                    <h4>Skin Concerns</h4><label><input type="checkbox"> Acne</label><label><input type="checkbox"> Dryness</label><label><input type="checkbox"> Oiliness</label><label><input type="checkbox"> Dullness</label><label><input type="checkbox"> Pigmentation</label><label><input type="checkbox"> Sensitive Skin</label><label><input type="checkbox"> Anti-Aging</label><label><input type="checkbox"> Uneven Skin Tone</label>
                </div>
                <div class="filter-group">
                    <h4>Product Type</h4><label><input type="checkbox"> Cleanser</label><label><input type="checkbox"> Toner</label><label><input type="checkbox"> Serum</label><label><input type="checkbox"> Moisturizer</label><label><input type="checkbox"> Sunscreen</label><label><input type="checkbox"> Face Mask</label><label><input type="checkbox"> Eye Care</label><label><input type="checkbox"> Lip Care</label>
                </div>
            </aside>
            <section>
                <div class="shop-top"><span>8 products</span><select class="select" id="sort">
                        <option>Sort by</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                    </select></div>
                <div class="products" id="productGrid">
                    <article class="card" data-price="899">
                        <div class="card-image">
                            <div class="images">
                                <img src="./assets/images/facewash1.png" alt="image not found">
                            </div>
                            <button class="wish">♡</button>
                        </div>
                        <div class="card-info">
                            <div class="category-label">facewash</div>
                            <div class="card-title">Glow facewash</div>
                            <div class="rating">★★★★★ <span>(22)</span></div>
                            <div class="price"><span class="sale">₹899</span><span class="old">₹1,199</span></div>
                        </div>
                    </article>
                    <article class="card" data-price="749">
                        <div class="card-image">
                            <div class="images">
                                <img src="./assets/images/FaceScrub.png" alt="image not found">
                            </div>
                            <button class="wish">♡</button>
                        </div>
                        <div class="card-info">
                            <div class="category-label">facescrub</div>
                            <div class="card-title">Gentle Face Scrub</div>
                            <div class="rating">★★★★★ <span>(23)</span></div>
                            <div class="price"><span class="sale">₹749</span><span class="old">₹999</span></div>
                        </div>
                    </article>
                    <article class="card" data-price="699">
                        <div class="card-image">
                            <div class="images">
                                <img src="./assets/images/serum1.png" alt="image not found">
                            </div>
                            <button class="wish">♡</button>
                        </div>
                        <div class="card-info">
                            <div class="category-label">Serum</div>
                            <div class="card-title">Daily Glow Serum</div>
                            <div class="rating">★★★★★ <span>(24)</span></div>
                            <div class="price"><span class="sale">₹699</span><span class="old">₹899</span></div>
                        </div>
                    </article>
                    <article class="card" data-price="599">
                        <div class="card-image">
                            <div class="images">
                                <img src="./assets/images/bathsoap.png" alt="image not found">
                            </div>
                            <button class="wish">♡</button>
                        </div>
                        <div class="card-info">
                            <div class="category-label">bathsoap</div>
                            <div class="card-title">Gentle Bath Soap</div>
                            <div class="rating">★★★★★ <span>(26)</span></div>
                            <div class="price"><span class="sale">₹599</span><span class="old">₹799</span></div>
                        </div>
                    </article>
                    <article class="card" data-price="549">
                        <div class="card-image">
                            <div class="images">
                                <img src="./assets/images/bodylotion.png" alt="image not found">
                            </div>
                            <button class="wish">♡</button>
                        </div>
                        <div class="card-info">
                            <div class="category-label">Body Lotion</div>
                            <div class="card-title">Glowing Body Lotion</div>
                            <div class="rating">★★★★★ <span>(22)</span></div>
                            <div class="price"><span class="sale">₹549</span><span class="old">₹699</span></div>
                        </div>
                    </article>
                    <article class="card" data-price="649">
                        <div class="card-image">
                            <div class="images">
                                <img src="./assets/images/drycream.png" alt="image not found">
                            </div>
                            <button class="wish">♡</button>
                        </div>
                        <div class="card-info">
                            <div class="category-label">Dry Cream</div>
                            <div class="card-title"> Moisturizing Dry Cream</div>
                            <div class="rating">★★★★★ <span>(23)</span></div>
                            <div class="price"><span class="sale">₹649</span><span class="old">₹849</span></div>
                        </div>
                    </article>
                    <article class="card" data-price="399">
                        <div class="card-image">
                            <div class="images">
                                <img src="./assets/images/gelcream.png" alt="image not found">
                            </div>
                            <button class="wish">♡</button>
                        </div>
                        <div class="card-info">
                            <div class="category-label">Gel Cream</div>
                            <div class="card-title">Refreshing Gel Cream</div>
                            <div class="rating">★★★★★ <span>(22)</span></div>
                            <div class="price"><span class="sale">₹399</span><span class="old">₹499</span></div>
                        </div>
                    </article>
                    <article class="card" data-price="799">
                        <div class="card-image">
                            <div class="images">
                                <img src="./assets/images/facelotion.png" alt="image not found">
                            </div>
                            <button class="wish">♡</button>
                        </div>
                        <div class="card-info">
                            <div class="category-label">Face Lotion</div>
                            <div class="card-title">Glowing Face Lotion</div>
                            <div class="rating">★★★★★ <span>(21)</span></div>
                            <div class="price"><span class="sale">₹799</span><span class="old">₹999</span></div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>
    <footer class="footer">
        <div class="container footer-grid">
            <div>
                <div class="logo">GLOW NEST</div>
                <p>Thoughtfully formulated skincare for your everyday glow.</p>
            </div>
            <div><b>SHOP</b>
            <a href="#">Face Care</a>
            <a href="#">Serums</a>
            <a href="#">Moisturizers</a>
            <a href="#">Sunscreen</a>
        </div>
            <div><b>CARE</b>
            <a href="#">Shipping</a>
            <a href="#">Returns</a>
            <a href="#">Privacy</a>
            <a href="#">Terms</a>
        </div>
            <div><b>CONNECT</b><a href="#">Instagram</a><a href="#">Facebook</a><a href="#">Contact</a></div>
        </div>
        <div class="container copyright">© 2026 Glow Nest Skincare. All rights reserved.</div>
    </footer>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/products.js"></script>
</body>

</html>
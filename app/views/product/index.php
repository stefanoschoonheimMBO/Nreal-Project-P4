<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nreal Air</title>
    <link rel="stylesheet" href="/css/globals.css">
    <link rel="stylesheet" href="/css/pages/products.css">
    </head`>

<body>
    <div class="bg"></div>
    <nav>
        <div class="logo">
            nreal
        </div>
        <div class="mobile">
            <svg width="46" height="22" viewBox="0 0 46 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L45 1" stroke="#9B9B9B" stroke-linecap="round" />
                <path d="M15 11L45 11" stroke="#9B9B9B" stroke-linecap="round" />
                <path d="M6 21L45 21" stroke="#9B9B9B" stroke-linecap="round" />
            </svg>
        </div>
        <div>
            <ul>
                <li class="close">
                    <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L18.6868 18.337" stroke="#9B9B9B" stroke-linecap="round" />
                        <path d="M18.7393 1L1 17.9409" stroke="#9B9B9B" stroke-linecap="round" />
                    </svg>
                </li>
                <li><a href="<?= URLROOT ?>">Home</a></li>
                <li><a href="<?= URLROOT ?>/products">Products</a></li>
                <li><a href="<?= URLROOT ?>/contact">Contact</a></li>
            </ul>
            <a href="<?= URLROOT ?>/auth/login" class="login">
                Login
            </a>
        </div>
    </nav>`
    <script src="<?= URLROOT ?>/public/js/nav.js"></script>
    <main>
        <div class="banner">
            <img src="<?= URLROOT ?>/assets/products/banner.png" alt="">
            <div class="glass-blur"></div>
            <div class="overlay">
                <h1>Products</h1>
                <div class="links">
                    <ul>
                        <li><a href="#overview" id="txt">Overview</a></li>
                        <li><a href="#overview" id="txt">Specification</a></li>
                        <li class="buy"><a href="#buy">Buy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <div class="glasses-img"> IF PARALAX EFFECT
            <img src="/assets/products/nreal-removebg-preview.png" alt="">
        </div> -->
        <div class="specs" id="overview">
            <div class="glasses">
                <svg viewBox="0 0 1019 803" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1016.35 469.804C1055.23 713.737 656.773 803 468.071 803C279.37 803 0 585.796 0 445.791C0 305.787 584.067 0 772.769 0C961.47 0 970.856 184.425 1016.35 469.804Z" fill="#9B9B9B" />
                </svg>
                <img src="<?= URLROOT ?>/assets/products/nrealBril2 1.png" alt="">
            </div>
            <div class="bottom-text">
                <h1 class="colored-text">201”</h1>
                <p>Be blown away by a cinema-sized 201” screen.</p>
            </div>
            <div class="icons">
                <img src="<?= URLROOT ?>/assets/products/icons/icon_46fov.png" alt="">
                <img src="<?= URLROOT ?>/assets/products/icons/icon_49ppd.png" alt="">
                <img src="<?= URLROOT ?>/assets/products/icons/icon_1080p.png" alt="">
            </div>
        </div>
        <div class="down-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" fill="#fff">
                <path d="M480 711 240 471l43-43 197 198 197-197 43 43-240 239Z" stroke-linecap="round" />
            </svg>
        </div>
        <div class="paragraph">
            <h1 class="colored-text">Air</h1>
            <p>Watch anytime, Anywhere</p>
        </div>
        <div class="buy-product" id="buy">
            <!-- 2 cols, 1 Buy + certifications, 2 Product showcase + product info beneath -->
            <div class="buy">
                <a href="" class="button"><img src="/assets/products/icons/shopping-cart.svg" alt="">Add</a>
                <div class="certs">
                    <img src="/assets/products/icons/TUV_2.png" alt="">
                    <img src="/assets/products/icons/TUV_1.png" alt="">
                </div>
            </div>
            <div class="product">
                <div class="carrousel">
                    <div class="bg">
                        <svg viewBox="0 0 1065 956" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1064.08 447C1064.08 624.56 950.997 955 796.081 955C641.165 955 -72.9193 987.5 6.08067 610C178.581 34.5 831.081 0 831.081 0C985.997 0 1064.08 269.44 1064.08 447Z" fill="#9B9B9B" />
                        </svg>

                    </div>
                    <div class="imgs">
                        <img src="/assets/products/nrealFront.png" alt="">
                        <img src="/assets/products/nrealBack.png" alt="">
                        <img src="/assets/products/nrealPack.png" alt="">
                    </div>
                    <div class="controls">
                        <?php
                        for ($i = 0; $i < 3 /* Img amount */; $i++) {
                        ?>
                            <div class="carrousel-btn" data-index="<?= $i ?>"></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="information">
                Innovative spring hinge system for up to 40° of flexibility and comfort for all head sizes. 
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="begin">
            <div>
                <h1>Support & Service</h1>
                <ul>
                    <li>Support</li>
                    <li>Nreal subreddit</li>
                    <li>Terms of sale</li>
                </ul>
            </div>
            <div>
                <h1>About</h1>
                <ul>
                    <li>Specifications</li>
                    <li>FAQ</li>
                    <li>News</li>
                </ul>
            </div>
        </div>
        <div class="end">
            <div class="copyright">
                © Nreal Project, P4
            </div>
            <div class="icons">
                <div class="linkedin"></div>
                <div class="discord"></div>
                <div class="github"></div>
            </div>
        </div>
    </footer>
    <script src="/js/products/carrousel.js"></script>
</body>

</html>
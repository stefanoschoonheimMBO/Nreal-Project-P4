<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nreal Air</title>
    <link rel="stylesheet" href="/css/globals.css">
    <link rel="stylesheet" href="/css/pages/content/list.css">
</head>

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
    </nav>
    <script src="<?= URLROOT ?>/public/js/nav.js"></script>
    <main>
        <div>
            <a href="<?= URLROOT ?>" class="back"><- Go back</a>
                    <h1>Overview</h1>
                    <ul>
                        <?php foreach ($data["data"] as $value) { ?>
                            <li><a href="<?= URLROOT ?>/content/<?= $data["update"] ?><?= $value->url ?>"><?= $value->url ?></a></li>
                        <?php } ?>
                    </ul>
        </div>
        <div>
            <img src="<?= URLROOT ?>/assets/content/list.svg" alt="">
        </div>
    </main>
    <footer>
        <div class=" begin">
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
</body>

</html>
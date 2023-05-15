<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
    <link rel="stylesheet" href="/css/globals.css">
    <link rel="stylesheet" href="/css/pages/content/create.css">
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
        <div class="editor">

            <?php
            if ($data["create"]) {
            ?>
                <div class="inputs">
                    <input id="url" type="text" placeholder="Url">
                </div>
            <?php
            } else {
            ?>
                <div class="inputs">
                    <input type="hidden" id="url">
                </div>
            <?php
            }
            ?>
            <div class="top">
                <div class="begin">
                    <button class="heading-btn" data-heading="1">Heading 1</button>
                    <button class="heading-btn" data-heading="2">Heading 2</button>
                    <button class="heading-btn" data-heading="3">Heading 3</button>
                    <button class="heading-btn" data-heading="4">Heading 4</button>
                    <button class="heading-btn" data-heading="5">Heading 5</button>
                    <button class="blockquote-btn">Blockquote</button>
                </div>
                <div class="end">
                    <button class="save-btn"><?= $data["create"] ? "Opslaan" : "Update" ?></button>
                </div>
            </div>
        </div>
    </main>
    <script>
        let create = <?= $data["create"] ? "true" : "false" ?>;
        let url = "<?= $data["url"] ?>";
        let data = "<?= $data["data"] ?>"
    </script>
    <script src="/js/content/editor.js" type="module"></script>
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
</body>

</html>
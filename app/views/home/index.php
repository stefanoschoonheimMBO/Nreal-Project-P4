<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nreal</title>
    <link rel="stylesheet" href="/css/globals.css">
    <link rel="stylesheet" href="public/css/pages/home.css">
</head>
<body>
    <div class="bg"></div>
    <nav>
        <div class="logo">
            nreal
        </div>
        <div>
            <ul>
                <li><a href="<?= URLROOT ?>">Home</a></li>
                <li><a href="<?= URLROOT ?>/products">Products</a></li>
                <li><a href="<?= URLROOT ?>/contact">Contact</a></li>
            </ul>
            <a href="<?= URLROOT ?>/auth/login" class="login">
                Login
            </a>
        </div>
    </nav>
    <main>
        <div class="eclipse">
            <svg viewBox="0 0 537 656" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M537 246C537 378.824 528.176 656 389 656C249.824 656 0 518.824 0 386C0 253.176 172.324 0 311.5 0C450.676 0 537 113.176 537 246Z" fill="#9B9B9B"/>
            </svg>
            <!-- Image from public/assets -->
            <img src="/assets/nrealair.png" alt="air" class="nreal">
        </div>
        <div class="title">
            <h1>See <span class="colored">Different.</span></h1>
        </div>
        <img src="/assets/amazon.png" alt="amazon" class="amazon">
        <div class="buy">
            <a href="<?= URLROOT ?>/products" class="buyButton">Buy</a>
        </div>
        <div class="lines">
            <svg width="255" height="38" viewBox="0 0 255 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="8.36166e-10" y1="1" x2="255" y2="1" stroke="#9B9B9B" stroke-width="2"/>
                <line y1="37" x2="206" y2="37" stroke="#9B9B9B" stroke-width="2"/>
                <line y1="19" x2="127" y2="19" stroke="#9B9B9B" stroke-width="2"/>
            </svg>
        </div>
        <div class="info-container"></div>
        <div class="info-image">
            <img src="/assets/image 1.png" alt="image1" style="opacity: 100%">
        </div>
    </main>
</body>
</html>
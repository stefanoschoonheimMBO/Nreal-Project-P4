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
        <div class="info-content">
            <h1>What is nreal?</h1>
            <p>
                Nreal is a cutting-edge technology company that specializes in creating high-quality, mixed reality devices. Founded in 2017 by a team of seasoned professionals with extensive experience in the fields of computer vision, graphics, and mobile device technology, Nreal is committed to delivering a next-generation mixed reality experience that is both accessible and immersive.
                <br>
                <br>
                Nreal is dedicated to pushing the boundaries of mixed reality technology and is committed to developing innovative products that empower users to explore new dimensions of digital interaction. With a team of talented and passionate engineers, designers, and visionaries, Nreal is poised to be a leader in the rapidly-evolving mixed reality market for years to come.
            </p>
        </div>
        <div class="exploreButton">
            <a href="<?= URLROOT ?>/products" class="explore">Explore</a>
        </div>
        <div class="info-design">
            <svg width="56" height="52" viewBox="0 0 56 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_106_3)">
                <path d="M49 3L6.99999 41.4945" stroke="white" stroke-width="5" stroke-linecap="round"/>
                </g>
                <g filter="url(#filter1_d_106_3)">
                <path d="M7 3L49 41" stroke="white" stroke-width="5" stroke-linecap="round"/>
                </g>
                <defs>
                <filter id="filter0_d_106_3" x="0.5" y="0.5" width="55" height="51.4945" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="4"/>
                <feGaussianBlur stdDeviation="2"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_106_3"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_106_3" result="shape"/>
                </filter>
                <filter id="filter1_d_106_3" x="0.5" y="0.5" width="55" height="51" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="4"/>
                <feGaussianBlur stdDeviation="2"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_106_3"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_106_3" result="shape"/>
                </filter>
                </defs>
            </svg>
            <span class="barcode">Barcode</span>
        </div>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nreal Air - Contact</title>
    <link rel="stylesheet" href="/css/globals.css">
    <link rel="stylesheet" href="public/css/pages/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div class="banner">
            <img src="../assets/contact/ContactImage.png" alt="">
            <div class="title">
                <h1>Contact Us</h1>
            </div>
        </div>
        <div class="form">
            <div class="info">
                <h1 class="title">Info</h1>
                <p class="desc">At Nreal, we aim to make mixed reality available and accessible to everyone.We strive to realize the full potential of mixed reality by empowering developers to create ground-breaking applications that can ultimately propel a new era of entertainment, productivity and more.</p>
                <div class="contact">
                    <i class="fa-solid fa-phone"></i>
                    <span>+1 800 123 4567</span>
                    <br>
                    <i class="fa-solid fa-envelope"></i>
                    <span>info@nreal.com</span>
                    <br>
                    <i class="fa-solid fa-location-dot"></i>
                    <span id="location">Zhongguancun, the Silicon Valley of Beijing.</span>
                </div>
            </div>
            <form>
                <label for="name">Name</label><br>
                <input type="text" id="i" name="fname" placeholder="Your first and last name."><br>
                <label for="subject">Subject</label><br>
                <input type="text" id="i" name="lname" placeholder="Subject of your message."><br>
                <label for="message">Message</label><br>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Type here your message..."></textarea><br>
                <label for="email">Keep in touch with Nreal!</label><br>
                <input type="email" id="i" name="email" placeholder="Your e-mail"><br><br>
                <input type="checkbox" id="check" name="checkbox"><span>Please notify me for news updates.</span>
                <input type="submit" value="Send Message" id="submit">
            </form>
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
</body>
</html>
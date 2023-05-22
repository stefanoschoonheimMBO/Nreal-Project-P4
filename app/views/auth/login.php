<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="<?= URLROOT ?>/public/css/globals.css">
  <link rel="stylesheet" href="<?= URLROOT ?>/public/css/pages/login.css">
  <link rel="stylesheet" href="<?= URLROOT ?>/public/css/galaxy_bg.css">
</head>

<body>
  <div class="bg-galaxy"></div>
  <script src="<?= URLROOT ?>/public/js/auth/galaxy-bg.js"></script>
  <main>
    <a href="/" class="home"><- Back</a>
        <form action="/auth/login" method="post">
          <h1>Login</h1>
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" placeholder="Type your email">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Type your password">
          <div class="forgot-password"><a href="/auth/forgot-password">Forgot password?</a></div>
          <button type="submit">Login</button>
        </form>
  </main>
</body>

</html>
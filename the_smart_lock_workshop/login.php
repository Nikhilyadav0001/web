<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Smart Lock</title>
</head>
<body>
    <img class="logo" src="assets/img/logo.jpeg" alt="logo">
    <div class="container">
        <div class="login__content">
            <form role="form" action="" class="login__form" method="post">
                <div>
                    <h1 class="login__title">
                        <span>Welcome</span> To Smart Lock Login
                    </h1>
                    <p class="login__description">
                        <h4>NIIT University</h4>
                    </p>
                </div>
                <div>
                    <div class="login__inputs">
                        <div>
                            <label for="" class="login__label">User ID</label>
                            <input type="text" placeholder="Enter your user id" name="usernamee" required class="login__input">
                        </div>
                        <div>
                            <label for="" class="login__label">Password</label>
                            <div class="login__box">
                                <input type="password" placeholder="Enter your password" name="password" required class="login__input" id="input-pass">
                                <i class="ri-eye-off-line login__eye" id="input-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="login__buttons">
                        <button type="submit" class="login__button">Log In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <a class="foot_text">Made with ❤️ By Round 2 Code</a>
        </div>
    </footer>
    <script src="assets/js/Password.js"></script>
</body>
</html>

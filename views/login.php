<!doctype html>
<html lang="ru">
<head>
<?php include "head.php"?>
    <title>авторизация</title>
</head>
<body>
<?php include "header.php"; ?>
<div class="intro">
    <div class="container">
        <div class="login">
            <div class="login-title">
                <form action="../server/login_s.php" method="post">
                    <div class="registration__title"><h1>авторизация</h1></div>
                    <div class="login-form">
                        <input type="text" placeholder="логин" id="username" name="username" class="login-form__input">
                        <input type="password" placeholder="пароль" id="password" name="password" class="login-form__input">
                        <input type="submit" name="login" value="войти" class="login-form__upload">
                        <p>Еще не зарегистрированы? то <br><a href= "/subdirectory/user/register.php">зарегистрируйтесь</a>!</p>
                    </div>
            </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?>
</body>
</html>

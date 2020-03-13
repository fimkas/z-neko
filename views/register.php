<!doctype html>
<html lang="ru">
<head>
<?php require_once "head.php"?>
    <title>регистрация</title>
</head>
<body>
  <?php include_once "header.php"; ?>
<div class="intro">
    <div class="container">
        <div class="registration">
            <div class="registration_content">
                <form action="../server/register_s.php" method="post">
                    <div class="registration-title"><h1>регистрация</h1></div>
                    <div class="registration-form">
                        <input type="text" placeholder="логин" id="username" name="username" class="registration-form__input">
                        <input type="password" placeholder="пароль" id="password" name="password" class="registration-form__input">
                        <input type="password" placeholder="повторите пароль" id="password_2" name="password_2" class="registration-form__input">
                        <input type="submit" name="register" value="регистрация" class="registration-form__upload">
                        <p><a href="/subdirectory/user/login.php">Уже зарегистрированы?</a></p>
                    </div>
            </form>
            </div>
        </div>
    </div>
</div>
<?php include_once "footer.php" ?>
</body>
</html>

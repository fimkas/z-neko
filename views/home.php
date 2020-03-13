<?php

session_start();

if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>z-neko</title>
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/profile.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=cyrillic" rel="stylesheet">
    </head>
    <body>
    <div class="content">
        <nav>
          <h1>
          вход в аккаунт выполнен успешно<br>
            <a href="/">главная</a>
          </h1>
        </nav>
    </div>
    <div class="intro">
        <div class="container">
        </div>
    </div>
    </body>

    </html>';

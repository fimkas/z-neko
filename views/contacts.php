<?php
session_start();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
<?php include "head.php"?>
    <title>контакты</title>
</head>
<body>
<?php require "header.php" ?>
<div class="contact-form">
    <form action="../server/mail.php" class="form" id="form" name="form" method="post">
        <h1>contact us</h1>
        <input type="text" placeholder="логин" name="name" class="contact_form_input">
        <input type="email" placeholder="email" name="mail" class="contact_form_input">
        <textarea class="contact_message_input" placeholder="ваше сообщение"></textarea>
        <input type="submit" value="отправить" class="contact_form_upload">
    </form>
</div>
<div class="intro">
    <div class="contact__inner">
        <div class="container">
            <p class="contact">email: "znekoproject@gmail.com"</p>
            <iframe src="https://discordapp.com/widget?id=342289067326701579&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
        </div>
    </div>
</div>
<?php require "footer.php" ?>
</body>

</html>

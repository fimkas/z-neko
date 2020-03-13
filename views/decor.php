<?php session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    header('Location: login.php');
    exit;}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require_once "head.php"?>
    <title>оформление</title>
</head>
<body>
<div class="background-img"></div>
<?php require_once "header.php" ?>

<div class="intro">
    <div class="container">
        <div class="decor">
            <div class="decor-bloc">
                <div class="title">ваше оформление</div>
                <div class="decor_content">
                    <form>
                        <div class="form">
                            <label class="form__label" for="them">Тема сайта</label>
                            <select class="form-input" id="them">
                                <option>темная</option>
                                <option>светлая</option>
                                <option>прозрачная(настраиваемая)</option>
                            </select>
                            <div id="transparent" style="display: block">
                                <div class="label">фоновое изображение</div>
                                <div class="transparent-bg">
                                    <input type="hidden" value="">
                                    <div class="transparent-bloc">
                                        <div class="transparent-item">
                                            <img data-bg="1" src="../images/background/wallpaper.1.webp" alt="">
                                        </div>
                                        <div class="transparent-item">
                                            <img data-bg="2" src="../images/background/wallpaper.2.webp" alt="">
                                        </div>
                                        <div class="transparent-item">
                                            <img data-bg="3" src="../images/background/wallpaper.3.webp" alt="">
                                        </div>
                                        <div class="transparent-item">
                                            <img data-bg="4" src="../images/background/wallpaper.4.webp" alt="">
                                        </div>
                                        <div class="transparent-item">
                                            <img data-bg="5" src="../images/background/wallpaper.5.webp" alt="">
                                        </div>
                                        <div class="transparent-item">
                                            <img data-bg="6" src="../images/background/wallpaper.6.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="transparent-color">
                                    <div class="label">цвет</div>
                                    <div class="t-color__selector">
                                        <div class="t-item" style="background-color: #323232"></div>
                                        <div class="t-item" style="background-color: #e6e6f5"></div>
                                        <div class="t-item" style="background-color: #222222"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input class="form-upload" type="submit" name="submit" value="обновить" >
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "footer.php" ?>
</body>
</html>
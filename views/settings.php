<?php session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    header('Location: login.php');
    exit;}
?>
<!doctype html>
<html lang="ru">
<head>
    <?php require_once "head.php"?>
    <title>setting</title>
</head>
<body>
<?php require_once "header.php" ?>

<noscript>
    <div class="alert-message">Внимание! В вашем браузере отключен JavaScript! Без него большая часть функционала сайта
        работать не будет или будет работать некорректно!
    </div>
</noscript>

<div class="intro">
    <div class="container">
        <div class="settings">
            <div class="section">
                <div class="section-item" id="selector-info">Информация</div>
                <div class="section-item" id="selector-site__setting">настройки сайта</div>
                <div class="section-item" id="selector-password"> Пароль</div>
            </div>

            <div class="edit-item edit-item__show" id="info">
                <div class="upload-bloc">
                    <div class="settings-upload">
                        <div class="col upload-avatar">
                            <form action="../server/img_load.php" enctype="multipart/form-data" method="POST">
                            <div class="uploader-title">Аватар</div>
                            <div class="uploader" id="uploaderAvatar">
                                <div class="uploader-preview" style="background-image: url(<?php if (empty ($_COOKIE['avatar'])){echo "https://i.imgur.com/s351D72.png";} else {echo $_COOKIE['avatar'];}?>)"></div>
                                    <label for="uploader-caption__Avatar" class="uploader-caption">Нажмите чтобы загрузить</label>
                                    <input type="file" accept="image/*" class="uploader-caption__body" id="uploader-caption__Avatar" name="uploaderAvatar" multiple="multiple">
                            </div>
                            <input type="submit" class="uploader-submit" id="uploader-submit" name="uploader-submit" value="обновыть?">
                            <div class="uploader-submit__no" id="uploader-submit__no">нет</div>
                            </form>
                        </div>

                        <div class="col upload-bg">
                            <div class="uploader-title">Фон(профиля)</div>
                            <div class="uploader" id="uploaderBg">
                                <div class="uploader-preview" style="background-image: url(https://i.imgur.com/d9qInUT.png)"></div>
                                <div class="uploader-caption">временно не доступно</div>
                            </div>
                        </div>
                    </div>
                </div>

                <form method="post" action="">
                    <div class="form">
                        <label class="label" for="label 1">label 1</label>
                        <input class="form-input" id="label 1">
                    </div>

                    <div class="form">
                        <label class="label" for="label 2">label 2</label>
                        <input class="form-input" id="label 2">
                    </div>

                    <div class="form">
                        <label class="label" for="label 3">label 3</label>
                        <input class="form-input" id="label 3">
                    </div>

                    <input class="form-upload" type="submit" name="submit" value="обновить" >
                </form>
            </div>
            <div class="edit-item" id="site-setting">
                <form method="post" action="">
                    <div class="form">
                        <label class="label" for="label_2 1">label 1</label>
                        <input class="form-input" id="label_2 1">
                    </div>

                    <div class="form">
                        <label class="label" for="label_2 2">label 2</label>
                        <input class="form-input" id="label_2 2">
                    </div>

                    <div class="form">
                        <label class="label" for="label_2 3">label 3</label>
                        <input class="form-input" id="label_2 3">
                    </div>

                    <input class="form-upload" type="submit" name="submit" value="обновить" >
                </form>
            </div>
            <div class="edit-item" id="password">

                <form method="post" action="">
                    <div class="form">
                        <label for="old-password" class="label">Текущий пароль</label>
                        <input type="password" class="form-input" id="old-password">
                    </div>

                    <div class="form">
                        <label for="new-password">Новый пароль</label>
                        <input type="password" class="form-input" name="new-password" id="new-password">
                    </div>

                    <div class="form">
                        <label for="new-password__confirmation">повторите пароль</label>
                        <input type="password" class="form-input" name="new_password__confirmation" id="new-password__confirmation">
                    </div>
                    <input class="form-upload" type="submit" value="обновить">
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once "footer.php" ?>
</body>
</html>
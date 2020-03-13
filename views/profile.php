<?php session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    header('Location: login.php');
    exit;}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <script src="https://kit.fontawesome.com/ba51174e47.js" crossorigin="anonymous"></script>
<?php require_once "head.php"?>
    <title>профиль</title>
    </head>
    <body>
    <div class="background-img"></div>

<?php require_once "header.php" ?>

    <div class="intro">
        <div class="container">
            <div class="profile">
                <div class="profile_bloc">
                    <div class="profile__title">ваш профиль <a href="#"><?php echo $_SESSION ['user'];?></a></div>
                    <div class="profile_content">
                        <div class="avatar"><img src="<?php if (empty ($_COOKIE['avatar'])){echo "https://i.imgur.com/s351D72.png";} else {echo $_COOKIE['avatar'];}?>" alt=""></div>
                        <div class="user-date">
                            <h2>в разработке!</h2>
                        </div>
                    </div>
                </div>
                <div class="profile_menu">
                    <div class="profile__title_menu">меню</div>
                    <div class="bloc-list">
                        <ul>
                            <li><a href=""><i class="fa fa-users fa-fw list-icon"></i>Друзья</a></li>
                            <li><a href=""><i class="fa fa-rss fa-fw list-icon"></i>Подписки</a></li>
                            <li><a href="decor.php"><i class="fa fa-palette fa-fw list-icon"></i>оформление</a></li>
                            <li><a href="settings.php"><i class="fa fa-cog list-icon"></i>Настройки</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once "footer.php" ?>

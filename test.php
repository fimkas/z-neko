<?php session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    header('Location: login.php');
    exit;}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=cyrillic" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ba51174e47.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/styles/test.css">
    <title>test</title>
</head>
<body>
<div class="background-img"></div>
<?php require_once "views/header.php" ?>

<div class="intro">
    <div class="container">
        <div class="profile">
            <div class="profile-bloc">
                <div class="title">пофиль</div>
                <div class="profile-content">
                    <div class="avatar-bloc"><div class="avatar" style="background-image: url(https://i.imgur.com/TIRpqWg.jpg);"></div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "views/footer.php" ?>
</body>
</html>
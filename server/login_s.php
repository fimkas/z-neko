<?php

session_start();

require 'connect.php';

if(isset($_POST['login'])){

    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;

    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

    $sql = "SELECT id, username, password FROM users WHERE username = :username";

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':username', $username);

    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user === false){

        die('Incorrect username / password combination!');

    } else{

        $validPassword = password_verify($passwordAttempt, $user['password']);

        if($validPassword){

            $_SESSION['user'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['logged_in'] = time();

            $sql = "SELECT avatar FROM users_data WHERE user_id = :user_id";

            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(':user_id', $_SESSION ['user_id']);

            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);;

            setcookie("avatar", $row['avatar'], time()+86400*360, '/');

            header('Location: /');
            exit;

        } else{
            die('Incorrect username / password combination!');
        }
    }

}

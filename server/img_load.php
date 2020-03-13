<?php

session_start();

if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    header('Location: /');
    exit;
  }

header('Location: /views/settings.php');
//==============

if(isset($_POST['uploader__submit'])){
 $img=$_FILES['uploaderAvatar'];
 if($img['name']==''){
  //echo "<h2>Select an Image Please.</h2>";
 }
 else {
  $filename = $img['tmp_name'];
  $client_id='455c4d359057aeb';
  $handle = fopen($filename, 'r');
  $data = fread($handle, filesize($filename));
  $pvars = array('image' => base64_encode($data));
  $timeout = 30;
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
  curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
  $out = curl_exec($curl);
  curl_close ($curl);
  $pms = json_decode($out,true);
  $url=$pms['data']['link'];
  if($url!=''){
      setcookie("avatar", $url, time()+86400*360, '/');
  }
  else{
   //echo "<h4 class='bg-danger'>There’s a Problem</h4>";
   //echo "<div>".$pms['data']['error']."</div>";
  }
 }
}

//=============

 require "connect.php";

     $sql = "SELECT COUNT(user_id) AS num FROM users_data WHERE user_id = :user_id";

     $stmt = $pdo->prepare($sql);

     $stmt->bindValue(':user_id', $_SESSION ['user_id']);

     $stmt->execute();

     $row = $stmt->fetch(PDO::FETCH_ASSOC);

     if($row['num'] > 0){

       $sql = "UPDATE users_data SET `avatar`= :img_url WHERE user_id = :user_id";

      $stmt = $pdo->prepare($sql);

      $stmt->bindValue(':user_id', $_SESSION ['user_id']);
      $stmt->bindValue(':img_url', $url);

      $result = $stmt->execute();

      if($result){
          echo 'y';
        }
          else {
            echo "n";
          }
        }
       else {
         $sql = "INSERT INTO users_data (`user_id`, `avatar`) VALUES (:user_id, :img_url)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':user_id', $_SESSION ['user_id']);
        $stmt->bindValue(':img_url', $url);

        $result = $stmt->execute();

        if($result){
            echo 'y';
          }
            else {
              echo "n";
            }
       }
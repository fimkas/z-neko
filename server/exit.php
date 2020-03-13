<?php

session_start();

require 'connect.php';

unset($_SESSION['logged_in']);

session_destroy();

header('Location: /');

exit;

<?php
session_start();
$data = fopen("data.txt", "a");


if (isset($_POST["sub"])) {
  $arrayd = array();
  $username = $_POST["uname"];   
  $password = $_POST["psw"];
  $datar = fopen("data.txt", "r");
  while (!feof($datar)) {
    $str = fgets($datar);
    $arr = explode(" ", $str);
    $arrayd = $arr;
  }
  if (in_array($username, $arrayd)) {
    $k = array_search($username, $arrayd);
    $k++;
    if ($arrayd[$k] == $password) {
      echo "login successful";
      if (isset($_POST["rmbr"])) {
        setcookie('username', $username, time() + 3600 * 24 * 7);
        setcookie('password', $password, time() + 3600 * 24 * 7);
      } else {
        setcookie('username', $username, time() + 1);
        setcookie('password', $password, time() + 1);
      }
      echo "<a href = 'logout.php'> log out </a>";
    } else {
      echo "login failed";
    }
  } else {
    echo "not found";
  }
}

if (isset($_POST["reg"])) {
  header('Location: register.php');
}


if (isset($_POST["rbtn"])) {
  $arrayd = array();


  $name = $_POST["uname"];
  $mail = $_POST["mail"];
  $password = $_POST["psw"];
  fwrite($data, $name . " " . $mail . " " . $password . " ");
}
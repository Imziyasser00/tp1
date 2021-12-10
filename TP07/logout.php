<?php

    session_start();
    session_destroy();
    setcookie('username',$username,time()+30);
    setcookie('password',$password,time()+30);
    header("location: login.php");


    ?>
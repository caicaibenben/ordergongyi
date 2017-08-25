<?php
    session_start();
    //echo session_id();
    unset($_SESSION['username']);
    unset($_SESSION['userid']);
    //header("Location: login.html");
    session_destroy();
    //echo session_id();
    exit;
?>
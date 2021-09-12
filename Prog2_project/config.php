<?php
    session_start();

    if(!isset($_SESSION['lang']))
        $_SESSION['lang'] = "en";
    else if(isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang']))
    {
        if($_GET['lang'] == "hu")
            $_SESSION['lang'] = "hu";
        else if($_GET['lang'] == "cn")
            $_SESSION['lang'] = "cn";
        else if($_GET['lang'] == "en")
            $_SESSION['lang'] = "en";
    }

    require_once "languages/" . $_SESSION['lang']  . ".php";
?>
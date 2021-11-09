<?php
    session_start();

    /* =========== LANGUAGES =========== */
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

    /* =========== PAGES =========== */
    if(!isset($_SESSION['page']))
        $_SESSION['page'] = "home";
    else if(isset($_GET['page']) && $_SESSION['page'] != $_GET['page'] && !empty($_GET['page']))
    {
        if($_GET['page'] == "weapon_table")
            $_SESSION['page'] = "weapon_table";
        else if($_GET['page'] == "weapon_comment")
            $_SESSION['page'] = "weapon_comment";
        else if($_GET['page'] == "character")
            $_SESSION['page'] = "character";
        else if($_GET['page'] == "signin")
            $_SESSION['page'] = "signin";
        else if($_GET['page'] == "signup")
            $_SESSION['page'] = "signup";
        else if($_GET['page'] == "signout")
            $_SESSION['page'] = "signout";
        else if($_GET['page'] == "home")
            $_SESSION['page'] = "home";
    }
?>
<?php
    session_start();

    error_reporting(E_ALL ^ E_NOTICE);
?>

<?php
    include "config.php";
?> 

<!doctype html>
<html lang="<?php echo $curr_lang ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <title><?php echo $lang['title'] ?></title>
    </head>
<body>
    <!-- ===================== NAVIGATION BAR ===================== -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?page=home&lang=<?php echo $curr_lang ?>">
                <img src="img/logo.jpg" alt="Logo" class="home_pic"></img>
            </a>    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <?php
                /* ===================== HOME PAGE ===================== */
                if($_GET['page'] == 'home')
                {
                    echo
                    '
                        <li class="nav-item">
                            <a class="nav-link bold pad_right active" href="index.php?page=home&lang='. "$curr_lang" .'">'. $lang['home'] .'</a>
                        </li>
                    ';
                }
                else
                {
                    echo
                    '
                        <li class="nav-item">
                            <a class="nav-link bold pad_right" href="index.php?page=home&lang='. "$curr_lang" .'">'. $lang['home'] .'</a>
                        </li>
                    ';
                }
                /* ===================== BEFORE SIGN IN ===================== */
                if($_SESSION['signedin'] != 'yes')
                {
                    /* ===================== SIGN IN PAGE ===================== */
                    if($_GET['page'] == 'signin')
                    {
                        echo
                        '
                            <li class="nav-item">
                                <a class="nav-link bold pad_right active" href="index.php?page=signin&lang='. "$curr_lang" .'">'. $lang['signin'] .'</a>
                            </li>
                        ';
                    }
                    /* ===================== SIGN UP PAGE ===================== */
                    else if($_GET['page'] == 'signup')
                    {
                        echo
                        '
                            <li class="nav-item">
                                <a class="nav-link bold pad_right active" href="index.php?page=signup&lang='. "$curr_lang" .'">'. $lang['signup'] .'</a>
                            </li>
                        ';
                    }
                    /* ===================== SIGN IN PAGE ===================== */
                    else
                    {
                        echo
                        '
                            <li class="nav-item">
                                <a class="nav-link bold pad_right" href="index.php?page=signin&lang='. "$curr_lang" .'">'. $lang['signin'] .'</a>
                            </li>
                        ';
                    }
                }
                /* ===================== AFTER SIGN IN ===================== */
                else
                {  
                    /* ===================== WEAPON TABLE ===================== */
                    if($_GET['page'] == 'weapon_table')
                    {
                        echo
                        '
                            <li class="nav-item">
                                <a class="nav-link bold pad_right active" href="index.php?page=weapon_table&lang='. "$curr_lang" .'">'. $lang['weapon_table'] .'</a>
                            </li>
                        ';
                    }
                    /* ===================== WEAPON COMMENT SECTION ===================== */
                    else if ($_GET['page'] == 'weapon_comment')
                    {
                        echo
                        '
                            <li class="nav-item">
                                <a class="nav-link bold pad_right active" href="index.php?page=weapon_comment&lang='. "$curr_lang" .'">'. $lang['weapon_comment'] .'</a>
                            </li>
                        ';
                    }
                    /* ===================== WEAPON TABLE ===================== */
                    else
                    {
                        echo
                        '
                            <li class="nav-item">
                                <a class="nav-link bold pad_right" href="index.php?page=weapon_table&lang='. "$curr_lang" .'">'. $lang['weapon_table'] .'</a>
                            </li>
                        ';
                    }
                    /* ===================== CHARACTER PAGE ===================== */
                    if($_GET['page'] == 'character')
                    {
                        echo
                        '
                            <li class="nav-item">
                                <a class="nav-link bold pad_right active" href="index.php?page=character&lang='. "$curr_lang" .'">'. $lang['character'] .'</a>
                            </li>
                        ';
                    }
                    else
                    {
                        echo
                        '
                            <li class="nav-item">
                                <a class="nav-link bold pad_right" href="index.php?page=character&lang='. "$curr_lang" .'">'. $lang['character'] .'</a>
                            </li>
                        ';
                    }
                    /* ===================== SIGN OUT PAGE ===================== */
                    if($_GET['page'] == 'signout')
                    {
                        echo
                        '
                            <li class="nav-item">
                                <a class="nav-link bold pad_right active" href="index.php?page=signout&lang='. "$curr_lang" .'">'. $lang['signout'] .'</a>
                            </li>
                        ';
                    }
                    else
                    {
                        echo
                        '
                            <li class="nav-item">
                                <a class="nav-link bold pad_right" href="index.php?page=signout&lang='. "$curr_lang" .'">'. $lang['signout'] .'</a>
                            </li>
                        ';
                    }
                }
                /* ===================== LANGUAGE DROPDOWN MENU ===================== */
                echo
                '
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            '. $lang['language'] .'
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                ';        
                if($curr_lang == "en")
                {
                    echo
                    '
                        <li><a class="dropdown-item item_active" href="index.php?page='. "$curr_page" .'&lang=en">'. $lang['lang_en'] .' </a></li>
                        <li><a class="dropdown-item" href="index.php?page='. "$curr_page" .'&lang=hu">'. $lang['lang_hu'] .' </a></li>
                        <li><a class="dropdown-item" href="index.php?page='. "$curr_page" .'&lang=cn">'. $lang['lang_cn'] .' </a></li>
                    ';
                }
                else if($curr_lang == "hu")
                {
                    echo
                    '
                        <li><a class="dropdown-item" href="index.php?page='. "$curr_page" .'&lang=en">'. $lang['lang_en'] .' </a></li>
                        <li><a class="dropdown-item item_active" href="index.php?page='. "$curr_page" .'&lang=hu">'. $lang['lang_hu'] .' </a></li>
                        <li><a class="dropdown-item" href="index.php?page='. "$curr_page" .'&lang=cn">'. $lang['lang_cn'] .' </a></li>
                    ';
                }
                else if($curr_lang == "cn")
                {
                    echo
                    '
                        <li><a class="dropdown-item" href="index.php?page='. "$curr_page" .'&lang=en">'. $lang['lang_en'] .' </a></li>
                        <li><a class="dropdown-item" href="index.php?page='. "$curr_page" .'&lang=hu">'. $lang['lang_hu'] .' </a></li>
                        <li><a class="dropdown-item item_active" href="index.php?page='. "$curr_page" .'&lang=cn">'. $lang['lang_cn'] .' </a></li>
                    ';
                }
                echo    
                '  
                        </ul>
                    </li>
                ';
                ?>
                
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
		
        <!-- ========== CONNECT TO THE DATABASE ========== -->
		<?php
			$l = mysqli_connect("localhost", "root", "", "prog2_project");
		
			switch($_GET['page'])
			{
				case 'weapon_table': include 'weapon_table.php'; break;
                case 'weapon_comment': include 'weapon_comment.php'; break;
				case 'character': include 'character.php'; break;
                case 'signup': include 'signup.php'; break;
                case 'signin': include 'signin.php'; break;
				case 'signout': include 'signout.php'; break;

                default: include 'home.php'; break;
			}
		
			mysqli_close($l);
		
		?>
		
	</div>

    <!-- ===================== COPYRIGHT FOOTER ===================== -->
    <footer><?php echo $lang['copyright'] ?></footer>

    <!-- ===================== SCRIPTS ===================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- ========== PREVENT FORM RESUBMISSION ========== -->
    <script>
    if(window.history.replaceState) 
    {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</html>
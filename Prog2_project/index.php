<?php
    include "config.php";

    $curr_lang = $_SESSION['lang']; 
?>

<!doctype html>
<html lang="<?php $curr_lang ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="style/style.css" rel="stylesheet">

        <title><?php echo $lang['title'] ?></title>
    </head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?lang=<?php echo $curr_lang ?>">
                <img src="img/logo.jpg" alt="Logo" style="width:45px;">
            </a>    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link bold pad_right <?php if(basename(__FILE__) == "index.php") {echo "active";} ?>" aria-current="page" href="index.php?lang=<?php echo $curr_lang ?>"><?php echo $lang['home'] ?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link bold pad_right <?php if(basename(__FILE__) == "weapons.php") {echo "active";} ?>"" href="weapons.php?lang=<?php echo $curr_lang ?>"><?php echo $lang['weapon'] ?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link bold pad_right <?php if(basename(__FILE__) == "character.php") {echo "active";} ?>"" href="character.php?lang=<?php echo $curr_lang ?>"><?php echo $lang['character'] ?></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $lang['language'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item <?php if($curr_lang == "en") {echo "item_active";} ?>" href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a></li>
                            <li><a class="dropdown-item <?php if($curr_lang == "hu") {echo "item_active";} ?>" href="index.php?lang=hu"><?php echo $lang['lang_hu'] ?></a></li>
                            <li><a class="dropdown-item <?php if($curr_lang == "cn") {echo "item_active";} ?>" href="index.php?lang=cn"><?php echo $lang['lang_cn'] ?></a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <br>
    <div class="row mx-0">
        <?php echo $lang['home_introduce'] ?>
    </div>

    <div class="container-fluid arr fixed-bottom"><?php echo $lang['copyright'] ?></div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>
<div class="container-fluid">

<?php
/* =========== WEAPON DATA SEARCH =========== */
if(isset($_POST['weapon_button']) || isset($_POST['weapon_search']))
{
    /* =========== WEAPON HEADER =========== */
    echo $lang['weapon_header'];
?>
    <!-- =========== SEARCH BAR, CHANGE PAGE BUTTON =========== -->
    <div>
        <form method="post">
            <input type="text" name="weapon_name" class="search_bar" value="<?php if(isset($_POST['weapon_search'])) {echo $_POST['weapon_name'];} ?>" placeholder="<?php echo $lang['search_for_weapon'] ?>">
            <input type="submit" name="weapon_search" class="weapon_search" value="<?php echo $lang['search'] ?>">
            <input type="submit" name="comment_change_button" class="change_button" value="<?php echo $lang['comment_weapon'] ?>">
        </form>
    </div>
    
    <br>
<?php
    /* =========== WEAPON TABLE =========== */
    echo
    '
    <div style="overflow-y: hidden; overflow-x: auto;">
        <table width="100%">
            <tbody>
                <tr>
    ';
                    /* =========== WEAPON SEARCHING =========== */
                    if(isset($_POST['weapon_search']))
                    {
                        $weapon = mysqli_real_escape_string($l, filter_var($_POST["weapon_name"],FILTER_SANITIZE_SPECIAL_CHARS));
                        $query = "SELECT * FROM weapon WHERE CONCAT(weapon_en,weapon_hu,weapon_cn) LIKE '%$weapon%' ORDER BY weapon_$curr_lang";
                        
                        $exists = mysqli_query($l, $query);
                        $count = mysqli_num_rows($exists);

                        if($count > 0)
                        {
                            echo
                            '
                                <thead>
                                    <tr>
                                        <th>'. $lang['weapon_name'] .'</th>
                                        <th>'. $lang['damage'] .'</th>
                                        <th>'. $lang['energy_cost'] .'</th>
                                        <th>'. $lang['crit_chance'] .'</th>
                                        <th>'. $lang['inaccuracy'] .'</th>
                                    </tr>
                                </thead>
                            ';
                            foreach($exists as $data)
                            {
                                echo 
                                '
                                    <tr>
                                        <td><strong>'. $data['weapon_'.$curr_lang.''] .'</strong></td>
                                        <td>'. $data['damage'] .'</td>
                                        <td>'. $data['mana_cost'] .'</td>
                                        <td>'. $data['crit_chance'] .'</td>
                                        <td>'. $data['inaccuracy'] .'</td>
                                    </tr>
                                ';
                            }
                        }
                        else if($weapon == "Sqookie" || $weapon == "曲奇君")
                        {
                            echo
                            '
                                <h1><a href="https://space.bilibili.com/73589819" target="_blank">Bilibili 乾杯 - (^ w ^)つロ</a></h1>
                            ';
                        }
                        else if($weapon == "Excel2020" && $curr_lang == "cn")
                        {
                            echo
                            '
                                <h1><a href="https://www.bilibili.com/video/BV1d7411a7xc" target="_blank">Bilibili 乾杯 - (^ w ^)つロ</a></h1>
                                <h1><a href="excel/元气骑士2.5.0（春节-大更新）.xlsx">梦回最初的Excel</a></h1>
                            ';
                        }
                        else if($weapon == "ChillyRoom")
                        {
                            echo
                            '
                                <h1><a href="https://space.bilibili.com/85291890" target="_blank">Bilibili 乾杯 - (^ w ^)つロ</a></h1>
                            ';
                        }
                        else
                        {
                            echo
                            '
                                <h1>'. $lang['no_weapon_found'] .'</h1>
                            ';
                        }
                    }
                    else
                    {
                        $query = "SELECT * FROM weapon ORDER BY weapon_$curr_lang";

                        $exists = mysqli_query($l, $query);
                        $count = mysqli_num_rows($exists);

                        if($count > 0)
                        {
                            echo
                            '
                                <thead>
                                    <tr>
                                        <th>'. $lang['weapon_name'] .'</th>
                                        <th>'. $lang['damage'] .'</th>
                                        <th>'. $lang['energy_cost'] .'</th>
                                        <th>'. $lang['crit_chance'] .'</th>
                                        <th>'. $lang['inaccuracy'] .'</th>
                                    </tr>
                                </thead>
                            ';
                            foreach($exists as $data)
                            {
                                echo 
                                '
                                    <tr>
                                        <td><strong>'. $data['weapon_'.$curr_lang.''] .'</strong></td>
                                        <td>'. $data['damage'] .'</td>
                                        <td>'. $data['mana_cost'] .'</td>
                                        <td>'. $data['crit_chance'] .'</td>
                                        <td>'. $data['inaccuracy'] .'</td>
                                    </tr>
                                ';
                            }
                        }
                    }
    echo
    '
                </tr>
            </tbody>
        </table>
    </div>
    ';
}

/* =========== COMMENT SECTION =========== */
if(isset($_POST['comment_change_button']) || isset($_POST['comment_button']) || isset($_POST['filter_button']))
{
    echo $lang['comment_header'] .
    '

    <div>
        <form method="post">
            <input type="submit" name="weapon_button" class="change_button" value="'.$lang['search_weapon'] .'">
        </form>
    </div>

    <div class="wrapper">
        <form method="post" class="form">
            <div class="row">
                <div class="input-group">
                    <label>'. $lang['weapon'] .'</label>
                    <select name="selected_weapon">
                        <option disabled>'. $lang['select_weapon'] .'</option>
    ';                    
                        $query = "SELECT weapon_$curr_lang FROM weapon ORDER BY weapon_$curr_lang";
                        $exists = mysqli_query($l, $query);

                        while($data = mysqli_fetch_array($exists))
                        {
                            echo "<option value='". $data['weapon_'.$curr_lang.''] ."'>" .$data['weapon_'.$curr_lang.''] ."</option>"; 
                        }	
    echo
    ' 
                    </select>
                </div>
            </div>

            <div class="input-group textarea">
                <label>'. $lang['comment'] .'</label>
                <textarea name="comment" placeholder="'. $lang['enter_your_comment'] .'" minlength="10" maxlength="50" required></textarea>
            </div>
            <div class="input-group">
                <input type="submit" class="comment_input_form" name="comment_button" value="'. $lang['comment'] .'">
            </div>
        </form>
    ';

    /* =========== INSERT COMMENT INTO DATABASE =========== */
    if(isset($_POST['comment_button']))
    {
        $comment = mysqli_real_escape_string($l, filter_var($_POST["comment"],FILTER_SANITIZE_SPECIAL_CHARS));
        $weapon = $_POST['selected_weapon'];

        mysqli_query($l, "INSERT INTO `comment` SET 
        `id` = NULL,
        `weapon` = '".$weapon."',
        `name` = '".$_SESSION['name']."',
        `comment` = '".$comment."',
        `lang` = '".$curr_lang."',
        `date` = '".date("Y-m-d H:i:s")."'
        ");

        echo '<script>alert("'. $lang['comment_successful'] .'")</script>';
    }

?>
    <form method="post">
        <input type="text" name="filter_data" class="filter_search_bar" value="<?php if(isset($_POST['filter_button'])) {echo $_POST['filter_data'];} ?>" placeholder="<?php echo $lang['filter_comment'] ?>">
        <input type="submit" name="filter_button" class="filter_search" value="<?php echo $lang['filter'] ?>">
    </form>
<?php

    /* =========== COMMENT FILTER =========== */
    if(isset($_POST['filter_button']))
    {
        $weapon = mysqli_real_escape_string($l, filter_var($_POST["filter_data"],FILTER_SANITIZE_SPECIAL_CHARS));
        $query = "SELECT * FROM comment WHERE weapon IN (SELECT weapon_$curr_lang FROM weapon WHERE CONCAT(weapon_en,weapon_hu,weapon_cn) LIKE '%$weapon%')";
        
        $exists = mysqli_query($l, $query);
        $count = mysqli_num_rows($exists);

        if($count > 0)
        {
            echo
            '
                <div class="prev-comments"> 
                <h1>'. $lang['filtered_comments'] .'</h1>
            ';  
                while ($row = mysqli_fetch_assoc($exists)) 
                {
            echo
            '
                    <div class="single-item">
                        <h4>'. $row['name'] .' ('. strtoupper($row['lang']) .')</h4>
                        <h3>'. $row['weapon'] .'</h3>
                        <p>'. $row['comment'] .'</p>
                        <p class="row_date">'. $row['date'] .'</p>
                    </div>
            ';
                }
            echo
            '
                </div>
            ';
        }
        else
        {
            echo
            '
                <h1>'. $lang['no_comment_available'] .'</h1>
            ';
        }
    }
    else
    {
        $query = "SELECT * FROM comment";

        $exists = mysqli_query($l, $query);
        $count = mysqli_num_rows($exists);

        if($count > 0)
        {
            echo
            '
                <div class="prev-comments"> 
                <h1>'. $lang['all_comments'] .'</h1>
            ';  
                while ($row = mysqli_fetch_assoc($exists)) 
                {
            echo
            '
                    <div class="single-item">
                        <h4>'. $row['name'] .' ('. strtoupper($row['lang']) .')</h4>
                        <h3>'. $row['weapon'] .'</h3>
                        <p>'. $row['comment'] .'</p>
                        <p class="row_date">'. $row['date'] .'</p>
                    </div>
            ';
                }
            echo
            '
                </div>
            ';
        }
        else
        {
            echo
            '
                <h1>'. $lang['no_comment_available'] .'</h1>
            ';
        }
    }
}
/* =========== WHEN NO BUTTON IS PRESSED =========== */
else if(!isset($_POST['weapon_button']) && !isset($_POST['comment_change_button']) && !isset($_POST['weapon_search']) && !isset($_POST['comment_button']) && !isset($_POST['filter_button']))
{
    echo
    '
    <h1>'. $lang['choose_one_below'] .'</h1>
    <form method="post">
    <table class="weapon_table">
        <tr>
            <th class="weapon_th">
                <input type="submit" name="weapon_button" class="not_set_weapon_button" value="'. $lang['search_weapon'] .'">
                <input type="submit" name="comment_change_button" class="not_set_weapon_button" value="'. $lang['comment_weapon'] .'">
            </th>
        </tr>   
    </table>
    </form>
    ';
}
?>

<!-- =========== PREVENT FORM RESUBMISSION =========== -->
<script>
if(window.history.replaceState) 
{
    window.history.replaceState(null, null, window.location.href);
}
</script>

</div>
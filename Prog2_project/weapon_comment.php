<?php

echo $lang['comment_header'] .
'
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
/* =========== ALL COMMENTS =========== */
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
?>
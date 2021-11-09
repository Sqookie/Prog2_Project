<div class="container-fluid">

<?php

/* =========== WEAPON HEADER =========== */
echo $lang['weapon_header'];

?>
<!-- =========== SEARCH BAR, CHANGE PAGE BUTTON =========== -->
<div>
    <form method="post">
        <input type="text" name="weapon_name" class="search_bar" value="<?php if(isset($_POST['weapon_search'])) {echo $_POST['weapon_name'];} ?>" placeholder="<?php echo $lang['search_for_weapon'] ?>">
        <input type="submit" name="weapon_search" class="weapon_search" value="<?php echo $lang['search'] ?>">
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

?>

</div>
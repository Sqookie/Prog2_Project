<!-- WEAPON HEADER -->
<?php echo $lang['weapon_header'] ?>

<!-- SEARCH -->
<div>
    <form method="post">
        <label>
            <input type="text" name="weapon_name" class="search_bar form-control" value="<?php if(isset($_POST['weapon_search'])) {echo $_POST['weapon_name'];} ?>" placeholder="<?php echo $lang['search_for_weapon'] ?>" required>
        </label>
        <label>
            <input type="submit" name="weapon_search" class="weapon_search" value="<?php echo $lang['search'] ?>">
        </label>
    </form>
</div>

<br>

<!-- WEAPON TABLE -->
<div style="overflow-y: auto;">
    <table width="100%">
        <thead>
            <tr>
                <th><?php echo $lang['weapon_name'] ?></th>
                <th><?php echo $lang['damage'] ?></th>
                <th><?php echo $lang['energy_cost'] ?></th>
                <th><?php echo $lang['crit_chance'] ?></th>
                <th><?php echo $lang['inaccuracy'] ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    if(isset($_POST['weapon_search']))
                    {
                        $weapon = mysqli_real_escape_string($l, filter_var($_POST["weapon_name"],FILTER_SANITIZE_SPECIAL_CHARS));
                        $query = "SELECT * FROM weapon WHERE CONCAT(weapon_en,weapon_hu,weapon_cn) LIKE '%$weapon%'";
                        
                        $exists = mysqli_query($l, $query);
		                $count = mysqli_num_rows($exists);

                        if($count > 0)
                        {
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
                    else
                    {
                        $query = "SELECT * FROM weapon";

                        $exists = mysqli_query($l, $query);
		                $count = mysqli_num_rows($exists);

                        if($count > 0)
                        {
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
                ?>
            </tr>
        </tbody>
    </table>
</div>
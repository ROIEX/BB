<?php
include(dirname(__FILE__)."/include/initializer.php");
$shortHeader = "Y";
include(INC_PATH."/templates/header.php");?>
<?php
if($_SESSION['type'] == "carrier" || $_SESSION['type'] == "dispatch"):?>
    <div class="carrier_admin_wrapper">
        <div class="title">Site administration</div> 
        <?php if($_SESSION['type'] == "carrier"):?>
            <div class="block-left admin_left">
                <ul class="left-menu">
                    <li><a href="#" class="bold">User management</a></li>
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Sign Up Options</a></li>
                </ul>
                <div class="strangeline"></div>
                <ul class="left-menu">
                    <li><a href="#" class="bold">Billing</a></li>
                    <li><a href="#">Payment details</a></li>
                    <li><a href="#">Past invoices</a></li>
                </ul>
            </div>
        <?php endif?>
        <div class="admin_right <?=($_SESSION['type'] == "dispatch")?' admin_right2':''?>">
        	<?if($_SESSION['type'] == "carrier"):?>
            <div class="blueline-container">
                <span class="title1">Create new users</span>
                <form id="car_add" method="POST" action="<?=SCRIPT_PATH_ROOT?>include/ajax/carrier_admin.php" autocomplete="off">
                    <input type="hidden" name="action" value="add_users">
                    <input type="hidden" name="backurl" value="<?=SCRIPT_PATH_ROOT?>carrier_admin.php">
                    <table class="add_users">
                        <tr>
                            <td>
                                <input class="first" type="text" name="first[]" value="<?=($_GET['first'][0])?$_GET['first'][0]:''?>" placeholder="First name">
                            </td>
                            <td>
                                <input class="last" type="text" name="last[]" value="<?=($_GET['last'][0])?$_GET['last'][0]:''?>" placeholder="Last name">
                            </td>
                            <td>
                                <input class="email" type="text" name="email[]" value="<?=($_GET['email'][0])?$_GET['email'][0]:''?>" placeholder="Email address">
                            </td>
                            <td>
                                <select class="type" name="type[]" placeholder="User type">
                                    <option value="0" <?=($_GET['type'][0] == 0)?'selected':''?>>User type</option>
                                    <?php if($_SESSION['type'] == "carrier"):?>
                                        <option value="dispatch" <?=($_GET['type'][0] == "dispatch")?'selected':''?>>Dispatch</option>
                                    <?php endif?>
                                    <option value="driver"<?=($_GET['type'][0] == "driver")?'selected':''?>>Driver</option>
                                </select>
                            </td>
                            <td>
                                <?=($_GET['error'][0])?$_GET['error'][0]:''?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="first[]" value="<?=($_GET['first'][1])?$_GET['first'][1]:''?>" placeholder="First name">
                            </td>
                            <td>
                                <input type="text" name="last[]" value="<?=($_GET['last'][1])?$_GET['last'][1]:''?>" placeholder="Last name">
                            </td>
                            <td>
                                <input type="text" name="email[]" value="<?=($_GET['email'][1])?$_GET['email'][1]:''?>" placeholder="Email address">
                            </td>
                            <td>
                                <select name="type[]" placeholder="User type">
                                    <option value="0" <?=($_GET['type'][1] == 0)?'selected':''?>>User type</option>
                                    <?php if($_SESSION['type'] == "carrier"):?>
                                        <option value="dispatch" <?=($_GET['type'][1] == "dispatch")?'selected':''?>>Dispatch</option>
                                    <?php endif?>
                                    <option value="driver"<?=($_GET['type'][1] == "driver")?'selected':''?>>Driver</option>
                                </select>
                            </td>
                            <td>
                                <?=($_GET['error'][1])?$_GET['error'][1]:''?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="first[]" value="<?=($_GET['first'][2])?$_GET['first'][2]:''?>" placeholder="First name">
                            </td>
                            <td>
                                <input type="text" name="last[]" value="<?=($_GET['last'][2])?$_GET['last'][2]:''?>" placeholder="Last name">
                            </td>
                            <td>
                                <input type="text" name="email[]" value="<?=($_GET['email'][2])?$_GET['email'][2]:''?>" placeholder="Email address">
                            </td>
                            <td>
                                <select name="type[]" placeholder="User type">
                                    <option value="0" <?=($_GET['type'][2] == 0)?'selected':''?>>User type</option>
                                    <?php if($_SESSION['type'] == "carrier"):?>
                                        <option value="dispatch" <?=($_GET['type'][2] == "dispatch")?'selected':''?>>Dispatch</option>
                                    <?php endif?>
                                    <option value="driver"<?=($_GET['type'][2] == "driver")?'selected':''?>>Driver</option>
                                </select>
                            </td>
                            <td>
                                <?=($_GET['error'][2])?$_GET['error'][2]:''?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <a class="button js-submit block-right" data-formid="car_add">Create users</a>
                            </td>
                            <td>                                 
                            </td>
                        </tr>
                    </table>                    
                </form>
            </div>
            <?endif?>
            <div class="user_data_wrapper">
                <table class="user_data">
                    <thead>
                        <tr>
                            <td>First name</td>
                            <td>Last name</td>
                            <td>Username</td>
                            <td>Email address</td>
                            <td>User type</td>
                            <td>Status</td>
                            <td>Last session</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($_SESSION['type'] == 'carrier'){
                                $cid = $_SESSION['uid'];
                            }
                            elseif($_SESSION['type'] == 'dispatch'){
                                $res_tmp = mysql_qw($site->link, "
                                SELECT carrier_id FROM carrier_users
                                WHERE id = ?",
                                $_SESSION['uid']);
                                $row_tmp = mysqli_fetch_array($res_tmp);
                                $cid = $row_tmp['carrier_id'];
                            }
                            $res = mysql_qw($site->link, "
                                SELECT * FROM carrier_users WHERE carrier_id = ?",
                                $cid);
                            while($row = mysqli_fetch_assoc($res)):?>
                                <tr>
                                    <td><?=$row['first']?></td>
                                    <td><?=$row['last']?></td>
                                    <td><?=$row['username']?></td>
                                    <td><?=$row['email']?></td>
                                    <td><?=$row['usertype']?></td>
                                    <td><?=$row['status']?></td>
                                    <td><?=$row['last_session']?></td>
                                </tr>
                            <?php endwhile?>
                    </tbody>
                </table>
            </div>

<br />
<br />
<br />

            <?php
            $res = mysql_qw($site->link, "
                                SELECT * FROM carrier_master WHERE carrier_id = ?",
                $cid);

            $res = mysqli_fetch_assoc($res);

           /* echo "<pre>";
            var_dump ($res['dot']);
            exit;*/

            $res = mysql_qw($site->link, "
                                SELECT * FROM carrier_master WHERE dot_num=? AND mc_num = ? AND carrier_id <>? AND `type`='driver'",
                $res['dot_num'], $res['mc_num'], $cid);

           /* echo "<pre>";
            var_dump ($res);
            exit;*/
            ?>

            <div class="user_data_wrapper existing">
                <table class="user_data">
                    <thead>
                    <tr>
                        <td>First name</td>
                        <td>Last name</td>
                        <td>Assign</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while($row = mysqli_fetch_assoc($res)):?>
                        <tr>
                            <td><?=$row['first']?></td>
                            <td><?=$row['last']?></td>
                            <td>
                                <select class="action-select">
                                    <option value="1" >Add</option>
                                    <option value="2" >Invalid</option>
                                </select>
                            </td>
                            <td>
                                <input type="hidden" name="driverId" value="<?=$row['id']?>"/>
                                <button type="button" class="driver-action">Submit</button>
                                <input type="hidden" name="email" value="<?=$row['email']?>"/>
                            </td>
                        </tr>
                    <?php endwhile?>
                    </tbody>
                </table>
            </div>



            <br />
            <br />
            <br />


        </div><!--right block end-->




    </div>



<?php endif?>
<?php include(INC_PATH."/templates/footer.php");?>
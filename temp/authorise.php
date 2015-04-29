<?php

include(dirname(__FILE__)."/include/initializer.php");

include(INC_PATH."/templates/header.php");?>

<?php

if($_SESSION['type'] == "admin"):



    if($_POST['action'] == 'update'){

        try {

            if($_POST['table'] == 'carrier_master'){

                mysql_qw($site->link, "

                UPDATE carrier_master SET 

                    email=?, username=?, is_active=?, activation_code=?, first=?, last=?, company=?, phone=?, address1=?, address2=?, city=?, state=?, zip=?, position=?, mc_num=?, dot_num=?, carrierdrivers=?, shippinglocations=?

                    WHERE carrier_id=?",

                    trim($_POST['email']), trim($_POST['username']), trim($_POST['is_active']), trim($_POST['activation_code']), trim($_POST['first']), trim($_POST['last']), trim($_POST['company']), trim($_POST['phone']), trim($_POST['address1']), trim($_POST['address2']), trim($_POST['city']), trim($_POST['state']), trim($_POST['zip']), trim($_POST['position']), trim($_POST['mc']), trim($_POST['dot']), trim($_POST['carrierdrivers']), trim($_POST['shippinglocations']), trim($_POST['carrier_id']));

            }

            //echo 'row update. <a href="'.$backUrl.'">go back</a>';

        } catch (Exception $e) {

            var_dump($e);

        }

    }

    $pagination = 1000;



    function show_table_template($name, $site, $pagination, $addQuery, $tblname){?>

        <div>

            <?php

            $tableName = $name;        

            $sql = "DESCRIBE ".$tableName;

            $res = mysql_qw($site->link, $sql);



            while( $row = mysqli_fetch_array($res)){

                $head[] = $row['Field'];

            }



            if (isset($_GET["page_".$tableName])) { $page = $_GET["page_".$tableName]; } else { $page=1; };

            $start_from = ($page-1) * $pagination;

            $res = mysql_qw($site->link, "

                SELECT u.* FROM carrier_master u ".$addQuery."ORDER BY carrier_id ASC",

                $start_from, $pagination);



            /*echo "<pre>";

            var_dump($res);

            exit;*/



            while($row = mysqli_fetch_assoc($res)){

                $content[] = $row;    

            }

            if(!is_array($content)){ $content = array();}

            ?>

            <table cellspacing="0" cellpadding="2" data-table="<?=$tableName?>">

                <caption class="table_caption"><?=$tblname?> </caption>

                <thead>

                    <tr>

                        <?php foreach($head as $name):?>

                            <th><?=$name?></th>

                        <?php endforeach?>

                        <th>APIdata</th>

                        <th>edit</th>



                    </tr>

                </thead>

                <?php foreach($content as $row):?>

                    <tr class="record" data-id="<?=$row['carrier_id']?>">

                        <?php foreach($row as $key => $column):?>

                            <td><?php

                                echo $column;

                            ?></td>

                        <?php endforeach;?>
                        
                        <td>
                            <a class='apidata-popup'>data<span style='display:none'>
                            <?//add APIdata "column"
                                $apidata = mysql_qw($site->link, "

                                SELECT ci.safety_rating, ci.cargo_insurance, ci.bipd FROM carrier_master u LEFT JOIN carrier_FMCSA ci ON ci.carrier_id = u.carrier_id WHERE u.carrier_id = ?",

                                $row['carrier_id']);

                                while($tmp_f = mysqli_fetch_assoc($apidata)){

                                    echo "safety_rating : ".$tmp_f['safety_rating']."<br>";

                                    echo "cargo_insurance : ".$tmp_f['cargo_insurance']."<br>";

                                    echo "bipd : ".$tmp_f['bipd']."<br>";
                                }                                
                            ?>
                        
                            </span></a>

                        </td>

                        <td><a class="popup update" data-table="<?=$tableName?>" data-id="<?=$row['carrier_id']?>" href="#">edit</a></td>



                    </tr>

                <?php endforeach?>

            </table>

            <div class="pagination">

                <?php $sql = "SELECT COUNT(carrier_id) FROM ".$tableName;

                $res = mysql_qw($site->link, $sql);

                $row = mysqli_fetch_row($res);

                $total_records = $row[0];

                $total_pages = ceil($total_records / $pagination);



                if($total_pages > 1){

                    for ($i=1; $i<=$total_pages; $i++){

                        echo "<a href='authorise.php?page_".$tableName."=".$i."'";

                        if($page==$i)

                        {

                        echo "class=active";

                        }

                        echo ">";

                        echo "".$i."</a> ";

                    };

                }

                ?>

            </div>

        </div>

    <?php }?>

    <link rel="stylesheet" type="text/css" href="<?=SCRIPT_PATH_ROOT?>styles/admin-style.css">

    <script src="<?=SCRIPT_PATH_ROOT?>js/jquery-ui-1.11.3.custom/jquery-ui.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?=SCRIPT_PATH_ROOT?>js/jquery-ui-1.11.3.custom/jquery-ui.css">



    <script>

        $(document).ready(function(){

            $('.popup').on('click', function(e){

                $('#popup').remove();

                e.preventDefault();

                $str = "";

                if($(this).hasClass('insert')){

                    $('table[data-table="'+$(this).attr('data-table')+'"]', $(this).closest('table').parent()).find('thead tr th').each(function(){

                        if($(this).html() != "edit" && $(this).html() != "delete" && $(this).html() != "carrier_id"){

                            $str += "<dt>"+$(this).html()+"</dt><dd><input type='text' name='"+$(this).html()+"'></dd>";

                        }

                    });

                    $str += '<input type="hidden" name="action" value="insert"><input type="hidden" name="table" value="'+$(this).attr('data-table')+'">';

                }

                else if($(this).hasClass('update')){

                    $self = $(this);

                    $('table[data-table="'+$(this).attr('data-table')+'"]', $(this).closest('table').parent()).find('thead tr th').each(function(key){

                        if($(this).html() != "edit" && $(this).html() != "delete" && $(this).html() != "carrier_id" && $(this).html() != "type" && $(this).html() != "password" && $(this).html() != "APIdata"){

                            $val = $('table[data-table="'+$self.attr('data-table')+'"] tr[data-id="'+$self.attr('data-id')+'"] td').eq(key).html();

                            $str += "<dt>"+$(this).html()+"</dt><dd><input type='text' name='"+$(this).html()+"' value='"+$val+"'></dd>";

                        }

                    });

                    $str += '<input type="hidden" name="action" value="update"><input type="hidden" name="table" value="'+$(this).attr('data-table')+'"><input type="hidden" name="carrier_id" value="'+$(this).attr('data-id')+'">';

                }

                $('body').after('<div id="popup" style="display:none;"><form method="post" action="authorise.php" id="send"><dl>'+$str+'</dl><input type="submit" value="ok"></form></div>');

                $('#popup').dialog({ autoOpen: true});

            });



            $('.apidata-popup').on('click', function(e){

                $('#popup').remove();

                e.preventDefault();

                $str = $(this).find('span').html();

                $('body').after('<div id="popup" style="display:none;">'+$str+'</div>');

                $('#popup').dialog({ autoOpen: true});

            });

            

            $('body').on('submit', '#send', function(){

                $valid = true;

                $(this).find('input[type="text"]').each(function(){

                    if($(this).val() == ""){

                        $(this).css({'border':'1px solid red'});

                        $valid = false;

                    }

                    else{

                        $(this).css({'border':'auto'});

                    }

                });

                if($valid == true){

                    return true;

                }

                else{

                    return false;

                }

            });





        });

    </script>

    <?php show_table_template("carrier_master", $site, $pagination, " WHERE u.type = 'carrier' AND u.is_active = 'Y' ", 'confirmed_carriers')?>

    <?php show_table_template("carrier_master", $site, $pagination, " WHERE u.type = 'shipper' AND u.is_active = 'Y' ", 'confirmed_shippers')?>

    <?php show_table_template("carrier_master", $site, $pagination, " WHERE u.is_active = 'N' ", 'not_confirmed')?>

<?php endif?>

<?php include(INC_PATH."/templates/footer.php");?>
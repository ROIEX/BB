<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=1024, maximum-scale=1, user-scalable=1">

    <title>Bridge Haul</title>

    <link href="<?=SCRIPT_PATH_ROOT?>styles/base.css" rel="stylesheet">

    <script src="<?=SCRIPT_PATH_ROOT?>js/jquery-1.10.2.min.js"></script>
    <script src="<?=SCRIPT_PATH_ROOT?>js/base.js"></script>

    <script src="<?=SCRIPT_PATH_ROOT?>js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <link href="<?=SCRIPT_PATH_ROOT?>js/magnific-popup/magnific-popup.css" rel="stylesheet">
    <script src="<?=SCRIPT_PATH_ROOT?>js/jquery.maskedinput.min.js"></script>
    

</head>

<body>

    <div class="main-block">
        <div class="header">
            <div class="topmenu <?=($shortHeader == "Y")?'topmenu2':''?>">
                <ul>
                <li><a href="#">SOLUTIONS</a>
                    <ul>
                        <li><a href="#" class="underline">Carrier Solutions</a></li>
                        <li><a href="#">Carrier Fleet Managment</a></li>
                        <li><a href="#">Owner Operator Tools</a></li>
                        <li><a href="#" class="underline newsubblock">Shipper Solutions</a></li>
                        <li><a href="#">Shipper Freight Procurement</a></li>                        
                    </ul>
                </li>
                <li><a href="#">SHIPPERS</a></li>
                <li><a href="#">CARRIERS</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">CONTACT</a></li>
                <?if(!$_SESSION['uid']):?>
                    <li>
                        <a href="#login" class="lightbox-inline-open">LOGIN</a>
                    </li>
                <?else:?>
                    <li>
                        <a href="#"><?=$_SESSION['email']?></a>
                    </li>
                    <li>
                        <a href="logout.php">logout</a>
                    </li>
                <?endif?>                
                </ul>
            </div>
            <?if($shortHeader != "Y"):?>
                <div class="topbanner">
                    <div class="left-bg">
                        <a href="<?=SCRIPT_PATH_ROOT?>" class="logo"></a>
                    </div>
                    <span class="slogan">Bridging the gap between carriers and shippers</span>
                </div>
                <div class="medialine">
                    <a href="#" class="how">How it works</a>
                    <a href="#signup1" class="registrate lightbox-inline-open">Sign up it's free</a>
                </div>
            <?endif?>
        </div><!--.header end-->

        <div class="content">
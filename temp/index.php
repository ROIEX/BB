<?php
include( dirname(__FILE__)."/include/initializer.php");
include(INC_PATH."/templates/header.php");
?>
<?php//unset($_SESSION['uid'], $_SESSION['email']); ?>
<div id="inner">
    <div id="left">
        <div class="container">
            <div class="text-center">
                <span class="title">Fleet Management</span>
            </div>
            <div class="image two">
                <img src="images/111.jpg">
                <div class="clr"></div>
                <span class="imagedescr">Hos/DVIR</span>
            </div>
            <div class="image two">
                <img src="images/222.jpg">
                <div class="clr"></div>
                <span class="imagedescr">Real time tracking</span>
            </div>
            <div class="clr"></div>
            <ul class="features">
                <li>Hours of Service E-logs made easy</li>
                <li>Online Driver Vehicle Inspection Reports</li>
                <li>Truck tracking and driver availability</li>
                <li>Find optimal loads with one click instantaneously- no bidding or waiting for a response from shippers</li>
                <li>No more faxing and emailing bill of </li>
            </ul>
            <div class="text-center">
                <a href="#" class="button">Learn More</a>
            </div>
        </div>
    </div>
    <div id="center">
        <div class="container">
            <div class="text-center">
                <span class="title">Shipper Truckload and LCL procurement</span>
            </div>
            <div class="image centered">
                <img src="images/333.jpg">
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
            <ul class="features">
                <li>Get contracted rates with no bidding, RFPs, negotiations-just post your loads</li>
                <li>Allow onlyinsured, licensed, top rated truckers to carry your loads</li>
                <li>100% Visibility of status of loads through online dashboard - no more contacting dispatchers or brokers</li>
                <li>Single invoice streamlines A/P process</li>
            </ul>
            <div class="text-center">
                <a href="#" class="button">Learn More</a>
            </div>
        </div>
    </div>
    <div id="right">
        <div class="container">
            <div class="text-center">
                <span class="title">Owner Operator Trucker Tools - Free!</span>
            </div>
            <div class="image three">
                <img src="images/444.jpg">
                <div class="clr"></div>
                <span class="imagedescr">Navigation</span>
            </div>
            <div class="image three">
                <img src="images/555.jpg">
                <div class="clr"></div>
                <span class="imagedescr">Hos</span>
            </div>
            <div class="image three">
                <img src="images/666.jpg">
                <div class="clr"></div>
                <span class="imagedescr">DVIR</span>
            </div>
            <div class="clr"></div>
            <ul class="features">
                <li>Fully editable Hours of Service E-logs made easy</li>
                <li>Driver Vehicle Inspection Reports in just a few clicks</li>
                <li>GPS navigation with truck stop finder, lowest fuel finder, and weigh stations</li>
                <li>All of this in one simple mobile app for FREE!</li>
            </ul>
            <div class="text-center">
                <a href="#" class="button">Download mobile app</a>
            </div>
        </div>
    </div>                
    <div class="clr"></div>
</div>
<?php include(INC_PATH."/templates/footer.php");?>
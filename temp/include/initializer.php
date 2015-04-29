<?php
session_start();
DEFINE("INC_PATH",dirname(__FILE__).DIRECTORY_SEPARATOR.'..');
DEFINE("SCRIPT_PATH_ROOT","/temp/");//локалка
/*DEFINE("MSSQL_SERVER","sqlserver9.loosefoot.com");
DEFINE("MYSQL_DATABASE","demolog");
DEFINE("MYSQL_USER","user2000");
DEFINE("MYSQL_PASSWORD","Eethoh1o");*/

DEFINE("MYSQL_SERVER","localhost");
DEFINE("MYSQL_DATABASE","trademar_demolog");
DEFINE("MYSQL_USER","trademar_user200");
DEFINE("MYSQL_PASSWORD","~Py=INVf^T");
////////////////////////////
/*DEFINE("MYSQL_USER","root");
DEFINE("MYSQL_PASSWORD","");*/

//Настройки для сайта
DEFINE("FROM_MAIL", "abox@bigyellowguide.com");
ini_set("SMTP", "smtp.bigyellowguide.com");
ini_set("sendmail_from", "abox@bigyellowguide.com");
DEFINE("ADMIN_MAIL", "rfp777@gmail.com");
DEFINE("SUPPORT_MAIL", "support@bridgehaul.com");
//DEFINE("SITE", "http://bigyellowguide.com");
DEFINE("SITE", "http://trademarkassistant.com");
DEFINE("WEB_KEY_API", "fb7ecccc4d3c52f07e3bbdcc1f37622037c986aa");


require_once "Site.class.php";

$site = new Site();
?>
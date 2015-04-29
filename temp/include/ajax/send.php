<?php
include("../initializer.php");

print_r($_POST);

if(isset($_POST)) {

    if($_POST['action'] == 2) {
        $res = mysql_qw($site->link, "
                                UPDATE users SET `type`='DELETED' WHERE id = ?",
            $_POST['id']);
    }
    else {
//        $res = mysql_qw($site->link, "
//                                UPDATE users SET `type`='ADDED' WHERE id = ?",
//            $_POST['id']);
    }

}


/*$to      = $formData['email'];
$subject = 'registration confirm';
$message = 'Please validate your account by clicking: '.SITE.SCRIPT_PATH_ROOT.'registrationconfirm.php?key='.$key;
$headers = 'From: '.FROM_MAIL;*/
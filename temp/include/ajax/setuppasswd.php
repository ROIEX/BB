<?php
include("../initializer.php");
echo $site->setuppasswd($_POST['pass1'], $_POST['pass2'], $_POST['key']);
?>
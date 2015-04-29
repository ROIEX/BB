<?
include("../initializer.php");
//checking mail
$table = 'carrier_master';
$res_tmp = mysql_qw($site->link, "
	SELECT carrier_id as id FROM carrier_master
	WHERE email = ?",
	$_POST['email']);
$row_tmp = mysqli_fetch_array($res_tmp);
if(!$row_tmp['id']){
	//may be it's a carrier_user
	$table = 'carrier_users';
	$res_tmp = mysql_qw($site->link, "
	SELECT id FROM carrier_users
	WHERE email = ?",
	$_POST['email']);
	$row_tmp = mysqli_fetch_array($res_tmp);
}
if(!$row_tmp['id']){
	$_SESSION['ERR_REPORTS']['forgotpasswd'] = "Invalid email";
	Site::redirect($_POST['backurl']);
}
else{
	//it's ok, set new activation code and sending mail. then go back to say it's ok
	$activation_code = md5($_POST['email']."_salt123");
	if($table == "carrier_users"){
		mysql_qw($site->link, "
			UPDATE carrier_users
			SET
			activation_code = ?
			WHERE email = ?",
			$activation_code,
			$_POST['email']);
	}elseif($table == "carrier_master"){
		mysql_qw($site->link, "
			UPDATE carrier_master
			SET
			activation_code = ?
			WHERE email = ?",
			$activation_code,
			$_POST['email']);
	}
	//now email:
	$to = $_POST['email'];
	$subject = 'BridgeHaul: password Assistance';
	$message = "<html><body>";
	$message .= "<p style='font-size:18px;font-weight:bold;'>BridgeHaul: password Assistance</p>
	<p>Hi, We've received a request to reset your BridgeHaul password.</p>
	<p>To initiate the process, please click the following link: 
	<a href='".SITE.SCRIPT_PATH_ROOT.'index.php?key='.$activation_code."&action=setuppasswd'>".SITE.SCRIPT_PATH_ROOT.'index.php?key='.$activation_code."&action=setuppasswd</a>
	</p>
	<p>If clicking the link above does not work, copy and paste the URL in a new browser window. The URL will expire in 24 hours for security reasons. If you did not make this request, simply ignore this message.</p>
	<div style='text-align:center;'><img src='".SITE.SCRIPT_PATH_ROOT."images/thanks.png'><p>The BridgeHaul team</p></div>";
	$message .= '</body></html>';
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= 'From: '.FROM_MAIL;
	mail($to, $subject, $message, $headers);
	//and go back
	Site::redirect($_POST['backurl']."?reset=ok");
}
?>
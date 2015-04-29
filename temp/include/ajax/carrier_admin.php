<?php
include("../initializer.php");
if($_POST['action'] == 'add_users'){
	$errors = array();
	foreach($_POST['first'] as $key => $val){
		//clear from output fully empry data
		if($_POST['first'][$key] == "" && $_POST['last'][$key] == "" && $_POST['email'][$key] == "" && ($_POST['type'][$key] != "dispatch" && $_POST['type'][$key] != "driver")){
			continue;
		}
		if($_POST['first'][$key] == "" || $_POST['last'][$key] == "" || $_POST['email'][$key] == "" || ($_POST['type'][$key] != "dispatch" && $_POST['type'][$key] != "driver")){
			$errors[$key] = "Fill all fields, please.";
		}
		//checking mail
		elseif(!preg_match('#[a-zA-Z0-9_\-.+]+@[a-zA-Z0-9\-]+.[a-zA-Z]+#', $_POST['email'][$key])){
			$errors[$key] = 'Email is uncorrect.';
		}else{
			//checking duplicate mail
			$res_tmp = mysql_qw($site->link, "
				SELECT id FROM carrier_users
				WHERE email = ?",
				$_POST['email'][$key]);
			$row_tmp = mysqli_fetch_array($res_tmp);
			if($row_tmp['id']){
				$errors[$key] = 'Duplicate email.';
			}else{
				//all good - do db things
				$tmp = explode('@', $_POST['email'][$key]);
				$name = $tmp[0];
				$activation_code = md5($_POST['email'][$key]."_salt123");
				//need to get carrier id
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
				mysql_qw($site->link, "
	                INSERT INTO carrier_users 
	                (first, last, username, email, usertype, status, last_session, owner_id, owner_type_tablename, activation_code, carrier_id)
	                VALUES 
	                (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
					$_POST['first'][$key],
					$_POST['last'][$key],
					$name,
					$_POST['email'][$key],
					$_POST['type'][$key],
					'invite not confirmed',
					'None', //date('m/d/Y'),
					$_SESSION['uid'],
					(($_SESSION['type'] == 'carrier')?'carrier_master':'carrier_users'),
					$activation_code,
					$cid);
				//db ok - send mail
				//send mail
				$to      = $_POST['email'][$key];
				$subject = $_POST['first'][$key].', Welcome to BridgeHaul';
				$message = "<html><body>";
				$message .= "<p>Your BridgeHaul account has been created.</p>
				<p>Your username is ".$name."</p>
				<a style='padding: 10px; background-color: #376092; text-decoration: none; font-size: 16px; font-weight: bold; color: #fff;' href='".SITE.SCRIPT_PATH_ROOT.'index.php?key='.$activation_code."&action=setuppasswd'>Set my password</a><br><br>";
				$message .= '</body></html>';
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				$headers .= 'From: '.FROM_MAIL;
				mail($to, $subject, $message, $headers);
			}
		}
	}
	//var_dump($errors);
	//check errors
	$backstr = "";
	foreach($errors as $key => $error){
		$backstr .= '&error[]='.$error.'&first[]='.$_POST['first'][$key]."&last[]=".$_POST['last'][$key]."&email[]=".$_POST['email'][$key]."&type[]=".$_POST['type'][$key];
	}
	$backurl = $_POST['backurl']."?".$backstr; 
	Site::redirect($backurl);
}
?>
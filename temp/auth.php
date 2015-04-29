<?php
include(dirname(__FILE__)."/include/initializer.php");
$_POST['backurl'] = SCRIPT_PATH_ROOT."authorise.php";
?>
<?php if($_POST['auth_step'] == 0):
    include(INC_PATH."/templates/header.php");?>
    <div style="text-align: center;">
        <?$err = $site->showErrorReport('auth');
        $err2 = $site->showErrorReport('forgotpasswd');
        if($err) echo "<p class='error_mes'>".$err."</p>";
        ?>
        <?if($_GET['reset']=="ok"):?>
        	<p>Please, check your mailbox for password reset link.</p>
        <?else:?>
            <form action="<?=SCRIPT_PATH_ROOT;?>auth.php" method="POST">
                <input type="hidden" name="auth_step" value="1"/>
                <input type="hidden" name="backurl" value="<?=($_POST['backurl'])?$_POST['backurl']:SCRIPT_PATH_ROOT?>"/>
                <div style="display: inline-block;">    
                    <table>
                        <tr>
                            <td style="padding:4px"><span style="font-size: 14px;">login</span></td>
                            <td style="padding:4px"><input type="text" name="login" value="<?=($_POST['login'])?$_POST['login']:''?>"/></td>
                        </tr>
                        <tr>
                            <td style="padding:4px"><span style="font-size: 14px;">password</span></td>
                            <td style="padding:4px"><input type="password" name="pass" value="<?=($_POST['pass'])?$_POST['pass']:''?>"/></td>
                        </tr>
                    </table>
                </div>
                <div class="clr"></div>
                <a href="#" class="js-submit button inlineblock">Sign in</a>
            </form>   
        	<?if($err2 || $err):?>
        		<a id="forgotpassshow">Forgot password?</a>
        		<?
        			if($err2) echo "<p class='error_mes'>$err2</p>";
        		?>
        		<form id="forgpass" action="<?=SCRIPT_PATH_ROOT;?>include/ajax/forgotpass.php" method="POST" style="<?=($err2)?"display:block;":"display:none;"?>">
        			<input type="hidden" name="backurl" value="<?=SCRIPT_PATH_ROOT?>auth.php"/>
        			<h3 style="margin:20px 0px;">RESET PASSWORD</h3>
                    <p>Enter the email you used in your BridgeHaul account. A password reset link will be sent to you by email.</p>
                    <div style="display: inline-block;">
                        <table>
                            <tr>
                                <td style="padding:4px"><span style="font-size: 14px;">email</span></td>
                                <td style="padding:4px"><input name="email" value="" type="text"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="clr"></div>
                    <a href="#" class="js-submit button inlineblock">Send</a>
        		</form>
        	<?endif?>
        <?endif?>
    </div>
<?php elseif($_POST['auth_step'] == 1):
    $site->auth($_POST['login'],$_POST['pass']);
    ?>
<?php endif?>
<?php include(INC_PATH."/templates/footer.php");?>
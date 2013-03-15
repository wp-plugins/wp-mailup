<?php
/**
 * @package WP-MailUp
 * MailUp AJAX and Init functions
 */
 
// Remove the two lines below when debugging
// ini_set('display_errors',1); 
// error_reporting(E_ALL);
 
$logged_in = false;
include_once "myPluggable.php";



//if ( current_user_can( 'manage_options' ) ) /* Not used because this message is returned: Fatal error: Call to undefined function wp_get_current_user() in /usr/local/www/vhosts/wpress.xrider.it/httpdocs/wp-includes/capabilities.php on line 1281 */

if( is_user_logged_in() ) 
{
	$logged_in = true;
		
	/* This commented block was active in 1.3.2 but it has been replaced by "is_user_logged_in" (see above) 
	   due to security vulnerability that has been reported on "http://wpsecure.net/2013/03/mailup-plugin-ajax/"  
	if (count($_COOKIE)) {
		foreach ($_COOKIE as $key => $val) {
			if (substr($key, 0, 19) === "wordpress_logged_in") {
				 $logged_in = true;
			}
		}
	}
	*/
}


if(@$_REQUEST['formData'] == 'save')
{
	if ($logged_in) {
		add_action('init', 'wpmailup_save_config');
	}
	else {
		echo 'ACCESS DENIED (1)';
	}
}
function wpmailup_save_config()
{
	error_reporting(0);
	
	global $wpmailup;
	
	//echo 'alert(' . print_r($_REQUEST, true).')';
	
	if(@$_REQUEST['formData'] == 'save')
	{
		if(trim($_REQUEST['console-host']) == '')
		{
			//return new WP_Error('', __("I've fallen and can't get up"));
		}
		$wpmailup['consoleHost'] = $_REQUEST['console-host'];
		$wpmailup['subscribePath'] = $_REQUEST['subscribe-path'];
		$wpmailup['pluginTitle'] = $_REQUEST['plugin-title'];
		$wpmailup['pluginDescription'] = $_REQUEST['plugin-description'];
		/* $wpmailup['externalCss'] = $_REQUEST['external-css']; */
		$wpmailup['cssCombination'] = $_REQUEST['css-combination'];
		$wpmailup['submitButton'] = $_REQUEST['submit-button'];
		$wpmailup['requestConfirm'] = $_REQUEST['request-confirm'];
		$wpmailup['listId'] = $_REQUEST['list-id'];
		$wpmailup['listDisplayedName'] = $_REQUEST['list-displayed-name'];
		$wpmailup['groupId'] = $_REQUEST['group-id'];
		
		$wpmailup['emailShow'] = $_REQUEST['email-show'];
		$wpmailup['emailRequired'] = $_REQUEST['email-required'];
		/* as email fieldcode always will be Email */
		/* $wpmailup['emailFieldcode'] = $_REQUEST['email-fieldcode']; */
		$wpmailup['emailDisplayedName'] = $_REQUEST['email-displayed-name'];
		
		$wpmailup['extfield1Show'] = $_REQUEST['extfield1-show'];
		$wpmailup['extfield1Required'] = $_REQUEST['extfield1-required'];
		$wpmailup['extfield1Fieldcode'] = $_REQUEST['extfield1-fieldcode'];
		$wpmailup['extfield1DisplayedName'] = $_REQUEST['extfield1-displayed-name'];
		
		$wpmailup['extfield2Show'] = $_REQUEST['extfield2-show'];
		$wpmailup['extfield2Required'] = $_REQUEST['extfield2-required'];
		$wpmailup['extfield2Fieldcode'] = $_REQUEST['extfield2-fieldcode'];
		$wpmailup['extfield2DisplayedName'] = $_REQUEST['extfield2-displayed-name'];

		$wpmailup['extfield3Show'] = $_REQUEST['extfield3-show'];
		$wpmailup['extfield3Required'] = $_REQUEST['extfield3-required'];
		$wpmailup['extfield3Fieldcode'] = $_REQUEST['extfield3-fieldcode'];
		$wpmailup['extfield3DisplayedName'] = $_REQUEST['extfield3-displayed-name'];

		$wpmailup['extfield4Show'] = $_REQUEST['extfield4-show'];
		$wpmailup['extfield4Required'] = $_REQUEST['extfield4-required'];
		$wpmailup['extfield4Fieldcode'] = $_REQUEST['extfield4-fieldcode'];
		$wpmailup['extfield4DisplayedName'] = $_REQUEST['extfield4-displayed-name'];

		$wpmailup['extfield5Show'] = $_REQUEST['extfield5-show'];
		$wpmailup['extfield5Required'] = $_REQUEST['extfield5-required'];
		$wpmailup['extfield5Fieldcode'] = $_REQUEST['extfield5-fieldcode'];
		$wpmailup['extfield5DisplayedName'] = $_REQUEST['extfield5-displayed-name'];
		
		$wpmailup['mobileShow'] = $_REQUEST['mobile-show'];
		$wpmailup['mobileRequired'] = $_REQUEST['mobile-required'];
		$wpmailup['mobileFieldcode'] = $_REQUEST['mobile-fieldcode'];
		$wpmailup['mobileDisplayedName'] = $_REQUEST['mobile-displayed-name'];
		
		$wpmailup['successMessage'] = stripslashes($_REQUEST['success-message']);
		$wpmailup['genericError'] = stripslashes($_REQUEST['generic-error']);
		$wpmailup['invalidAddress'] = stripslashes($_REQUEST['invalid-address']);
		$wpmailup['invalidPhone'] = stripslashes($_REQUEST['invalid-phone']);
		$wpmailup['alreadyPresent'] = stripslashes($_REQUEST['already-present']);
		$wpmailup['fieldRequired'] = stripslashes($_REQUEST['field-required']);
		$wpmailup['termsNotAgreed'] = stripslashes($_REQUEST['terms-not-agreed']);
		$wpmailup['termsConfirm'] = stripslashes($_REQUEST['terms-confirm']);		
		$tmp = $_REQUEST[('terms-n-con')];
		$tmp=stripslashes($tmp); // see MailUp ticket 091-1874209D-0204
		$wpmailup['termsNcon']= $tmp;	
		
		
		$wpmailup['acceptanceMsg'] = $_REQUEST['acceptance-msg'];
				
		update_option('wpmailup', serialize($wpmailup));
	}
	exit();
}

if(@$_REQUEST['formData'] == 'load')
{		
	if($logged_in){
		add_action('init', 'wpmailup_load_config');
	}
	else {
		echo 'ACCESS DENIED (2)';
	}
	
}



function wpmailup_load_config()
{
	global $wpmailup;
	$wpmailup = unserialize(get_option('wpmailup'));
	echo json_encode($wpmailup);
	exit();
}


?>
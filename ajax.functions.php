<?php
/**
 * @package WP-MailUp
 * MailUp AJAX and Init functions
 */
 
// Remove the two lines below when debugging
//ini_set('display_errors',1); 
//error_reporting(E_ALL);
 

if(@$_REQUEST['formData'] == 'save')
{
		add_action('init', 'wpmailup_save_config');
}

function wpmailup_save_config()
{
	error_reporting(0);
	
	global $wpmailup;
	
	//echo 'alert(' . print_r($_REQUEST, true).')';
	if( is_user_logged_in() )
	{
		if ( current_user_can( 'edit_plugins' ) )
		{
			if(@$_REQUEST['formData'] == 'save')
			{
				if(trim($_REQUEST['console-host']) == '')
				{
					//return new WP_Error('', __("I've fallen and can't get up"));
				}
				$wpmailup['consoleHost'] = $_REQUEST['console-host'];
				$wpmailup['subscribePath'] = $_REQUEST['subscribe-path'];
				$wpmailup['pluginTitle'] = stripslashes($_REQUEST['plugin-title']);
				$wpmailup['pluginDescription'] = stripslashes($_REQUEST['plugin-description']);
				/* $wpmailup['externalCss'] = $_REQUEST['external-css']; */
				$wpmailup['cssCombination'] = $_REQUEST['css-combination'];
				$wpmailup['submitButton'] = stripslashes($_REQUEST['submit-button']);
				$wpmailup['textInside'] = $_REQUEST['text-inside'];
				$wpmailup['requestConfirm'] = $_REQUEST['request-confirm'];
				$wpmailup['listId'] = $_REQUEST['list-id'];
				$wpmailup['listDisplayedName'] = stripslashes($_REQUEST['list-displayed-name']);
				$wpmailup['groupId'] = $_REQUEST['group-id'];
				
				$wpmailup['emailShow'] = $_REQUEST['email-show'];
				$wpmailup['emailRequired'] = $_REQUEST['email-required'];
				/* as email fieldcode always will be Email */
				/* $wpmailup['emailFieldcode'] = $_REQUEST['email-fieldcode']; */
				$wpmailup['emailDisplayedName'] = stripslashes($_REQUEST['email-displayed-name']);
				
				$wpmailup['dateShow'] = $_REQUEST['date-show'];
				$wpmailup['dateRequired'] = $_REQUEST['date-required'];
				$wpmailup['dateFieldcode'] = $_REQUEST['date-fieldcode'];
				$wpmailup['dateDisplayedName'] = stripslashes($_REQUEST['date-displayed-name']);

				
				$wpmailup['extfield1Show'] = $_REQUEST['extfield1-show'];
				$wpmailup['extfield1Required'] = $_REQUEST['extfield1-required'];
				$wpmailup['extfield1Fieldcode'] = $_REQUEST['extfield1-fieldcode'];
				$wpmailup['extfield1DisplayedName'] = stripslashes($_REQUEST['extfield1-displayed-name']);
				
				$wpmailup['extfield2Show'] = $_REQUEST['extfield2-show'];
				$wpmailup['extfield2Required'] = $_REQUEST['extfield2-required'];
				$wpmailup['extfield2Fieldcode'] = $_REQUEST['extfield2-fieldcode'];
				$wpmailup['extfield2DisplayedName'] = stripslashes($_REQUEST['extfield2-displayed-name']);

				$wpmailup['extfield3Show'] = $_REQUEST['extfield3-show'];
				$wpmailup['extfield3Required'] = $_REQUEST['extfield3-required'];
				$wpmailup['extfield3Fieldcode'] = $_REQUEST['extfield3-fieldcode'];
				$wpmailup['extfield3DisplayedName'] = stripslashes($_REQUEST['extfield3-displayed-name']);

				$wpmailup['extfield4Show'] = $_REQUEST['extfield4-show'];
				$wpmailup['extfield4Required'] = $_REQUEST['extfield4-required'];
				$wpmailup['extfield4Fieldcode'] = $_REQUEST['extfield4-fieldcode'];
				$wpmailup['extfield4DisplayedName'] = stripslashes($_REQUEST['extfield4-displayed-name']);

				$wpmailup['extfield5Show'] = $_REQUEST['extfield5-show'];
				$wpmailup['extfield5Required'] = $_REQUEST['extfield5-required'];
				$wpmailup['extfield5Fieldcode'] = $_REQUEST['extfield5-fieldcode'];
				$wpmailup['extfield5DisplayedName'] = stripslashes($_REQUEST['extfield5-displayed-name']);
				
				$wpmailup['mobileShow'] = $_REQUEST['mobile-show'];
				$wpmailup['mobileRequired'] = $_REQUEST['mobile-required'];
				$wpmailup['mobileFieldcode'] = $_REQUEST['mobile-fieldcode'];
				$wpmailup['mobileDisplayedName'] = stripslashes($_REQUEST['mobile-displayed-name']);
				
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
				
				
				$wpmailup['acceptanceMsg'] = stripslashes($_REQUEST['acceptance-msg']);
						
				update_option('wpmailup', serialize($wpmailup));
			}
			exit();
		}
		else {
			echo 'ACCESS DENIED. USER IS NOT AUTHORIZED';
			exit();
		}
	}
	else {
		echo 'ACCESS DENIED. USER SHALL BE LOGGED IN';
		exit();
	}
	
}

if(@$_REQUEST['formData'] == 'load')
{		
		add_action('init', 'wpmailup_load_config');	
}



function wpmailup_load_config()
{
	global $wpmailup;
	if( is_user_logged_in() )
	{
		if ( current_user_can( 'edit_plugins' ) )
		{
			$wpmailup = unserialize(get_option('wpmailup'));
			echo json_encode($wpmailup);
		}
	}
	exit();
}

?>
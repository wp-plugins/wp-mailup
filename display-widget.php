<?php
	error_reporting(0);
	$wpmailup = unserialize(get_option('wpmailup'));
	/* exit('<pre>' . print_r($wpmailup, true) . '</pre>'); */
	
	$text_field_size = 22;
	$text_field_maxlength = 80;
?>
<style type="text/css">
<!--	
	fieldset#subscribeDataTable label {
		display:block;
		margin-bottom:3px;
	}
	
<?php
	switch($wpmailup['cssCombination']){
		case 'style1':
			require(dirname(__FILE__).'/style1.css');
			break;
		case 'style2':
			require(dirname(__FILE__).'/style2.css');
			break;
		case 'style3':
			require(dirname(__FILE__).'/style3.css');
			break;
		case 'style4':
			require(dirname(__FILE__).'/style4.css');
			break;
		default:
			require(dirname(__FILE__).'/default.css');
			break;
	}
?>
-->
</style>
<?php /* if($wpmailup['externalCss']): ?>
<link rel="stylesheet" href="<?php echo $wpmailup['externalCss']; ?>" />
<?php endif; */ ?>
<form action="" method="get" name="subscribeForm" id="subscribeForm" onsubmit="return false;">
	<input type="hidden" name="wpmailup-subscribe" id="wpmailup-subscribe" value="subscribe" />
    <fieldset id="subscribeDataTable">
                <h3><?php 
                    if ( $title ) {
                        echo $before_title . $title . $after_title;
                    } else {
                        echo $before_title . $wpmailup['pluginTitle'] . $after_title;
                    }
                ?></h3>
                <p><?php echo $wpmailup['pluginDescription']; ?></p>
            <?php if($wpmailup['emailShow'] == 'yes'): ?>
            
                	<p><label><?php if($wpmailup['emailRequired'] == 'yes'): ?>
                    <span style="color:#FF0000;">*</span>
                    <?php endif; ?>
                    <?php echo $wpmailup['emailDisplayedName']; ?>:</label>
                	<input type="text" name="sub-email" id="sub-email" />
            <?php endif; ?></p>
            
            <p><label><?php if($wpmailup['mobileShow'] == 'yes'): ?>
                	<?php if($wpmailup['mobileRequired'] == 'yes'): ?>
                    <span style="color:#FF0000;">*</span>
                    <?php endif; ?>
                	<?php echo $wpmailup['mobileDisplayedName']; ?>:</label>
                	<input type="text" name="sub-phone" id="sub-phone" maxlength="<?php echo $text_field_maxlength; ?>" />
            <?php endif; ?></p>
            
            <p><label><?php if($wpmailup['extfield1Show'] == 'yes'): ?>
                	<?php if($wpmailup['extfield1Required'] == 'yes'): ?>
                    <span style="color:#FF0000;">*</span>
                    <?php endif; ?>
                	<?php echo $wpmailup['extfield1DisplayedName']; ?>:</label>
                	<input type="text" name="sub-ext1" id="sub-ext1" maxlength="<?php echo $text_field_maxlength; ?>" />
            <?php endif; ?></p>
            
            <p><label><?php if($wpmailup['extfield2Show'] == 'yes'): ?>
                	<?php if($wpmailup['extfield2Required'] == 'yes'): ?>
                    <span style="color:#FF0000;">*</span>
                    <?php endif; ?>
                    <?php echo $wpmailup['extfield2DisplayedName']; ?>:</label>
                	<input type="text" name="sub-ext2" id="sub-ext2" maxlength="<?php echo $text_field_maxlength; ?>" />
            <?php endif; ?></p>
            
            <center><?php if($wpmailup['termsConfirm'] == 'yes'): ?>
                	<?php echo $wpmailup['termsNcon']; ?></center>
            <center><label><input name="terms-confirm" id="terms-confirm" type="checkbox" value="yes" /> <?php echo $wpmailup['acceptanceMsg']; ?></label></center>
            <?php endif; ?>
            	<center><img id="loading-img" style="visibility:hidden;vertical-align:middle;padding:4px;background:none;" src="<?php echo get_bloginfo('wpurl').'/wp-content/plugins/wp-mailup/images/indicator.white.gif'; ?>" border="0" /><span id="show-response"><noscript><?php _e('Please enable javascript to work with this subscription form.'); ?></noscript></span></center>
                	<center><input type="submit" name="submit" value="<?php echo $wpmailup['submitButton']; ?>" /></center>
    </fieldset>
</form>
<script type="text/javascript">
	<!--
	var jQ = jQuery.noConflict();
	jQ(document).ready(function(){
		
		function viewInfoIcon(status)
		{
			switch(String(status))
			{
				case 'loading':
					jQ('#loading-img').attr('src', '<?php echo get_bloginfo('wpurl').'/wp-content/plugins/wp-mailup/images/indicator.white.gif'; ?>');
					jQ('#loading-img').css('visibility', 'visible');
					break;
				case 'info':
					jQ('#loading-img').attr('src', '<?php echo get_bloginfo('wpurl').'/wp-content/plugins/wp-mailup/images/question.gif'; ?>');
					jQ('#loading-img').css('visibility', 'visible');
					break;
				default:
			}
		}
		
		jQ("form#subscribeForm").submit(function(){
			var token = jQ('#wpmailup-subscribe').val();
			var sub_email = jQ('#sub-email').val();
			var sub_phone = jQ('#sub-phone').val();
			
			var sub_ext1 = '';
			<?php if($wpmailup['extfield1Show'] == 'yes'): ?>
			sub_ext1 = jQ('#sub-ext1').val();
			<?php endif; ?>
			
			var sub_ext2 = '';
			<?php if($wpmailup['extfield2Show'] == 'yes'): ?>
			sub_ext2 = jQ('#sub-ext2').val();
			<?php endif; ?>
			
			<?php
				if($wpmailup['extfield1Show'] && $wpmailup['extfield2Show']):
					$csvFldNames = $wpmailup['extfield1Fieldcode'] . ';' . $wpmailup['extfield2Fieldcode'];
				elseif($wpmailup['extfield1Show']):
					$csvFldNames = $wpmailup['extfield1Fieldcode'];
				elseif($wpmailup['extfield2Show']):
					$csvFldNames = $wpmailup['extfield2Fieldcode'];
				endif;
			?>
			var csvFldNames = '<?php echo $csvFldNames; ?>';
			
			var csvFldValues = '';
			if(sub_ext1 && sub_ext2)
			{
				csvFldValues = sub_ext1 + ';' + sub_ext2;
			}
			else if(sub_ext1)
			{
				csvFldValues = sub_ext1;
			}
			else
			{
				csvFldValues = sub_ext2;
			}
			
			var listId = '<?php echo $wpmailup['listId']; ?>';
			var groupId = '<?php echo $wpmailup['groupId']; ?>';
			var confirmReq = '<?php echo ($wpmailup['requestConfirm'] == 'yes')?'1':'0'; ?>';
			var subUrl = '<?php echo $wpmailup['consoleHost'] . $wpmailup['subscribePath']; ?>';
			
			/*
				validate form
			*/
			<?php if(($wpmailup['emailRequired'] == 'yes') && ($wpmailup['emailShow'] == 'yes')): ?>
			if(!(sub_email.match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/)))
			{
				jQ('#show-response').html('<?php _e('Invalid email address.'); ?>');
				viewInfoIcon('info');
				return false;
			}
			<?php endif; ?>
			<?php if(($wpmailup['mobileRequired'] == 'yes') && ($wpmailup['mobileShow'] == 'yes')): ?>
			if(jQ.trim(sub_phone) == "")
			{
				jQ('#show-response').html('<?php _e('Invalid phone number.'); ?>');
				viewInfoIcon('info');
				return false;
			}
			<?php endif; ?>
			
			<?php if(($wpmailup['extfield1Show'] == 'yes') && ($wpmailup['extfield1Required'] == 'yes')): ?>
			if(jQ.trim(sub_ext1) == '')
			{
				jQ('#show-response').html('<?php _e($wpmailup['extfield1DisplayedName'].' required!'); ?>');
				viewInfoIcon('info');
				return false;
			}
			<?php endif; ?>
			
			<?php if(($wpmailup['extfield2Show'] == 'yes') && ($wpmailup['extfield2Required'] == 'yes')): ?>
			if(jQ.trim(sub_ext2) == '')
			{
				jQ('#show-response').html('<?php _e($wpmailup['extfield2DisplayedName'].' required!'); ?>');
				viewInfoIcon('info');
				return false;
			}
			<?php endif; ?>
			
			/*
				Check terms and conditions have been checked
			*/
			var termsAccept = '';
			<?php if($wpmailup['termsConfirm'] == 'yes'): ?>
			if(jQ('#terms-confirm').is(':checked') == false)
			{
				jQ('#show-response').html('Please accept terms and conditions to proceed.');
				viewInfoIcon('info');
				return false;
			}
			else
			{
				termsAccept = jQ('#terms-confirm').val();
			}
			<?php else: ?>
			termsAccept = 'yes';
			<?php endif; ?>
			
			
			var form_values = {
				"Email":sub_email,
				"List":listId,
				"sms":sub_phone,
				"Group":groupId,
				"Confirm":confirmReq,
				"csvFldNames":csvFldNames,
				"csvFldValues":csvFldValues,
				"retCode":"1",
				"token":token,
				"subsUrl":subUrl,
				"termsAccept":termsAccept
			}
			
			jQ('#loading-img').css('visibility', 'visible');
			viewInfoIcon('loading');
			jQ('#show-response').html('<?php _e('Sending request...'); ?>');
			jQ.post('<?php echo get_bloginfo('wpurl').'/wp-content/plugins/wp-mailup/subscribe.php'; ?>', form_values, function(returned_data){
				switch(Number(returned_data))
				{
					case 0:
						jQ('#show-response').html('<?php echo $wpmailup['successMessage']; ?>');
						break;
					case 1:
						jQ('#show-response').html('<?php echo $wpmailup['genericError']; ?>');
						break;
					case 2:
						jQ('#show-response').html('<?php echo $wpmailup['invalidAddress']; ?>');
						break;
					case 3:
						jQ('#show-response').html('<?php echo $wpmailup['alreadyPresent']; ?>');
						break;
					case 10:
						jQ('#show-response').html('<?php _e('Please accept terms and conditions to proceed.'); ?>');
						break;
					default:
						break;
				}
				viewInfoIcon('info');
			});
			return false;
		});
	});
	//-->
</script>
 <div class="cvt-accordion">
				 <div class="accordion-section">			      
					<?php 
					 foreach($edd_order_statuses as $ks => $vs)
					 {
						?>		
						<a class="cvt-accordion-body-title" href="javascript:void(0)" data-href="#accordion_<?php echo $ks; ?>"><input type="checkbox" name="Websms_edd_general[edd_admin_notification_<?php echo $vs; ?>]" id="Websms_edd_general[edd_admin_notification_<?php echo $vs; ?>]" class="notify_box" <?php echo ((websmslk_get_option( 'edd_admin_notification_'.$vs, 'Websms_edd_general', 'on')=='on')?"checked='checked'":''); ?>/><label><?php _e('when Order is '.ucwords(str_replace('-', ' ', $vs )), WebsmsConstants::TEXT_DOMAIN ) ?></label>
						<span class="expand_btn"></span>
						</a>		 
						<div id="accordion_<?php echo $ks; ?>" class="cvt-accordion-body-content">
							<table class="form-table">
								<tr valign="top">
								<td><div class="Websms_tokens"><?php echo WebsmsEdd::getEDDVariables(); ?></div>
								<textarea name="Websms_edd_message[edd_admin_sms_body_<?php echo $vs; ?>]" id="Websms_message[admin_sms_body_<?php echo $vs; ?>]" <?php echo((websmslk_get_option( 'edd_admin_notification_'.$vs, 'Websms_edd_general', 'on')=='on')?'' : "readonly='readonly'"); ?>><?php 
						  echo websmslk_get_option('edd_admin_sms_body_'.$vs, 'Websms_edd_message', defined('WebsmsMessages::DEFAULT_EDD_ADMIN_SMS_'.str_replace('-', '_', strtoupper($vs))) ? constant('WebsmsMessages::DEFAULT_EDD_ADMIN_SMS_'.str_replace('-', '_', strtoupper($vs))) : WebsmsMessages::DEFAULT_EDD_ADMIN_SMS_STATUS_CHANGED); 
								
								?></textarea>
								</td>
								</tr>
							</table>
						</div>
						 <?php
					 }
					 ?>	
				</div>
		   </div>
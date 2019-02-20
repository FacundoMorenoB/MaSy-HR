<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Community Auth - Recover Form View
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2018, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */
?>
<div class="card text-white text-center bg-success w-75" style="max-width: 50rem; margin: auto; margin-top: 10px;">
<div class="card-header">Account Recovery</div>
<div class="card-body">

<?php
if( isset( $disabled ) )
{
	echo '
		<div>
			<p>
				Account Recovery is Disabled.
			</p>
			<p>
				If you have exceeded the maximum login attempts, or exceeded
				the allowed number of password recovery attempts, account recovery 
				will be disabled for a short period of time. 
				Please wait ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' 
				minutes, or contact us if you require assistance gaining access to your account.
			</p>
		</div>
	';
}
else if( isset( $banned ) )
{
	echo '
		<div>
			<p>
				Account Locked.
			</p>
			<p>
				You have attempted to use the password recovery system using 
				an email address that belongs to an account that has been 
				purposely denied access to the authenticated areas of this website. 
				If you feel this is an error, you may contact us  
				to make an inquiry regarding the status of the account.
			</p>
		</div>
	';
}
else if( isset( $confirmation ) )
{
	echo '
		<div>
			<p>
				Congratulations, you have created an account recovery link.
			</p>
			<p>
				<b>Please note</b>: The account recovery link would normally be placed in an email, 
				and you would not see it here on the screen. This is to limit the code in the 
				Examples controller, and keep your focus on learning Community Auth, but give you 
				an idea of how to implement account recovery. <b>When you do end up writing code to send 
				the recovery link to an email address, you will want to delete it from this view, 
				delete these instructions, and instead have a simple message similar to the following</b>:
			</p>
			<p>
				"We have sent you an email with instructions on how 
				to recover your account."
			</p>
			<p>
				This is the account recovery link:
			</p>
			<p>' . $special_link . '</p>
		</div>
	';
}
else if( isset( $no_match ) )
{
	echo '
		<div>
			<p class="feedback_header">
				Supplied email did not match any record.
			</p>
		</div>
	';

	$show_form = 1;
}
else
{
	echo '
	<div>
		<p>
			If you\'ve forgotten your password and/or username, 
			enter the email address used for your account, 
			and we will send you an e-mail 
			with instructions on how to access your account.
		</p>
	</div>
		
	</div>
	';

	$show_form = 1;
}
if( isset( $show_form ) )
{
	echo '<div class="login-clean" style="background-color: rgb(255,255,255);">';
	?>

		 <?php echo form_open(); ?>
			<div>
				<div class="illustration"><i class="icon ion-lock-combination" style="color: rgb(241,175,6);"></i></div>
				<fieldset>
					<legend>Enter your account's email address:</legend>
					<div class="form-group">

						<?php
							// EMAIL ADDRESS *************************************************
							$input_data = [
								'name'		=> 'email',
								'id'		=> 'email',
								'class'		=> 'form_input form-control',
								'placeholder'=>"Email",
								'maxlength' => 255
							];
							echo form_input($input_data);
						?>

					</div>
				</fieldset>
				<div>
					<div>

						<?php
							// SUBMIT BUTTON **************************************************************
							$input_data = [
								'name'  => 'submit',
								'id'    => 'submit_button',
								'value' => 'Send Email',
								'class'		=> 'btn btn-primary btn-block'
							];
							echo form_submit($input_data);
						?>

					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
</div>
	<?php
}
/* End of file recover_form.php */
/* Location: /community_auth/views/examples/recover_form.php */
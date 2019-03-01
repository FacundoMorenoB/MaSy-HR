<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Community Auth - Login Form View
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2018, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

if( ! isset( $optional_login ) )
{
	echo '<div class="login-clean" style="background-color: rgb(255,255,255);">';
}

	echo form_open( $login_url, ['class' => 'std-form', 'style' => 'background-color: rgb(255,255,255);'] ); 
?>

		<h2 class="sr-only">Login Form</h2>
		<div class="illustration"><img src="<?=base_url()?>/img/masyhr_Logo.png" alt=""></div>
		
		<div class="form-group">
		<input type="text" name="login_string" id="login_string" class="form_input form-control" autocomplete="off" maxlength="255" placeholder="Usuario o Email" />
		</div>

		<div class="form-group">
		<input type="password" name="login_pass" id="login_pass" class="form_input password form-control" <?php 
			if( config_item('max_chars_for_password') > 0 )
				echo 'maxlength="' . config_item('max_chars_for_password') . '"'; 
		?> placeholder="Password" autocomplete="off" readonly="readonly" onfocus="this.removeAttribute('readonly');" />
		</div>


		<p>
			<?php
				$link_protocol = USE_SSL ? 'https' : NULL;
			?>
			<a href="<?php echo site_url('welcome/recover', $link_protocol); ?>" class="forgot">
				Can't access your account?
			</a>
		</p>

		<div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(241,175,6);" value="Login" id="submit_button">Log In</button></div>


<script src="<?=base_url()?>js/jquery.min.js"></script>
<script src="<?=base_url()?>/js/bootstrap.min.js"></script>
<?php
	if( ! isset( $on_hold_message ) )
{
	if( isset( $login_error_mesg ) )
	{
		echo '
			<div>
				<p>
					Login Error #' . $this->authentication->login_errors_count . '/' . config_item('max_allowed_attempts') . ': Invalid Username, Email Address, or Password.
				</p>
				<p>
					Username, email address and password are all case sensitive.
				</p>
			</div>
		';
	}

	if( $this->input->get(AUTH_LOGOUT_PARAM) )
	{
		echo '
			<div>
				<p>
					You have successfully logged out.
				</p>
			</div>
		';
	}

	}
	else
	{
		// EXCESSIVE LOGIN ATTEMPTS ERROR MESSAGE
		echo '
			<div>
				<p>
					Excessive Login Attempts
				</p>
				<p>
					You have exceeded the maximum number of failed login<br />
					attempts that this website will allow.
				<p>
				<p>
					Your access to login and account recovery has been blocked for ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes.
				</p>
				<p>
					Please use the <a href="/welcome/recover">Account Recovery</a> after ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes has passed,<br />
					or contact us if you require assistance gaining access to your account.
				</p>
			</div>
		';
	}
?>
</form>
</div>
<?php
/*End of file login_form.php */
/*Location: /community_auth/views/welcome/login_form.php */ 
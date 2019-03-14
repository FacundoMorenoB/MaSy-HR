<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MaSy-HR Login</title>
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>css/Login-Form-Dark.css">
    <?php
        // Add any javascripts
        if( isset( $javascripts ) )
        {
            foreach( $javascripts as $js )
            {
                echo '<script src="' . $js . '"></script>' . "\n";
            }
        }

        if( isset( $final_head ) )
        {
            echo $final_head;
        }
    ?>
</head>
<body>
    <div class="login-dark">
        
        <?php
        echo form_open( $login_url); 
        ?>
            <div class="illustration"><img src="<?=base_url()?>img/masyhr_Logo.png"></div>
            <div class="form-group"><input class="form-control" type="text" name="login_string" id="login_string" placeholder="Usuario o Correo" maxlength="255"></div>
            <div class="form-group"><input class="form-control" type="password" name="login_pass" id="login_pass" placeholder="Password" <?php 
                if( config_item('max_chars_for_password') > 0 )
                    echo 'maxlength="' . config_item('max_chars_for_password') . '"'; 
            ?>>
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" id="submit_button" name="submit_button">Iniciar sesi&oacute;n</button></div><a href="<?=base_url()?>masy_login_controller/recover" class="forgot">No puedo acceder a mi cuenta!</a>
            <?php
                if( ! isset( $on_hold_message ) )
                {
                    if( isset( $login_error_mesg ) )
                    {
                        echo '
                            <div>
                                <p>
                                    Error al iniciar session' . $this->authentication->login_errors_count . '/' . config_item('max_allowed_attempts') . ': Usuario, Correo o Password incorrectos.
                                </p>
                                <p>
                                    Password es sensible a mayusculas y minusculas.
                                </p>
                            </div>
                        ';
                    }

                    if( $this->input->get(AUTH_LOGOUT_PARAM) )
                    {
                        echo '
                            <div>
                                <p>
                                    Has cerrado sesi&oacute;n de forma correcta.
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
                                Intentos excesivos de inicio de sesi&oacute;n
                            </p>
                            <p>
                                You have exceeded the maximum number of failed login<br />
                                attempts that this website will allow.
                            <p>
                            <p>
                                Your access to login and account recovery has been blocked for ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes.
                            </p>
                            <p>
                                Please use the <a href="/examples/recover">Account Recovery</a> after ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes has passed,<br />
                                or contact us if you require assistance gaining access to your account.
                            </p>
                        </div>
                    ';
                }
            ?>
        </form>
    </div>
    <script src="<?=base_url()?>js/jquery.min.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
</body>
</html>
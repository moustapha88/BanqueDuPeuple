<!DOCTYPE html>
<html lang="en">
<head>
    <title>Banque du Peuple</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/css/connexion/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/connexion/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/connexion/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/connexion/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/connexion/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/connexion/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/connexion/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/connexion/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/connexion/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/connexion/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/connexion/css/main.css">
    <!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="userController">
					<span class="login100-form-title p-b-43">
						Connexion
					</span>

                <?php
                    if(isset($_GET['connexion']) && $_GET['connexion'] == 0)
                    {
                        echo '<p class="echecConnexion">LOGIN OU MOT DE PASSE INCORRECT...</p>';
                    }
                    ?>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="login">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Login</span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="mdp">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Mot de Passe</span>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="connexion">
                        Se connecter
                    </button>
                </div>

            </form>

            <div class="login100-more" style="background-image: url('assets/css/connexion/images/banque.jpg');">
            </div>
        </div>
    </div>
</div>





<!--===============================================================================================-->
<script src="assets/css/connexion/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets/css/connexion/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="assets/css/connexion/vendor/bootstrap/js/popper.js"></script>
<script src="assets/css/connexion/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets/css/connexion/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="assets/css/connexion/vendor/daterangepicker/moment.min.js"></script>
<script src="assets/css/connexion/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="assets/css/connexion/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="assets/css/connexion/js/main.js"></script>

</body>
</html>

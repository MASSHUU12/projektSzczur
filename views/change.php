<?php 
    require 'inc/header.php';
    require 'inc/notauthorized.php';
    $object = new Login;
    $result = $object->showUser($_SESSION['email']);

    if (!empty($result[0]['addressUsers'])) {       
        $seperate = explode(', ', $result[0]['addressUsers']);
        $city = reset($seperate);
        $zip = end($seperate);
    }
    else {
        $city = '';
        $zip = '';
    }
        $email = $result[0]['emailUsers'];
        $object = new Login();
        $object->updateUser($email);
?>

    <main>
        <div class="main-container">
            <div class="container-login-whole">
            <div class="container-login-left">
                <div class="container-login-left-inner">
                <h1>Zmień dane</h1>
                <form method="POST" id="form">
                    <div class="container-login">
                        <div class="container-login-element">
                            <label for="username">Nazwa konta</label>
                            <input type="text" id="username" minlength="3" maxlength="10" name="username" value="<?php echo $result[0]['usernameUsers']; ?>">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>error</small>
                        </div>
                        <div class="container-login-element">
                            <label for="number">Numer telefonu</label>
                            <input type="number" id="number" minlength="9" maxlength="9" name="number" value="<?php echo $result[0]['numberUsers']; ?>">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>error</small>
                        </div>
                        <div class="container-login-element">
                            <label for="city">Miasto</label>
                            <input type="text" id="city" minlength="2" maxlength="30" name="city" value="<?php echo $city ?>">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>error</small>
                        </div>
                        <div class="container-login-element">
                            <label for="region">kod pocztowy</label>
                            <input type="text" name="zip" minlength="6" maxlength="6" id="zip" value="<?php echo $zip ?>">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>error</small>
                        </div>
                        <input type="submit" name="change-submit" value="Zaakceptuj zmiany">
                    </div>
                </form>
                <h3><?php echo Login::$message;?></h3>
            </div>
            </div>
            <div class="container-login-right">
                <h2>Ustaw swoje dane</h2>
                <h4>Twój numer oraz adres są</h4>
                <h4>widoczne dla innych</h4>
                <img src="app/public/img/card1.png" id="change-logo">
            </div>
            </div>
        </div>
    </main>
    <script src="/app/public/js/changeValidation.js" defer></script>
<?php require 'inc/footer.php'; ?>
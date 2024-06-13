
<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'flink');
if (isset($_POST['send'])) {
    $nom = $_POST['nom'];
    $password = $_POST['password'];
    $sql = "SELECT id,password FROM client WHERE nom='$nom'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) == 0) {
        echo "You don't have an account.";
    } else {
        $row = mysqli_fetch_assoc($result);
        if ($row['password'] === $password) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['password'] =$row['password'];
            header('location:index.html');
            exit;
        } else {
            echo" <p class='msgeror' style='font-weight: bold;'>mot passe ou nom sont incorect</p>";
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">
    
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="stphpinde.css">
        <title>Responsive Login Form Sign In Sign Up</title>
    </head>
    <body>
        <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img class="logoimg" src="images/banner-02.jpg"  alt="">
                </div>

                <div class="login__forms">
                    <section id="#s1">
                    <form action="index.php"  method="post"  class="login__registre" id="login-in">
                        <h1 class="login__title">Se connecter</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Enter votre nom" class="login__input" name="nom">
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Enter votre mot passe" class="login__input" name="password">
                        </div>

                        <a href="" class="login__forgot">Mot de passe oublié?</a>

                        <input  type="submit" class="login__button" name="send" value="Se connecter">

                        <div>
                            <span class="login__account">Je n'ai pas de compte ?</span>
                            <a href="inscription.php" class="login__forgot"> S'inscrire</a>
                        </div>
                    </form>
                        </div>
                    </section>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php 
$connection = mysqli_connect('localhost' , 'root' , '' , 'flink') ; 
if(isset($_POST['send'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $country = $_POST['country'];
    
    $sql = "INSERT INTO client (nom, prenom, email, password, age, country) VALUES ('$nom', '$prenom', '$email', '$password', '$age', '$country')";
mysqli_query($connection , $sql) ; 
}
mysqli_close($connection);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <title>Registration Form</title>
</head>
<body>


    

    <table>
        <tr>
            <th>
                
    <h2>Registration Form</h2>
                <img src="images/img-flink.png" alt="">

            </th>
            <th>

                <div class="donnerusrinsc">
                    <form action="inscription.php" method="post">
                        
                        <label for="nom">Nom:</label>
                        <input type="text" id="nom" name="nom" required><br><br>
                
                        <label for="prenom">Prénom:</label>
                        <input type="text" id="prenom" name="prenom" required><br><br>
                
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required><br><br>
                
                        <label for="password">Mot de passe:</label>
                        <input type="password" id="password" name="password" required><br><br>
                
                        <label for="age">Âge:</label>
                        <input type="number" id="age" name="age" required><br><br>
                
                        <label for="country">Pays:</label>
                        <input type="text" id="country" name="country" required><br><br>
                
                        <input type="submit" value="S'inscrire" name="send">
                        <a href="index.php" class="seconect">Se connecter</a>
                    </form>
            </th>
        </tr>
    </table>
 
</div>
</body>
</html>





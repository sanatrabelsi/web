<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css">
    <title>Document</title>
</head>
<style>
    input[text=radio]{
        align-items: left;
    }
    
    .error {
        margin-top: -75px;
        margin-left: 990px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 20px;
        color:black ;
    } 
</style>
<body>
    
    <div id="formulaire">
        <form method="post" > 
            <br>
            <label class="text"> Nom </label>
            <br>
            <input type="text" name="nom" style="width:400px;height: 30px;" placeholder="Entrez votre nom">
            <br>
            <br>
            <label class="text"> Prénom </label>
            <br>
            <input type="text" name="prenom" style="width:400px;height: 30px;" placeholder="Entrez votre prénom">
            <br>
            <br>
            <label class="text"> Date de naissance </label>
            <br>
            <input type="date" name="ddn" style="width:404px;height: 35px;">
            <br>
            <br>
            <label class="text"> Numéro de téléphone </label>
            <br>
            <input type="numero" name="telephone" style="width:400px;height: 30px;" placeholder="Entrez votre numéro de téléphone">
            <br>
            <br>
            <label class="text"> Adresse mail </label>
            <br>
            <input type="email" name="email" style="width:400px;height: 30px;" placeholder="Entrez votre adresse mail">
            <br>
            <br>
            <label class="text"> Mot de passe </label>
                <br>
                <input type="password" name="mdp" style="width:400px;height: 30px;" placeholder="Entrez votre mot de passe">
                <br>
            <br>
            <label class="text"> Confirmer votre mot de passe </label>
                <br>
                <input type="password" name="mdp1" style="width:400px;height: 30px;" placeholder="Entrez votre mot de passe">
            <br><br>
            <br>
            <div class = "inp">
                <input type="submit" name="submit" value="S'inscrire" style="font-size: 25px;color: rgb(17, 52, 89);">
                <input type="reset" value="Réinitialiser" style="font-size: 25px;color: rgb(17, 52, 89);">
            </div>
    </form>
</div>
</body>
</html>
<?php
    
$host = "sql112.epizy.com";
$userName = "epiz_34266979";
$password = "rUXBkvI7huJZq";
$dbName = "epiz_34266979_clients";
$erreur="Veuillez remplir tous les champs";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if (isset($_POST['submit'])) {
    // Check if any fields are empty
    if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['ddn']) || empty($_POST['telephone']) || empty($_POST['email']) || empty($_POST['mdp']) || empty($_POST['mdp1'])) {
        // Fields are empty, display an error message
        echo "<div class='error'>$erreur</div>";
    } 
    else {
        // Fields are not empty, validate the user input
        $nom = $conn->real_escape_string($_POST['nom']);
        $prenom = $conn->real_escape_string($_POST['prenom']);
        $ddn = date('Y-m-d', strtotime($_POST['ddn'])); // Validate date input
        $telephone = $_POST['telephone'];
        if (!is_numeric($telephone)) {
            // Telephone number is not numeric, display an error message
            echo "<div class='error'>Le numero de telephone doit etre numerique</div>";
            exit();
        }
        $email = $_POST['email'];
        $mdp = $conn->real_escape_string($_POST['mdp']);
        $mdp1 = $conn->real_escape_string($_POST['mdp1']);

        if ($mdp != $mdp1) {
            // Passwords do not match, display an error message
            echo "<div class='error'>Vérifiez que vous avez réecrit le meme mot de passe</div>";
            exit();
        }

        // Check if user credentials exist in the database
        $sql = "SELECT * FROM client WHERE email = '$email' AND mdp = '$mdp'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Les identifiants de l'utilisateur existent déjà dans la base de données
            echo "<div class='error'>Adresse mail ou mot de passe déjà utilisé</div>";
        } 
         else {
            // User credentials do not exist in the database, add new user
            $sql = "INSERT INTO client (email,mdp,nom,prenom,ddn,telephone) 
                    VALUES ('$email', '$mdp','$nom', '$prenom', '$ddn', '$telephone')";
            if ($conn->query($sql) === TRUE) {
                // New user added successfully, redirect to secure page
                /* header("Location: offres.php");
                exit(); */
                header("location:success.php");
                
                
            } else {
                // Error adding new user
                echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
            }
        }
    }
}


?>

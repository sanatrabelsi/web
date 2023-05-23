<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="main.css">
        <title> Page d'acceuil </title>
    </head>
    <body>
    
<div class ="navbar">

<div>

    <span style="font-size: 35px; color:rgb(8, 182, 78)">Ensi</span><span style="font-size: 35px; color:rgb(208, 124, 14);">Travel</span>

    &nbsp;

    <img src="avion.png" height="35px" width="45px">

</div>

<div>

    <img src="mail1.png" height="30px" width="30px" >

    <span> &nbsp; Ensi_Travel@gmail.com</span>

</div>

<div>

    <img src="home1.png" height="30px" width="30px">

    <span>&nbsp; <a href="agence.php"> Nos Agences</a></span>

</div>

<div>

    <img src="contact.png" height="32px" width="35px">
    <a href="contact.php">Contactez-nous</a>

    

</div>

<div>

    <img src="monnaie.png" height="30px" width="30px">

    &nbsp;
    <form method="post">
    <select id="currency" name="currency">
        <option value="TND">TND</option>
        <option value="EUR">EUR</option>
        <option value="DOLL">DOLL</option>
    </select>
    
    </form>


    <!-- <select id="currency">

        <option value="TND">TND</option>

        <option value="EUR">EUR</option>

        <option value="DOLL">DOLL</option>

    </select> -->

</div>

<div>
<a href="main.php"><button class="logout" style="height:35px">Se déconnecter</button></a>

</div>

</div>
        <div class="section-left">
            <h1>EnsiTravel</h1>
            <p>Votre 1<sup>ére</sup> agence de voyage en ligne<br>Réservez votre séjour et profitez de nos offres imbattables</p>
            <p>consultez nos comptes sur les réseaux sociaux:</p>
            <div class="div1">
            <div class="photo2"><img src="insta.png" width="50px" height="50px"></div>
            <div class="photo2"><img src="face.png" width="48px" height="50px"></div>
            <div class="photo2"><img src="twit.png" width="50px" height="50px"></div>
            <div class="text"><h4>Ensi_travel</h4></div>
            <div class="text1"><h4>EnsiTravel tunisie</h4></div>
            <div class="text1"><h4>EnsiTravel</h4></div>
            </div>
        </div>
        <form method="post" class="form">
            <h2>Connectez-vous</h2> <br>
            <input class="in" type="email" name="email" placeholder="adresse mail">
            <input class="in" type="password" name="mdp" placeholder="mot de passe">
            <input type="submit" name="submit" value="Se connecter" class="btn">
            <p>Vous n'avez pas de compte ?</p><br>
            <a href="formulaire.php"><h3>Inscrivez-vous</h3></a>
        </form>
    </body>
    
    <?php
    
$host = "sql112.epizy.com";
$userName = "epiz_34266979";
$password = "rUXBkvI7huJZq";
$dbName = "epiz_34266979_clients";
$selected_currency='';
$reussite="Connexion réussite";
$erreur="Entrez vos coordonnées s'il vous plait";
$coord="Adresse email ou mot de passe incorrect.";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    // Vérifier si les champs sont vides
    if (empty($_POST['email']) || empty($_POST['mdp'])) {
        // Les champs sont vides, afficher un message d'erreur
        echo "<div class='error'>$erreur</div>";
    } else {
        // Les champs sont remplis, vérifier si les coordonnées saisies existent dans la base de données
        $email = $conn->real_escape_string($_POST['email']);
        $mdp = $conn->real_escape_string($_POST['mdp']);

        $sql = "SELECT * FROM client WHERE email = '".$email."' AND mdp = '".$mdp."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Les coordonnées existent dans la base de données, l'utilisateur est authentifié
            // Rediriger l'utilisateur vers une page sécurisée
            header("Location: offres.php");
           
            exit();
        } else {
            // Les coordonnées n'existent pas dans la base de données, afficher un message d'erreur
            echo"<div class='error'>$coord</div>";
        }
    }
}
?> 
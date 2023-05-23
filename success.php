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
    <style>
    .error {
        margin-top: -180px;
        margin-left: 1002px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 20px;
        color:black ;
    }
    .success {
    
    margin-top: 210px;
    margin-left: 500px;
    width: 600px;
    height: 180px;
    font-size: 30px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    box-shadow: rgba(117, 83, 181, 0.35) 0px 5px 15px;
    border: solid 2px transparent;
    border-radius: 6px;
    background-color: #d1dee2d0;
    
    }
    .submission{
        border: none;
        width: 180px;
        height: 42px;
        background-color: orangered;
        border-radius: 6px;
        color: white;
        font-size: 22px;
        margin-top: 10px;
        margin-left: 175px;

    }
    .logout{
        width: 120px;

    

    border-radius: 5px;

    background-color: rgb(49, 49, 49);

    color: aliceblue;
    }
    </style> 
        <div class ="navbar">

<a href="main.php">
<div>

<span style="font-size: 35px; color:rgb(8, 182, 78)">Ensi</span><span style="font-size: 35px; color:rgb(208, 124, 14);">Travel</span>

&nbsp;

<img src="avion.png" height="35px" width="45px">

</div>
</a>

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

    <a href="main.php"><button class="logout" style="height: 35px;">Se déconnecter</button></a>
</div>

</div>
<div class="success">
    Votre compte a été crée avec succés!
    vous pouvez maintenant etre notifiés lorsqu'on a de nouvelles offres <br>
    <a href="offres.php"><button class="submission">Voir les offres</button></a>
</div>
</body>
    
</html>
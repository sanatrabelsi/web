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
    .error{
        margin-left: 545px;
        margin-top: -35px;
        font-size: 18px;
    }
    
    .info {
    padding: 10px;
    margin-top: 120px;
    margin-left: 500px;
    width: 600px;
    height: 470px;
    font-size: 26px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    box-shadow: rgba(117, 83, 181, 0.35) 0px 5px 15px;
    border: solid 2px transparent;
    border-radius: 6px;
    background-color: #d1dee2d0;
    
    }
    .inp{
        margin-left: 5px;
        border-radius: 6px;
        box-shadow: rgba(117, 83, 181, 0.35) 0px 5px 15px;
        background-color: transparent;
        height: 45px;
        width: 350px;
        padding: 10px;
        font-size: 18px;
    }
    .input{
        border: none;
        width: 180px;
        height: 42px;
        margin-left: 5px;
        border-radius: 6px;
        color: white;
        background-color: orangered;
        font-size: 25px;

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
<div class="info">
    <i class="fa fa-phone" style="font-size:22px;color:rgb(0, 1, 0)"></i>
            &nbsp; 71 256 984 <br><br>
    <i class="fa fa-instagram" style="font-size:22px;color:rgb(255, 0, 179)"></i>
            &nbsp; Ensi_travel <br><br>
    <i class="fa fa-twitter-square" style="font-size:22px;color:rgb(9, 2, 92)"></i>
            &nbsp; EnsiTravel <br><br>
    <i class="fa fa-facebook-f" style="font-size:22px;color:rgb(0, 136, 255)"></i>
            &nbsp; EnsiTravel tunisie <br><br>
            <form method="post">
            <label for="message">Laissez nous un message:</label><br><br>
            <input type="text" name="message" id="message" class="inp" placeholder="laissez votre message"> <br><br>
            <input type="submit" id="submit" name="submit" value="Envoyer" class="input">
            </form>
            
</div>
</body>
    
</html>
<?php
if(isset($_POST['submit'])) {
    if(!empty($_POST['message'])) {
        echo"<div class='error'>Merci de nous avoir contacté</div>";
} else {
    echo"<div class='error'>Veuillez laisser un message</div>";
}
    }
    
?>

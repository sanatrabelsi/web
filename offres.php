<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="offres.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> Nos offres </title>
    </head>
    <body>
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
        
        
           
        
        </div>
        
        <div>
        <a href="main.php"><button class="logout" style="height:35px">Se déconnecter</button></a>
        
        </div>
        </div>
        
        <div class="slideshow-container">

          <div class="mySlides">
            
            <img src="1 (1).jpg" style="width:100%">
            
          </div>
          
          <div class="mySlides">
            
            <img src="1 (2).jpg" style="width:100%">
            
          </div>
          
          <div class="mySlides">
            
            <img src="1 (3).jpg" style="width:100%">
            
          </div>
          <div class="mySlides">
            
            <img src="1 (4).jpg" style="width:100%">
            
          </div>
          <div class="mySlides">
            
            <img src="1 (5).jpg" style="width:100%">
            
          </div>
          
        </div>
          
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div>
          
          
          
        
          <div class="text">Passez l'été en Tunisie</div>
          <div class="div1">
            <img src="kuriat.jpg" width="100%" height="200px" style="border-radius: 5px;">
            <h4>Iberostar Selection Kuriat Palace</h4>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span> 
            <p>Monastir - Tunisie
              <br>du 25/05/2023 jusqu'au 01/06/2023
            </p>
            <img src="rq.png" width="25px" height="25px">
            <h6>Enfants -12 ans gratuits/Pension complète</h6>
            <h5>2500 TND <br> par personne</h5>
            <button class="button" id="popup-button" style="margin-top: 62px;">Réserver</button>
	          <div id="popup-container">
              <div class="popup-content">
                <h2>Formulaire de réservation</h2>
                <form id="resrvation-form" method="post">
                  <label for="nom" style="font-size: 18px;">Nom Complet:</label><br>
                  <input type="text" id="nom" name="nom" placeholder="nom" style="height:30px;width:200px;font-size:15px"><br><br>
                  <label for="email" style="font-size: 18px;">Email:</label><br>
                  <input type="email" id="email" name="email" placeholder="email" style="height:30px;width:200px;font-size:15px"><br><br>
                  <label for="telephone" style="font-size: 18px;">Carte bancaire:</label><br>
                  <input type="tel" id="numero_de_la_carte" name="numero_de_la_carte" placeholder="numero de la carte" style="height:30px;width:200px;font-size:15px"><br><br>
                  <input type="password" id="PIN" name="PIN" placeholder="PIN" style="height:30px;width:200px;font-size:15px"><br><br>
                  <label style="font-size: 18px;">Nombre de personnes:</label><br><br>
                  <input type="number" id="nb-per" name="nb-per" placeholder="donner un nombre" style="height:30px;width:200px;font-size:15px"><br><br>
                  <table>
                    <tr>
                      <td style="font-size: 18px;">Adultes:</td>
                      <td style="font-size: 18px;">Enfants:</td>
                    </tr>
                    <tr>
                      <td>
                        <select>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                        </select>
                      </td>
                      <td>
                      <select>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                        </select>
                      </td>
                    </tr>
                  </table>
                  <label style="font-size: 18px;">Date de résérvation:</label><br>
                  <input type="date" id="date_r" name="date_r" style="height:30px;width:200px;font-size:15px"><br><br>
                  
                  <input onclick="valider()" type="submit" name="submit" id="close-button" class="reserver-button" value="Valider">
                  <div id="error-messages"></div>
                </form>
              </div>
          </div>
          </div>
          <div class="div2">
            <img src="mov.jpg" width="100%" height="200px" style="border-radius: 5px;">
            <h4>Mövenpick Resort & Marine Spa</h4>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span> 
            <p>Sousse - Tunisie
              <br>du 05/06/2023 jusqu'au 12/06/2023
            </p>
            <img src="rq.png" width="25px" height="25px">
            <h6>Enfants -12 ans gratuits/Pension complète/burkini intérdit</h6>
            <h5>3200 TND <br> par personne</h5>
            <button class="button" id="popup-button2">Réserver</button>
          </div>
          <div class="div3">
            <img src="sol.jpg" width="100%" height="200px" style="border-radius: 5px;">
            <h4>Sol azur beach</h4>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span> 
            <p>Hammamet - Tunisie
              <br>du 25/05/2023 jusqu'au 01/06/2023
            </p>
            <img src="rq.png" width="25px" height="25px">
            <h6>Enfants -12 ans gratuits/Demi pension/Massage gratuit</h6>
            <h5>2100 TND <br> par personne</h5>
            <button class="button" id="popup-button3">Réserver</button>
          </div>
          <div class="text">Découvrez nos départs omra</div>
          <div class="div1">
            <img src="makkah.png" width="100%" height="200px" style="border-radius: 5px;">
            <h4>Chambre individuelle</h4>
            <p>Makkah - Arabie saoudite <br>
              du 04/05/2023 jusqu'au 18/05/2023
            </p>
            <div style="color:red; font-size:22px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Possibilté de facilité de paiement sur 8 mois</div>
            <h5>6400 TND <br> par personne</h5>
            <button class="button" id="popup-button4">Réserver</button>
          </div>
          <div class="div2">
            <img src="makkah.png" width="100%" height="200px" style="border-radius: 5px;">
            <h4>Chambre individuelle</h4>
            <p>Makkah - Arabie saoudite <br>
              du 09/05/2023 jusqu'au 23/05/2023
            </p>
            <div style="color:red; font-size:22px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Possibilté de facilité de paiement sur 8 mois</div>
            <h5>5200 TND <br> par personne</h5>
            <button class="button" id="popup-button5">Réserver</button>
          </div>
          <div class="div3">
            <img src="makkah.png" width="100%" height="200px" style="border-radius: 5px;">
            <h4>Chambre double</h4>
            <p>Makkah - Arabie saoudite <br>
              du 14/05/2023 jusqu'au 28/05/2023
            </p>
            <div style="color:red; font-size:22px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Possibilté de facilité de paiement sur 8 mois</div>
            <h5>6400 TND <br> par personne</h5>
            <button class="button" id="popup-button6">Réserver</button>
          </div>
          <div class="text">Partez en voyage cet été</div>
          <div class="div1">
            <img src="bodrum.png" width="100%" height="200px" style="border-radius: 5px;">
            <h4>Bodrum - Turquie</h4>
            <p>
              du 20/06/2023 jusqu'au 01/07/2023
            </p>
            <img src="rq.png" width="25px" height="25px">
            <h6>Billets avion aller-retour/Hebèrgement dans un hotel 4 étoiles au coeur de la zone touristique <br>Visitez une de nos agences pour avoir une idée sur le programme en détail</h6>
            <h5>3600 TND <br> par personne</h5>
            <button class="button" id="popup-button7">Réserver</button>
          </div>
          <div class="div2">
            <img src="capri.png" width="100%" height="200px" style="border-radius: 5px;">
            <h4>Capri - Italie</h4> 
            <p>
              du 25/07/2023 jusqu'au 03/08/2023
            </p>
            <img src="rq.png" width="25px" height="25px">
            <h6>Billets avion aller-retour/Hebèrgement dans un hotel 5 dans une zone trés animée <br>Visitez une de nos agences pour avoir une idée sur le programme en détail</h6></h6>
            <h5>4800 TND <br> par personne</h5>
            <button class="button" id="popup-button8">Réserver</button>
          </div>
          <div class="div3">
            <img src="ibiza.png" width="100%" height="200px" style="border-radius: 5px;">
            <h4>Ibiza - Espagne</h4>
            <p>
              du 05/05/2023 jusqu'au 13/06/2023
            </p>
            <img src="rq.png" width="25px" height="25px">
            <h6>Billets avion aller-retour/Hebèrgement dans un hotel 4 étoiles au coeur de la zone touristique <br>Visitez une de nos agences pour avoir une idée sur le programme en détail</h6></h6>
            <h5>4900 TND <br> par personne</h5>
            <button class="button" id="popup-button9">Réserver</button>
          </div>
          <footer>
            <div class="footer_content">
              <h5>Nos partenaires :</h5>
              <h5>Nos réseaux sociaux :</h5>
              <h5>Paiement sécurisé :</h5>
              <div><img src="logo-tunisair.png" width="38px" height="38px"> Tunisair</div>
              <div><i class="fa fa-instagram" style="font-size:22px;color:rgb(255, 0, 179)"></i>
                &nbsp; Ensi_travel</div>
              <img src="visa.png" width="45px" height="45px">
              <div><img src="Qatar.png" width="38px" height="38px"> Qatar airways</div>
              <div><i class="fa fa-facebook-f" style="font-size:22px;color:rgb(0, 136, 255)"></i>
                &nbsp; EnsiTravel tunisie </div>
              <img src="master.png" width="45px" height="45px">
              <div><img src="ib.png" width="38px" height="38px"> Iberostar hotels</div>
              <div><i class="fa fa-twitter-square" style="font-size:22px;color:rgb(9, 2, 92)"></i>
                &nbsp; EnsiTravel</div>
              <img src="cib.png" width="45px" height="45px">
            </div>
            
          </footer>
         
          
    </body>
    <script src="offre.js"></script>
</html> 
<?php
$host = "localhost";
$userName = "sana_t";
$password = "sana123456";
$dbName = "vacances";
$conn = new mysqli($host, $userName, $password, $dbName);
// Connect to the database

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) {
  // Get the form data
$nom = $_POST['nom'];
$date = $_POST['date_r'];
$nb = $_POST['nb-per'];

// Prepare the SQL query to insert the data into the reservations table
$sql = "INSERT INTO reservations (nom_client, date_reservation, nombre) VALUES ('$nom', '$date', '$nb')";

// Execute the SQL query and check for errors
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

// Close the database connection
mysqli_close($conn);
?>


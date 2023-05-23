var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { // Go back to the first slide
      slideIndex = 1;
    }
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
const popupButton = document.getElementById('popup-button');
const popupContainer = document.getElementById('popup-container');
const closeButton = document.getElementById('close-button');
const boutton3=document.getElementById("popup-button3");
const boutton2=document.getElementById("popup-button2");
const boutton4=document.getElementById("popup-button4");
const boutton5=document.getElementById("popup-button5");
const boutton6=document.getElementById("popup-button6");
const boutton7=document.getElementById("popup-button7");
const boutton8=document.getElementById("popup-button8");
const boutton9=document.getElementById("popup-button9");
let popup=document.getElementById("popup");
function openpopup() {
    popup.classList.add("open-popup")
}
function closepopup() {
    popup.classList.remove("open-popup")
}

popupButton.addEventListener('click', function() {
    popupContainer.style.display = 'block';
});

boutton3.addEventListener('click', function() {
    popupContainer.style.display = 'block';
});

boutton2.addEventListener('click', function() {
    popupContainer.style.display = 'block';
});
boutton4.addEventListener('click', function() {
    popupContainer.style.display = 'block';
});
boutton5.addEventListener('click', function() {
    popupContainer.style.display = 'block';
});
boutton6.addEventListener('click', function() {
    popupContainer.style.display = 'block';
});
boutton7.addEventListener('click', function() {
    popupContainer.style.display = 'block';
});
boutton8.addEventListener('click', function() {
    popupContainer.style.display = 'block';
});
boutton9.addEventListener('click', function() {
    popupContainer.style.display = 'block';
});

closeButton.addEventListener('click', function() {
    popupContainer.style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target == popupContainer) {
        popupContainer.style.display = 'none';
    }
});

function valider() {
    // Récupérer les valeurs des champs
    var nom = document.getElementById("nom").value;
    var email = document.getElementById("email").value;
    var numero_de_la_carte = document.getElementById("numero_de_la_carte").value;
    var PIN = document.getElementById("PIN").value;
    var pers=document.getElementById("nb-per").value;
    // Vérifier si les champs sont vides
    if (nom == "" || email == "" || numero_de_la_carte == "" || PIN == "" || pers=="") {
      alert("Veuillez remplir tous les champs.");
      // alert("Veuillez remplir tous les champs.");
      return false;
      
    }
  
    // Vérifier si l'adresse email est valide
    var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!email_regex.test(email)) {
      alert("Veuillez entrer une adresse email valide.");
      return false;
    }
  
    // Vérifier si le numéro de carte et le PIN sont des nombres
    if (isNaN(numero_de_la_carte) || isNaN(PIN)) {
      alert("Veuillez entrer des chiffres pour le numéro de carte et le PIN.");
      return false;
    }
  
    // Vérifier si le numéro de carte a 16 chiffres
    if (numero_de_la_carte.length != 16) {
      alert("Veuillez entrer un numéro de carte valide (16 chiffres).");
      return false;
    }
    if (PIN.length != 6) {
        alert("Veuillez entrer un code pin valide (6 chiffres).");
        return false;
      }
  
    // Si tout est ok, soumettre le formulaire
    location.href = "success_res.php";
    return true;
  }
  
  // Ajouter un événement de soumission de formulaire
  var form = document.getElementById("resrvation-form");
  form.addEventListener("submit", function(e) {
      e.preventDefault(); // Empêcher l'envoi du formulaire si la validation échoue
    
  })
// Ajouter un événement de soumission de formulaire
var form = document.getElementById("resrvation-form");
form.addEventListener("submit", function(e) {
    e.preventDefault(); // Empêcher l'envoi du formulaire si la validation échoue
});
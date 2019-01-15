
// tarif

function calcul(tarif)
{
    var adulte = parseInt(tarif.adulte.value);
    var enfant1 = parseInt(tarif.enfant1.value);
    var enfant2 = parseInt(tarif.enfant2.value);
    var enfant3 = parseInt(tarif.enfant3.value);
    
    window.document.getElementById('Prix').innerHTML = "Le total à payer est de : " 
    +((adulte * 50) + (enfant1 * 35) + (enfant2 * 40) + (enfant3 * 45))+ " €";
    
}


// google map 

function myMap() {
    var mapProp= {
        center : new google.maps.LatLng(45.5069261,6.6746882),
        zoom : 12
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

    var marker = new google.maps.Marker({
        position : plagne,
        map : map
    });
}
  

  /*  var myForm = document.getElementById('myForm');

    myForm.addEventListener('submit', function(e) {

        alert('Vous avez envoyé le formulaire !\n\nMais celui-ci a été bloqué pour que vous ne changiez pas de page.');
    
        e.preventDefault();
    
    });
*/

function hover(txtInfo)
{
    window.document.getElementById('description').innerHTML = txtInfo;
}

var liens = document.querySelectorAll('a#valider');
for (var i = 0; i < liens.length; i++){
    var lien = liens[i]
    lien.addEventListener('click', function(event){
        var reponse = window.confirm('Vous allez être rediriger')
        if (reponse === false){
            event.preventDefault();
        }
    })
}
function ValideForm_oui() {
    if(document.getElementById('btnaccepte_oui').checked === true) {document.getElementById('btmvalide').disabled = false }
    if(document.getElementById('btnaccepte_oui').checked === false) {document.getElementById('btmvalide').disabled = true }
}

function ValideForm_non() {
    if(document.getElementById('btnaccepte_non').checked === true) {document.getElementById('btmvalide').disabled = false }
    if(document.getElementById('btnaccepte_non').checked === false) {document.getElementById('btmvalide').disabled = true }

}
function check_oui(){
    if (document.getElementById("btnaccepte_non").checked === true)
    {
        document.getElementById("btnaccepte_non").checked = false
        document.getElementById("btnaccepte_oui").checked = true
    }
}
function check_non(){
    if (document.getElementById("btnaccepte_oui").checked === true)
    {
        document.getElementById("btnaccepte_oui").checked = false
        document.getElementById("btnaccepte_non").checked = true
    }
}
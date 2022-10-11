"use strict";

window.onload = actualitzaHora();

// Function for updating innerHTML
function updateHTML(element,text)
{
    document.getElementById(element).innerHTML = text;
}




function actualitzaHora(){
    // Variables and constants
    const text = new Array("Bon dia", "Bona tarda", "Bon vespre", "Bona nit");
    let date = new Date();
    let n = date.toLocaleTimeString();    
    let hour = date.getHours();
    let message = "";
    
    // Set hour and text
    updateHTML("rellotge",n);
    if (hour < 14 && hour > 7) message = text[0];
    else if (hour >= 14 && hour < 18) message = text[1];
    else if (hour >= 18 && hour < 20) message = text[2];
    else if (hour >= 20 || hour < 7) message = text[3];
    document.getElementById("missatge").innerHTML = message;
}


function amagaMostraInfo() {
    let message = document.getElementById("missatge");
    let button = document.getElementById("amaga_mostra");

    // Toggle class
    if (message.style.visibility!="hidden")
    {
        button.classList.add('buttonActive');
        button.classList.remove('laMevaClasse');
    }
    else
    {
        button.classList.remove('buttonActive');
        button.classList.add('laMevaClasse');
    }

    // Toggle visibility
    message.style.visibility = (message.style.visibility=="hidden")?"visible":"hidden";

}

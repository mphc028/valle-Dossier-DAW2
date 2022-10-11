"use strict"

let arr = new Array();

document.getElementById("labelUpdate").classList.add("cursive");
document.getElementById("btAfegeix").classList.add("white");
document.getElementById("btMostra").classList.add("white");
document.getElementById("btNeteja").classList.add("red");


function getInput()
{
    return document.getElementById("elementAAfegir").value;
}

function getMustUpdate()
{
    return document.getElementById("update").checked;
}

function setMessage(message)
{
    let mess = document.getElementById("message");
    mess.innerHTML = "<p class='vanish'> "+message+"</p>";
}

function afegeixElementAMatriu()
{
    if (getInput()!="") 
    {
        arr.push(getInput());
        setMessage("S'ha afegit l'element "+arr[arr.length-1]+" a la posició "+(arr.length-1));
        document.getElementById("elementAAfegir").value = "";
        if (getMustUpdate()) update(false);
    }
    else alert("El input està buit!");
}

function mostraElementsMatriu()
{
    if (arr.length==0) 
        alert("La matriu està buida!");
    else
        update(true);
}

function update(auto)
{
    document.getElementById("resultat").innerHTML = "";
    for (let i = 0; i < arr.length; i++) {
        if (i==arr.length-1 || auto) 
            document.getElementById("resultat").innerHTML += "<li class='appear' style='animation-delay:"+(i*(1000/arr.length))+"ms'> index: "+i+", valor: "+arr[i]+"</li>";
        else 
            document.getElementById("resultat").innerHTML += "<li> index: "+i+", valor: "+arr[i]+"</li>";
    }

}

function netejaMatriu()
{
    if (confirm("Vols netejar la matriu?"))
    {
        arr = [];
        setMessage("Matriu esborrada satisfactoriament");
        update(true);
    }
}
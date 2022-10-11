let primerNombre;
let segonNombre;



function print(text)
{
    document.getElementById("resultat").innerHTML = text;
}

function setRed(text)
{
    document.getElementById("resultat").classList.add('textred');
    document.getElementById("resultat").classList.remove('textblack');
}

function setWhite(text)
{
    document.getElementById("resultat").classList.add('textblack');
    document.getElementById("resultat").classList.remove('textred');
}

function llegueixNombres(){

    primerNombre = document.getElementById("primerNombre").value;
    segonNombre = document.getElementById("segonNombre").value;
}

function checkNum()
{
    console.log(Number(primerNombre));
    console.log(Number(segonNombre));
    console.log(isNaN(primerNombre));
    console.log(isNaN(segonNombre));
    if (isNaN(primerNombre)||isNaN(segonNombre))
    {
        setRed();
        if (isNaN(primerNombre)&&isNaN(segonNombre))
        {
            print("Ni primer ni el segón valor no son nombres");
            return false;
        }
        else
        if (isNaN(primerNombre))
        {
            print("El primer valor no es un nombre");
            return false;
        }
        else
        if (isNaN(segonNombre))
        {
            print("El segón valor no es un nombre");
            return false;
        }
    }
    else 
    {
        setWhite();
        return true;
    }
}


function suma(){
    llegueixNombres();
    if (checkNum()) print(Number(primerNombre)+Number(segonNombre));
}

function resta(){
    llegueixNombres();
    if (checkNum()) print(Number(primerNombre)-Number(segonNombre));
}

function producte(){
    llegueixNombres();
    if (checkNum()) print(Number(primerNombre)*Number(segonNombre));
}

function divisio(){
    llegueixNombres();
    if (checkNum()) 
    {
        if (segonNombre!=0) 
        {
            print(Number(primerNombre)/Number(segonNombre));
        }
        else 
        {
            setRed();
            print("No pots dividir per zero");
        }
    }
}

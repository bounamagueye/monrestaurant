//definir la largeur de la side bar a 100vw et faire un overflow hidden
function openNav(){
    document.getElementById("mySidebar").style.width="100vw";
    document.querySelector("body").style.overflow= "hidden"
}

//definir la largeur de la side bar a 100vw et faire un overflow auto

function closeNav(){
    document.getElementById("mySidebar").style.width="0";
    document.querySelector("body").style.overflow= "auto"
}
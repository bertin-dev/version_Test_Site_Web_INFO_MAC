var clignotement = function(){ 
   if (document.getElementById('slogan').style.visibility=='visible'){ 
      document.getElementById('slogan').style.visibility='hidden'; 
   } 
   else{ 
   document.getElementById('slogan').style.visibility='visible'; 
   } 
}; 

// mise en place de l appel de la fonction toutes les 0.8 secondes 
// Pour arrêter le clignotement : clearInterval(periode); 
periode = setInterval(clignotement, 800); 






//permet de changer les couleur regulierement

function texteClignotant()
{
    var element = document.getElementById('pp');
    var random = Math.round(Math.random()*5);
     
    switch (random)
    {
        case 0:
        element.style.color = "red";
        break;
         
        case 1:
        element.style.color = "green";
        break;
         
        case 2: 
        element.style.color = "blue";
        break;
         
        case 3:
        element.style.color = "yellow";
        break;
         
        case 4:
        element.style.color = "purple";
        break;
    }
}
 
window.onload = function(){ setInterval(pp, 1000); };

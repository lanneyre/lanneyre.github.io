const exemples = [
    {
        rendu: "Animation.jpg",
        code: {
            html:"DSC_0032.JPG",
            css:"DSC_0218.JPG",
            js:"DSC_0220.JPG"
        }
    },
    {
        rendu: "apprentispassages_logo_renard.png",
        code: {
            html:"Formation.jpg",
            css:"Soutien.jpg",
            js:"DSC00133.JPG"
        }
    }
]; 

let current = 0;
let exemple = exemples[current];
console.log(exemple.code.html);

let technos = ["HTML", "CSS", "JS"];
let currentTechno = 0;
let techno = technos[currentTechno];

function afficheTechnos(tech){

    document.querySelector("#container h1").innerHTML = tech;
    switch(tech){
        case "CSS" :
            document.getElementById("sourcetechno").src = "img/"+exemple.code.css; 
            break;
        case "JS" :
            document.getElementById("sourcetechno").src = "img/"+exemple.code.js; 
            break;
        default :
            document.getElementById("sourcetechno").src = "img/"+exemple.code.html;
            break;    
    }
}

(function(){
    //console.log("img/"+exemple.code.html);
    afficheTechnos(techno);
    document.getElementById("sourceexemple").src = "img/"+exemple.rendu;
    document.getElementById("otherexemple").addEventListener("click", function(e){
        e.defaultPrevented;
        current++;
        if(current >= exemples.length){
            current = 0;
        }
        exemple = exemples[current];
        afficheTechnos(techno);
        document.getElementById("sourceexemple").src = "img/"+exemple.rendu;
    });

    document.getElementById("leftimg").addEventListener("click", function(e){
        e.defaultPrevented;
        current--;
        if(current < 0){
            current = exemples.length - 1;
        }
        exemple = exemples[current];
        afficheTechnos(techno);
        document.getElementById("sourceexemple").src = "img/"+exemple.rendu;
    });

    document.getElementById("righttechno").addEventListener("click", function(e){
        e.defaultPrevented;
        currentTechno++;
        if(currentTechno >= technos.length){
            currentTechno = 0;
        }
        techno = technos[currentTechno];
        afficheTechnos(techno);
    });
})();
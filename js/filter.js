let allgames = document.getElementsByClassName("box");

let filters = document.getElementsByClassName("filter");

window.scrollTo(0,0);
setInterval(function(){
    document.getElementsByTagName("body")[0].style.overflow = "auto";

}, 1500);



for(let i = 0; i < filters.length; i++){
    filters[i].checked = true
}

let rpgfilter = document.getElementById("checkbox-website");

rpgfilter.onchange = function(){
    console.log("checked");
    if(rpgfilter.checked !== true){
        for(let i = 0; i < allgames.length; i++){
            if(allgames[i].dataset.category !== "website"){
                allgames[i].style.display = "block";
            }

        }   
    }
    else{
        for(let i = 0; i < allgames.length; i++){
            if(allgames[i].dataset.category !== "website"){
                allgames[i].style.display = "none";
            }

        }

    }
}



let actionfilter = document.getElementById("checkbox-app")

actionfilter.onchange = function(){
    if(actionfilter.checked !== true){
        for(let i = 0; i < allgames.length; i++){
            if(allgames[i].dataset.category !== "app"){
                allgames[i].style.display = "block";
            }

        }
            
    }
    else{
        for(let i = 0; i < allgames.length; i++){
            if(allgames[i].dataset.category !== "app"){
                allgames[i].style.display = "none";
            }

        }

    }
}



let adventurefilter = document.getElementById("checkbox-design");

adventurefilter.onchange = function(){
    if(adventurefilter.checked !== true){
        for(let i = 0; i < allgames.length; i++){
            if(allgames[i].dataset.category !== "design"){
                allgames[i].style.display = "block";
            }

        }  
    }
    else{
        for(let i = 0; i < allgames.length; i++){
            if(allgames[i].dataset.category !== "design"){
                allgames[i].style.display = "none";
            }

        }

    }
}
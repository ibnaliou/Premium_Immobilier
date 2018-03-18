$( document ).ready(function() {
alert("ok")
    $("#formreservation").hide() 
    $("#infobienapro").hide() 
    $("#infobiennpro").hide() 

    $("#insc").on("click", function(){
        $("#formconnexion").hide()
        $("#formreservation").show()
    })  

    $("#conne").on("click", function(){
        $("#formreservation").hide()
        $("#formconnexion").show()
    })  
//cacher info perso ancie  pro et afficher info bien 
    $("#next").on("click", function(){
        $("#infobienapro").show()
        $("#infopersoapro").hide()   
    }) 
    
    //cacher info perso ancie  proprietaire et afficher info bien 
    $("#previous").on("click", function(){
        $("#infobienapro").hide() 
        $("#infopersoapro").show()
        
    }) 

    //cacher info perso new  pro et afficher info bien 
    $("#next2").on("click", function(){
        $("#infobiennpro").show()
        $("#infopersonpro").hide()   
    }) 
    
    //cacher info perso new  proprietaire et afficher info bien 
    $("#previous2").on("click", function(){
        $("#infobiennpro").hide() 
        $("#infopersonpro").show()
        
    }) 

});

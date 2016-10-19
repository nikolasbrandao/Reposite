$(".saiba-mais").click(function(){
    if($(".infosnone").css("display") == 'none'){
        $(".infosnone").fadeIn("slow");
    }
    else{
        $(".infosnone").fadeOut("slow");
    }
});
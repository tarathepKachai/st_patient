$(document).ready(function(){

    
    $("#choice_1").click(function(){
       $("#choice_1").removeClass("disable_choice");
         $("#choice_1").addClass("enable_choice");
        $("#choice1").css({"display":"block"});
        
        $("#choice_2").removeClass("enable_choice");
        $("#choice_2").addClass("disable_choice");
        $("#choice2").css({"display":"none","background-color":"white"});
        
        
        $("#choice_3").removeClass("enable_choice");
         $("#choice_3").addClass("disable_choice");
         $("#choice3").css({"display":"none","background-color":"white"});
    });
    
    $("#choice_2").click(function(){
         $("#choice_1").removeClass("enable_choice");
         $("#choice_1").addClass("disable_choice");
        $("#choice1").css({"display":"none","background-color":"white"});
        
        $("#choice_2").removeClass("disable_choice");
        $("#choice_2").addClass("enable_choice");
        $("#choice2").css("display","block");
        
        
        $("#choice_3").removeClass("enable_choice");
         $("#choice_3").addClass("disable_choice");
         $("#choice3").css({"display":"none","background-color":"white"});
    });
    
    $("#choice_3").click(function(){
       $("#choice_1").removeClass("enable_choice");
         $("#choice_1").addClass("disable_choice");
        $("#choice1").css({"display":"none","background-color":"white"});
        
        $("#choice_2").removeClass("enable_choice");
        $("#choice_2").addClass("disable_choice");
        $("#choice2").css({"display":"none","background-color":"white"});
        
        
        $("#choice_3").removeClass("disable_choice");
         $("#choice_3").addClass("enable_choice");
         $("#choice3").css("display","block");
    });
});







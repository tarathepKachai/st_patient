$(document).ready(function () {



    $("input[name='gender']").click(function () {
        $("#gender_error").html("");
    });

    $("input[name='prefix']").click(function () {
        $("#prefix_error").html("");
    });

    $('#name, #lastname,#weight,#height,#id_card,#birthday,#datepicker2').focusout(function () {
        if (this.value !== null) {
            var id = this.id;
            $('#' + id).css({"box-shadow":"0px 0px 0px black","border-color":"black"});
        }
    });

    $("#choice_1").click(function () {
        $("#choice_1").removeClass("disable_choice");
        $("#choice_1").addClass("enable_choice");
        $("#choice1").css({"display": "block"});

        $("#choice_2").removeClass("enable_choice");
        $("#choice_2").addClass("disable_choice");
        $("#choice2").css({"display": "none", "background-color": "white"});


        $("#choice_3").removeClass("enable_choice");
        $("#choice_3").addClass("disable_choice");
        $("#choice3").css({"display": "none", "background-color": "white"});
    });

    $("#choice_2").click(function () {
        $("#choice_1").removeClass("enable_choice");
        $("#choice_1").addClass("disable_choice");
        $("#choice1").css({"display": "none", "background-color": "white"});

        $("#choice_2").removeClass("disable_choice");
        $("#choice_2").addClass("enable_choice");
        $("#choice2").css("display", "block");


        $("#choice_3").removeClass("enable_choice");
        $("#choice_3").addClass("disable_choice");
        $("#choice3").css({"display": "none", "background-color": "white"});
    });

    $("#choice_3").click(function () {
        $("#choice_1").removeClass("enable_choice");
        $("#choice_1").addClass("disable_choice");
        $("#choice1").css({"display": "none", "background-color": "white"});

        $("#choice_2").removeClass("enable_choice");
        $("#choice_2").addClass("disable_choice");
        $("#choice2").css({"display": "none", "background-color": "white"});


        $("#choice_3").removeClass("disable_choice");
        $("#choice_3").addClass("enable_choice");
        $("#choice3").css("display", "block");
    });
});

function submit() {

    if ($("#datepicker2").val() === "") {
        $("#datepicker2").attr("placeholder", "กรอกวันที่");
        $("#datepicker2").css({"box-shadow":"0px 0px 10px red","border-color":"red"});
        //$("#rec_day_error").html("กรอกวันที่");
    } else {
        //$("#rec_day_error").html("");
        $("#datepicker2").attr("placeholder", "");
        $("#datepicker2").css({"box-shadow":"0px 0px 0px black","border-color":"black"});
    }

    if (!$("input[name='prefix']").is(':checked')) {
        $("#prefix_error").html("เลือกคำนำหน้านาม");
    } else {
        $("#prefix_error").html("");
    }

    if ($("#name").val() === "") {
        //$("#name_error").html("กรอกชื่อ");
        $("#name").attr("placeholder", "กรอกชื่อ");
        $("#name").css({"box-shadow":"0px 0px 10px red","border-color":"red"});
    } else {
        //$("#name_error").html("");
        $("#name").attr("placeholder", "");
        $("#name").css({"box-shadow":"0px 0px 0px black","border-color":"black"});
    }

    if ($("#lastname").val() === "") {
        // $("#lastname_error").html("กรอกนามสกุล");
        $("#lastname").attr("placeholder", "กรอกนามสกุล");
        $("#lastname").css({"box-shadow":"0px 0px 10px red","border-color":"red"});
        
    } else {
        //$("#lastname_error").html("");
        $("#lastname").attr("placeholder", "");
        $("#lastname").css({"box-shadow":"0px 0px 0px black","border-color":"black"});
        
       
    }

    if (!$("input[name='gender']").is(':checked')) {
        $("#gender_error").html("เลือกเพศ");
    } else {
        $("#gender_error").html("");
    }


    if ($("#birthday").val() === "") {
        //$("#birthday_error").html("กรอกวันที่");
        $("#birthday").attr("placeholder", "กรอกวันที่");
        $("#birthday").css({"box-shadow":"0px 0px 10px red","border-color":"red"});
    } else {
        // $("#birthday_error").html("");
        $("#birthday").attr("placeholder", "");
        $("#birthday").css({"box-shadow":"0px 0px 0px black","border-color":"black"});
    }

    if ($("#id_card").val() === "") {
        // $("#id_card_error").html("กรอกเลขบัตรประชาชน");
        $("#id_card").attr("placeholder", "กรอกเลขบัตรประชาชน");
        $("#id_card").css({"box-shadow":"0px 0px 10px red","border-color":"red"});
    } else if ($("#id_card").val().length!== 13) {
        $("#id_card_error").html("กรอกเลขบัตรประชาชน13หลัก");

        $("#id_card").css({"box-shadow":"0px 0px 10px red","border-color":"red"});
    } else {
        $("#id_card_error").html("");
        $("#id_card").attr("placeholder", "");
        $("#id_card").css({"box-shadow":"0px 0px 0px black","border-color":"black"});
    }
    
    
    if ($("#weight").val() === "") {
        //$("#w_error").html("กรอกน้ำหนัก");
        $("#weight").attr("placeholder", "กรอกน้ำหนัก");
        $("#weight").css({"box-shadow":"0px 0px 10px red","border-color":"red"});
    } else {
        //$("#w_error").html("");
        $("#weight").attr("placeholder", "");
        $("#weight").css({"box-shadow":"0px 0px 0px black","border-color":"black"});
    }
    if ($("#height").val() === "") {
        // $("#h_error").html("กรอกส่วนสูง");
        $("#height").attr("placeholder", "กรอกส่วนสูง");
        $("#height").css({"box-shadow":"0px 0px 10px red","border-color":"red"});
    } else {
        // $("#h_error").html("");
        $("#height").attr("placeholder", "");
        $("#height").css({"box-shadow":"0px 0px 0px black","border-color":"black"});
    }

}





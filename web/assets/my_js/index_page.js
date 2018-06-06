var check_sub = 0;

$(document).ready(function () {



    $("input[name='gender']").click(function () {
        $("#gender_error").html("");
    });

    $("input[name='status']").click(function () {
        $("#status_error").html("");
    });

    $("input[name='prefix']").click(function () {
        $("#prefix_error").html("");
    });

   // var input_vali = '#name, #lastname,#weight,#height,#id_card,#birthday,#datepicker2,#scar';

//    $(input_vali).focusout(function () {
//        if (this.value !== null) {
//            var id = this.id;
//            $('#' + id).css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
//        }
//    });

    $("input").focusout(function () {

        if (this.value !== '') {
            var id = this.id;
            $('#' + id).css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
        } else {
            $('#' + id).css({"box-shadow": "0px 0px 0px red", "border-color": "red"});
        }
    });

    $("textarea").focusout(function () {
        var dd = this.style.boxShadow;

        if (this.value !== '') {
            var id = this.id;
            $('#' + id).css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
        } else {
            $('#' + id).css({"box-shadow": "0px 0px 0px red", "border-color": "red"});
        }
    });

    $("#datepicker2").click(function () {

        $('#datepicker2').css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
    });

    $("#birthday").click(function () {

        $('#birthday').css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
    });
    
    $("#news_email").click(function () {
        
        $('#news_error').html("");
    });
    
    $("#news_website").click(function () {

        $('#news_error').html("");
    });
    
    $("#news_paper").click(function () {

        $('#news_error').html("");
    });
    
    $("#news_people").click(function () {

        $('#news_error').html("");
    });
    
    $("#news_other").click(function () {

        $('#news_error').html("");
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

//    $('input[name="exp"]').click(function () {
//        var value = $('input[name=exp]:checked').val();
//        if (value === "1") {
//
//            document.getElementById("exp_1").disabled = false;
//            document.getElementById("exp_2").disabled = false;
//            document.getElementById("exp_3").disabled = false;
//            document.getElementById("exp_4").disabled = false;
//
////            document.getElementById("exp_1_detail").disabled = false;
////            document.getElementById("exp_2_detail").disabled = false;
////            document.getElementById("exp_3_detail").disabled = false;
////            document.getElementById("exp_4_detail").disabled = false;
//        } else {
//            document.getElementById("exp_1").disabled = true;
//            document.getElementById("exp_2").disabled = true;
//            document.getElementById("exp_3").disabled = true;
//            document.getElementById("exp_4").disabled = true;
//
//            document.getElementById("exp_1_detail").disabled = true;
//            document.getElementById("exp_2_detail").disabled = true;
//            document.getElementById("exp_3_detail").disabled = true;
//            document.getElementById("exp_4_detail").disabled = true;
//        }
//    });
//
//    $('input[name="news_other"]').click(function () {
//        var value = $('input[name=news_other]:checked').val();
//        if (value === "5") {
//
//            document.getElementById("other_detail").disabled = false;
//        } else {
//            document.getElementById("other_detail").disabled = true;
//
//        }
//    });
//
//    $('#exp_1,#exp_2,#exp_3,#exp_4').click(function () {
//
//        var id_exp = this.id + "_detail";
//        //alert($(id_exp).is(':disabled'));
//        if ($("#" + id_exp).is(':disabled')) {
//            document.getElementById(id_exp).disabled = false;
//
//        } else {
//            document.getElementById(id_exp).disabled = true;
//            $("#" + id_exp).attr("placeholder", "");
//            $("#" + id_exp).css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
//        }
//
//    });
    $("#search_option").change(function () {
        if (this.value === "1") {
            $("#search_1").css({"display": "block"});
            $("#search_2").css({"display": "none"});
            $("#search_3").css({"display": "none"});
        } else if (this.value === "2") {
            $("#search_1").css({"display": "none"});
            $("#search_2").css({"display": "block"});
            $("#search_3").css({"display": "none"});
        } else if (this.value === "3") {
            $("#search_1").css({"display": "none"});
            $("#search_2").css({"display": "none"});
            $("#search_3").css({"display": "block"});
        }
    });
});

function submit() {

//    if ($("#datepicker2").val() === "") {
//        $("#datepicker2").attr("placeholder", "กรอกวันที่");
//        $("#datepicker2").css({"box-shadow": "0px 0px 10px red", "border-color": "red"});
//        //$("#rec_day_error").html("กรอกวันที่");
//    } else {
//        //$("#rec_day_error").html("");
//        $("#datepicker2").attr("placeholder", "");
//        $("#datepicker2").css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
//    }
//
//
//
//    if ($("#name").val() === "") {
//        //$("#name_error").html("กรอกชื่อ");
//        $("#name").attr("placeholder", "กรอกชื่อ");
//        $("#name").css({"box-shadow": "0px 0px 10px red", "border-color": "red"});
//    } else {
//        //$("#name_error").html("");
//        $("#name").attr("placeholder", "");
//        $("#name").css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
//    }
//
//    if ($("#lastname").val() === "") {
//        // $("#lastname_error").html("กรอกนามสกุล");
//        $("#lastname").attr("placeholder", "กรอกนามสกุล");
//        $("#lastname").css({"box-shadow": "0px 0px 10px red", "border-color": "red"});
//
//    } else {
//        //$("#lastname_error").html("");
//        $("#lastname").attr("placeholder", "");
//        $("#lastname").css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
//    }
//
//    if ($("#birthday").val() === "") {
//        //$("#birthday_error").html("กรอกวันที่");
//        $("#birthday").attr("placeholder", "กรอกวันที่");
//        $("#birthday").css({"box-shadow": "0px 0px 10px red", "border-color": "red"});
//    } else {
//        // $("#birthday_error").html("");
//        $("#birthday").attr("placeholder", "");
//        $("#birthday").css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
//    }
//
//    if ($("#id_card").val() === "") {
//        // $("#id_card_error").html("กรอกเลขบัตรประชาชน");
//        $("#id_card").attr("placeholder", "กรอกเลขบัตรประชาชน");
//        $("#id_card").css({"box-shadow": "0px 0px 10px red", "border-color": "red"});
//    } else if ($("#id_card").val().length !== 13) {
//        $("#id_card_error").html("กรอกเลขบัตรประชาชน13หลัก");
//
//        $("#id_card").css({"box-shadow": "0px 0px 10px red", "border-color": "red"});
//    } else {
//        $("#id_card_error").html("");
//        $("#id_card").attr("placeholder", "");
//        $("#id_card").css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
//    }
//
//
//    if ($("#weight").val() === "") {
//        //$("#w_error").html("กรอกน้ำหนัก");
//        $("#weight").attr("placeholder", "กรอกน้ำหนัก");
//        $("#weight").css({"box-shadow": "0px 0px 10px red", "border-color": "red"});
//    } else {
//        //$("#w_error").html("");
//        $("#weight").attr("placeholder", "");
//        $("#weight").css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
//    }
//    if ($("#height").val() === "") {
//        // $("#h_error").html("กรอกส่วนสูง");
//        $("#height").attr("placeholder", "กรอกส่วนสูง");
//        $("#height").css({"box-shadow": "0px 0px 10px red", "border-color": "red"});
//    } else {
//        // $("#h_error").html("");
//        $("#height").attr("placeholder", "");
//        $("#height").css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
//    }
//
//    if ($("#scar").val() === "") {
//        // $("#h_error").html("กรอกส่วนสูง");
//        $("#scar").attr("placeholder", "กรอกข้อมูล");
//        $("#scar").css({"box-shadow": "0px 0px 10px red", "border-color": "red"});
//    } else {
//        // $("#h_error").html("");
//        $("#scar").attr("placeholder", "");
//        $("#scar").css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
//    }

    if (!$("input[name='gender']").is(':checked')) {
        $("#gender_error").html("เลือกเพศ");
    } else {
        $("#gender_error").html("");
    }

    if (!$("input[name='prefix']").is(':checked')) {
        $("#prefix_error").html("เลือกคำนำหน้านาม");
    } else {
        $("#prefix_error").html("");
    }

    if (!$("input[name='status']").is(':checked')) {
        $("#status_error").html("เลือกสถานภาพ");
    } else {
        $("#status_error").html("");
    }

    if (!$("input[name='exp']").is(':checked')) {
        $("#exp_error").html("เลือกข้อมูล");
    } else {
        var value = $('input[name=exp]:checked').val();
        if (value === "1" && !$("input[name='exp_1']").is(':checked') && !$("input[name='exp_2']").is(':checked') && !$("input[name='exp_3']").is(':checked') && !$("input[name='exp_4']").is(':checked')) {
            $("#exp_error").html("เลือกข้อมูล");
        } else {
            $("#exp_error").html("");
        }

    }

    if (!$("input[name='exp']").is(':checked')) {
        $("#exp_error").html("เลือกข้อมูล");
    } else {
        $("#exp_error").html("");
    }
//    var i =0;
    $('form#user_save :input').each(
            function (i, el) {
                var id_input = el.id;

                if (id_input !== "exp_1_detail" && id_input !== "exp_2_detail" && id_input !== "exp_3_detail" && id_input !== "exp_4_detail" && id_input !== "other_detail") {
//                    i++;
//                    console.log(i);
                    if ((!el.value || el.value === '')) {
                        el.placeholder = 'กรอกข้อมูล';
                        el.style.boxShadow = "0px 0px 10px red";
                        el.style.borderColor = "red";
                        /* or:
                         el.placeholder = $('label[for=' + el.id + ']').text();
                         */
                    } else {
                        el.style.boxShadow = "0px 0px 0px black";
                        el.style.borderColor = "black";
                    }
                }
            });
            
             
             var check_news = checkbox_check();
              
             
    $('textarea').each(
            function (i, el) {

                if (!el.value || el.value === '') {
                    el.placeholder = 'กรอกข้อมูล';
                    el.style.boxShadow = "0px 0px 10px red";
                    el.style.borderColor = "red";
                    /* or:
                     el.placeholder = $('label[for=' + el.id + ']').text();
                     */
                } else {
                    el.style.boxShadow = "0px 0px 0px black";
                    el.style.borderColor = "black";
                }
            });

    var check = check_submit(check_news);
    console.log(check);
    if (check === false) {
        alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    } else {
        alert("สำเร็จ");
    }


}

function check_submit(check_news) {

    var suc = "1";
    $('form#user_save :input').each(
            function (i, el) {
                var id_input = el.id;

                if (id_input !== "exp_1_detail" && id_input !== "exp_2_detail" && id_input !== "exp_3_detail" && id_input !== "exp_4_detail" && id_input !== "other_detail") {
                    if ((!el.value || el.value === '')) {
                      suc = "0";
                      
                    } else {
                        // do nothing
                    }
                }
            });

    $('textarea').each(
            function (i, el) {

                if (!el.value || el.value === '') {
                   suc = "0";
                   console.log(el.id);
                } else {
                   //do nothing
                }
            });
            
            if(suc==="0"||check_news===false){
                return false;
            }else{
                return true;
            }

}

function checkbox_check(){
    var checked = 1;
   if(!$('input[type="checkbox"][name="news_email"]').is(":checked")&&!$('input[type="checkbox"][name="news_website"]').is(":checked")
           &&!$('input[type="checkbox"][name="news_paper"]').is(":checked")&&!$('input[type="checkbox"][name="news_people"]').is(":checked")
           &&!$('input[type="checkbox"][name="news_other"]').is(":checked")){
       $("#news_error").html("กรุณาเลือก");
       return false;
      
   }else{
       return true;
   }
}


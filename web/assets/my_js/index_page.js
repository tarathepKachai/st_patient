var check_sub = 0;

$(document).ready(function () {

    //alert(api_url);


//    $("input[name='gender']").click(function () {
//        $("#gender_error").html("");
//    });

    $("input[name='status']").click(function () {
        $("#status_error").html("");
    });

    $("input[name='prefix']").click(function () {
        $("#prefix_error").html("");
    });

    $('form#patient_save :input').keydown(function (e) {
        if (e.which === 13) {
            var index = $('input').index(this) + 1;
            $('input').eq(index).focus();
        }
    });

    // var input_vali = '#name, #lastname,#weight,#height,#id_card,#birthday,#rec_day,#scar';

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

    $("#rec_day").click(function () {

        $('#rec_day').css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
    });

    $("#birthday").click(function () {

        $('#birthday').css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
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


    $("#test").submit(function (e) {
        console.log("aa");
        e.preventDefault();




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

//    if ($("#rec_day").val() === "") {
//        $("#rec_day").attr("placeholder", "กรอกวันที่");
//        $("#rec_day").css({"box-shadow": "0px 0px 10px red", "border-color": "red"});
//        //$("#_error").html("กรอกวันที่");
//    } else {
//        //$("#_error").html("");
//        $("#rec_day").attr("placeholder", "");
//        $("#rec_day").css({"box-shadow": "0px 0px 0px black", "border-color": "black"});
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


    // VALIDATE START
//    if (!$("input[name='gender']").is(':checked')) {
//        $("#gender_error").html("กรุณาเลือกเพศ");
//    } else {
//        $("#gender_error").html("");
//    }

    if (!$("input[name='prefix']").is(':checked')) {
        $("#prefix_error").html("กรุณาเลือกคำนำหน้านาม");
    } else {
        $("#prefix_error").html("");
    }

    if (!$("input[name='status']").is(':checked')) {
        $("#status_error").html("กรุณาเลือกสถานภาพ");
    } else {
        $("#status_error").html("");
    }

    if (!$("input[name='time_to_come']").is(':checked')) {
        $("#come_error").html("กรุณาเลือกข้อมูล");
    } else {
        $("#come_error").html("");
    }

    if (!$("input[name='exp']").is(':checked')) {
        $("#exp_error").html("กรุณาเลือกข้อมูล");
    } else {
        var value = $('input[name=exp]:checked').val();
        if (value === "1" && !$("input[name='exp_1']").is(':checked') && !$("input[name='exp_2']").is(':checked') && !$("input[name='exp_3']").is(':checked') && !$("input[name='exp_4']").is(':checked')) {
            $("#exp_error").html("กรุณาเลือกข้อมูล");
        } else {
            $("#exp_error").html("");
        }

    }

    if (!$("input[name='exp']").is(':checked')) {
        $("#exp_error").html("กรุณาเลือกข้อมูล");
    } else {
        $("#exp_error").html("");
    }
//    var i =0;
    $('form#patient_save :input').each(
            function (i, el) {
                var id_input = el.id;

                if (id_input !== "exp_1_detail" && id_input !== "exp_2_detail" && id_input !== "exp_3_detail" && id_input !== "exp_4_detail" ) {
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

//    VALIDATE END

    // var check = true;
    //console.log(check);
    if (check === false) {
        alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    } else {

        save_data();

    }


}

function check_submit(check_news) {
    console.log(check_news);
    console.log($("#patient_save").serialize());
    var suc = "1";
    $('form#patient_save :input').each(
            function (i, el) {
                var id_input = el.id;

                if (id_input !== "exp_1_detail" && id_input !== "exp_2_detail" && id_input !== "exp_3_detail" && id_input !== "exp_4_detail" ) {
                    if ((!el.value || el.value === '')) {
                        suc = "0";
                        console.log(el.id);
                    } else {
                        // do nothing
                    }
                }
            });

    $('textarea').each(
            function (i, el) {

                if ((!$("#" + el.id).val() || $("#" + el.id).val() === '')) {
                    suc = "0";
                    console.log(el.id + ">>" + $("#" + el.id).val());

                } else {
                    // do nothing
                }
            });

    if (suc === "0" || check_news === false) {
        return false;
    } else {
        return true;
    }

}

function checkbox_check() {
    var checked = 1;
    if (!$('input[type="checkbox"][name="news_email"]').is(":checked") && !$('input[type="checkbox"][name="news_website"]').is(":checked")
            && !$('input[type="checkbox"][name="news_paper"]').is(":checked") && !$('input[type="checkbox"][name="news_people"]').is(":checked")
            && !$('input[type="checkbox"][name="news_other"]').is(":checked")) {
        $("#news_error").html("กรุณาเลือกข้อมูล");
        return false;

    } else {
        return true;
    }
}

function search_submit() {



}
function test_t() {
    $.ajax({
        url: client_url + "guzzle",
        type: "POST",
//        contentType: false,
//        processData: false,
        dataType: "JSON",
//        data: {
//            username: $("#username").val()
//        },
        data: $("#test").serialize(),
        success: function (data) {
            console.log(data);
        }, error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR + " " + textStatus + " " + errorThrown);
        }
    });
}

function save_data() {
//    $.ajax({
//        url: client_url + "guzzle",
//        type: "POST",
//        dataType: "JSON",
//        data: $("#test").serialize(),
//        success: function (data) {
//            console.log(data);
//        }, error: function (jqXHR, textStatus, errorThrown) {
//            console.log(jqXHR + " " + textStatus + " " + errorThrown);
//        }
//    });
    console.log($("#patient_save").serialize());

    alert("success");
}

function view_user(id) {
    $("#user_sp").modal("show");

}

// id card

function Numbers(e) {
    var keynum;
    var keychar;
    var numcheck;
    if (window.event) {// IE
        keynum = e.keyCode;
    } else if (e.which) {// Netscape/Firefox/Opera
        keynum = e.which;
    }
    if (keynum == 13 || keynum == 8 || typeof (keynum) == "undefined") {
        return true;
    }
    keychar = String.fromCharCode(keynum);
    numcheck = /^[0-9]$/;
    return numcheck.test(keychar);
}

function keyup(obj, e) {
    var keynum;
    var keychar;
    var id = '';
    if (window.event) {// IE
        keynum = e.keyCode;
    } else if (e.which) {// Netscape/Firefox/Opera
        keynum = e.which;
    }
    keychar = String.fromCharCode(keynum);

    var tagInput = document.getElementsByTagName('input');
    for (i = 0; i <= tagInput.length; i++) {
        if (tagInput[i] == obj) {
            var prevObj = tagInput[i - 1];
            var nextObj = tagInput[i + 1];
            break;
        }
    }
    if (obj.value.length == 0 && keynum == 8)
        prevObj.focus();

    if (obj.value.length == obj.getAttribute('maxlength')) {
        for (i = 0; i <= tagInput.length; i++) {
            if (tagInput[i].id.substring(0, 5) == 'txtID') {
                if (tagInput[i].value.length == tagInput[i].getAttribute('maxlength')) {
                    id += tagInput[i].value;
                    if (tagInput[i].id == 'txtID13')
                        break;
                } else {
                    tagInput[i].focus();
                    return;
                }
            }
        }
        if (checkID(id))
            nextObj.focus();
        else
            alert('รหัสประชาชนไม่ถูกต้อง');
        nextObj.focus();
    }

}

function checkID(id) {
//    console.log(id.length);
//    if (id.length != 13) {
//        console.log("len");
//        return false;
//    }
//
//    for (i = 0, sum = 0; i < 12; i++)
//        sum += parseFloat(id.charAt(i)) * (13 - i);
//    if ((11 - sum % 11) % 10 != parseFloat(id.charAt(12))) {
//        console.log(sum);
//        return false;
//
//    }
    return true;
}



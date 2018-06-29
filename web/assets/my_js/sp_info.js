function add_sp_info() {
    $('#sp_act')
            .find('option').not(':first')
            .remove()
            .end()
            ;
    $('#symptom')
            .find('option').not(':first')
            .remove()
            .end()
            ;
    $('#evaluation')
            .find('option').not(':first')
            .remove()
            .end()
            ;
    $("#add_sp_modal").modal("show");

    $.ajax({
        url: api_url + "sp_act_list",
        type: "get",
        success: function (data) {
            $.each(data, function (idx, obj) {
                $('#sp_act').append('<option value="' + obj.sp_act_id + '" >' + obj.sp_act_name + '</option>');
            });
        }
    });

    $.ajax({
        url: api_url + "symptom_list",
        type: "GET",
        success: function (data) {

            $.each(data, function (idx, obj) {

                $("#symptom").append('<option value="' + obj.symp_id + '" >' + obj.symp_name + '</option>');
            });

        }

    });

    $.ajax({
        url: api_url + "evaluation_list",
        type: "GET",
        success: function (data) {
            console.log(data);
            $.each(data, function (idx, obj) {
                $("#evaluation").append('<option value="' + obj.eva_id + '">' + obj.eva_id + '</option>');
            });
        }
    });


}

function save_sp_info() {
    var act = $("#sp_act").val();
    var symp = $("#symptom").val();

    if (act === "0" || symp === "0") {
        $.confirm({
            title: "แจ้งเตือน !",
            content: "กรุณาเลือก<br>การกระทำ,อาการ/โรค",
            type: "red",
            buttons: {
                ok: {
                    text: "ตกลง"
                }
            }
        });
    } else {
        $.ajax({
            url: api_url + "save_sp_info",
            type: "POST",
            data: $("#form_sp_info").serialize(),
            success: function (data) {
                $.confirm({
                    title: 'แจ้งเตือน',
                    content: 'เพิ่มข้อมูลสำเร็จ!',
                    type: 'green',
                    buttons: {
                        ok: {
                            text: 'ok',
                            action: function () {
                                window.location.reload();
                            }
                        }
                    }
                });
            }
        });
    }


}

function comment_sp(id) {

    $("#comment_modal").modal("show");
    $("#comment_form")[0].reset();

    var temp_com = id.split("_");
    var data = temp_com[1];
    //console.log(data);
    $("#sp_info_id").val(data);
    var comment = $("#input_comment_" + temp_com[1]).val();

    $("#comment_edit").val(comment);

}

function eva_update(sp_info_id) {
    //alert(sp_info_id + "//" + person_id);
    var temp = sp_info_id.split("_");
    var id = temp[1];
    //console.log(id);
    var eva = $("#" + sp_info_id).val();

    $.ajax({
        url: api_url + "update_evaluation",
        type: "POST",
        data: {
            sp_info_id: id,
            person_id: person_id,
            evaluation: eva
        },
        success: function (data) {
            console.log(data);
            $.confirm({

                title: 'แจ้งเตือน',
                content: 'ประเมินสำเร็จ !',
                type: 'green',
                typeAnimated: true,
                buttons: {
                    ok: {
                        btnClass: 'btn-green'
                    }
                }
            });
        }
    });
}

function symp_update(sp_info_id) {
    //alert(sp_info_id + "//" + person_id);
    var temp = sp_info_id.split("_");
    var id = temp[1];
    console.log(id);
    var symp = $("#" + sp_info_id).val();

    $.ajax({
        url: api_url + "update_symptom",
        type: "POST",
        data: {
            sp_info_id: id,
            person_id: person_id,
            symptom: symp
        },
        success: function (data) {
            console.log(data);
            $.confirm({

                title: 'แจ้งเตือน',
                content: 'แก้ไขสำเร็จ !',
                type: 'green',
                typeAnimated: true,
                buttons: {
                    ok: {
                        btnClass: 'btn-green'
                    }
                }
            });
        }
    });
}

function act_update(sp_info_id) {
    //alert(sp_info_id + "//" + person_id);
    var temp = sp_info_id.split("_");
    var id = temp[1];
    console.log(id);
    var act = $("#" + sp_info_id).val();

    $.ajax({
        url: api_url + "update_sp_act",
        type: "POST",
        data: {
            sp_info_id: id,
            person_id: person_id,
            sp_act_id: act
        },
        success: function (data) {
            // console.log(data);
            $.confirm({
                title: 'แจ้งเตือน',
                content: 'แก้ไขสำเร็จ !',
                type: 'green',
                typeAnimated: true,
                buttons: {
                    ok: {
                        btnClass: 'btn-green'
                    }
                }
            });
        }
    });
}

function save_comment() {
    //console.log(sp_info_id);
    //var temp = sp_info_id.split("_");
    var id = $("#sp_info_id").val();

    var comment = $("#comment_edit").val();

    $.ajax({
        url: api_url + "save_comment",
        type: "POST",
        data: {
            comment: comment,
            sp_info_id: id
        },
        success: function (data) {

            if (comment === null || comment === "") {
                $("#input_comment_" + id).val("");
            } else {
                $("#input_comment_" + id).val(comment);
            }

            $.confirm({
                title: 'แจ้งเตือน',
                content: 'แก้ไขสำเร็จ !',
                type: 'green',
                typeAnimated: true,
                buttons: {
                    ok: {
                        btnClass: 'btn-green'
                    }
                }
            });
            $("#comment_modal").modal("hide");
        }
    });
}

function delete_sp_info(id) {

    //console.log(id);

    $.confirm({
        title: 'Confirm!',
        content: 'Simple confirm!',
        type: "red",
        typeAnimated: true,
        buttons: {
            ลบ: function () {
                $.ajax({
                    url: api_url + "delete_sp_info",
                    type: "POST",
                    data: {
                        sp_info_id: id
                    },
                    success: function (data) {
                        $.confirm({
                            title: 'แจ้งเตือน',
                            content: 'เพิ่มข้อมูลสำเร็จ!',
                            type: 'green',
                            typeAnimated: true,
                            buttons: {
                                ok: {
                                    text: 'ok',
                                    action: function () {
                                        window.location.reload();
                                    }
                                }
                            }
                        });
                    }
                })
            },
            ยกเลิก: function () {
                $.alert('Canceled!');
            }
        }
    });

}









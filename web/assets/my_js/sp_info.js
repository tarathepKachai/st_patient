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

    $.ajax({
        url: api_url + "save_sp_info",
        type: "POST",
        data: $("#form_sp_info").serialize(),
        success: function (data) {
            $.confirm({
                title: 'แจ้งเตือน',
                content: 'เพิ่มข้อมูลสำเร็จ!',
                type: 'green',
                typeAnimated: true,
                autoClose: 'ok|3000',
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









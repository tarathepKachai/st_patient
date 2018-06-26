

<link href="<?php echo base_url("assets/my_css/index_page.css"); ?>" rel="stylesheet" >

<script src="<?php echo base_url("assets/my_js/sp_info.js"); ?>" ></script>

<link type="text/css" href="<?php echo base_url(); ?>assets/jQueryCalendarThai_Ui1.11.4/jquery-ui-1.11.4.custom.css" rel="stylesheet" />	

<!--<script type="text/javascript" src="<?php //echo base_url();                                                                                                                      ?>assets/datepicker/js/jquery-1.4.4.min.js"></script>-->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/jQueryCalendarThai_Ui1.11.4/jquery-ui-1.11.4.custom.js"></script>

<!--<script type="text/javascript" src="<?php //echo base_url();                                                                                                                      ?>assets/datepicker/js/jquery-ui-1.8.10.offset.datepicker.min.js"></script>-->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery-confirm-master/dist/jquery-confirm.min.js"></script>
<link type="text/css" href="<?php echo base_url(); ?>assets/jquery-confirm-master/dist/jquery-confirm.min.css" rel="stylesheet" />

<div class="row" style="text-align: center">
    <div  class="program_header" >
        <center><h1  >โปรแกรมผู้ป่วยจำลอง</h1></center>
    </div>
</div>
<?php

function convert_date_be($date) {
    //$date = $this->post("date");

    $ex_date = explode("-", $date);

    $year = $ex_date[0];
    $month = $ex_date[1];
    $day = $ex_date[2];

    $year = $year + 543;
    $new_date = $day . "/" . $month . "/" . $year;
    return $new_date;
}
?>


<div style="padding-top: 20px;padding-bottom: 20px;background-color:white;;margin-top: 10px">
    <div  style="text-align: center" >
        <h2  >อาการและโรคของผู้ป่วยจำลอง: <span id='name'></span></h2>
    </div>
    <div style="text-align:center">
        <button type="button" style="height: 35px;padding: 5px 7px;" class="btn btn-success" onclick="add_sp_info()">เพิ่ม</button>
    </div>
    <div style="padding-top:10px">
        <table id="sp_info_table" class="table table-bordered ">
            <thead>
            <th style="width: 150px">วันที่ </th>
            <th style="width: 200px">ประเภทการกระทำ</th>
            <th>อาการ/โรค</th>
            <th style="width: 150px"> ผลการประเมิน </th>
            <th>หมายเหตุ</th>
            </thead>
            <tbody id="sp_info_data" >
                <?php
                if (isset($sp_info->error)) {
                    ?>
                    <tr>
                        <td colspan="5" class="td-center"> ไม่มีข้อมูล </td>
                    </tr>
                    <?php
                } else {
                    foreach ($sp_info as $row) {
                        ?>
                        <tr>
                            <td> <?php echo convert_date_be($row->date); ?> </td>
                            <td> <?php echo $row->sp_act_id; ?> </td>
                            <td> <?php echo $row->symp_id; ?> </td>
                            <td> <?php echo $row->evaluation; ?> </td>
                            <td> <?php echo $row->comment; ?> </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>



</div>


<!-- /////////////////////////////////////////   MODAL ADD /////////////////////////////////////////////////////////////////-->

<div class="modal fade" id="add_sp_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-add" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูล</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body">
                <form id="form_sp_info" >
                    <!--/////////////////////////////////////////////////  FORM ///////////////////////////////////////////////////////////////-->

                    <div class="col">
                        <label class="label_1">วันที่ </label> &nbsp;<input type="text" name="date" id="date" class="rec_day">&nbsp;
                        <!--                        <label class="label_1">การกระทำ</label> -->
                        <select id="sp_act" name="sp_act" class="input-border" style="width: 200px">
                            <option value="0">------เลือการกระทำ--------</option>
                        </select>
                        <select id="symptom" name="symptom" class="input-border" style="width: 200px">
                            <option value="0">------เลือกอาการ/โรค--------</option>
                        </select>
                        &nbsp;
                        <label class="label_1">การประเมิน</label> 
                        <select id="evaluation" name="evaluation" class="input-border" >
                            <option value="" >--เลือก--</option>
                        </select>

                        <input type="hidden" name="person_id" id="person_id" >
                    </div>
                    <div class="col">


                        </select>
                        <label class="label_1">หมายเหตุ</label>
                        <textarea type="text" class="form-control" style="border-color: black;" id="comment" name="comment" ></textarea>
                    </div>

                    <!--/////////////////////////////////////////////////  FORM ///////////////////////////////////////////////////////////////-->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="save_sp_info(<?php echo $id; ?>)">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- /////////////////////////////////////////   MODAL ADD /////////////////////////////////////////////////////////////////-->



<script>
    var person_id =<?php echo $id; ?>;
    $(document).ready(function () {

        
        var d = new Date();
        var toDay = d.getDate() + '/'
                + (d.getMonth() + 1) + '/'
                + (d.getFullYear() + 543);

        // Datepicker
        $("#datepicker1").datepicker({dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
            dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
            monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
            monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']});

        var option_select = {changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
            dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
            monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
            monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']};
        $("#form_sp_info input#date").datepicker();




        $.datepicker.regional['th'] = {
            changeMonth: true,
            changeYear: true,
            //defaultDate: GetFxupdateDate(FxRateDateAndUpdate.d[0].Day),
            yearOffSet: 543,
            dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
            dayNamesMin: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
            monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
            monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'],
            constrainInput: true,
            defaultDate: toDay,
            prevText: 'ก่อนหน้า',
            nextText: 'ถัดไป',
            yearRange: '-150:+20',
            buttonText: 'เลือก',
            dateFormat: 'dd/mm/yy'
        };
        $.datepicker.setDefaults($.datepicker.regional['th']);

        
            $("#form_sp_info input#date").datepicker("setDate", new Date());


       


        $("#person_id").val(person_id);

        $.ajax({
            url: api_url + "get_sp_data",
            type: "POST",
            data: {
                id: person_id
            },
            success: function (data) {
                var res = data[0];
                var name = res.prefix + " " + res.fname + " " + res.lname;
                $("#name").html(name);
            }
        });

        $('#add_sp_modal').on('hidden.bs.modal', function () {
            $("#form_sp_info")[0].reset();
        });


//        var myTable = $('#sp_info_table').DataTable({
//            "pageLength": 5,
//            "ajax": {
//                url: "http://localhost/st_patient/Restserver/api/Patient/sp_info_data_table",
//                type: 'POST',
//                data: {
//                    id: <?php //echo $id;                ?>
//                },
//                "dataSrc": function (json) {
//                    //Make your callback here.
//                    dataReport = json.data;
//                    console.log(json);
//                    
//                    return json.data;
//                }
//            }
//        });

    });

    function convert_date_ad(date) {
        var array = date.split("-");
        var day = array[2];
        var month = array[1];
        var year = parseInt(array[0]) + 543;

        return day + "/" + month + "/" + year;
    }


</script>




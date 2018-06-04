<!--css-->
<link href="<?php echo base_url("assets/my_css/index_page.css"); ?>" rel="stylesheet" >

<script src="<?php echo base_url("assets/my_js/index_page.js"); ?>" ></script>
<link type="text/css" href="<?php echo base_url(); ?>assets/datepicker/css/ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="<?php echo base_url(); ?>assets/datepicker/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/datepicker/js/jquery-ui-1.8.10.offset.datepicker.min.js"></script>
<!-- css end   -->


<div  class="program_header" >
    <center><h1  >โปรแกรมผู้ป่วยจำลอง</h1></center>
</div>



<div style="padding-top : 20px ;">

    <table class="table_main">

        <tbody>
            <tr>
                <td class="menu_header">
                    เมนู  
                </td>
                <td style="border:  2px solid black;background-color: green;">

                </td>
            </tr>

            <tr>
                <td class="menu_choice" id="choice_1">
                    บันทึกผู้ป่วย
                </td>
                <td style="padding: 10px;vertical-align: top" rowspan="4">
                    <div style="display: block;"  id="choice1">
                        <form name="user_save" id="user_save" action="#" method="POST">
                            <label class="label_1">วัน/เดือน/ปี </label> &nbsp; <input type="text" name="rec_day" id="datepicker2" class="rec_day" > <br>
                            <label class="label_1" >คำนำหน้านาม </label>  
                            &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="1" > ด.ญ. &nbsp; </label>
                            &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="2" > ด.ช. &nbsp; </label>
                            &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="3" > นาย &nbsp; </label>
                            &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="4" > นาง &nbsp; </label>
                            &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="5" > นางสาว &nbsp; </label>
                            &nbsp;<label class="label_1" >ชื่อ</label> <input type="text" class="name_medium" name="name" id="name"> 
                            &nbsp;<label  class="label_1">นามสกุล</label> <input type="text" class="name_medium" name="lastname" id="lastname"> 
                            <br>
                            <label class="label_1" >เพศ </label>  
                            &nbsp;<label><input type="radio" class="radio_but" name="gender" value="1" > ชาย &nbsp; </label>
                            &nbsp;<label><input type="radio" class="radio_but" name="gender" value="2" > หญิง &nbsp; </label>
                            <label class="label_1">วัน/เดือน/ปีเกิด </label> &nbsp; <input type="text" name="birthday" id="birthday" class="rec_day" >
                            &nbsp;<label style="margin-left: 40px" class="label_1">เลขที่บัตรประชาชน</label> <input type="text" class="name_medium" name="id_card" id="id_card"> 
                            <br>
                            <label class="label_1" >น้ำหนัก </label>  <input type="text" class="text_short" name="weight" id="weight"> 
                            &nbsp; <label class="label_1" >ส่วนสูง </label>  <input type="text" class="text_short" name="height" id="height"> 
                            
                        </form>


                    </div>
                    <div style="display: none;" id="choice2">
                        2
                    </div>
                    <div style="display: none;" id="choice3">
                        3
                    </div>


                </td>
            </tr>

            <tr>
                <td class="menu_choice" id="choice_2">
                    ค้นหา
                </td>
            </tr>
            <tr>
                <td class="menu_choice" id="choice_3">
                    รีพอร์ท
                </td>
            </tr>
            <tr>
                <td style="height: 60vh;border: 2px solid black; ">

                </td>
            </tr>
        </tbody>
    </table>

</div>
<script type="text/javascript">
    $(function () {
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
        $("#datepicker2").datepicker(option_select);
        $("#birthday").datepicker(option_select);

    });
</script>



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
                <td class="menu_choice enable_choice" id="choice_1">
                    บันทึกผู้ป่วย
                </td>
                <td style="padding: 10px;vertical-align: top" rowspan="4">
                    <!--Save Patient Data-->
                    <div style="display: block;"  id="choice1" class="scrollable">
                        <form name="user_save" id="user_save" action="#" method="POST">
                            <label class="label_1">วัน/เดือน/ปี </label> &nbsp; <input  type="text" name="rec_day" id="datepicker2" class="rec_day" > 
                            <span class="error_report" id="rec_day_error" ></span>
                            <br>

                            <label class="label_1" >คำนำหน้านาม </label>  
                            &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="1" > ด.ญ. &nbsp; </label>
                            &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="2" > ด.ช. &nbsp; </label>
                            &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="3" > นาย &nbsp; </label>
                            &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="4" > นาง &nbsp; </label>
                            &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="5" > นางสาว &nbsp; </label>
                            <span class="error_report" id="prefix_error" ></span>
                            <label class="label_1" >ชื่อ</label> <input type="text" class="name_medium" name="name" id="name"> 
                            <span class="error_report" id="name_error" ></span>
                            &nbsp;<label  class="label_1">นามสกุล</label> <input type="text" class="name_medium" name="lastname" id="lastname"> 
                            <span class="error_report" id="lastname_error" ></span>
                            <br>

                            <label class="label_1" >เพศ </label>  
                            &nbsp;<label><input type="radio" class="radio_but" name="gender"  value="1" > ชาย &nbsp; </label>
                            &nbsp;<label><input type="radio" class="radio_but" name="gender"  value="2" > หญิง &nbsp; </label>
                            <span class="error_report" id="gender_error" ></span>
                            <label class="label_1">วัน/เดือน/ปีเกิด </label> &nbsp; <input type="text" name="birthday" id="birthday" class="rec_day" >
                            <span class="error_report" id="birthday_error" ></span>
                            <label  class="label_1">เลขที่บัตรประชาชน</label> <input type="text" class="name_medium" maxlength="13" name="id_card" id="id_card">
                            <span class="error_report" id="id_card_error" ></span>
                            <br>

                            <label class="label_1" >น้ำหนัก </label>  
                            <input type="text" class="text_short" name="weight" id="weight">
                            <span class="error_report" id="w_error" ></span> 
                            &nbsp; <label class="label_1" >ส่วนสูง </label>  
                            <input type="text" class="text_short" name="height" id="height"> 
                            <span class="error_report" id="h_error" ></span> 
                            &nbsp; <label class="label_1" >ตำหนิ/แผลเป็น </label>  
                            <input type="text" class="rec_day" style="width: 300px" name="scar" id="scar"> 
                            <span class="error_report" id="scar_error" ></span> 
                            <br>
                            <label class="label_1">สถานภาพ</label> 
                            &nbsp;<label><input type="radio" class="radio_but" name="status" value="1" > โสด &nbsp; </label>
                            &nbsp;<label><input type="radio" class="radio_but" name="status" value="2" > สมรส &nbsp; </label>
                            &nbsp;<label><input type="radio" class="radio_but" name="status" value="3" > หย่าร้าง &nbsp; </label>
                            &nbsp;<label><input type="radio" class="radio_but" name="status" value="4" > มีบุตร &nbsp; </label>
                            <span class="error_report" id="status_error" ></span>
                            &nbsp; <label class="label_1" >อาชีพ</label> <input type="text" name="job" id="job" class="name_medium" > 
                            <hr>
                            <label class="label_1">ที่อยู่หรือสถานที่ติดต่อได้</label>
                            &nbsp;บ้านเลขที่ <input type="text" class="text_short" name="h_no" id="h_no"> 
                            &nbsp; ถนน <input type="text" class="text_short" name="road_no" id="road_no">
                            &nbsp; ตำบล/แขวง <input type="text" class="text_short" name="tumbon" id="tumbon">
                            <br>

                            อำเภอ <input type="text" class="text_short" name="aumpur" id="aumpur"> 
                            &nbsp; จังหวัด <input type="text" class="text_short" name="province" id="province">
                            &nbsp; โทรศัพท์ที่สามารถติดต่อได้ <input type="text" class="name_medium" name="tel" id="tel">
                            <br>

                            โทรสาร <input style="margin-top: 7px" type="text" class="name_medium" name="fax" id="fax"> 
                            &nbsp; Line ID <input type="text" class="name_medium" name="line" id="line">
                            &nbsp; E-mail <input type="email" class="name_medium" name="email" id="email">
                            <hr>

                            <label class="label_1" >วุฒิการศึการสูงสุด</label> &nbsp; <input type="text" name="degree" id="degree" class="name_medium" style="width: 400px;margin-top:7px;">
                            <br>

                            <label class="label_1">ประสบการณ์ด้านการเรียนการสอน ทีเกี่ยวข้องกับนักศึกษาแพทย์ แพทย์ใช้ทุน/แพทย์ประจำบ้าน ฯลฯ</label>
                            <span class="error_report" id="exp_error" ></span>
                            <br>
                            <label class="label_1"><input type="radio" class="radio_but" style="margin-left:20px;" name="exp"  value="1" /> เคย </label> 
                            <label ><input type="checkbox" class="radio_but" style="margin-left:10px;"  name="exp_1" id="exp_1" value="1" /> ซักประวัติอาการ </label>  <input type="text" class="name_medium" style="width: 250px"  name="exp_1_detail" id="exp_1_detail">
                            <label ><input type="checkbox" class="radio_but" style="margin-left:10px;"  name="exp_2" id="exp_2" value="2"/> ให้คำแนะนำอาการ/โรค </label>  <input type="text" class="name_medium" style="width: 250px"  name="exp_2_detail" id="exp_2_detail">
                            <br>
                            <label ><input type="checkbox" class="radio_but" style="margin-left:78px;"  name="exp_3" id="exp_3" value="3"/> ตรวจร่างกายอาการ </label>  <input type="text" class="name_medium" style="width: 250px"  name="exp_3_detail" id="exp_3_detail">
                            <label ><input type="checkbox" class="radio_but" style="margin-left:10px;"  name="exp_4" id="exp_4" value="4"/> การทำหัตถการ </label>  <input type="text" class="name_medium" style="width: 250px"  name="exp_4_detail" id="exp_4_detail">
                            <br>
                            <label class="label_1"><input type="radio" class="radio_but" style="margin-left:20px;" name="exp" value="2" /> ไม่เคย </label> 
                            <hr>

                            <label class="label_1">ประวัติการเจ็บป่วยเข้ารับการรักษาในโรงพยาบาลการผ่าตัดหรือได้รับบริการทางการแพทย์อย่างไรบ้าง</label>
                            <br>
                            <textarea name="admission" id="admission" class="form-control" style="border-color: black;"></textarea> 
                            <br>

                            <label class="label_1" >มีโรคประจำตัวอะไรบ้าง</label> 
                            &nbsp; <input type="text" class="name_medium" name="disease" id="disease" style="width: 700px;"><br>
                            <label class="label_1">เหตุผลในการสมัครเป็นผู้ป่วยจำลอง</label>
                            <br>
                            <textarea name="reason" id="reason" class="form-control" style="border-color: black;"></textarea> 
                            <br>

                            <label class="label_1">ท่านมีความคิดเห็นอย่างไรบ้าง เกี่ยวกับการใช้ผู้ป่วยจำลองมาช่วยในการเรียนการสอน</label>
                            <br>
                            <textarea name="opinion" id="opinion" class="form-control" style="border-color: black;"></textarea> 
                            <br>

                            <label class="label_1">ท่านรู้ข่าวการรับสมัครผู้ป่วยจำลองนี้จากที่ใด หรือด้วยวิธีการใด</label> 
                            <span class="error_report" id="news_error" ></span>
                            <br>
                            &nbsp; <label><input type="checkbox" class="radio_but" name="news_email" id="news_email" value="1"> อีเมล์</label>
                            &nbsp; <label><input type="checkbox" class="radio_but" name="news_website" id="news_website" value="2"> เว็บไซต์</label>
                            &nbsp; <label><input type="checkbox" class="radio_but" name="news_paper" id="news_paper" value="3"> ป้ายโฆษณา/ใบปลิว</label>
                            &nbsp; <label><input type="checkbox" class="radio_but" name="news_people" id="news_people" value="4"> คำแนะนำจากบุคคลอื่น</label>
                            &nbsp; <label><input type="checkbox" class="radio_but" name="news_other" id="news_other" value="5"> อื่นๆ</label> <input type="text" class="name_medium" name="other_detail" id="other_detail">
                            <br>
                            <label class="label_1" >ถ้าท่านได้รับเลือกเป็นผู้ป่วยจำลองแล้ว ท่านจะสามารถมาทำงานได้</label>
                            <br>
                            <label><input type="radio" name="time_to_come" value="1"> ทุกครั้งเมื่อคณะแพทยศาสตร์ </label><br>
                            <label><input type="radio" name="time_to_come" value="2"> บางครั้งตามแต่เวลาและโอกาสจะเอื้ออำนวย </label><br>
                            <label><input type="radio" name="time_to_come" value="3"> ไม่แน่ใจยังไม่ได้ตัดสิน </label><br>
                        </form>
                        <button onclick="submit()" class="btn btn-primary">บันทึก</button>

                    </div>

                    <!--Search Patient-->
                    <div style="display: none;" id="choice2" class="scrollable">
                        <label class="label_1">ตัวเลือกการค้นหา</label>
                        <select name="search_option" id="search_option"   >

                            <option value="1" >--อายุ,เพศ--</option>
                            <option value="2" >--เพศ,น้ำหนัก--</option>
                            <option value="3" >--เพศ,ประสบการณ์--</option>

                        </select>
                        <div id="search_1" >
                            อายุ
                            <input type="text" name="age1" id="age1" class="age_box">  ปี &nbsp; 
                            เพศ 
                            <select name="search_gender1" id="search_gender1">
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                            </select>  
                            <button class="search_btn" onclick="search_submit()" class="btn btn-default">ค้นหา</button>
                        </div>

                        <div id="search_2" style="display:none">
                            เพศ 
                            <select name="search_gender2" id="search_gender2">
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                            </select>  
                            &nbsp; น้ำหนัก
                            <input type="text" name="weight2" id="weight2" class="text_short">  ปี 
                            <button class="search_btn" onclick="search_submit()" class="btn btn-default">ค้นหา</button>
                        </div>

                        <div id="search_3" style="display:none"> 
                            เพศ
                            <select name="search_gender3" id="search_gender3">
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                            </select>  
                            ประสบการณ์
                            <select name="search_exp3" id="search_exp3">
                                <option value="1">เคย</option>
                                <option value="2">ไม่เคย</option>
                            </select>

                            <span style="display:none"> <
                                select name="search_exp3" id="search_exp3">
                                <option value="1">เคย</option>
                                <option value="2">ไม่เคย</option>
                                </select>
                            </span>

                            <button class="search_btn" onclick="search_submit()" class="btn btn-default">ค้นหา</button>

                        </div>
                        <hr style="border-color: black">
                        <!--Example table-->
                        <table class="search_result">
                            <thead>
                                <tr>
                                    <th>ชื่อ</th>
                                    <th>เพศ</th>
                                    <th>อายุ(ปี)</th>
                                    <th>น้ำหนัก(กก.)</th>
                                    <th>ประสบการณ์</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>นายกอ ขอคอ</td>
                                    <td>ชาย</td>
                                    <td>35</td>
                                    <td>75</td>
                                    <td>เคย</td>
                                    <td> <button type="button" style="height: 30px;padding: 2px;" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                            แก้ไข
                                        </button></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Edit Button-->
                        <!--                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                                    แก้ไข
                                                </button>-->

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-edit"   role="document">
                                <div class="modal-content" >
                                    <div class="modal-header" >
                                        <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูล</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" >
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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

<div id="dialog" title="Basic dialog">
    <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>


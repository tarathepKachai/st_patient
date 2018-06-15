<!--css-->
<link href="<?php echo base_url("assets/my_css/index_page.css"); ?>" rel="stylesheet" >

<script src="<?php echo base_url("assets/my_js/index_page.js"); ?>" ></script>
<!--<link type="text/css" href="<?php //echo base_url();                                                                                    ?>assets/datepicker/css/ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" />-->
<link type="text/css" href="<?php echo base_url(); ?>assets/jQueryCalendarThai_Ui1.11.4/jquery-ui-1.11.4.custom.css" rel="stylesheet" />	

<!--<script type="text/javascript" src="<?php //echo base_url();                                                                                    ?>assets/datepicker/js/jquery-1.4.4.min.js"></script>-->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/jQueryCalendarThai_Ui1.11.4/jquery-ui-1.11.4.custom.js"></script>

<!--<script type="text/javascript" src="<?php //echo base_url();                                                                                    ?>assets/datepicker/js/jquery-ui-1.8.10.offset.datepicker.min.js"></script>-->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery-confirm-master/dist/jquery-confirm.min.js"></script>
<link type="text/css" href="<?php echo base_url(); ?>assets/jquery-confirm-master/dist/jquery-confirm.min.css" rel="stylesheet" />	


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
                    บันทึกผู้ป่วยใหม่
                </td>
                <td style="padding: 10px;vertical-align: top" rowspan="4">
                    <!--Save Patient Data-->
                    <div style="display: block;"  id="choice1" class="scrollable">
                        <form name="patient_save" id="patient_save"  action="#" method="POST">
                            <!--FORM -------------------------------------------------------->
                            <div class="col-md-12">

                                <label class="label_1">วัน/เดือน/ปี </label> &nbsp; <input  type="text" name="rec_day" id="rec_day" class="rec_day" > 
                                <span class="error_report" id="rec_day_error" ></span>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-5" style="width:350px"><label class="label_1" >คำนำหน้านาม </label></div>
                                                <div class="col-md-7"> <label><input  type="radio" class="radio_but" name="prefix" value="1" > ด.ญ. &nbsp; </label>
                                                    <label><input type="radio" class="radio_but" name="prefix" value="2" > ด.ช. &nbsp; </label>
                                                    <label><input type="radio" class="radio_but" name="prefix" value="3" > นาย &nbsp; </label>
                                                    <label><input type="radio" class="radio_but" name="prefix" value="4" > นาง &nbsp; </label>
                                                    <label><input type="radio" class="radio_but" name="prefix" value="5" > นางสาว &nbsp; </label></div>
                                            </div>

                                        </fieldset>
                                    </div>
                                    <div class="col-md-4" >
                                        <fieldset >

                                            <div class="row">
                                                <div class="col-md-2" style="text-align:right">
                                                    <label>ชื่อ</label>
                                                </div>
                                                <div class="col-md-10" >
                                                    <input id="name"  name="name" type="text" class="name_medium" style="width:100%" >
                                                </div>
                                            </div>

                                        </fieldset>
                                    </div>
                                    <div class="col-md-4" >
                                        <fieldset >
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label>นามสกุล</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text"  id="lastname" name="lastname" class="name_medium" style="width:100%" >
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <!--                            <label class="label_1" >คำนำหน้านาม </label>  
                                                        &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="1" > ด.ญ. &nbsp; </label>
                                                        &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="2" > ด.ช. &nbsp; </label>
                                                        &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="3" > นาย &nbsp; </label>
                                                        &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="4" > นาง &nbsp; </label>
                                                        &nbsp;<label><input type="radio" class="radio_but" name="prefix" value="5" > นางสาว &nbsp; </label>
                                                        <span class="error_report" id="prefix_error" ></span>-->
<!--                            <label class="label_1" >ชื่อ</label> <input type="text" class="name_medium" name="name" id="name"> 
                            <span class="error_report" id="name_error" ></span>
                            &nbsp;<label  class="label_1">นามสกุล</label> <input type="text" class="name_medium" name="lastname" id="lastname"> 
                            <span class="error_report" id="lastname_error" ></span>-->

                            <div class="col">
                                <!--                                <label class="label_1" >เพศ </label>  
                                                                &nbsp;<label><input type="radio" class="radio_but" name="gender"  value="1" > ชาย &nbsp; </label>
                                                                &nbsp;<label><input type="radio" class="radio_but" name="gender"  value="2" > หญิง &nbsp; </label>
                                                                <span class="error_report" id="gender_error" ></span>-->

                            </div>
<!--                            <label  class="label_1">เลขที่บัตรประชาชน</label> <input type="text" class="name_medium" maxlength="13" name="id_card" id="id_card">
                            <span class="error_report" id="id_card_error" ></span>
                            <br>-->
                            <div class="col" >
                                <label class="label_1">วัน/เดือน/ปีเกิด </label> &nbsp; <input type="text" name="birthday" id="birthday" class="rec_day" >
                                <span class="error_report" id="birthday_error" ></span> &nbsp;
                                <label class="label_1">เลขที่บัตรประชาชน </label>

                                <input type="text" name="txtID1" id="txtID1" class="input-card"  maxlength=1 onkeyup="keyup(this, event)" onkeypress="return Numbers(event)"  /> - 
                                <input type="text" name="txtID2" id="txtID2" class="input-card"  maxlength=1 onkeyup="keyup(this, event)" onkeypress="return Numbers(event)" />  
                                <input type="text" name="txtID3" id="txtID3" class="input-card"  maxlength=1 onkeyup="keyup(this, event)" onkeypress="return Numbers(event)" /> 
                                <input type="text" name="txtID4" id="txtID4" class="input-card"  maxlength=1 onkeyup="keyup(this, event)" onkeypress="return Numbers(event)" />  
                                <input type="text" name="txtID5" id="txtID5" class="input-card"  maxlength=1 onkeyup="keyup(this, event)" onkeypress="return Numbers(event)" /> -
                                <input type="text" name="txtID6" id="txtID6" class="input-card"  maxlength=1 onkeyup="keyup(this, event)" onkeypress="return Numbers(event)" />  
                                <input type="text" name="txtID7" id="txtID7" class="input-card"  maxlength=1 onkeyup="keyup(this, event)" onkeypress="return Numbers(event)" />  
                                <input type="text" name="txtID8" id="txtID8" class="input-card"  maxlength=1 onkeyup="keyup(this, event)" onkeypress="return Numbers(event)" /> 
                                <input type="text" name="txtID9" id="txtID9" class="input-card"  maxlength=1  onkeyup="keyup(this, event)" onkeypress="return Numbers(event)"/>  
                                <input type="text" name="txtID10" id="txtID10" class="input-card"  maxlength=1 onkeyup="keyup(this, event)" onkeypress="return Numbers(event)" /> -
                                <input type="text" name="txtID11" id="txtID11" class="input-card"  maxlength=1 onkeyup="keyup(this, event)" onkeypress="return Numbers(event)" />  
                                <input type="text" name="txtID12" id="txtID12" class="input-card"  maxlength=1 onkeyup="keyup(this, event)" onkeypress="return Numbers(event)" /> -
                                <input type="text" name="txtID13" id="txtID13" class="input-card"  maxlength=1 onkeyup="keyup(this, event)" onkeypress="return Numbers(event)" /> 

                            </div>
                            <div class="col">
                                <label style="margin-top:10px" class="label_1" >น้ำหนัก </label>  
                                <input type="text" class="text_short" name="weight" id="weight">
                                <span class="error_report" id="w_error" ></span> 
                                &nbsp; <label class="label_1" >ส่วนสูง </label>  
                                <input type="text" class="text_short" name="height" id="height"> 
                                <span class="error_report" id="h_error" ></span> 

                                <label class="label_1">สถานภาพ</label> 
                                &nbsp;<label><input type="checkbox" class="radio_but" name="status1" id="status1" value="1" > โสด &nbsp; </label>
                                &nbsp;<label><input type="checkbox" class="radio_but" name="status2" id="status2" value="2" > สมรส &nbsp; </label>
                                &nbsp;<label><input type="checkbox" class="radio_but" name="status3" id="status3" value="3" > หย่าร้าง &nbsp; </label>
                                &nbsp;<label><input type="checkbox" class="radio_but" name="status4" id="status4" value="4" > มีบุตร &nbsp; </label>
                                <span class="error_report" id="status_error" ></span>
                            </div>
                            <div class="col">
                                <label class="label_1" >ตำหนิ/แผลเป็น </label>  
                                <input type="text" class="rec_day" style="width: 300px" name="scar" id="scar"> 
                                <span class="error_report" id="scar_error" ></span> 
                            </div>

                            <div class="col">
                                <label class="label_1" >อาชีพ</label> <input type="text" style="width:30%" name="job" id="job" class="name_medium" > 
                                &nbsp;<label class="label_1" >ที่ทำงาน</label> <input type="text" style="width:30%" name="workplace" id="workplace" class="name_medium" >  
                                &nbsp;<label class="label_1" >โทรศัพท์</label> <input type="text"  name="work_tel" id="tel_work" class="tel_work" >  

                            </div>

                            <hr>
                            <div class="col">
                                <label class="label_1">ที่อยู่ปัจจุบัน</label><br>
                                <label  style="margin-left:13px;">บ้านเลขที่</label> 
                                <input type="text" style="width:10%;margin-left:11px" class="text_short" name="h_no" id="h_no"> 
                                หมู่ <input type="text" style="width:10%" class="text_short" name="muu" id="muu"> 
                                ถนน <input type="text" style="width:20%" class="text_short" name="road_no" id="road_no">
                                ตำบล/แขวง <input type="text" style="width:20%" class="text_short" name="tumbon" id="tumbon"><br>

                            </div>
                            <div class="col" style="margin-top:10px">
                                <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">อำเภอ</label>
                                <input type="text" class="text_short" name="amphur" id="amphur"> 
                                จังหวัด <input type="text" class="text_short" name="province" id="province">
                                โทรศัพท์ที่สามารถติดต่อได้ <input type="text" class="name_medium" name="tel" id="tel">
                            </div>
                            <div class="col" style="margin-top:10px">
                                <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">โทรสาร</label>
                                <input style="margin-top: 7px" type="text" class="name_medium" name="fax" id="fax"> 
                                Line ID <input type="text" class="name_medium" name="line" id="line">
                                E-mail <input type="email" class="name_medium" name="email" id="email">
                            </div>
                            <div class="col" style="margin-top:10px">
                                <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">บุคคลที่สามารถติดต่อได้ในกรณีฉุกเฉิน</label>
                                <input style="margin-top: 7px" type="text" class="name_medium" name="person_em" id="person_em"> 
                                <label class="label_1" >โทรศัพท์</label>
                                <input style="margin-top: 7px" type="text" class="name_medium" name="tel_em" id="tel_em"> 
                            </div>
                            <hr>
                            <div class="col">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="label_1" >วุฒิการศึการสูงสุด</label> 
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" >
                                                <input class="form-check-input" type="radio" name="degree" value="1">
                                                ประถมศึกษา</label>
                                        </div> 
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" >
                                                <input class="form-check-input" type="radio" name="degree" value="2">
                                                มัธยมศึกษาตอนต้น</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" >
                                                <input class="form-check-input" type="radio" name="degree" value="3">
                                                มัธยมศึกษาตอนปลาย/เทียบเท่า</label>
                                        </div>

                                        <div class="col"></div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" >
                                                <input class="form-check-input" type="radio" name="degree" value="5">
                                                อนุปริญญา/หรือเทียบเท่า</label>
                                        </div> 
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" >
                                                <input class="form-check-input" type="radio" name="degree" value="6">
                                                ปริญญาตรีขึ้นไป</label> &nbsp;
                                            <input type="text" class="name_medium" style="width:150px" name="degree_detail" id="degree_detail">
                                        </div>
                                    </div>
                                </div>
                            </div>
<!--                            &nbsp; <input type="text" name="degree" id="degree" class="name_medium" style="width: 400px;margin-top:7px;">-->

                            <div class="col">
                                <label class="label_1">ประสบการณ์การเป็นผู้ป่วยจำลอง (SP)</label>
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
                            </div>


                            <hr>
                            <div class="col">
                                <label class="label_1">ประวัติการเจ็บป่วย หรือ รับการผ่าตัด(ระบุ)</label>
                                <br>
                                <textarea name="admission" id="admission" class="form-control" style="border-color: black;"></textarea> 
                                <br>
                            </div>

                            <div class="col">
                                <label class="label_1" >โรคปรจำตัว</label> 
                                &nbsp; <input type="text" class="name_medium" name="disease" id="disease" style="width: 700px;"><br>
                            </div>
                            <div class="col">
                                <label class="label_1">เหตุผลในการสมัครเป็นผู้ป่วยจำลอง</label>
                                <br>
                                <textarea name="reason" id="reason" class="form-control" style="border-color: black;"></textarea> 
                                <br>
                            </div>

                            <div class="col">
                                <label class="label_1" >ช่วงเวลาที่สะดวกในการมาทำงานเป็นผู้ป่วยจำลอง</label>
                                &nbsp;<span class="error_report" id="come_error" ></span>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <label><input type="radio" name="time_to_come" value="1"> ทุกครั้งเมื่อคณะแพทยศาสตร์ต้องการ </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label><input type="radio" name="time_to_come" value="2"> บางครั้งตามแต่เวลาและโอกาสจะเอื้ออำนวย </label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col">
                                                <label class="form-check-label" >
                                                    <input class="form-check-input" type="radio" name="time_to_come_2" value="1">
                                                    วันจันทร์ - ศุกร์ (เวลาราชการ)</label>
                                            </div>
                                            <div class="col">
                                                <label class="form-check-label" >
                                                    <input class="form-check-input" type="radio" name="time_to_come_2" value="2">
                                                    วันเสาร์ - อาทิตย์</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label><input type="radio" name="time_to_come" value="3"> ไม่แน่ใจยังไม่ได้ตัดสินใจ </label>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <!--FORM -------------------------------------------------------->
                        </form>
                        <center><button onclick="submit()" class="btn btn-primary">บันทึก</button></center>

                    </div>

                    <!--Search Patient-->
                    <div style="display: none;" id="choice2" class="scrollable">
                        <label class="label_1">ตัวเลือกการค้นหา</label>
                        <select name="search_option" id="search_option"   >

                            <option value="1" >--อายุ , เพศ--</option>
                            <option value="2" >--เพศ , น้ำหนัก--</option>
                            <option value="3" >--เพศ , ประสบการณ์--</option>

                        </select>
                        &nbsp; <label class="label_1">ID</label>
                        <input type="text" name="id_search" id="id_search" class="text_short">  ปี &nbsp;
                        <button  onclick="search_submit()" class="button-search" >ค้นหา</button>
                        <button type="button" style="height: 30px;padding: 2px;" class="btn btn-success" data-toggle="modal" data-target="#sp_modal">
                            แก้ไข
                        </button>
                        <div id="search_1" style="padding-left: 10px" >
                            <label class="label_1">อายุ</label>
                            <input type="text" name="age1" id="age1" class="age_box">  ปี &nbsp; 
                            <label class="label_1"> เพศ </label>
                            &nbsp;<label><input type="radio" class="radio_but" name="gender_s1" value="1" > ชาย</label>
                            &nbsp;<label><input type="radio" class="radio_but" name="gender_s1" value="2"> หญิง</label>
                        </div>

                        <div id="search_2" style="display:none;padding-left: 10px">
                            <label class="label_1">เพศ</label> 
                            &nbsp; <label><input type="radio" class="radio_but" name="gender_s2" value="1" > ชาย</label>
                            &nbsp; <label><input type="radio" class="radio_but" name="gender_s2" value="2"> หญิง</label>

                            &nbsp; <label class="label_1">น้ำหนัก</label>
                            <input type="text" name="weight2" id="weight2" class="text_short">  กก.

                        </div>

                        <div id="search_3" style="display:none;padding-left: 10px"> 
                            <label class="label_1">เพศ</label> 
                            &nbsp;<label><input type="radio" class="radio_but" name="gender_s3" value="1">ชาย</label>
                            &nbsp;<label><input type="radio" class="radio_but" name="gender_s3" value="2">หญิง</label>
                            &nbsp;<label class="label_1">ประสบการณ์</label> &nbsp;
                            <label><input type="checkbox" class="radio_but" name="exp_s1" id="exp_s1" value="1"> ซักประวัติอาการ </label> 
                            <input type="text" class="name_medium" style="width: 200px" name="exp_s1_d" id="exp_s1_d" > &nbsp;

                            <label><input type="checkbox" class="radio_but" name="exp_s1" id="exp_s2" value="1"> ให้คำแนะนำอาการ/โรค </label> 
                            <input type="text" class="name_medium" style="width: 200px" name="exp_s1_d" id="exp_s2_d" > &nbsp;
                            <br>

                            <label style="margin-left: 245px" ><input type="checkbox" class="radio_but" name="exp_s3" id="exp_s3" value="1">&nbspตรวจร่างกายอาการ</label>
                            <input type="text" class="name_medium" style="width:200px" name="exp_s3_d" id="exp_s3_d" >&nbsp;
                            <label><input type="checkbox" class="radio_but" name="exp_s4" id="exp_s4" value="1">&nbsp;การทำหัตถการ</label>
                            &nbsp;<input type="text" class="name_medium" style="width:200px" name="exp_s4_d" id="exp_s4_d" >


                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-1"><label class="label_1">SORT</label></div>
                            <div class="col-md-5">
                                <label><input type="checkbox" class="radio_but" name="symptom_sort" id="symptom_sort" >&nbsp;อาการโรค</label> &nbsp;
                                <label><input type="checkbox" class="radio_but" name="age_sort" id="age_sort"  >&nbsp;อายุ</label> &nbsp;
                                <label><input type="checkbox" class="radio_but" name="weight_sort" id="weight_sort" >&nbsp;น้ำหนัก</label> &nbsp;
                                <label><input type="checkbox" class="radio_but" name="gender_sort" id="gender_sort" >&nbsp;เพศ</label> &nbsp;
                                <label><input type="checkbox" class="radio_but" name="grade_sort" id="grade_sort" >&nbsp;ผลประเมิน</label> &nbsp;
                            </div>
                        </div>




                        <hr style="border-color: black">
                        <!--Example table-->
                        <table class="table table-hover" id="search_result">
                            <thead>
                                <tr>
                                    <th>วันที่</th>
                                    <th>ชื่อ</th>
                                    <th>เพศ</th>
                                    <th>อายุ(ปี)</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody id="searh_data">
                                <?php
                                $i = 0;
                                for ($i = 0; $i < 3; $i++) {
                                    ?>
                                    <tr onclick="view_user('<?php echo $i; ?>')" id="<?php echo $i; ?>">
                                        <td>นายกอ ขอคอ</td>
                                        <td>ชาย</td>
                                        <td>35</td>
                                        <td>75</td>
                                        <td>เคย</td>
                                        <td> 
                                            <button type="button" style="height: 30px;padding: 2px 5px;" class="btn btn-success" data-toggle="modal" data-target="#edit_modal">
                                                แก้ไข
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>

                            </tbody>

                        </table>
                        <!-- Edit Button-->
                        <!--                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                                    แก้ไข
                                                </button>-->

                        <!-- Modal Edit --> 



                    </div>
                    <div style="display: none;" id="choice3">
                        <form id="test" name="test" method="POST" enctype="multipart/form-data">
                            <input type="text"  name="username" id="username"  >
                            <input type="submit" value="Submit">
                        </form>
                        <button onclick="test_t()"  id="butt">ดูรายงาน</button>
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
                    รายงาน
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
        $("#rec_day").datepicker();
        $("#rec_day_s").datepicker();
        $("#birthday").datepicker();
        $("#birthday_s").datepicker();

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
            yearRange: '-20:+20',
            buttonText: 'เลือก',
            dateFormat: 'dd/mm/yy'
        };
        $.datepicker.setDefaults($.datepicker.regional['th']);

        $(function () {
            $("#rec_day").datepicker("setDate", new Date());
            $("#rec_day_s").datepicker("setDate", new Date());
            $("#birthday").datepicker("setDate", new Date());
            $("#birthday_s").datepicker("setDate", new Date());
        });

    });
</script>




<!-- <div class="rservation-head"> -->
  <!-- <div class="container">
   <div class="row">
     <div class="col-sm-12">
       <form action="<?//=base_url('rservation?')?>" method="get" class="form-inline rservation-form">
        <select name="select" id="select">
          <option name="">إختر التخصص</option>
        <?php
        /*  $get_deppartements = $this->db->query("SELECT * FROM `department_lang` WHERE `language`='".$setting->language."' AND status=1 order by id desc ");

            foreach ($get_deppartements->result() as  $value) {
             echo " <option name=".$value->id.">".$value->name."</option>";
           }*/
        ?>
        </select>

      <input type="text" placeholder="اكتب اسم الدكتور" class="doctor_name" style="">
          <button type="submit" id="btn-rservation">قم بالبحث</button>
         </form>
      </div>

  </div>
 </div> -->

<div class="container">
  <div class="row">



    <div class="col-md-6">
      <div class="sidebar">


        <form method="post" action="<?=base_url("paymob/paymob_checkout");?>">
          <h4 class="reservation-title">بيانات الحجز</h4>
             <div class="form-group">
               <input type="email" class="form-control" id="email" placeholder="اسم المريض">
            </div>

            <div class="form-group">
              <input type="number" name="phone" class="form-control" id="phone" placeholder="رقم الموبايل">
            </div>

           <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="البريد الإلكتروني">
          </div>

          <div class="form-row">
            <div class="form-group">

            <div class="col-md-3">
              <button type="button" class="form-contro0l btn btn-primary">تفعيل</button>
            </div>
          </div>

          <div class="col-md-9">
          <div class="form-group">
            <input type="text" class="form-control" id="inputAddress2" placeholder="كود الخصم">
          </div>
       </div>

      </div>

      <div class="col-md-12">

          <div class="form-group">
            <select name="payment_type" class="form-control">
              <option value="0" selected>طريقة الدفع</option>
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
          </div>
        </div>


    <div class="form-row">

        <div class="form-group">
          <div class="col-md-6">
            <a href="<?=base_url("paymob/paymob_checkout");?>" class="btn btn-primary">
              احجز سيتم دفع 80 جنية
              <!-- <button type="submit" class="btn btn-primary"></button> -->
              <input type="hidden" name="total_price_of_checking_out" value="150">
            </a>
        </div>
      </div>

      <div class="form-group text-center">
        <div class="col-md-6">
          <button type="reset" class="btn btn-light">إلغاء</button>
        </div>
      </div>

    </div>

        </form>



        <!-- <h4 class="search-title"> حدد بحثك  </h4>
        <div class="call-type">
          <p> <a data-toggle="collapse" href="#collapse1"> نوع المكالمة </a></p>

          <ul id="collapse1" class="list-unstyled panel-collapse collapse show">
            <li>
            صوت  <input type="radio" name="" value="1" checked>
            </li>
            <li>
            قيديو  <input type="radio" name="" value="0">
            </li>
          </ul> -->
      </div>
     </div>


  <div class="col-md-6">
    <div class="item-reservation">
      <div class="table-responsive">
      <table class="table" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
            <span class="dr-photo-reservation">
              <img src="<?=base_url();?>assets/images/dr-img.png"/>
            </span>
           </td>
          <td>
            <div class="dr-info">
            <p class="gray">
             الاربعاء 5 مايو 2021
            <br>
             05:00 مساءً
            </p>
          <h4>دكتور محمد عبد العاطي</h4>
        <p class="gray">استشاري الباطنة واستاذ مساعد بجامعة النيل    </p>
      <!-- <p class="dr-languages">
          <span><img src="<?=base_url();?>assets/images/du.png" /> Deutch </span>
          <span><img src="<?=base_url();?>assets/images/fr.png" /> French </span>
          <span><img src="<?=base_url();?>assets/images/en.png" /> English</span>
      </p> -->
  </div>
   <p class="reservation-price">
      <i class="fa fa-long-arrow-left "></i><button type="button" class="btn btn-light btn-reservation"> قم بالحجز الان</button>
    </p>
     <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
      </td>
        </tr>
         </table>
           </div>
          </div>
        </div>





       </div>
      </div>


   <script type="text/javascript">
   $(document).ready(function() {

       //check patient id
       $('#patient_id').keyup(function(){
           var pid = $(this);

           $.ajax({
               url  : '<?= base_url('appointment/check_patient/') ?>',
               type : 'post',
               dataType : 'JSON',
               data : {
                   '<?= $this->security->get_csrf_token_name(); ?>' : '<?= $this->security->get_csrf_hash(); ?>',
                   patient_id : pid.val()
               },
               success : function(data)
               {
                   if (data.status == true) {
                       pid.next().text(data.message).addClass('text-success').removeClass('text-danger');
                   } else if (data.status == false) {
                       pid.next().text(data.message).addClass('text-danger').removeClass('text-success');
                   } else {
                       pid.next().text(data.message).addClass('text-danger').removeClass('text-success');
                   }
               },
               error : function()
               {
                   alert('failed');
               }
           });
       });

       //search patient id
       $('#searchText').keyup(function(){
           var text = $(this).val();

           $.ajax({
               url  : '<?= base_url('appointment/search_patient/') ?>',
               type : 'POST',
               data : {
                   '<?= $this->security->get_csrf_token_name(); ?>' : '<?= $this->security->get_csrf_hash(); ?>',
                   query : text
               },
               success : function(data) {
                   $('#searchValue').html(data);
               },
               error : function(){

               }
           });
       });

       //department_id
       $("#department_id").change(function(){
           var output = $('.doctor_error');
           var doctor_list = $('#doctor_id');
           var available_day = $('#available_day');

           $.ajax({
               url  : '<?= base_url('appointment/doctor_by_department/') ?>',
               type : 'post',
               dataType : 'JSON',
               data : {
                   '<?= $this->security->get_csrf_token_name(); ?>' : '<?= $this->security->get_csrf_hash(); ?>',
                   department_id : $(this).val()
               },
               success : function(data)
               {
                   if (data.status == true) {
                       doctor_list.html(data.message);
                       available_day.html(data.available_days);
                       output.html('');
                   } else if (data.status == false) {
                       doctor_list.html('');
                       output.html(data.message).addClass('text-danger').removeClass('text-success');
                   } else {
                       doctor_list.html('');
                       output.html(data.message).addClass('text-danger').removeClass('text-success');
                   }
               },
               error : function()
               {
                   alert('failed');
               }
           });
       });


       //doctor_id
       $("#doctor_id").change(function(){
           var doctor_id = $('#doctor_id');
           var output = $('#available_days');

           $.ajax({
               url  : '<?= base_url('appointment/schedule_day_by_doctor/') ?>',
               type : 'post',
               dataType : 'JSON',
               data : {
                   '<?= $this->security->get_csrf_token_name(); ?>' : '<?= $this->security->get_csrf_hash(); ?>',
                   doctor_id : $(this).val()
               },
               success : function(data)
               {
                   if (data.status == true) {
                       output.html(data.message).addClass('text-success').removeClass('text-danger');
                   } else if (data.status == false) {
                       output.html(data.message).addClass('text-danger').removeClass('text-success');
                   } else {
                       output.html(data.message).addClass('text-danger').removeClass('text-success');
                   }
               },
               error : function()
               {
                   alert('failed');
               }
           });
       });


       //date
       $("#date").change(function(){
           var date        = $('#date');
           var serial_preview   = $('#serial_preview');
           var doctor_id   = $('#doctor_id');
           var schedule_id = $("#schedule_id");
           var patient_id  = $("#patient_id");

           $.ajax({
               url  : '<?= base_url('appointment/serial_by_date/') ?>',
               type : 'post',
               dataType : 'JSON',
               data : {
                   '<?= $this->security->get_csrf_token_name(); ?>' : '<?= $this->security->get_csrf_hash(); ?>',
                   doctor_id  : doctor_id.val(),
                   patient_id : patient_id.val(),
                   date : $(this).val()
               },
               success : function(data)
               {
                   if (data.status == true) {
                       //set schedule id
                       schedule_id.val(data.schedule_id);
                       serial_preview.html(data.message);
                   } else if (data.status == false) {
                       schedule_id.val('');
                       serial_preview.html(data.message).addClass('text-danger').removeClass('text-success');
                   } else {
                       schedule_id.val('');
                       serial_preview.html(data.message).addClass('text-danger').removeClass('text-success');
                   }
               },
               error : function()
               {
                   alert('failed');
               }
           });
       });

       //serial_no
       $("body").on('click','.serial_no',function(){
           var serial_no = $(this).attr('data-item');
           $("#serial_no").val(serial_no);
           $('.serial_no').removeClass('btn-danger').addClass('btn-success').not(".disabled");
           $(this).removeClass('btn-success').addClass('btn-danger').not(".disabled");
       });

        // show dropdown month name and previous years
       $( ".dropdown-month-years" ).datepicker({
           dateFormat: "dd-mm-yy",
           changeMonth: true,
           changeYear: true,
           yearRange: "-50:+0"
        });

       $( ".datepicker-avaiable-days" ).datepicker({
           dateFormat: "yy-mm-dd",
           changeMonth: true,
           changeYear: true,
           showButtonPanel: false,
           minDate: 0,
           // beforeShowDay: DisableDays
        });


   });

   // patient id throw in patient field
   function patientInfo(id){
        $(".patient").val(id);
        $('#searchValue').html('');
        $('#searchText').val('');
   }
   </script>

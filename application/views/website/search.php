
<div class="search-head">
  <div class="container">
   <div class="row">
     <div class="col-sm-12">
       <form action="<?=base_url('search?')?>" method="get" class="form-inline search-form">
      <!-- <div class="form-group"> -->
        <select name="select" id="select">
          <option name="">إختر التخصص</option>
        <?php
          $get_deppartements = $this->db->query("SELECT * FROM `department_lang` WHERE `language`='".$setting->language."' AND status=1 order by id desc ");

            foreach ($get_deppartements->result() as  $value) {
             echo " <option name=".$value->id.">".$value->name."</option>";
            }
        ?>
        </select>
      <!-- </div>
      <div class="form-group"> -->
      <input type="text" placeholder="اكتب اسم الدكتور" class="doctor_name" style="">
      <!-- </div>
      <div class="form-group"> -->
        <button type="submit" id="btn-search">قم بالبحث</button>
      <!-- </div> -->
        </form>
      </div>

  </div>
 </div>

<div class="container">
  <div class="row">




    <div class="col-md-3">
      <div class="sidebar">
        <h4 class="search-title"> حدد بحثك  </h4>
        <div class="call-type">
          <p> <a data-toggle="collapse" href="#collapse1"> نوع المكالمة </a></p>

          <ul id="collapse1" class="list-unstyled panel-collapse collapse show">
            <li>
            صوت  <input type="radio" name="" value="1" checked>
            </li>
            <li>
            قيديو  <input type="radio" name="" value="0">
            </li>
          </ul>
        </div>


       <div class="sex-type">
          <p><a data-toggle="collapse" href="#collapse2">النوع  </a> </p>

          <ul id="collapse2" class="list-unstyled panel-collapse collapse show">
            <li>
            ذكر  <input type="radio" name="" value="1" checked>
            </li>
            <li>
            أنثى  <input type="radio" name="" value="0">
            </li>
          </ul>
        </div>

        <div class="nickname">
          <p><a data-toggle="collapse" href="#collapse3">اللقب  </a> </p>

          <ul id="collapse3" class="list-unstyled panel-collapse collapse show">
            <li>
            استاذ  <input type="radio" name="" value="1" checked>
            </li>
            <li>
            استشاري  <input type="radio" name="" value="0">
            </li>
          </ul>
        </div>

      <div class="price">
        <p><a data-toggle="collapse" href="#collapse4">سعر الكشف  </a> </p>
        <ul id="collapse4" class="list-unstyled panel-collapse collapse show">
          <li>
              <input type="range" class="form-range" id="customRange1" value="100" min="1" max="500" oninput="this.nextElementSibling.value = this.value">
              <output id="num">100 جنية</output>
           </li>
        </ul>
       </div>
       </div>
    </div>


    <div class="col-md-9">


  <?php //for ($x=0; $x < 3; $x++) {

foreach ($all_doctors_spec as $key => $value) {
  //foreach ($all_doctors_spec as $key => $spec);
  // code...

     ?>

    <div class="item">

      <div class="table-responsive">

      <table class="table" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
            <span class="dr-photo">
              <img src="<?=base_url();?>assets/images/dr-img.png"/>
              <p>
                <span class="fa fa-star checked"></span>
                <!-- <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span> -->
                4.5
              </p>
            </span>
           </td>
          <td>


      <!-- <dl class="dl-horizontal">
        <dt>
 sss
        </dt>
        <dd>
          <h4>دكتور محمد عبد العاطي</h4>
          <p class="gray">استشاري الباطنة واستاذ مساعد بجامعة النيل    </p>
        </dd>
      </dl> -->
            <div class="dr-info">
              <h4><?=$value->firstname . ' ' .$value->lastname;?></h4>
              <p class="gray"><?=$value->career_title;?>   </p>

              <p class="dr-languages">
                <span><img src="<?=base_url();?>assets/images/du.png" /> Deutch </span>
                <span><img src="<?=base_url();?>assets/images/fr.png" /> French </span>
                <span><img src="<?=base_url();?>assets/images/en.png" /> English</span>

              </p>

          </div>
          <p class="reservation-price">
            سعر الكشف 180 جنية
          </p>
    </td>
    <?php for ($i=0; $i < 3; $i++) {    ?>

    <td>
              <table border="1" class="text-center" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="background-color:#18489b;color:#fff;padding:5px;"> اليوم  </td>
                 </tr>
                 <tr>
                   <td> م 08:00  </td>
                  </tr>
                  <tr>
                    <td>  م09:00   </td>
                   </tr>
                   <tr>
                     <td>  م10:00   </td>
                    </tr>
                    <tr>
                      <td> <p>المزيد</p>
                        <span style="background-color:#18489b;padding: 5px; border-radius: 5px; font-size: 14px;display: block; width: max-content;">
                          <a href="<?=base_url("reservation/?$value->user_id");?>" style="color:#fff">  احجز الان</a>
                        </span> </td>
                     </tr>
              </table>


    </td>
  <?php } ?>

  </tr>

</table>
</div>
</div>
<?php } ?>

    </div>


    <!-- <div class="col-md-2" style="background-color:red;">
        <span class="dr-photo">
          <img src="<?=base_url();?>assets/images/no-img.png"/>
        </span>
    </div>
    <div class="col-md-3" style="background-color:blue;">
        <div class="dr-info">
          <h4>دكتور محمد عبد العاطي</h4>
          <p>استشاري الباطنة واستاذ مساعد بجامعة النيل    </p>
        </div>
        <div class="dr-languages" style="display:contents;">
          <ul class="list-unstyled"> متحدث لغة
            <li>1</li>
            <li>2</li>
            <li>3</li>
          </ul>
        </div>
    </div>
    <div class="col-md-4" style="background-color:gray;">

    </div>
  -->
  </div>
</div>
<!-- </div> -->
<!-- <div class="col-md-9"> -->




  <!-- <div class="item">
      <span class="dr-photo">
        <img src="<?=base_url();?>assets/images/no-img.png"/>
      </span>

      <div class="dr-info">
        <h4>دكتور محمد عبد العاطي</h4>
        <p>استشاري الباطنة واستاذ مساعد بجامعة النيل    </p>
      </div>
    <div class="dr-languages" style="display:contents;">
      <ul class="list-unstyled"> متحدث لغة
        <li>1</li>
        <li>2</li>
        <li>3</li>
      </ul>
    </div>
  </div> -->


<!--
  <div class="item">
      <span class="dr-photo">
        <img src="<?=base_url();?>assets/images/no-img.png"/>
      </span>

      <div class="dr-info">
        <h4>دكتور محمد عبد العاطي</h4>
        <p>استشاري الباطنة واستاذ مساعد بجامعة النيل    </p>
      </div>

  </div> -->


<!-- </div> -->



 </div>

<!--
<div class="page-header">

    <div class="page-header-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 d-none d-lg-block">
                    <a href="" class="carousel-item-content">
                        <h3><?= display('you_need_help')?></h3>
                        <div>
                            <?php
                            if(!empty($setting->phone)){
                                $phone = explode(",",$setting->phone);
                                echo $phone[1];
                             }
                            ?>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="header-text">
                                <h2><?= (!empty($section['about']['title'])?$section['about']['title']:null)?></h2>
                                <p><?= (!empty($section['about']['description'])?$section['about']['description']:null)?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <nav class="breadcrumbs">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="<?= base_url()?>"><?= display('home')?></a></li>
                                    <li class="breadcrumb-item active"><?= display('about_us')?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- /.Page header -->

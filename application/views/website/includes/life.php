<div class="life-wrapper">
    <div class="container">
        <div class="row align-items-center justify-content-between0 about-text0">
          <div class="col-md-6 col-lg-6">

              <div class="feature-img">
                  <img src="<?= (!empty($about[0]->image)?base_url($about[0]->image):base_url('assets/images/Header-Image.png'))?>"   class="img-fluid" alt="<?= display('about_us')?>">
              </div>

          </div>

          <div class="col-md-6 col-lg-6">
              <div class="text-block">
                  <h1 class="heading-lg-colored"> <?= display('better_life');?></h1>
                   <h4 class="text-right heading-text"><?=display('better_life_desc');?></h4>
                  <!-- <ul class="list-unstyled text-right">
                  <p>ابحث عن التخصص او قم بالبحث عن اسم دكتور</p>
                  </ul> -->

                   <!-- <blockquote class="blockquote quote-text">
                      <p class="mb-0">“<?= (!empty($about[0]->quotation)?$about[0]->quotation:null);?>”</p>
                      <cite class="quote-attribution">— <?= (!empty($about[0]->author_name)?$about[0]->author_name:null);?></cite>
                      <div class="signature">
                          <img src="<?= (!empty($about[0]->signature)?base_url($about[0]->signature):base_url('assets_web/img/placeholder/signature.png'))?>" alt="Signature" height="134" width="84">
                      </div>
                  </blockquote> -->
              </div>
          </div>


        </div>

      <div class="xxx">



        <form action="<?=base_url('search?')?>" method="get" class="form-inline">

          <!-- <div class="form-group"> -->
            <select name="select" id="select">
              <option name="0"><?=display('Choose_a_specialty');?></option>
            <?php
              $get_deppartements = $this->db->query("SELECT * FROM `department_lang` WHERE `language`='".$setting->language."' AND status=1 order by id desc ");

                foreach ($get_deppartements->result() as  $value) {
                 echo " <option name=".$value->id.">".$value->name."</option>";
                }
            ?>

            </select>
          <!-- </div>

          <div class="form-group"> -->
          <input type="text" placeholder="<?=display('dr_name');?>" class="doctor_name" style="">
          <!-- </div>

          <div class="form-group"> -->
            <button type="submit" id="btn-search"><?=display('search');?></button>
          <!-- </div> -->

        </form>
      </div>

    </div>
</div>

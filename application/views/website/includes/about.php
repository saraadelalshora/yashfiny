<div class="corona-wrapper" style="background-image: url(assets/images/Element-Crona.png);">
    <div class="container">
        <div class="row align-items-center justify-content-between0 about-text0">
          <div class="col-md-6 col-lg-6">
              <div class="text-block">
                  <h1 class="heading-lg"><?= display('corona_title');?></h1>
                   <h4 class="text-right heading-small"><?=display('corona_desc');?></h4>
                  <ul class="list-unstyled text-right">
                    <li><a href="#" class="btn btn-light"> <?=display('Book_now');?></a>  </li>
                  </ul>
                   <!-- <blockquote class="blockquote quote-text">
                      <p class="mb-0">“<?= (!empty($about[0]->quotation)?$about[0]->quotation:null);?>”</p>
                      <cite class="quote-attribution">— <?= (!empty($about[0]->author_name)?$about[0]->author_name:null);?></cite>
                      <div class="signature">
                          <img src="<?= (!empty($about[0]->signature)?base_url($about[0]->signature):base_url('assets_web/img/placeholder/signature.png'))?>" alt="Signature" height="134" width="84">
                      </div>
                  </blockquote> -->
              </div>
          </div>
            <div class="col-md-6 col-lg-6">
                <div class="feature-img">
                    <img src="<?= (!empty($about[0]->image)?base_url($about[0]->image):base_url('assets/images/crono-mask-image2.png'))?>"   class="img-fluid" alt="<?= display('about_us')?>">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-wrapper">
    <div class="container">
        <div class="row align-items-center justify-content-between about-text">
            <div class="col-md-12 col-lg-6">
                <div class="feature-img">
                    <img src="<?= (!empty($about[0]->image)?base_url($about[0]->image):base_url('assets/images/Image-reservation.png'))?>" height="1100" width="740" class="img-fluid" alt="<?= display('about_us')?>">
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="text-block tex-reservation">
                    <!-- <h6 class="heading-sm"><?//= display('about');?></h6> -->
                    <h3 class="headding-text"><?=display('For_these_reasons');?></h3>
                    <ul class="list-unstyled">
                      <li class="wavy" >
                        <h4><?=display('confirmed_reservation');?>  <img src="assets/images/date_icon.svg"></h4>
                        <p class="mr-40">
                          <?=display('confirmed_reservation_desc');?>
                        </p>
                      </li>
                      <li class="wavy">
                        <h4><?=display('Your_data_safe')?>  <img src="assets/images/security.svg"></h4>
                        <p class="mr-40">
                          <?=display('Your_data_safe_desc')?>
                        </p>
                      </li>
                      <li class="wavy">
                        <h4><?=display('From_anywhere')?>  <img src="assets/images/any-place.svg"></h4>
                        <p class="mr-40">
                          <?=display('From_anywhere_desc');?>
                        </p>
                      </li>

                        <?php
                            // $arr = explode("\n", (!empty($about[0]->description)?$about[0]->description:null));
                            // $size=sizeof($arr);
                            // for($i=1; $i<$size; $i++){
                            //     echo '<li>'.$arr[$i-1].'</li>';
                            //     echo "\r\n";
                            // }
                         ?>
                    </ul>

                    <!-- <hr>
                    <blockquote class="blockquote quote-text">
                        <p class="mb-0">“<?= (!empty($about[0]->quotation)?$about[0]->quotation:null);?>”</p>
                        <cite class="quote-attribution">— <?= (!empty($about[0]->author_name)?$about[0]->author_name:null);?></cite>
                        <div class="signature">
                            <img src="<?= (!empty($about[0]->signature)?base_url($about[0]->signature):base_url('assets_web/img/placeholder/signature.png'))?>" alt="Signature" height="134" width="84">
                        </div>
                    </blockquote> -->
                </div>
            </div>
        </div>
    </div>
</div>

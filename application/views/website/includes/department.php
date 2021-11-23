<div class="department">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <div class="section-title">
                    <h2 class="headding-text"><?=display('Book_by_specialty');?><?//= (!empty($section['department']['title'])?$section['department']['title']:null)?></h2>
                    <p><?//= (!empty($section['department']['description'])?$section['department']['description']:null)?></p>
                </div>
            </div>
        </div>

        <div class="row">
          <div id="owl-example" class="owl-carousel owl-testimonial owl-theme">

            <?php
            if(!empty($departments)){
                foreach ($departments as $department) {
            ?>
            <!-- <a href="<?= base_url('departments/details/'.$department->dprt_id)?>">

                <div class="col-12 col-md-12 col-lg-12">

                    <div class="box-widget">

                        <a href="<?= base_url('departments/details/'.$department->dprt_id.'/'.url_title($department->name))?>">
                            <div class="box-icon">
                                <i class="flaticon-<?= (!empty($department->flaticon)?$department->flaticon:'heart');?>"></i>
                            </div>
                            <div class="box-text">
                                <h5><?= $department->name;?></h5>
                                <p><?= substr($department->description, 0, 30);?>...</p>
                            </div>
                        </a>
                    </div>
                  </div>
                </a> -->

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <article class="grid-content">
                        <a href="<?= base_url('departments/details/'.$department->dprt_id.'/'.url_title($department->name))?>" class="img-link">
                            <img src="<?= (!empty($department->image)?base_url($department->image):base_url('assets_web/img/placeholder/blog.png'))?>" class="img-fluid" alt="">

                            <div class="post-meta d-flex centered-department">
                              <span class="categories">
                                <a href="#"><?= $department->name;?></a>
                              </span>
                            </div>
                        </a>

                        <!-- <div class="textContent">
                            <div class="post-meta d-flex">
                              <span class="categories">
                                <a href="#"><?= $department->name;?></a>
                              </span>
                            </div>
                            <h3>
                              <a href="<?= base_url('news/details/'.$value->nid.'/'.url_title($value->title))?>"><?= word_limiter($value->title, 4);?>
                              </a>
                            </h3>
                        </div> -->


                    </article>
                    <!-- /.Grid content -->
                </div>
            <?php
                 }
              }
            ?>
        </div>
      </div>

     </div>
</div>










<!-- 
<div class="testimonialContent text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="contentTitle"><?= display('what_client_say')?></h2>
                <div class="owl-testimonial owl-carousel owl-theme">


                  <div class="testimonial">
                    <style type="text/css">
                        .owl-testimonial.owl-theme .owl-dots .owl-dot span {
                        width: 80px;
                        height: 80px;
                        border-radius: 0;
                        opacity: .5;
                        position: relative;
                        transition: all 0.3s ease-in-out 0s;
                        background: url("") no-repeat !important;
                        background-size: cover !important;
                    }
                    </style>

                    <style type="text/css">
                        .owl-testimonial.owl-theme .owl-dots .owl-dot:nth-child(0) span {
                        background: url("") no-repeat!important;
                        background-size: cover !important;
                        }
                    </style>

                        <p class="description">
                          afdsfdsfdsf
                        </p>
                        <div class="mt-4">
                            <h3 class="title">dfdfdd fgfdgdfgfdg</h3>
                            <span class="post">fg  rgdftrgfbv</span>
                        </div>
                    </div>
                    <div class="testimonial">
                      <style type="text/css">
                          .owl-testimonial.owl-theme .owl-dots .owl-dot span {
                          width: 80px;
                          height: 80px;
                          border-radius: 0;
                          opacity: .5;
                          position: relative;
                          transition: all 0.3s ease-in-out 0s;
                          background: url("") no-repeat !important;
                          background-size: cover !important;
                      }
                      </style>

                      <style type="text/css">
                          .owl-testimonial.owl-theme .owl-dots .owl-dot:nth-child(0) span {
                          background: url("") no-repeat!important;
                          background-size: cover !important;
                          }
                      </style>

                          <p class="description">
                            afdsfdsfdsf
                          </p>
                          <div class="mt-4">
                              <h3 class="title">dfdfdd fgfdgdfgfdg</h3>
                              <span class="post">fg  rgdftrgfbv</span>
                          </div>
                      </div>
                      <div class="testimonial">
                        <style type="text/css">
                            .owl-testimonial.owl-theme .owl-dots .owl-dot span {
                            width: 80px;
                            height: 80px;
                            border-radius: 0;
                            opacity: .5;
                            position: relative;
                            transition: all 0.3s ease-in-out 0s;
                            background: url("") no-repeat !important;
                            background-size: cover !important;
                        }
                        </style>

                        <style type="text/css">
                            .owl-testimonial.owl-theme .owl-dots .owl-dot:nth-child(0) span {
                            background: url("") no-repeat!important;
                            background-size: cover !important;
                            }
                        </style>

                            <p class="description">
                              afdsfdsfdsf
                            </p>
                            <div class="mt-4">
                                <h3 class="title">dfdfdd fgfdgdfgfdg</h3>
                                <span class="post">fg  rgdftrgfbv</span>
                            </div>
                        </div>
                        <div class="testimonial">
                          <style type="text/css">
                              .owl-testimonial.owl-theme .owl-dots .owl-dot span {
                              width: 80px;
                              height: 80px;
                              border-radius: 0;
                              opacity: .5;
                              position: relative;
                              transition: all 0.3s ease-in-out 0s;
                              background: url("") no-repeat !important;
                              background-size: cover !important;
                          }
                          </style>

                          <style type="text/css">
                              .owl-testimonial.owl-theme .owl-dots .owl-dot:nth-child(0) span {
                              background: url("") no-repeat!important;
                              background-size: cover !important;
                              }
                          </style>

                              <p class="description">
                                afdsfdsfdsf
                              </p>
                              <div class="mt-4">
                                  <h3 class="title">dfdfdd fgfdgdfgfdg</h3>
                                  <span class="post">fg  rgdftrgfbv</span>
                              </div>
                          </div>
                          <div class="testimonial">
                            <style type="text/css">
                                .owl-testimonial.owl-theme .owl-dots .owl-dot span {
                                width: 80px;
                                height: 80px;
                                border-radius: 0;
                                opacity: .5;
                                position: relative;
                                transition: all 0.3s ease-in-out 0s;
                                background: url("") no-repeat !important;
                                background-size: cover !important;
                            }
                            </style>

                            <style type="text/css">
                                .owl-testimonial.owl-theme .owl-dots .owl-dot:nth-child(0) span {
                                background: url("") no-repeat!important;
                                background-size: cover !important;
                                }
                            </style>

                                <p class="description">
                                  afdsfdsfdsf
                                </p>
                                <div class="mt-4">
                                    <h3 class="title">dfdfdd fgfdgdfgfdg</h3>
                                    <span class="post">fg  rgdftrgfbv</span>
                                </div>
                            </div>

                </div>
            </div>
        </div>
    </div>
</div> -->

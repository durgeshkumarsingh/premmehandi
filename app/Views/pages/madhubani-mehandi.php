 <!--Start breadcrumb area paroller-->
        <section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url(<?= site_url() ?>assets/images/prem/bridal.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear"
                                data-aos-duration="1500">
                                <ul>
                                    <li><a href="<?= site_url() ?>">Home</a></li>
                                    <li><a href="<?= site_url('services') ?>">Services</a></li>
                                    <li class="active">Stylish Mehandi</li>
                                </ul>
                            </div>

                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Stylish Mehandi</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Service Details area -->
        <section class="service-details-area">
            <div class="container">
                <div class="row">
                    <!--Start Service Details Sidebar -->
                    <div class="col-xl-4 col-lg-5 order-box-2">
                        <div class="service-details__sidebar">
                            <div class="view-all-service">
                                <ul class="service-pages">
                                    <li>
                                        <a href="<?= site_url('bridalmehandi')?>">
                                            Bridal Mehandi <span class="icon-right-arrow"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= site_url('arabicmehandi')?>">
                                            Arabic Mehandi <span class="icon-right-arrow"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= site_url('feetmehandi')?>">
                                            Feet Mehandi <span class="icon-right-arrow"></span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="<?= site_url('stylishmehandi')?>">
                                            Stylish Mehandi <span class="icon-right-arrow"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= site_url('normalmehandi')?>">
                                            Normal Mehandi <span class="icon-right-arrow"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="single-sidebar-box">
                                <div class="sidebar-title">
                                    <h3>Why We Are The Best ?</h3>
                                </div>
                                <div class="popular-tag">
                                    <ul class="">
                                        <li><a href="#">Natural</a></li>
                                        <li><a href="#">100% Color</a></li>
                                        <li><a href="#">Professional</a></li>
                                        <li><a href="#">Best Designs</a></li>
                                        <li><a href="#">Best Price</a></li>
                                        <li><a href="#">Home Service</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Service Details Sidebar -->


                    <!--Start Service Details Content -->
                    <div class="col-xl-8 col-lg-7 order-box-1">
                        <div class="service-details__content">
                            <div class="img-box1">
                                <img src="<?= site_url() ?>assets/images/prem/stylish.jpg">
                            </div>

                            <div class="text-box1">
                                <h2>Stylish Mehandi</h2>
                                <p>Madhubani mehndi is a form of henna body art that originates from the Mithila region of Bihar, India. It is a traditional art form that has been practised for centuries by women in the region.
The designs of Madhubani mehndi are intricate and detailed, featuring traditional motifs such as peacocks, fish, flowers, and other symbols that represent nature and spirituality. The designs are typically filled with patterns and colors, creating a beautiful and vibrant effect.
Madhubani mehndi is usually applied to the hands and feet, but it can also be applied to other parts of the body. The color of the mehndi deepens over time, typically reaching its peak color within 24 to 48 hours after application.
The purpose of Madhubani mehndi is to celebrate and honor the cultural heritage of the Mithila region of Bihar. It is also a way to enhance the beauty of the individual and add to the festive atmosphere of special occasions and celebrations.
Overall, Madhubani mehndi is a beautiful and meaningful art form that is enjoyed and appreciated by people around the world. It is a way to honor tradition and culture while celebrating beauty and creativity.

                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End Service Details Content -->
                </div>
            </div>
        </section>
        <!--End Service Details area -->

         <div class="container-xxl gallery py-6 pt-4 pb-5">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4 text-center">Our Design </h1>
                </div>
               <div class="row">
                   <?php 
                    helper('filesystem');
                    $path = 'assets/images/bridalmehandi/';
                    $data = directory_map($path);
                    foreach($data as $image): 
                        $imagename = substr($image, 0, strrpos($image, "."));
                        $imagename = str_replace('-',' ', $imagename);?>                
                        <div class="items col-12 col-lg-4 col-md-6 pt-4">
                            <a href="<?php echo base_url().'/'.$path. $image; ?>">
                                <img src="<?php echo base_url().'/'.$path. $image; ?>" width="750" height="938" alt="<?php echo $imagename;?>" title="<?php echo substr($imagename,0 ,-1); ?>"/>
                            </a>
                        </div>
                    <?php endforeach; ?>
               </div>
            </div>
      </div>

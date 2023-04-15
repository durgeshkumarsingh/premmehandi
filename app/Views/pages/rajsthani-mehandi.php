 <!--Start breadcrumb area paroller-->
        <section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url(<?= site_url() ?>public/assets/images/prem/bridal.jpg);">
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
                                <img src="<?= site_url() ?>public/assets/images/prem/stylish.jpg">
                            </div>

                            <div class="text-box1">
                                <h2>Stylish Mehandi</h2>
                                <p>Rajasthani mehndi designs are known for their intricate and detailed patterns, which are heavily influenced by the art and culture of Rajasthan, a state in India. These designs are often very elaborate and cover the hands and feet completely, with the use of bold lines and shapes.

Rajasthani mehndi designs typically include elements of nature, such as flowers, leaves, and vines, as well as traditional Rajasthani motifs, such as peacocks, elephants, and camels. The designs may also feature geometric shapes, such as triangles and squares, and may incorporate elements of Rajasthani architecture, such as the intricate patterns found in the windows and doors of Rajasthani palaces.

One of the distinguishing features of Rajasthani mehndi is the use of fine lines and dots to create intricate details and patterns. The designs may also incorporate negative space, which helps to create a sense of balance and harmony in the overall design.

If you're interested in getting a Rajasthani mehndi design, it's important to find a skilled and experienced mehndi artist who is familiar with this style. You can search online for mehndi artists in your area and check out their portfolio to get a sense of their style and skill level. You can also bring in photos or ideas for inspiration to help your artist create the perfect Rajasthani mehndi design for you.
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

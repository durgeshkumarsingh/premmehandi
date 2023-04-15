<?php $custom_menu=""; if ($city != "") {
        $custom_menu="/";
    }else{
      $cityn= "Delhi";
    }
    ?>
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h3 class="display-1 text-white animated slideInDown">Best henna artist</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url()?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url('services')?>">Best henna artist</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Best henna artist</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
        <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Best henna artist in  <?= $cityn;?></h1>
                    <p>Henna has been adorned on beautiful hands of brides for ancient times. The brides, her friends and the lady of her family and relatives adore henna on their hands. In her engagement and in wedding. They all try to make this function memorable for her which can’t be forgotten ever in life. A bride wants to call the best henna artist who can give 100% satisfaction with his henna services. If you are also facing problems for such things then don’t worry. Because you are in the right place right now. You will get the best henna artist with an affordable budget. Your dream will also be true to make it memorable for your whole life. You can call us at the given number at any time, we are available for 24 hours. Because of our best work our customers spread to every part of the country and they book us for Marriage, Engagement, Anniversary, Karwa Chauth, Birthday party, Festivals, and also for all small and big functions. Anil Mehndi art is the first choice for customers because of our amazing and unique work. We know the requirement of mehndi designs in weddings or any other function. We know the expectation of the bride and groom. A bride has a lot of expectations for her wedding. She wants to make it special and memorable forever. She loves to apply pretty mehndi designs on her beautiful hands and feet. The Mehndi ceremony is the most pleasant moment.</p>
                </div>
               <div class="row">
                   <?php 
                    helper('filesystem');
                    $path = 'assets/images/bridal-mehndi/';
                    $data = directory_map($path);
                    foreach($data as $image): 
                        $imagename = substr($image, 0, strrpos($image, "."));
                        $imagename = str_replace('-',' ', $imagename);?>                
                        <div class="items col-12 col-lg-4 col-md-6 pt-4">
                            <a href="<?php echo base_url().'/'.$path. $image; ?>">
                                <img src="<?php echo base_url().'/'.$path. $image; ?>" alt="<?php echo $imagename;?>" title="<?php echo substr($imagename,0 ,-1); ?>"/>
                            </a>
                        </div>
                    <?php endforeach; ?>
               </div>
            </div>
      </div>
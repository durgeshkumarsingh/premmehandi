<?php $custom_menu=""; if ($city != "") {
        $custom_menu="/";
    }else{
      $cityn= "Delhi";
    }
    ?>
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h3 class="display-1 text-white animated slideInDown">Karwachauth Meahndi Designs</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url()?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url('services')?>">Karwa Chauth mehndi</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Karwa Chauth mehndi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Karwa Chauth mehndi artist in <?= $cityn;?></h1>
                   <p>Karwa Chauth is a very popular festival celebrated for husbands' long lives. Wives keep fast from sunrise to sunset. Mehandi is the traditional fashion. Indian women and girls are fond of applying mehndi on every occasion. Karwa Chauth mehndi is one of the most popular mehndi designs. Women apply these designs on Karwa Chauth. They celebrate this festival with all the activities which are following in this festival. There are many mehndi designs which are applied on this day. Some of them are Portrait mehandi designs, Stylish mehandi designs, Tattoo style mehandi designs, Arabic mehndi designs etc. If you are looking for the best Karwa Chauth mehndi artist. Who can provide mehendi services in shops as well as home. Then without thinking any more you should choose Anil mehndi art. Who gives a free trial also. Anil mehndi art is a very famous Karwa Chauth mehndi artist. We provide mehndi services with special designs according to our consumer needs with fair prices. You can book us from anywhere at any time. We are available for 24 hours</p>
                </div>
               <div class="row">
                   <?php 
                    helper('filesystem');
                    $path = 'assets/images/design/';
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

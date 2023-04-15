<?php $custom_menu=""; if ($city != "") {
        $custom_menu="/";
    }else{
      $cityn= "Delhi";
    }
    ?>
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h3 class="display-1 text-white animated slideInDown">Best Mehandi Artist</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url()?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url('services')?>">Bridal mehandi designer</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Bridal mehandi designer</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Bridal mehandi designer in <?= $cityn;?></h1>
                    <p>Mehndi artists play a vital role in any function. We celebrate many functions. There are no functions without mehndi. There are various mehndi designers in markets. But this is a very big problem to choose the best mehndi artists. If you are also looking for any best mehndi artist. And unable to search, then pick up your phone and call Anil mehndi art who is a well experienced mehndi artist. He provides his best mehndi mehndi services with a fair price. He has more than 10 best mehndi artists who are well experienced. Every artist is a specialist for every design. Contact for better to best services.  The quality of our mehndi is amazing and there is no comparison of its colour. Because of our best work our customers spread to every part of the country and they book us for Marriage, Engagement, Anniversary, Karwa Chauth, Birthday party, Festivals, and also for all small and big functions. Anil Mehndi art is the first choice for customers because of our amazing and unique work. We know the requirement of mehndi designs in weddings or any other function. We know the expectation of our client and make them satisfied for our mehndi services.</p>
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

<?php $custom_menu=""; if ($city != "") {
        $custom_menu="/";
    }else{
      $cityn= "Delhi";
    }
    ?>
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h3 class="display-1 text-white animated slideInDown">Tatoo style Meahndi Designs</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url()?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url('services')?>">Tattoo mehndi  </a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Tattoo mehndi </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Tattoo mehndi artist in <?= $cityn;?></h1>
                   <p>Tattoo style mehndi is the most popular mehndi designs among young girls and boys. They are fond of applying this design to bring real charm and make everything more grand. The world of mehndi is spread more than our thoughts. It is not only spreaded with some design, it has various branches.  Among those designs there are some most popular designs like: Bridal mehndi design, Portrait mehndi, Tattoo style mehndi design, Jewellery mehndi design etc but among all design tattoo style mehndi design is the most popular because of its beautiful design and attraction. It is the most valuable and most applied mehndi designs that add extra beauty. Everyone likes to apply it to every function. Do you want to paste this amazing art on your hands and feet? Without wondering hither and thither, pick up your phone and call Anil Mehndi art. If you want to make your event special and memorable then give us one chance and see the real creativity of mehndi by our mehndi artists. We live in Delhi but we provide tattoo style  mehndi services worldwide. You don’t need to come to our site for booking, you can book us from anywhere via your phone.</p>
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

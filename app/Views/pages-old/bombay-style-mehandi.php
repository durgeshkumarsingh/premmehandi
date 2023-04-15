<?php $custom_menu=""; if ($city != "") {
        $custom_menu="/";
    }else{
      $cityn= "Delhi";
    }
    ?>
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h3 class="display-1 text-white animated slideInDown">Bombay style Mehandi</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url()?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url('services')?>">Bombai stylish mehandi designer</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Bombai stylish mehandi designer</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Bombai stylish mehandi designer in <?= $cityn;?></h1>
                    <p>Bombai style mehandi is always famous for its art and unique paintings. Now, The time has been changing a lot. The people of Mumbai have entered many fields. They are showing their talent there. One of them is the mehndi designing field. They have brought many changes in the mehndi art. Bombay style mehandi are superb mehndi designs. Its demand is increasing unexpectedly. Bride and grooms are fond of applying these mehndi designs on their wedding. The reason is its creativity. This is amazing and attracts the attention of people through its beauty. The other benefit of this design is one can apply it on hands, feet in any function. If you are looking for professional and specialist Madhubani mehndi artists. Then the best and suitable option is Anil Mehandi Art. He has been applying these designs for 25 years. You can call from any part of India. We provide this design at fair prices. We have more than 25 professional artists and specialists for Bombay style mehandi. You will feel proud of our service and work. Our best work makes us better than our competitors. You should give us a chance to show our talent.</p>
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
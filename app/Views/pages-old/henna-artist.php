<?php $custom_menu=""; if ($city != "") {
        $custom_menu="/";
    }else{
      $cityn= "Delhi";
    }
    ?>
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h3 class="display-1 text-white animated slideInDown">Henna Artist</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url()?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url('services')?>">Henna artist</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Henna artist</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Henna artist in <?= $cityn;?></h1>
                   <p>The world of henna design is not limited to a few designs only, it is spreaded with so many designs that can not be guessed. Among those designs portrait henna design is one of the most valuable and most popular henna designs which is applied on every function because of its attractiveness. Brides are fond to adorn bridal henna design on hands as well as feet in their wedding. Anil mehndi art is the most popular henna artist in Delhi.  We have been pasting this design for more than 25 years. We have more than 20 professional henna artists including specialists for all henna designs. We speak less because our design wins the hearts of millions. If you want to make your event special and memorable then we recommend you to choose Anil Mehandi Art to adorn henna  designs and see the amazing results. Because of its unique creativity this design is popular worldwide. People from different parts of India call us and book our services for different events.</p>
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

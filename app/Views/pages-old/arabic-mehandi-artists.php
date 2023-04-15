<?php $custom_menu=""; if ($city != "") {
        $custom_menu="/";
    }else{
      $cityn= "Delhi";
    }
    ?>
    
<!-- Page Header Start -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h3 class="display-1 text-white animated slideInDown">Arabic Mehandi</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url()?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url('services')?>">Arabic Mehandi</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Arabic Mehandi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Arabic mehndi artist in <?= $cityn;?></h1>
                    <p>The world of mehndi is not limited to a few designs only it is spreaded with so many designs that can not be guessed. Among those designs Arabic mehndi design is one of the most valuable and most applied mehndi designs which is applied on every function because of its creativity and attraction. Brides are fond to adorn Arabic mehndi design on hands as well as feet in their wedding. Not only the bride but also her relatives paste Arabic mehndi on their hands and feet. This design brings real charm and makes everything more grand. Arabic mehndi is famous for its flowery creativity. Flowers of different beauty and attraction are found in it. The most important thing is to choose the perfect arabic mehndi artist in Delhi or the arabic mehndi artist who provides home services. If you want to adorn Arabic mehndi design then you are at the right site. Did you know about Anil mehndi art before? Anil mehndi art is the best Arabic mehndi artist in Delhi who provides his mehndi services worldwide home services. You can book your slot for our mehndi services from anywhere via your phone. We are always there in your service for hours.</p>
                </div>
               <div class="row">
                   <?php 
                    helper('filesystem');
                    $path = 'assets/images/arabic-mehndi/';
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

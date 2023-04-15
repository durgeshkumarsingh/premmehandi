<?php $custom_menu=""; if ($city != "") {
        $custom_menu="/";
    }else{
      $cityn= "Delhi";
    }
    ?>
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h3 class="display-1 text-white animated slideInDown">Rajsthani Meahndi Designs</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url()?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url('services')?>">Rajsthani mehndi </a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Rajsthani mehndi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Rajsthani mehndi artist in <?= $cityn;?></h1>
                   <p>There are many traditional mehndi designs which are applied on different occasions. Among them Rajasthani mehndi design is one, which is always the first choice for every bride. Bride and groom paste Rajasthani mehndi designs in their engagement, wedding and anniversary. The big and special point of this design is it, this design is a multi beneficial design because it is suitable for every function and for everyone. This design is popular for weddings. If you want to paste Rajasthani mehndi design on any event then call Anil mehndi art. Do you know? Anil mehndi art is the most popular artist for Rajasthani mehndi.  
We have been pasting this design for more than 25 years. We have more than 20 professional mehndi artists including specialists for Rajasthani mehndi. We speak less because our design wins the hearts of millions. If you want to make your event special and memorable then we recommend you to choose Rajasthani mehndi design and see the amazing effect. Because of its unique creativity this design is popular worldwide. People from different parts of India call us and book our services for different events.
</p>
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

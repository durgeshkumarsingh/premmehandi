<?php $custom_menu=""; if ($city != "") {
        $custom_menu="/";
    }else{
      $cityn= "Delhi";
    }
    ?>
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h3 class="display-1 text-white animated slideInDown">Stylish Meahndi Designs</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url()?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url('services')?>">Stylish mehndi </a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Stylish mehndi </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Stylish mehndi artist in <?= $cityn;?></h1>
                   <p>There is no objection if everybody chooses stylish mehndi design for every function because this design deserves it. The structure and attraction of stylish mehndi design make it superior and bring all in its favour. If you want to make your function more special then I will prefer you to choose only this design and make your dream true. Bride selected this design for her engagement, wedding, engagement, Karwa Chauth and mostly other festivals.   
Anil mehndi art has been pasting mehndi for more than 25 years. We have more than 20 professional mehndi artists including specialists for bride mehndi. We speak less because our work and quality win the hearts of millions, we don’t need to overspeak anymore. If you want to make your event special and memorable then give us one chance and see the real creativity of mehndi and mehndi artists. We live in Delhi but we provide mehndi services worldwide. You don’t need to come to our site for booking, you can book us from anywhere via your phone. We have the best for stylish mehndi and only we are in this field who give their 100% best service
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

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
            <h3 class="display-1 text-white animated slideInDown">Anniversary Mehandi</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url()?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url('services')?>">Anniversary Mehandi</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Anniversary Mehandi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Anniversary mehndi artist in <?= $cityn;?></h1>
                    <p>Anniversary is a very exciting moment for every bride and groom because this is the day when they both come in a bond and decide to live together in every situation. Bride wants to make this day special so she does all those activities which can help her. Mehndi is one of the best examples of such activities. The creativity of anniversary mehndi design attracts the attention of everyone. Anniversary mehndi designs are different from others and also unique so every bride wants to apply this design on their anniversary. There are so many mehndi designs that are adorning the anniversary like: Bridal mehndi, Portrait mehndi, Stylish mehndi, Jewellery mehndi, Arabic mehndi etc. If you are also looking for any best anniversary mehndi artist in Delhi or anywhere then without thinking anymore pick up your phone and call Anil mehndi art. We have been working for more than 25 years and provide our mehndi services worldwide. You do not need to come to our site for booking, you can book our services from anywhere just by your phone. We are available for you 24 hours. We have a group of well experienced mehndi artists including professional artists. You will feel proud of our services.</p>
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



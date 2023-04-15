<?php $custom_menu=""; if ($city != "") {
        $custom_menu="/";
    }else{
      $cityn= "Delhi";
    }
    ?>
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h3 class="display-1 text-white animated slideInDown">Bridal Mehandi</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url()?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url('services')?>">Online mehndi artist</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Online mehndi artist</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Online mehndi artist in <?= $cityn;?></h1>
                    <p>The mehndi cost is mainly dependent on several factors among them are some main factors like: design for bride, length of design, distance of client house, mehndi artist's experience or knowledge etc. We have more than 30 mehndi artists who are at different stages of work experience. When our clients book our services then we tell them the starting price for bridal mehndi and also tell them the cost or price depending on the following factors. Even though we take more money from others, our work is special and unique. We don’t like to compromise with mehndi designs because we understand the value of our clients' events and respect them.Online mehndi artist in Delhi, we provide our services worldwide. You can search us online and know any queries. We are available on the maximum online platform so you can search anywhere online, Anil mehndi art. We will help you as much as possible because we are here only for you. Pick up your phone and connect with us, we are waiting for you online as well as offline.</p>
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
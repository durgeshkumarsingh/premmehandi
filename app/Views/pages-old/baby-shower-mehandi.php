<?php $custom_menu=""; if ($city != "") {
        $custom_menu="/";
    }else{
      $cityn= "Delhi";
    }
    ?>
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h3 class="display-1 text-white animated slideInDown">Baby Shower Mehandi</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url()?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="services">Baby shower mehandi</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Baby Shower Mehandi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Baby shower mehndi artist in <?= $cityn;?></h1>
                    <p>The moment for which every woman waits eagerly and celebrates with so delight is when she becomes a mother. That was really very pleasant for everyone in her family. They distributed sweets among children and people and danced with great joy. Women and girls sing songs at the event and they also dance with happiness. There are many rites in India from birth to death. A mother adorns a baby’s figure mehndi on her hands and  makes her happiness double. If you want to paste baby shower mehndi on your hands, call Anil mehndi art. Anil mehndi art is the most popular baby shower mehndi design. We have more than 20 professional baby shower mehndi artists. Our services include: Bridal mehndi, Arabic mehndi, Portrait mehndi, Stylish mehndi, Simple mehndi design etc. We have specialist mehndi artists for every design and we give 100% clarity. Choose any design, call us and make your events big. We are waiting for you 24 hours with the whole entire team. It will be our pleasure to join in your happiness. Baby shower mehndi design is our strength, because of this we are famous worldwide.</p>
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

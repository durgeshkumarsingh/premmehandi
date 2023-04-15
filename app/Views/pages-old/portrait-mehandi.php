<?php $custom_menu=""; if ($city != "") {
        $custom_menu="/";
    }else{
      $cityn= "Delhi";
    }
    ?>
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h3 class="display-1 text-white animated slideInDown">Portrait Meahndi Designs</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url()?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url('services')?>">Portrait mehndi </a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Portrait mehndi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Portrait mehndi artist in <?= $cityn;?></h1>
                   <p>Mehndi is always playing a vital role in every function. The value of mehndi in weddings is unbeatable. Brides, girls, and women all adorn their hands with different mehndi designs. Mehndi brings real beauty and attraction. There are so many designs but the demand for portrait mehndi is always on top and the first choice for every bride for engagement, wedding and anniversary. The creativity and beauty of portrait mehndi attracts the attention of everyone. The artist of portrait mehndi draws bride-groom pic with mehndi on hands and feet. If you also want to adorn portrait mehndi on your beautiful hands then take your phone and call Anil mehndi art who is well experienced and specialist for portrait mehndi. We have professional mehndi artists who will make you feel proud of. Mehndi artists are a very important factor in order to design properly, otherwise the whole decoration looks unpleasant. Anil mehndi art is the best portrait mehndi artist in Delhi. We provide our services worldwide. You can book our mehndi artist team from anywhere just through your phone. For the best portrait mehndi artist and to make your function memorable and special don’t miss this chance and book just now</p>
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

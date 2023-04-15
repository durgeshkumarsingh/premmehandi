<?php $custom_menu=""; if ($city != "") {
        $custom_menu="/";
    }else{
      $cityn= "Delhi";
    }
    ?>
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h3 class="display-1 text-white animated slideInDown">Rakshabandhan Meahndi Designs</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                     <li class="breadcrumb-item"><a class="text-white" href="<?= site_url()?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="<?= site_url('services')?>">Raksha bandhan mehndi </a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Raksha bandhan mehndi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Raksha bandhan mehndi artist in <?= $cityn;?></h1>
                   <p>Raksha Bandhan is the festival of love. This festival brings closer brother-sister relations. Sister ties Rakhi on her brother's wrist and prays to god to help her brother in all situations. Brothers promise their sisters to stand with her in every situation and save her from all the problems. They celebrate this festival with great joy and make every Raksha Bandhan more special. Girls and women adorn Raksha Bandhan mehndi on their hands with brother-sister pictures. But the biggest problem they face on this day is searching for the perfect Raksha Bandhan mehndi artist. If you are also worried about it, then don’t worry because you have reached the right place. Anil mehndi art is a famous Raksha Bandhan mehndi artist in Delhi who provides his mehndi services worldwide. We understand our customer requirements. We draw designs to exact their thoughts and expectations. We have been pasting Raksha Bandhan mehndi designs for more than 25 years. We have more than 20 professional henna artists including specialists for Raksha Bandhan mehndi. We speak less because our work and quality win the hearts of millions.
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

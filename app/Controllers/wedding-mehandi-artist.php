<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Wedding Meahndi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Wedding Meahndi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl gallery py-6 pt-4 pb-0">
            <div class="container">
                <div class="text-justify mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Wedding Meahndi</h1>
                    <p>Wedding mehandi design is among those mehandi designs which are applied to every function. Wedding is a special day in everyone’s life. The Bride waits for this day with a lot of expectation and dreams. She has a wish to look different and more beautiful on this day. Mehandi is playing a vital role to make her wish come true.  If you are going to get married this year, then this suggestion is only for you. Call Deepak Mehndi art only because we provide the best bridal mehndi artists in Delhi as well as worldwide. We are not only limited to Delhi but also worldwide.Our experienced and well talented bridal mehandi artists make you feel proud of. You can book our bridal mehndi artists team for all functions from anywhere in the world just by your phone. We help you to choose the best suitable design for you to adorn on your hands and feet. We apply all traditional and modern style henna designs.</p>
                </div>
               <div class="row">
                   <?php 
                    helper('filesystem');
                    $path = 'public/assets/images/design/';
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

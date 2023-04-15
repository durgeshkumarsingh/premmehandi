<?php namespace App\Controllers;

class TimarpurController extends BaseController{
      public function home($page = 'home')
      {
       $data['title'] ='Bride mehandi artist in Timarpur';
       $data['meta_description'] ='Bride mehandi artist in Timarpur, Dulhan mehndi design, Stylish mehndi designs, Full hand mehndi design, Mehndi artist in Timarpur +91-8882438771.';
       $data['meta_keywords'] ='Bride mehandi artist in Timarpur, Dulhan mehndi design, Stylish mehndi designs, Full hand mehndi design, Mehndi artist in Timarpur.'; 
       $data['meta_author'] = "https://anilmehendiart.com/"; 
       $data['city']= "timarpur";
       $data['cityn']= "Timarpur";
       echo view('pages/header', $data);
       echo view('pages/'.$page, $data);
       echo view('pages/footer', $data);
     }

     public function about($page = 'about')
     { 
       $data['title'] ='Mehandi designer in Timarpur';      
       $data['meta_description'] ='Dulhan ki mehandi, Engagement mehandi design, Mehandi designer in Timarpur, Mehndi designer in Timarpur +91-8882438771.';
       $data['meta_keywords'] ='Dulhan ki mehandi, Engagement mehandi design, Mehandi designer in Timarpur, Mehndi designer in Timarpur';
       $data['meta_author'] = "https://anilmehendiart.com/"; 
       $data['city']= "timarpur";
       $data['cityn']= "Timarpur";
       echo view('pages/header', $data);
       echo view('pages/'.$page, $data);
       echo view('pages/footer', $data);
     }
     public function services($page = 'services')
     {
       $data['title'] ='Mehandi services at home';
       $data['meta_description'] ='Mehandi services at home, Bridal mehandi services at home in Timarpur, Dulhan mehandi service at home, Stylish mehandi services at home in Timarpur.';
       $data['meta_description'] ='Mehandi services at home, Bridal mehandi services at home in Timarpur, Dulhan mehandi service at home, Stylish mehandi services at home in Timarpur.';
       $data['meta_author'] = "https://anilmehendiart.com/";
       $data['city']= "timarpur";
       $data['cityn']= "Timarpur";
       echo view('pages/header', $data);
       echo view('pages/'.$page, $data);
       echo view('pages/footer', $data);
     }
     public function gallery($page ='gallery')
     {
       $data['title'] ='Mehandi artist at home';

       $data['meta_description'] ='Mehandi design dulhan, Mehandi artist at home, Mehandi services at home near me, Mehandi home service near me +91-8882438771.';
       $data['meta_keywords'] ='Mehandi design dulhan, Mehandi artist at home, Mehandi services at home near me, Mehandi home service near me.';
       $data['meta_author'] = "https://anilmehendiart.com/";
       $data['city']= "timarpur";
       $data['cityn']= "Timarpur";
       echo view('pages/header', $data);
       echo view('pages/'.$page,$data);
       echo view('pages/footer', $data);
     }
     public function contact($page ='contact')
     {
       $data['title'] ='Best bridal mehandi artist near me';

       $data['meta_description'] =' Mehandi artist at home near me, Anil mehandi, Best bridal mehandi artist near me, Mehandi artist in south Timarpur, Bridal mehandi price in Timarpur +91-8882438771.';
       $data['meta_keywords'] ='Mehandi artist at home near me, Anil mehandi, Best bridal mehandi artist near me, Mehandi artist in south Timarpur, Bridal mehandi price in Timarpur.';
       $data['meta_author'] = "https://anilmehendiart.com/";
       $data['city']= "timarpur";
       $data['cityn']= "Timarpur";
       echo view('pages/header', $data);
       echo view('pages/'.$page, $data);
       echo view('pages/footer', $data);
     }
     public function anniversary($page ='anniversary-mehandi')
     {
       $data['title'] ='Anniversary mehandi artist in Timarpur';

       $data['meta_description'] ='Anniversary mehandi designs, Anniversary mehandi artist in Timarpur, Dulha dulhan mehandi design, Bridal mehandi ke design 9958189454.';
       $data['meta_keywords'] ='Anniversary mehandi designs, Anniversary mehandi artist in Timarpur, Dulha dulhan mehandi design, Bridal mehandi ke design.';
       $data['meta_author'] = "https://anilmehendiart.com/";
       $data['city']= "timarpur";
       $data['cityn']= "Timarpur";
       echo view('pages/header', $data);
       echo view('pages/'.$page, $data);
       echo view('pages/footer', $data);
     }
     public function bridalmehandi($page ='bridal-mehandi')
     {
       $data['title'] ='Bridal mehandi artist in Timarpur';

       $data['meta_description'] ='Bridal mehandi designs, Bridal mehandi artist in Timarpur, Mehandi for bride, Dulhan bridal mehndi +91-8882438771.';

       $data['meta_keywords'] ='Bridal mehandi designs, Bridal mehandi artist in Timarpur, Mehandi for bride, Dulhan bridal mehndi.';
       $data['meta_author'] = "https://anilmehendiart.com/";
       $data['city']= "timarpur";
       $data['cityn']= "Timarpur";
       echo view('pages/header', $data);
       echo view('pages/'.$page, $data);
       echo view('pages/footer', $data);
     }
     public function engagementmehandi($page ='engagement-mehandi')
     {
       $data['title'] ='Engagement mehandi artist in Timarpur';

       $data['meta_description'] ='Engagement mehandi artist in Timarpur, Engagement mehndi designs, Dulhan design mehandi, Groom mehndi designs +91-8882438771.';
       $data['meta_keywords'] ='Engagement mehandi artist in Timarpur, Engagement mehndi designs, Dulhan design mehandi, Groom mehndi designs.';
       $data['meta_author'] = "https://anilmehendiart.com/";
       $data['city']= "timarpur";
       $data['cityn']= "Timarpur";
       echo view('pages/header', $data);
       echo view('pages/'.$page, $data);
       echo view('pages/footer', $data);
     }
     public function footmehandi($page ='foot-mehandi')
     {
          $data['title'] ='Feet mehandi artist in Timarpur';

          $data['meta_description'] ='Feet mehandi designs, Feet mehandi artist in Timarpur, Wedding mehandi design, Mehandi design for bride +91-8882438771.';
          $data['meta_keywords'] ='Feet mehandi designs, Feet mehandi artist in Timarpur, Wedding mehandi design, Mehandi design for bride.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     } 
     public function portraitmehandi($page ='portrait-mehandi')
     {
       $data['title'] ='Portrait mehendi artist in Timarpur';

       $data['meta_description'] ='Portrait mehendi artist in Timarpur, Portrait mehandi designs, Dulhan mehandi ka design, Mehndi design 2022 bridal 9958189454.';
       $data['meta_keywords'] ='Portrait mehendi artist in Timarpur, Portrait mehandi designs, Dulhan mehandi ka design, Mehndi design 2022 bridal.';
       $data['meta_author'] = "https://anilmehendiart.com/";
       $data['city']= "timarpur";
       $data['cityn']= "Timarpur";
       echo view('pages/header', $data);
       echo view('pages/'.$page, $data);
       echo view('pages/footer', $data);
     }
     public function stylishmehandi($page ='stylish-mehandi')
     {
          $data['title'] ='Stylish mehandi artist in Timarpur';

          $data['meta_description'] ='Stylish mehandi designs, Stylish mehandi artist in Timarpur, Dulhan mehandi ki design, Groom mehandi design +91-8882438771.';
          $data['meta_keywords'] ='Stylish mehandi designs, Stylish mehandi artist in Timarpur, Dulhan mehandi ki design, Groom mehandi design.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function arabicmehandiartist($page ='arabic-mehandi-artists')
     {
       $data['title'] ='Arabic mehndi artist in Timarpur';

       $data['meta_description'] ='Arabic henna designs, Arabic mehndi artist in Timarpur, Simple bridal mehndi, Mehandi design for wedding +91-8882438771.';
       $data['meta_keywords'] ='Arabic henna designs, Arabic mehndi artist in Timarpur, Simple bridal mehndi, Mehandi design for wedding.';
       $data['meta_author'] = "https://anilmehendiart.com/";
       $data['city']= "timarpur";
       $data['cityn']= "Timarpur";
       echo view('pages/header', $data);
       echo view('pages/'.$page, $data);
       echo view('pages/footer', $data);
     }
     public function arabicmehandi($page ='arabic-mehandi')
     {
          $data['title'] ='Arabic mehandi artist in Timarpur';

          $data['meta_description'] ='Arabic mehandi designs, Arabic mehandi artist in Timarpur, bridal mehandi design 2022, Dulha dulhan mehandi +91-8882438771.';
          $data['meta_keywords'] ='Arabic mehandi designs, Arabic mehandi artist in Timarpur, bridal mehandi design 2022, Dulha dulhan mehandi.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function babyshowermehandi($page ='baby-shower-mehandi')
     {
          $data['title'] ='Baby shower mehendi artist in Timarpur';

          $data['meta_description'] ='Baby shower mehandi designs, Baby shower mehendi artist in Timarpur, Mehandi dulhan design, Arabic bridal mehndi design  +91-8882438771.';
          $data['meta_keywords'] ='Baby shower mehandi designs, Baby shower mehendi artist in Timarpur, Mehandi dulhan design, Arabic bridal mehndi design.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function besthennaartist($page ='best-henna-artist')
     {
          $data['title'] ='Best henna artist in Timarpur';

          $data['meta_description'] =' Best henna artist in Timarpur, Best henna artist near me, Mehandi bridal design, Mehandi design bridal full hand  +91-8882438771.';
          $data['meta_keywords'] ='Best henna artist in Timarpur, Best henna artist near me, Mehandi bridal design, Mehandi design bridal full hand.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function bestmehandiartist($page ='best-mehandi-artist')
     {
          $data['title'] ='Best mehndi artist in Timarpur';

          $data['meta_description'] ='Best mehndi artist in Timarpur, Best mehendi artist in Timarpur, Bride mehandi, Wedding mehandi designs  +91-8882438771.';
          $data['meta_keywords'] ='Best mehndi artist in Timarpur, Best mehendi artist in Timarpur, Bride mehandi, Wedding mehandi designs.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function bestmehandiprice($page ='best-mehandi-price')
     {
       $data['title'] ='Best mehandi prices in Timarpur';

       $data['meta_description'] ='Best mehndi art, Best mehndi price in Timarpur, best bridal mehndi design +91-8882438771.';
       $data['meta_keywords'] ='Best mehndi art, Best mehndi price in Timarpur, best bridal mehndi design.';
       $data['meta_author'] = "https://anilmehendiart.com/";
       $data['city']= "timarpur";
       $data['cityn']= "Timarpur";
       echo view('pages/header', $data);
       echo view('pages/'.$page, $data);
       echo view('pages/footer', $data);
     }
     public function bombaystylemehandi($page ='bombay-style-mehandi')
     {
          $data['title'] ='Mumbai style mehndi artist in Timarpur';

          $data['meta_description'] ='Dulha dulhan mehandi design, bridal mehandi ke design, Bombay style mehndi designs, Mumbai style mehndi artist in Timarpur  +91-8882438771.';
          $data['meta_keywords'] ='Dulha dulhan mehandi design, bridal mehandi ke design, Bombay style mehndi designs, Mumbai style mehndi artist in Timarpur.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function bridalhennaartist($page ='bridal-henna-artist')
     {
          $data['title'] ='Bridal henna design at home';

          $data['meta_description'] ='Bridal henna artist, Bridal henna design at home, mehandi for bride, Dulhan bridal mehndi  +91-8882438771.';
          $data['meta_keywords'] ='Bridal henna artist, Bridal henna design at home, mehandi for bride, Dulhan bridal mehndi.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function bridalhennadesign($page ='bridal-henna-design')
     {
          $data['title'] ='Bridal henna artist in Timarpur';

          $data['meta_description'] ='Bridal henna designs, Dulhan design mehandi, groom mehndi designs, Bridal henna artist in Timarpur  +91-8882438771.';
          $data['meta_keywords'] =' Bridal henna designs, Dulhan design mehandi, groom mehndi designs, Bridal henna artist in Timarpur';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function bridalmehandiartist($page ='bridal-mehandi-artist')
     {
          $data['title'] ='Bridal mehndi art design';

          $data['meta_description'] ='Mehndi design dulha dulhan, Doli mehndi design, Bridal mehndi art design, Bridal mehndi near me  +91-8882438771.';
          $data['meta_keywords'] ='Mehndi design dulha dulhan, Doli mehndi design, Bridal mehndi art design, Bridal mehndi near me.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function bridalmehandiartists($page ='bridal-mehandi-artists')
     {
          $data['title'] ='Bridal mehndi art near me';

          $data['meta_description'] ='Bridal mehndi art near me, Latest bridal mehndi designs, Wedding mehandi, Simple dulhan mehandi  +91-8882438771.';
          $data['meta_keywords'] ='Bridal mehndi art near me, Latest bridal mehndi designs, Wedding mehandi, Simple dulhan mehandi.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function bridalmehandicost($page ='bridal-mehandi-cost')
     {
          $data['title'] ='Mehandi cost in Timarpur';

          $data['meta_description'] ='Mehandi cost in Timarpur, Bridal mehandi cost in Timarpur, Back full hand bridal mehndi design, Groom mehndi designs for hands +91-8882438771.';
          $data['meta_keywords'] ='Mehandi cost in Timarpur, Bridal mehandi cost in Timarpur, Back full hand bridal mehndi design, Groom mehndi designs for hands.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function bridalmehandiprice($page ='bridal-mehandi-price')
     {
          $data['title'] ='Heavy mehandi artist in Timarpur';

          $data['meta_description'] ='Bridal mehndi art price, Bridal Mehndi New Design, Wedding Bridal Mehndi Designs For Full Hands, Bridal mehndi price in Timarpur  +91-8882438771.';
          $data['meta_keywords'] ='Groom Mehndi Design 2022, Beautiful Bridal Mehndi Design, Bridal mehndi design price, Heavy mehandi artist in Timarpur.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function gujratimehandi($page ='gujrati-mehandi')
     {
          $data['title'] ='Gujrati mehndi artist in Timarpur';

          $data['meta_description'] ='Bridal Mehndi Foot Design, Mehandi For Wedding, Mehandi Design For Groom Hand, Gujrati mehndi artist in Timarpur  +91-8882438771.';
          $data['meta_keywords'] ='Bridal Mehndi Foot Design, Mehandi For Wedding, Mehandi Design For Groom Hand, Gujrati mehndi artist in Timarpur';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function heavymehandiartists($page ='heavy-mehandi-artists')
     {
          $data['title'] ='Heavy mehandi artist in Timarpur';

          $data['meta_description'] ='Groom Mehndi Design 2022, Beautiful Bridal Mehndi Design, Bridal mehndi design price, Heavy mehandi artist in Timarpur.';
          $data['meta_keywords'] ='Groom Mehndi Design 2022, Beautiful Bridal Mehndi Design, Bridal mehndi design price, Heavy mehandi artist in Timarpur.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function hennaartist($page ='henna-artist')
     {
          $data['title'] ='Henna artist in Timarpur';

          $data['meta_description'] ='Henna artist in Timarpur, Henna artist near me, Bridal Mehndi Latest Design, Mehndi Artist +91-8882438771.';
          $data['meta_keywords'] ='Henna artist in Timarpur, Henna artist near me, Bridal Mehndi Latest Design, Mehndi Artist.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function hennadesigns($page ='henna-designs')
     {
          $data['title'] ='Henna artist near me';

          $data['meta_description'] ='Henna designs simple, Henna artist near me, Moti Mehndi Design, Designer Mehendi Designs  +91-8882438771.';
          $data['meta_keywords'] ='Henna designs simple, Henna artist near me, Moti Mehndi Design, Designer Mehendi Designs.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function jaipurimehandi($page ='jaipuri-mehandi')
     {
          $data['title'] ='Jaipuri mehndi design';

          $data['meta_description'] ='Jaipuri mehndi design, Jaypuri mehndi artist in Timarpur, Mehndi Art Design, Henna Designer +91-8882438771.';
          $data['meta_keywords'] ='Jaipuri mehndi design, Jaypuri mehndi artist in Timarpur, Mehndi Art Design, Henna Designer.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function karwachauthmehandi($page ='karwachauth-mehandi')
     {
          $data['title'] ='Karwa Chauth Mehandi artist in Timarpur';

          $data['meta_description'] ='Karwa Chauth mehandi designs, Karwa Chauth Mehandi artist in Timarpur, Mehndi Portrait, Anniversary Mehndi Design +91-8882438771.';
          $data['meta_keywords'] ='Karwa Chauth mehandi designs, Karwa Chauth Mehandi artist in Timarpur, Mehndi Portrait, Anniversary Mehndi Design.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function legmehandiartists($page ='leg-mehandi-artists')
     {
          $data['title'] ='Leg mehndi artist in Timarpur';

          $data['meta_description'] ='Engagement Mehndi, Engagement Mehndi Design, Leg mehndi artist in Timarpur, Leg mehndi artist near me  +91-8882438771.';
          $data['meta_keywords'] ='Engagement Mehndi, Engagement Mehndi Design, Leg mehndi artist in Timarpur, Leg mehndi artist near me.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function madhubanimehandi($page ='madhubani-mehandi')
     {
          $data['title'] ='Madhubani mehandi artist in Timarpur';

          $data['meta_description'] ='Madhubani mehandi designs, Madhubani mehandi artist in Timarpur, Mehandi Design For Engagement, Engagement Mehendi Design +91-8882438771.';
          $data['meta_keywords'] ='Madhubani mehandi designs, Madhubani mehandi artist in Timarpur, Mehandi Design For Engagement, Engagement Mehendi Design.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function marwarimehandi($page ='marwari-mehandi')
     {
          $data['title'] ='Marwari mehndi artist in Timarpur';

          $data['meta_description'] ='Mehndi Designs For Engagement Bride, Engagement Mehndi Designs For Bride, Marwari bridal mehndi design, Marwari mehndi artist in Timarpur  +91-8882438771.';
          $data['meta_keywords'] ='Mehndi Designs For Engagement Bride, Engagement Mehndi Designs For Bride, Marwari bridal mehndi design, Marwari mehndi artist in Timarpur.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function mehandiwala($page ='mehandi-wala')
     {
          $data['title'] ='Mehndi wala near me';

          $data['meta_description'] ='Mehndi Designs Engagement, Ring Ceremony Mehndi Designs For Engagement Bride, Mehndi wala near me, Mehndi wali in Timarpur  +91-8882438771.';
          $data['meta_keywords'] ='Mehndi Designs Engagement, Ring Ceremony Mehndi Designs For Engagement Bride, Mehndi wala near me, Mehndi wali in Timarpur.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function moroccanmehandi($page ='moroccan-mehandi')
     {
          $data['title'] ='Moroccan mehndi artist in Timarpur';

          $data['meta_description'] ='Simple Engagement Mehndi Designs, Engagement Bangle Mehndi Design, Moroccan mehndi artist in Timarpur, Moroccan mehndi artist near me  +91-8882438771.';
          $data['meta_keywords'] ='Simple Engagement Mehndi Designs, Engagement Bangle Mehndi Design, Moroccan mehndi artist in Timarpur, Moroccan mehndi artist near me.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function normalmehandi($page ='normal-mehandi')
     {
          $data['title'] ='Simple mehandi designs';

          $data['meta_description'] ='Simple mehandi designs, Modern Engagement Mehndi Designs, Ring Ceremony Engagement Mehndi Design, Simple mehandi artist in Timarpur +91-8882438771.';
          $data['meta_keywords'] ='Simple mehandi designs, Modern Engagement Mehndi Designs, Ring Ceremony Engagement Mehndi Design, Simple mehandi artist in Timarpur.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function rajsthanimehandi($page ='rajsthani-mehandi')
     {
          $data['title'] ='Rajsthani mehndi artist in Timarpur';

          $data['meta_description'] ='Stylish Engagement Mehndi, Stylish Back Hand Mehndi Designs, Rajsthani mehndi artist in Timarpur, Rajsthani mehndi artist near me  +91-8882438771.';
          $data['meta_keywords'] ='Stylish Engagement Mehndi, Stylish Back Hand Mehndi Designs, Rajsthani mehndi artist in Timarpur, Rajsthani mehndi artist near me.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function rakshabandhanmehandi($page ='rakshabandhan-mehandi')
     {
          $data['title'] ='Raksha bandhan mehandi artist in Timarpur';

          $data['meta_description'] ='Raksha bandhan mehandi designs, Raksha bandhan mehandi artist in Timarpur, Stylish Mehndi Design, Stylish And Easy Mehndi Design +91-8882438771.';
          $data['meta_keywords'] ='Raksha bandhan mehandi designs, Raksha bandhan mehandi artist in Timarpur, Stylish Mehndi Design, Stylish And Easy Mehndi Design.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function southindianmehandi($page ='south-indian-mehandi')
     {
          $data['title'] ='South Indian mehndi artist in Timarpur';

          $data['meta_description'] ='Stylish Mehandi Artist, Stylish Mehndi Designs For Front Hand, Simple Stylish Mehndi Design, Simple And Stylish Mehndi Design +91-8882438771.';
          $data['meta_keywords'] ='South Indian mehndi design, South Indian mehndi artist in Timarpur, Mehndi Design Stylish, New Stylish Mehndi Design.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function stylishmehandiartist($page ='stylish-mehandi-artist')
     {
          $data['title'] ='Stylish Mehandi Artist';

          $data['meta_description'] ='Stylish Mehandi Artist, Stylish Mehndi Designs For Front Hand, Simple Stylish Mehndi Design, Simple And Stylish Mehndi Design +91-8882438771.';
          $data['meta_keywords'] = 'Stylish Mehandi Artist, Stylish Mehndi Designs For Front Hand, Simple Stylish Mehndi Design, Simple And Stylish Mehndi Design.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function tattoostylemehandi($page ='tattoo-style-mehandi')
     {
          $data['title'] ='Tattoo style mehandi artist in Timarpur';

          $data['meta_description'] ='Tattoo style mehandi designs, Tattoo style mehandi artist in Timarpur, Stylish Full Hand Mehndi Design, Stylish Arabic Mehndi Design.';
          $data['meta_keywords'] ='Tattoo style mehandi designs, Tattoo style mehandi artist in Timarpur, Stylish Full Hand Mehndi Design, Stylish Arabic Mehndi Design.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }

     public function traditionalmehandi($page ='traditional-mehandi')
     {
          $data['title'] ='Traditional mehandi artist in Timarpur';

          $data['meta_description'] ='Traditional mehandi artist in Timarpur, Stylish Front Hand Mehndi Design, Stylish Leg Mehndi Design, Traditional mehandi designs +91-8882438771.';
          $data['meta_keywords'] ='Traditional mehandi artist in Timarpur, Stylish Front Hand Mehndi Design, Stylish Leg Mehndi Design, Traditional mehandi designs.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }
     public function weddingmehandiartist($page ='wedding-mehandi-artist')
     {
          $data['title'] ='Wedding mehandi artist in Timarpur';

          $data['meta_description'] ='Wedding mehandi artist in Timarpur, Stylish Foot Mehndi Design, Stylish Simple Mehndi Design, Stylish Back Side Mehndi Design +91-8882438771.';
          $data['meta_description'] ='Wedding mehandi artist in Timarpur, Stylish Foot Mehndi Design, Stylish Simple Mehndi Design, Stylish Back Side Mehndi Design +91-8882438771.';
          $data['meta_author'] = "https://anilmehendiart.com/";
          $data['city']= "timarpur";
          $data['cityn']= "Timarpur";
          echo view('pages/header', $data);
          echo view('pages/'.$page, $data);
          echo view('pages/footer', $data);
     }

}
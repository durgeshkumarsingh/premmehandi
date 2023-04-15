<?php namespace App\Controllers;

class MayurViharPhase2Controller extends BaseController{
 
        public function home($page = 'home')
        {
            $data['title'] ='Bridal mehndi artist in Mayur Vihar Phase2 ';
            $data['meta_description'] ='Bridal mehndi artist in Mayur Vihar Phase2 , Best bridal mehndi artist in Mayur Vihar Phase2 , Mehndi artist in Mayur Vihar Phase2 , Mehndi artist +91-8882438771.';
            $data['meta_keywords'] ='Bridal mehndi artist in Mayur Vihar Phase2 , Best bridal mehndi artist in Mayur Vihar Phase2 , Mehndi artist in Mayur Vihar Phase2 , Mehndi artist.'; 
            $data['meta_author'] = "https://anilmehendiart.com/"; 
            $data['city']= "mayurviharphase2";
            $data['cityn']= "Mayur Vihar Phase2 "; 
            echo view('pages/header', $data);
            echo view('pages/'.$page, $data);
            echo view('pages/footer', $data);
        }

        public function about($page = 'about')
        { 
            $data['title'] ='Best bridal mehndi artist in Mayur Vihar Phase2 ';      
            $data['meta_description'] ='Best mehandi artists in Mayur Vihar Phase2 , Best bridal mehndi artist in Mayur Vihar Phase2 , Top mehandi artists near me, Anil mehandi artist in Mayur Vihar Phase2  +91-8882438771.';
            $data['meta_keywords'] ='Best mehandi artists in Mayur Vihar Phase2 , Best bridal mehndi artist in Mayur Vihar Phase2 , Top mehandi artists near me, Bride mehandi artist near me.';
            $data['meta_author'] = "https://anilmehendiart.com/"; 
            $data['city']= "mayurviharphase2";
            $data['cityn']= "Mayur Vihar Phase2 "; 
            echo view('pages/header', $data);
            echo view('pages/'.$page, $data);
            echo view('pages/footer', $data);
        }
        public function services($page = 'services')
        {
            $data['title'] ='Bridal mehandi services at home in Mayur Vihar Phase2 ';
            $data['meta_description'] ='Bridal mehandi services at home in Mayur Vihar Phase2 , Traditional mehandi services at home in Mayur Vihar Phase2 , Stylish mehandi services at home in Mayur Vihar Phase2 , Mehandi services at home.';
            $data['meta_keywords'] ='Bridal mehandi services at home in Mayur Vihar Phase2 , Traditional mehandi services at home in Mayur Vihar Phase2 , Stylish mehandi services at home in Mayur Vihar Phase2 , Mehandi services at home.';
            $data['meta_author'] = "https://anilmehendiart.com/";
            $data['city']= "mayurviharphase2";
            $data['cityn']= "Mayur Vihar Phase2 "; 
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
            $data['city']= "mayurviharphase2";
            $data['cityn']= "Mayur Vihar Phase2 "; 
            echo view('pages/header', $data);
            echo view('pages/'.$page,$data);
            echo view('pages/footer', $data);
        }
        public function contact($page ='contact')
        {
            $data['title'] ='Best bridal mehandi artist near me';

            $data['meta_description'] ='Anil mehandi, Best bridal mehandi artist near me, Mehandi artists in south Mayur Vihar Phase2 , Bridal mehandi price in Mayur Vihar Phase2  +91-8882438771.';
            $data['meta_keywords'] ='Anil mehandi, Best bridal mehandi artist near me, Mehandi artists in south Mayur Vihar Phase2 , Bridal mehandi price in Mayur Vihar Phase2 .';
            $data['meta_author'] = "https://anilmehendiart.com/";
            $data['city']= "mayurviharphase2";
            $data['cityn']= "Mayur Vihar Phase2 "; 
            echo view('pages/header', $data);
            echo view('pages/'.$page, $data);
            echo view('pages/footer', $data);
        }
        public function anniversary($page ='anniversary-mehandi')
        {
            $data['title'] ='Anniversary mehandi artists in Mayur Vihar Phase2 ';

            $data['meta_description'] ='Anniversary mehandi designs, Anniversary mehandi artists in Mayur Vihar Phase2 , Anniversary mehandi designers in Mayur Vihar Phase2 , Anniversary mehandi artists near me 9958189454.';
            $data['meta_keywords'] ='Anniversary mehandi designs, Anniversary mehandi artists in Mayur Vihar Phase2 , Anniversary mehandi designers in Mayur Vihar Phase2 , Anniversary mehandi artists near me.';
            $data['meta_author'] = "https://anilmehendiart.com/";
            $data['city']= "mayurviharphase2";
            $data['cityn']= "Mayur Vihar Phase2 "; 
            echo view('pages/header', $data);
            echo view('pages/'.$page, $data);
            echo view('pages/footer', $data);
        }
        public function bridalmehandi($page ='bridal-mehandi')
        {
            $data['title'] ='Bridal mehandi artist in Mayur Vihar Phase2 ';

            $data['meta_description'] ='Bridal mehandi designs, Bridal mehandi artist in Mayur Vihar Phase2 , Bridal mehandi designers in Mayur Vihar Phase2 , Bridal mehendi artists near me +91-8882438771.';
            $data['meta_keywords'] ='Bridal mehandi designs, Bridal mehandi artist in Mayur Vihar Phase2 , Bridal mehandi designers in Mayur Vihar Phase2 , Bridal mehendi artists near me.';
            $data['meta_author'] = "https://anilmehendiart.com/";
            $data['city']= "mayurviharphase2";
            $data['cityn']= "Mayur Vihar Phase2 "; 
            echo view('pages/header', $data);
            echo view('pages/'.$page, $data);
            echo view('pages/footer', $data);
        }
        public function engagementmehandi($page ='engagement-mehandi')
        {
            $data['title'] ='Engagement mehandi artists in Mayur Vihar Phase2 ';

            $data['meta_description'] ='Engagement mehandi artists in Mayur Vihar Phase2 , Engagement mehndi designs, Engagement mehandi designers in Mayur Vihar Phase2 , Engagement mehandi artists near me +91-8882438771.';
            $data['meta_keywords'] ='Engagement mehandi artists in Mayur Vihar Phase2 , Engagement mehndi designs, Engagement mehandi designers in Mayur Vihar Phase2 , Engagement mehandi artists near me.';
            $data['meta_author'] = "https://anilmehendiart.com/";
            $data['city']= "mayurviharphase2";
            $data['cityn']= "Mayur Vihar Phase2 "; 
            echo view('pages/header', $data);
            echo view('pages/'.$page, $data);
            echo view('pages/footer', $data);
        }
        public function footmehandi($page ='foot-mehandi')
        {
         $data['title'] ='Foot mehandi artist in Mayur Vihar Phase2 ';

         $data['meta_description'] ='Foot mehandi designs, Foot mehandi artists in Mayur Vihar Phase2 , Leg mehandi designs, Foot mehandi artist near me +91-8882438771.';
         $data['meta_keywords'] ='Foot mehandi designs, Foot mehandi artist in Mayur Vihar Phase2 , Leg mehandi designs, Foot mehandi artist near me.';
         $data['meta_author'] = "https://anilmehendiart.com/";
         $data['city']= "mayurviharphase2";
         $data['cityn']= "Mayur Vihar Phase2 "; 
         echo view('pages/header', $data);
         echo view('pages/'.$page, $data);
         echo view('pages/footer', $data);
     } 
     public function portraitmehandi($page ='portrait-mehandi')
     {
       $data['title'] ='Portrait mehendi artists in Mayur Vihar Phase2 ';

       $data['meta_description'] ='Portrait mehendi artists in Mayur Vihar Phase2 , Portrait mehandi designs, Portrait mehandi artists with prices in Mayur Vihar Phase2 , Portrait mehendi artists near me 9958189454.';
       $data['meta_keywords'] ='Portrait mehendi artists in Mayur Vihar Phase2 , Portrait mehandi designs, Portrait mehandi artists with prices in Mayur Vihar Phase2 , Portrait mehendi artists near me.';
       $data['meta_author'] = "https://anilmehendiart.com/";
       $data['city']= "mayurviharphase2";
       $data['cityn']= "Mayur Vihar Phase2 "; 
       echo view('pages/header', $data);
       echo view('pages/'.$page, $data);
       echo view('pages/footer', $data);
    }
    public function stylishmehandi($page ='stylish-mehandi')
    {
     $data['title'] ='Stylish mehandi artists in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Stylish mehandi designs, Stylish mehandi artists in Mayur Vihar Phase2 , Stylish mehandi artists near me, Stylish mehandi artist with prices in Mayur Vihar Phase2  +91-8882438771.';
     $data['meta_keywords'] ='Stylish mehandi designs, Stylish mehandi artists in Mayur Vihar Phase2 , Stylish mehandi artists near me, Stylish mehandi artist with prices in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function arabicmehandiartist($page ='arabic-mehandi-artists')
    {
       $data['title'] ='Arabic mehndi artist in Mayur Vihar Phase2 ';

       $data['meta_description'] ='Arabic henna designs, Arabic mehndi artist in Mayur Vihar Phase2 , Arabic mehndi designer in Mayur Vihar Phase2 , Arabic mehndi artist near me +91-8882438771.';
       $data['meta_keywords'] ='Arabic henna designs, Arabic mehndi artist in Mayur Vihar Phase2 , Arabic mehndi designer in Mayur Vihar Phase2 , Arabic mehndi artist near me.';
       $data['meta_author'] = "https://anilmehendiart.com/";
       $data['city']= "mayurviharphase2";
       $data['cityn']= "Mayur Vihar Phase2 "; 
       echo view('pages/header', $data);
       echo view('pages/'.$page, $data);
       echo view('pages/footer', $data);
    }
    public function arabicmehandi($page ='arabic-mehandi')
    {
     $data['title'] ='Arabic mehandi artists in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Arabic mehandi designs, Arabic mehandi artists in Mayur Vihar Phase2 , Arabic mehandi artists near me, Arabic mehandi artists with prices in Mayur Vihar Phase2  +91-8882438771.';
     $data['meta_keywords'] ='Arabic mehandi designs, Arabic mehandi artists in Mayur Vihar Phase2 , Arabic mehandi artists near me, Arabic mehandi artists with prices in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function babyshowermehandi($page ='baby-shower-mehandi')
    {
     $data['title'] ='Baby shower mehendi artists in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Baby shower mehandi designs, Baby shower mehendi artists in Mayur Vihar Phase2 , Baby shower mehendi artists near me, Baby shower mehandi  +91-8882438771.';
     $data['meta_keywords'] ='Baby shower mehandi designs, Baby shower mehendi artists in Mayur Vihar Phase2 , Baby shower mehendi artists near me, Baby shower mehandi.';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function besthennaartist($page ='best-henna-artist')
    {
     $data['title'] ='Best henna artist in Mayur Vihar Phase2 ';

     $data['meta_description'] =' Best henna artist in Mayur Vihar Phase2 . Best henna artist near me, Best henna artist, Best henna designer in Mayur Vihar Phase2   +91-8882438771.';
     $data['meta_keywords'] ='Best henna artist in Mayur Vihar Phase2 . Best henna artist near me, Best henna artist, Best henna designer in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function bestmehandiartist($page ='best-mehandi-artist')
    {
     $data['title'] ='Best mehndi artist in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Best mehndi artist in Mayur Vihar Phase2 , Best mehendi artist in Mayur Vihar Phase2 , Best mehandi artist in Mayur Vihar Phase2 , Best mehndi artist near me  +91-8882438771.';
     $data['meta_keywords'] ='Best mehndi artist in Mayur Vihar Phase2 , Best mehendi artist in Mayur Vihar Phase2 , Best mehandi artist in Mayur Vihar Phase2 , Best mehndi artist near me.';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function bestmehandiprice($page ='best-mehandi-price')
    {
       $data['title'] ='Best mehandi prices in Mayur Vihar Phase2 ';

       $data['meta_description'] ='Best mehndi art, Best mehndi art, Best mehndi price in Mayur Vihar Phase2 , Best mehandi prices in Mayur Vihar Phase2   +91-8882438771.';
       $data['meta_keywords'] ='Best mehndi art, Best mehndi art, Best mehndi price in Mayur Vihar Phase2 , Best mehandi prices in Mayur Vihar Phase2 .';
       $data['meta_author'] = "https://anilmehendiart.com/";
       $data['city']= "mayurviharphase2";
       $data['cityn']= "Mayur Vihar Phase2 "; 
       echo view('pages/header', $data);
       echo view('pages/'.$page, $data);
       echo view('pages/footer', $data);
    }
    public function bombaystylemehandi($page ='bombay-style-mehandi')
    {
     $data['title'] ='Mumbai style mehndi artist in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Bombay style mehndi design images, Bombay style mehndi latest design, Bombay style mehndi designs, Mumbai style mehndi artist in Mayur Vihar Phase2   +91-8882438771.';
     $data['meta_keywords'] ='Bombay style mehndi design images, Bombay style mehndi latest design, Bombay style mehndi designs, Mumbai style mehndi artist in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
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
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function bridalhennadesign($page ='bridal-henna-design')
    {
     $data['title'] ='Bridal henna artist in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Bridal henna designs, Bridal henna artist near me, Bridal henna, Bridal henna artist in Mayur Vihar Phase2   +91-8882438771.';
     $data['meta_keywords'] =' Bridal henna designs, Bridal henna artist near me, Bridal henna, Bridal henna artist in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
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
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function bridalmehandiartists($page ='bridal-mehandi-artists')
    {
     $data['title'] ='Bridal mehndi art near me';

     $data['meta_description'] ='Bridal mehndi art near me, Latest bridal mehndi designs, Latest bridal mehndi artist in Mayur Vihar Phase2 , Top bridal mehndi artist in Mayur Vihar Phase2   +91-8882438771.';
     $data['meta_keywords'] ='Bridal mehndi art near me, Latest bridal mehndi designs, Latest bridal mehndi artist in Mayur Vihar Phase2 , Top bridal mehndi artist in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function bridalmehandicost($page ='bridal-mehandi-cost')
    {
     $data['title'] ='Mehandi cost in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Mehandi cost in Mayur Vihar Phase2 , Bridal mehandi cost in Mayur Vihar Phase2 , Bridal henna prices in Mayur Vihar Phase2 , Bridal mehandi prices near me +91-8882438771.';
     $data['meta_keywords'] ='Mehandi cost in Mayur Vihar Phase2 , Bridal mehandi cost in Mayur Vihar Phase2 , Bridal henna prices in Mayur Vihar Phase2 , Bridal mehandi prices near me.';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function bridalmehandiprice($page ='bridal-mehandi-price')
    {
     $data['title'] ='Bridal mehndi price in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Bridal mehndi art price, Bridal mehndi price, Bridal mehndi design price, Bridal mehndi price in Mayur Vihar Phase2   +91-8882438771.';
     $data['meta_keywords'] ='Bridal mehndi art price, Bridal mehndi price, Bridal mehndi design price, Bridal mehndi price in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function gujratimehandi($page ='gujrati-mehandi')
    {
     $data['title'] ='Gujrati mehndi artist in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Gujrati mehndi design, Gujrati bridal mehndi designs, Gujrati mehndi photo, Gujrati mehndi artist in Mayur Vihar Phase2   +91-8882438771.';
     $data['meta_keywords'] ='Gujrati mehndi design, Gujrati bridal mehndi designs, Gujrati mehndi photo, Gujrati mehndi artist in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function heavymehandiartists($page ='heavy-mehandi-artists')
    {
     $data['title'] ='Bridal mehndi price in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Bridal mehndi art price, Bridal mehndi price, Bridal mehndi design price, Bridal mehndi price in Mayur Vihar Phase2 .';
     $data['meta_keywords'] ='Bridal mehndi art price, Bridal mehndi price, Bridal mehndi design price, Bridal mehndi price in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function hennaartist($page ='henna-artist')
    {
     $data['title'] ='Henna artists in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Henna artists in Mayur Vihar Phase2 , Henna artists near me, Henna designers in Mayur Vihar Phase2 , Henna designers near me +91-8882438771.';
     $data['meta_keywords'] ='Henna artists in Mayur Vihar Phase2 , Henna artists near me, Henna designers in Mayur Vihar Phase2 , Henna designers near me.';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function hennadesigns($page ='henna-designs')
    {
     $data['title'] ='Henna artist near me';

     $data['meta_description'] ='Henna designs simple, Henna artist near me, Henna artist charges in Mayur Vihar Phase2 , Henna artist in Mayur Vihar Phase2   +91-8882438771.';
     $data['meta_keywords'] ='Henna designs simple, Henna artist near me, Henna artist charges in Mayur Vihar Phase2 , Henna artist in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function jaipurimehandi($page ='jaipuri-mehandi')
    {
     $data['title'] ='Jaipuri mehndi design';

     $data['meta_description'] ='Jaipuri mehndi design, Jaypuri mehndi artist in Mayur Vihar Phase2 , Jaipuri mehndi artist near me, Jaipuri mehndi art at home +91-8882438771.';
     $data['meta_keywords'] ='Jaipuri mehndi design, Jaypuri mehndi artist in Mayur Vihar Phase2 , Jaipuri mehndi artist near me, Jaipuri mehndi art at home.';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function karwachauthmehandi($page ='karwachauth-mehandi')
    {
     $data['title'] ='Karwa Chauth Mehandi artists in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Karwa Chauth mehandi designs, Karwa Chauth Mehandi artists in Mayur Vihar Phase2 , Karwa Chauth mehandi artists near me, Karwa Chauth henna artists +91-8882438771.';
     $data['meta_keywords'] ='Karwa Chauth mehandi designs, Karwa Chauth Mehandi artists in Mayur Vihar Phase2 , Karwa Chauth mehandi artists near me, Karwa Chauth mehandi artists with prices in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function legmehandiartists($page ='leg-mehandi-artists')
    {
     $data['title'] ='Leg mehndi artist in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Leg mehndi design simple, Leg mehndi design images, Leg mehndi artist in Mayur Vihar Phase2 , Leg mehndi artist near me  +91-8882438771.';
     $data['meta_keywords'] ='Leg mehndi design simple, Leg mehndi design images, Leg mehndi artist in Mayur Vihar Phase2 , Leg mehndi artist near me.';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function madhubanimehandi($page ='madhubani-mehandi')
    {
     $data['title'] ='';$data['title'] ='Madhubani mehandi artists in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Madhubani mehandi designs, Madhubani mehandi artists in Mayur Vihar Phase2 , Madhubani mehandi artists near me, Madhubani mehandi artists designers near me +91-8882438771.';
     $data['meta_keywords'] ='Madhubani mehandi designs, Madhubani mehandi artists in Mayur Vihar Phase2 , Madhubani mehandi artists near me, Madhubani mehandi artists designers near me.';;
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function marwarimehandi($page ='marwari-mehandi')
    {
     $data['title'] ='Marwari mehndi artist in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Marwari mehndi design, Marwari mehndi photo, Marwari bridal mehndi design, Marwari mehndi artist in Mayur Vihar Phase2   +91-8882438771.';
     $data['meta_keywords'] ='Marwari mehndi design, Marwari mehndi photo, Marwari bridal mehndi design, Marwari mehndi artist in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function mehandiwala($page ='mehandi-wala')
    {
     $data['title'] ='Mehndi wala near me';

     $data['meta_description'] ='Mehndi wala at home, Mehndi wala in Mayur Vihar Phase2 , Mehndi wala near me, Mehndi wali in Mayur Vihar Phase2   +91-8882438771.';
     $data['meta_keywords'] ='Mehndi wala at home, Mehndi wala in Mayur Vihar Phase2 , Mehndi wala near me, Mehndi wali in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function moroccanmehandi($page ='moroccan-mehandi')
    {
     $data['title'] ='Moroccan mehndi artist in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Moroccan mehndi designs, Moroccan mehndi photo, Moroccan mehndi artist in Mayur Vihar Phase2 , Moroccan mehndi artist near me  +91-8882438771.';
     $data['meta_keywords'] ='Moroccan mehndi designs, Moroccan mehndi photo, Moroccan mehndi artist in Mayur Vihar Phase2 , Moroccan mehndi artist near me.';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function normalmehandi($page ='normal-mehandi')
    {
     $data['title'] ='Simple mehandi designs';

     $data['meta_description'] ='Simple mehandi designs, Normal mehandi designs, Mehandi booking online, Simple mehandi artist in Mayur Vihar Phase2  +91-8882438771.';
     $data['meta_keywords'] ='Simple mehandi designs, Normal mehandi designs, Mehandi booking online, Simple mehandi artist in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function rajsthanimehandi($page ='rajsthani-mehandi')
    {
     $data['title'] ='Rajsthani mehndi artist in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Rajsthani mehndi design, Rajsthani mehndi photo, Rajsthani mehndi artist in Mayur Vihar Phase2 , Rajsthani mehndi artist near me  +91-8882438771.';
     $data['meta_keywords'] ='Rajsthani mehndi design, Rajsthani mehndi photo, Rajsthani mehndi artist in Mayur Vihar Phase2 , Rajsthani mehndi artist near me.';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function rakshabandhanmehandi($page ='rakshabandhan-mehandi')
    {
     $data['title'] ='Raksha bandhan mehandi artist in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Raksha bandhan mehandi designs, Raksha bandhan mehandi artists in Mayur Vihar Phase2 , Raksha bandhan mehandi artists near me, Raksha bandhan mehandi +91-8882438771.';
     $data['meta_keywords'] ='Raksha bandhan mehandi designs, Raksha bandhan mehandi artists in Mayur Vihar Phase2 , Raksha bandhan mehandi artists near me, Raksha bandhan mehandi.';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function southindianmehandi($page ='south-indian-mehandi')
    {
     $data['title'] ='South Indian mehndi artist in Mayur Vihar Phase2 ';

     $data['meta_description'] ='South Indian mehndi design, South Indian mehndi artist in Mayur Vihar Phase2 , South Indian mehndi artist near me, South Indian bridal mehndi design  +91-8882438771.';
     $data['meta_keywords'] ='South Indian mehndi design, South Indian mehndi artist in Mayur Vihar Phase2 , South Indian mehndi artist near me, South Indian bridal mehndi design.';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function stylishmehandiartist($page ='stylish-mehandi-artist')
    {
     $data['title'] ='Stylish Mehandi Artist';

     $data['meta_description'] ='South Indian mehndi design, South Indian mehndi artist in Mayur Vihar Phase2 , South Indian mehndi artist near me, South Indian bridal mehndi design  +91-8882438771.';
     $data['meta_keywords'] = 'Tattoo style mehandi designs, Tattoo style mehandi artist in Mayur Vihar Phase2 , Tattoo style mehandi artists near me, Tattoo style mehandi designers in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function tattoostylemehandi($page ='tattoo-style-mehandi')
    {
     $data['title'] ='Tattoo style mehandi artist in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Tattoo style mehandi designs, Tattoo style mehandi artist in Mayur Vihar Phase2 , Tattoo style mehandi artists near me, Tattoo style mehandi designers in Mayur Vihar Phase2 .';
     $data['meta_keywords'] ='Tattoo style mehandi designs, Tattoo style mehandi artist in Mayur Vihar Phase2 , Tattoo style mehandi artists near me, Tattoo style mehandi designers in Mayur Vihar Phase2 .';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }

    public function traditionalmehandi($page ='traditional-mehandi')
    {
     $data['title'] ='Traditional mehandi artists in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Traditional mehandi artists in Mayur Vihar Phase2 , Traditional mehandi artists near me, Traditional mehandi designers in Mayur Vihar Phase2 , Traditional mehandi designs +91-8882438771.';
     $data['meta_keywords'] ='Traditional mehandi artists in Mayur Vihar Phase2 , Traditional mehandi artists near me, Traditional mehandi designers in Mayur Vihar Phase2 , Traditional mehandi designs.';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
    public function weddingmehandiartist($page ='wedding-mehandi-artist')
    {
     $data['title'] ='Wedding mehandi artists in Mayur Vihar Phase2 ';

     $data['meta_description'] ='Wedding mehandi artists in Mayur Vihar Phase2 , Wedding mehandi artists near me, Wedding mehandi designs, Wedding mehandi designers near me +91-8882438771.';
     $data['meta_keywords'] ='Wedding mehandi artists in Mayur Vihar Phase2 , Wedding mehandi artists near me, Wedding mehandi designs, Wedding mehandi designers near me.';
     $data['meta_author'] = "https://anilmehendiart.com/";
     $data['city']= "mayurviharphase2";
     $data['cityn']= "Mayur Vihar Phase2 "; 
     echo view('pages/header', $data);
     echo view('pages/'.$page, $data);
     echo view('pages/footer', $data);
    }
}
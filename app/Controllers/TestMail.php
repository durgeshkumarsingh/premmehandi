<?php namespace App\Controllers;
use \CodeIgniter\Controller;

class TestMail extends BaseController{
        public function mail()
        {$data['title'] ='';
		    $this->load->library('email');
		    $this->load->library('form_validation');

		    //Set form validation
		    $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|max_length[16]');
		    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[6]|max_length[60]');
		    $this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[12]|max_length[200]');

    //Run form validation
    if ($this->form_validation->run() === FALSE)
    {$data['title'] ='';
        $this->load->view('contact');
    }
     else
    {$data['title'] ='';

        //Get the form data
        $name = $this->input->post('name');
        $from_email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        //Web master email
        $to_email = 'schhotelal602@gmail.com'; //Webmaster email, who receive mails

        //Mail settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'chhote@codemez.com'; // Your email address
        $config['smtp_pass'] = 'Chhote602'; // Your email account password
        $config['mailtype'] = 'html'; // or 'text'
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE; //No quotes required
        $config['newline'] = "\r\n"; //Double quotes required

        $this->email->initialize($config);                        

        //Send mail with data
        $this->email->from($from_email, $name);
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        
        if ($this->email->send())
        {$data['title'] ='';
         $this->session->set_flashdata('msg','<div class="alert alert-success">Mail sent!</div>');

            redirect('contact');
        }
         else
         {$data['title'] ='';
            $this->session->set_flashdata('msg','<div class="alert alert-danger">Problem in sending</div>');
            $this->load->view('contact');
         }
    }

}
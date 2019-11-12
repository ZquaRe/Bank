<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public $viewFolder = "";
    public $theme 	   = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "user_v";
         $this->load->library("form_validation");
         $this->load->library("session");
         $this->load->model('User_Model');
         $this->load->helper('url');

       // $this->theme = "front";

        /*
        $this->load->model('UsersModel');
        $this->load->library('form_validation');
        $this->load->helper('User_Helper');
        */
    }

    public function index()
	{
		$this->load->view("{$this->viewFolder}/index");
	}
 
    public function login()
    {


        if($this->session->Login['isLogin'] == 1) redirect(base_url());

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('error');

        $this->form_validation->set_rules("Username", "Kullanıcı adı", "trim|required");
        $this->form_validation->set_rules("Password", "Şifre", "trim|required");


        $this->form_validation->set_message(
            array(
                "required"=> '<div class="alert alert-danger" role="alert">{field} boş bırakılmamalıdır.</div>'
            )
        );

        if ($this->form_validation->run()){


            $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
            $userIp=$this->input->ip_address();
            $secret = $this->config->item('google_secret');
            $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL, $url); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
            $output = curl_exec($ch); 
            curl_close($ch);      
             
            $status= json_decode($output, true);

            print_r($status['success']);
            if ($status['success']) {

            $UserdoLogin = $this->User_Model->doLogin(array('username' => $this->input->post('Username'),'email' => $this->input->post('Username'),'phone_number' => $this->input->post('Username'), 'Password' => $this->input->post('Password')));
            if($UserdoLogin){ 
            $UserProfil = $this->User_Model->getUserProfile($this->input->post('Username'),$this->input->post('Username'),$this->input->post('Username'));
            $Sessions = array(
                'id' =>$UserProfil->id,
                'username' =>$UserProfil->username,
                'email' =>$UserProfil->email,
                'phone_number' =>$UserProfil->phone_number,
                'name' =>$UserProfil->name,
                'surname' =>$UserProfil->surname,
                'isAdmin' =>$UserProfil->isAdmin,
                'isLogin' => TRUE
                );
                $this->session->set_userdata('Login', $Sessions);
/*
$this->session->Login['id']
$this->session->Login['username']
$this->session->Login['email']
$this->session->Login['phone_number']
$this->session->Login['name']
$this->session->Login['surname']
$this->session->Login['isAdmin']
$this->session->Login['isLogin']
*/


                $this->session->set_flashdata('success', 'Giriş başarılı, yönlendiriliyorsunuz.');
                $this->load->view("{$this->viewFolder}/login");
                header('Refresh:2; url= '.base_url()); 


}
else
{
            $this->session->set_flashdata('error', 'Kullanıcı adınız veya şifreniz hatalı, kontrol edip tekrar deneyiniz.');
            $this->load->view("{$this->viewFolder}/login");

        }

            }
            else{
            $this->session->set_flashdata('error', 'Güvenlik Doğrulaması Başarısız!');
            $this->load->view("{$this->viewFolder}/login");

            }




        }else{
        $this->load->view("{$this->viewFolder}/login");

        }

    }
}

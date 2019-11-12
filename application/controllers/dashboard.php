<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public $viewFolder = "";
    public $theme      = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "dashboard_v";
        $this->load->library('currency');

       // $this->theme = "front";

        /*
        $this->load->model('UsersModel');
        $this->load->library('form_validation');
        $this->load->helper('User_Helper');
        */
       if($this->session->Login['isLogin'] != 1) redirect(base_url('login'));     

    }

    public function index()
    {
    $Data = new stdClass;
    $Data->Usd_Buy = $this->currency->Usd_Buy();
    $Data->Usd_Sell = $this->currency->Usd_Sell();
    $Data->Eur_Buy = $this->currency->Eur_Buy();
    $Data->Eur_Sell = $this->currency->Eur_Sell();
    $this->load->view("{$this->viewFolder}/index",$Data);
    }
}

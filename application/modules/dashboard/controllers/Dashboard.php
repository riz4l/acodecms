<?php
  defined('BASEPATH') OR exit('no direct script access allowed');

  class Dashboard extends CI_Controller {


    public function __Construct()
    {
        parent::__Construct();

    }

    public function index() 
    {
        $this->show();
    }

    public function show()
    {

      if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
      {
        redirect('auth/login');
      }

        $data['link_dashboard'] = 'class="active"';
        $this->load->view('header',$data);
        $this->load->view('list');
        $this->load->view('footer');
    }


  }
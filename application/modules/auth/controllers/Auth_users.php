<?php defined('BASEPATH') OR exit ('no direct script access allowed');

	class Auth_Users extends CI_Controller	{

		public function __Construct()
		{
			parent ::__Construct();

			$this->load->model('Users_model','mdl');
		}

		public function index()
		{

			if(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()){

				redirect('auth/login');
			}

			echo "hello world";
		}

		public function ajax_list()
		{


		}
	}
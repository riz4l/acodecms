<?php defined('BASEPATH') OR exit ('no direct script access allowed');

	class Auth_ajx extends CI_Controller	{

		public function __Construct()
		{
			parent ::__Construct();

			$this->load->model('Auth_ajx_model','mdl');
		}

		public function index()
		{

			if(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()){

				redirect('auth/login');
			}

		}

		public function ajax_list()
		{
			$list = $this->mdl->get_datatables();
			$no = $_POST['start'];
			$data = array();



			foreach ($list as $post) 
			{

				$group = $this->mdl->get_group_by_id($post->id);
			
				$group_ok = array_map(function($array) {
				    return $array['nama_group'];
				}, $group);

				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $post->first_name;
				$row[] = $post->last_name;
				$row[] = $post->email;
				$row[] = $group_ok;

				if($post->active =='1'){
					$row[] = '<a href="'.base_url().'auth/deactivate/'.$post->id.'">active</a>';
				}else if($post->active == '0'){
					$row[] = '<a href="'.base_url().'auth/activate/'.$post->id.'">deactive</a>';
				}
				$row[] = '<a class="btn btn-xs btn-primary" href="'.base_url().'auth/edit_user/'.$post->id.'" title="Edit"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
				
				$data[] = $row;
			}

			$output = array(
						"draw"=>$_POST['draw'],
						"recordsTotal"=> $this->mdl->count_all(),
						"recordsFiltered"=> $this->mdl->count_filtered(),
						"data"=> $data
				);

			echo json_encode($output);
		}
	}
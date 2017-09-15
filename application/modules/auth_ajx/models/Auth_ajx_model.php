<?php defined('BASEPATH') OR exit ('no direct script access allowed');

	class Auth_ajx_model extends CI_model	{

		var $table = "users";
		var $column_order = array('first_name','last_name','email','groups','status',null);
		var $column_search =  array('first_name','last_name','email','groups','status');
		var $order = array('id'=>'desc');
	}
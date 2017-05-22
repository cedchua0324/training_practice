<?<?php 

	class User_c extends CI_Controller
	{
		function index()
		{
			$t['title']="Ticketing System";
			$user_data = array();

			if ($query = $this->register_m->get_user()) {
				$user_data['users'] = $query;
			}
				
			$this->load->view('pages/user_v',$user_data,$t);
		}
	}
 ?>
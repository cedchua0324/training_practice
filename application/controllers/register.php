
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Register extends CI_Controller
	{

public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('register_m');
	 	}

		function index()
		{
			 $data['title'] = "My Real Title";
             $data['heading'] = "My Real Heading";
			if ($query = $this->register_m->get_user()) {
				$user_data['users'] = $query;
			}
				
			$this->load->view('pages/user_v',$user_data);
		}


		function add_user()
	{
		/*$this->load->model('register_m');

		$ticket = array(
			'firstName' => $this->input->post('firstName'),
			'lastName' => $this->input->post('lastName'),
			'userName' => $this->input->post('userName'),
			'password' => $this->input->post('password'),
			'userType' => "student"
			);

	
				$this->index();
			 //echo json_encode($data);*/

				$data = array(
			'firstName' => $this->input->post('firstName'),
			'lastName' => $this->input->post('lastName'),
			'userName' => $this->input->post('userName'),
			'password' => $this->input->post('password'),
			'userType' => "student"
				);
			$insert = $this->register_m->add_user($data);
			 echo json_encode(array("status" => TRUE));


	}

	function view_user()
	{
			$user_data = array();

			if ($query = $this->register_m->get_user()) {
				$user_data['users'] = $query;
			}
				
			$this->load->view('pages/user_v',$user_data);
	}

		function view_user_ajax()
	{
			
				$result = $this->register_m->get_user();
				echo json_encode($result);
		
	}



	 	function edit_user($id)
	{
		$this->load->model('register_m');

		$filters = array(
			'userId' => $id, 
		);
		$this->data['user'] = $this->register_m->get_users($filters)->row();

		$this->load->view('pages/registration_e', $this->data);


	}

	 	function edit_try($id)
	{
		$this->load->model('register_m');

		$filters = array(
			'userId' => $id, 
		);
		$this->data['users'] = $this->register_m->get_users($filters)->row();

		$this->load->view('pages/user_v', $this->data);
	}



		function update_user($id)
	{
		//$this->site_m->update_record($id);
		$this->load->model('register_m');

		$post_data = array(
			'firstName' => $this->input->post('firstName'),
			'lastName' => $this->input->post('lastName'),
			'userName' => $this->input->post('userName'),			
			'password' => $this->input->post('password')
		);


		$query = $this->register_m->update_record($post_data, $id);

		if ( $query ) {
			$this->view_user();
		}else{
			echo "error.";
		}

	}

		function delete_user($id)
		{
			$this->register_m->delete_record($id);
			$this->view_user();
		}






	


	}
?>


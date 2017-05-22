<?php


	class Register extends CI_Controller
	{

		function index()
		{
			 $data['title'] = "My Real Title";
             $data['heading'] = "My Real Heading";
			 $this->load->view('pages/registration', $data);
		}


		function add_user()
	{
		

		$this->load->model('register_m');

		$ticket = array(
			'firstName' => $this->input->post('firstName'),
			'lastName' => $this->input->post('lastName'),
			'userName' => $this->input->post('userName'),
			'password' => $this->input->post('password'),
			'userType' => "student"
			);

		$this->register_m->add_user($ticket);
			if ( $ticket ) {
				echo "<div class='alert alert-success' role='alert'>Ticket has been sent.</div>";
		// 	$this->session->set_flashdata(array(
		// 	'alert_type' => 'alert-info',
		// 	'show' => 'show',
		// 	'title' => 'Congratulations!',
		// 	'message' => 'Ticket has been sent.',
		// ));

			$this->index();
			
				}else{
				echo "error.";
			}

	}

	function view_user()
	{
		$this->load->model('register_m');
		$ticket_subj = array();
		if ($q = $this->register_m->get_user()){
			$ticket_subj['sub'] = $q;
		}

		$this->load->view('pages/incident_form',$ticket_subj);
	}


	


	}
?>
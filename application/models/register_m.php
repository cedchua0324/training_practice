<?php

  /**
  * 
  */
  class Register_m extends CI_Model
  {
  	
  		public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	  	function add_user($data)
	  	{
		return $this->db->insert('user', $data);

	  	}


	  	 public function get_user()
        {
                $query = $this->db->get('user', 10);
                return $query->result();
        }

     function get_users($params)
	{
		$this->db->select('*');

		$this->_filters($params);

		return $this->db->get('user'); 
	}

	function _filters($params)
	{
		
		if ( array_key_exists('userId', $params) && $params['userId'] !=null ) {
			$this->db->where('userId', $params['userId']);
		}
	}


	function update_record($post_data, $id)
	{
		$this->db->where('userId', $id);
		return $this->db->update('user', $post_data);
	}
	

	function delete_record($id)
		{
			$this->db->where('userId', $id);
			$this->db->delete('user');
		}

  }
?>
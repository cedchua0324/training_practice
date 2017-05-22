<?php

  /**
  * 
  */
  class Register_m extends CI_Model
  {
  	
	  	function add_user($user)
	  	{
	  		return $this->db->insert('user', $user);
	  	}


	  	 public function get_user()
        {
                $query = $this->db->get('user', 10);
                return $query->result();
        }
  }
?>
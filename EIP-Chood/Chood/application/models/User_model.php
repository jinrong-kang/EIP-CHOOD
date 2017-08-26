<?php 
	/**
		* 
		*/
		class User_model extends CI_Model
		{
			
			function __construct()
			{
				$this->load->database();
			}

			public function get_user($user_name = FALSE)
			{
				if ($user_name === FALSE)
				{
					$query = $this->db->get('t_user');
					return $query->result_array();
				}
				$query = $this->db->get_where('t_user', array('name' => $user_name));
				return $query->row_array();
			}

			public function set_user()
			{
				$data = array(
					'name' => $this->input->post('name'),
					'passwd' => md5($this->input->post('passwd')),
					'nickname' => $this->input->post('nickname'),
					'user_info' => $this->input->post('user_info')
					);
				return $this->db->insert('t_user', $data);
			}
		}	
?>
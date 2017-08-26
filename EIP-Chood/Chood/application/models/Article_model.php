<?php 
	/**
		* 
		*/
		class Article_model extends CI_Model
		{
			
			function __construct()
			{
				$this->load->database();
				$this->load->library('session');
			}

			public function get_article($slug = FALSE)
			{
				if ($slug === FALSE)
				{
					$query = $this->db->get('t_article');
					return $query->result_array();
				}

				$query = $this->db->get_where('t_article', array('slug' => $slug));
				return $query->row_array();
			}

			public function set_article()
			{
				$this->load->helper('url');
				$user_id = "1";
				$slug = url_title($this->input->post('title'), 'dash', TRUE);
				if(isset($_SESSION['name']))
				{
					$query = $this->db->get_where('t_user', array('name' => $_SESSION['name']));
					$user_id = $query->row_array()['id'];
				}
				$data = array(
					'title' => $this->input->post('title'),
					'slug' => $slug,
					'text' => $this->input->post('text'),
					'user_id' => $user_id
					);

				return $this->db->insert('t_article', $data);
			}
		}	
?>
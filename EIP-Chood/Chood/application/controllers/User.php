<?php


class User extends CI_Controller
{	
		function __construct()
		{
			parent::__construct();
			$this->load->model('article_model');
			$this->load->model('user_model');
			$this->load->helper(array('form', 'url'));
			$this->load->library('session');
		}

		public function login()
		{
			if(!isset($_POST['name']))
			{
				$data['error_msg'] = "";
				$this->load->view("article/login", $data);
			}
			else if(! $this->user_model->get_user($this->input->post("name")))
			{
				$data['error_msg'] = "This user name is Not Exist";
				$this->load->view("article/login", $data);
			}
			else
			{
				$user_data = $this->user_model->get_user($this->input->post("name"));
				$post_passwd = md5($this->input->post("passwd"));
				if($user_data["passwd"] == $post_passwd)
				{
					$this->session->set_userdata($user_data);
					$data['article'] = $this->article_model->get_article();
					$data['title'] = "Chinese Food";
					$this->load->view('article/index', $data);
				}
				else
				{
					$data['error_msg'] = "Wrong password , please try again";
					$this->load->view("article/login", $data);
				}
			}
		}

		public function register()
		{
			$data['passwd_error_msg'] = "";
			$this->load->helper('form');
		    $this->load->library('form_validation');

		    $this->form_validation->set_rules('name', 'Name', 'required');
		    $this->form_validation->set_rules('passwd', 'Password', 'required');

		    if ($this->form_validation->run() === FALSE)
		    {
		        $this->load->view('article/register',$data);
		    }
			else if($_POST['passwd'] != $_POST['confirmed_passwd'])
			{	
				$data['passwd_error_msg'] = "Confirmed PassWord should be same as PassWord, please try again";
				$this->load->view('article/register',$data);
			}
		    else
		    {
		        $this->user_model->set_user();
		        $this->load->view('article/register_success');
		    }
		}

		public function user_info()
		{	
			$query = $this->db->get_where('t_user', array('name' => $_SESSION['name']));
			$user_id = $query->row_array()['id'];
			$query = $this->db->get_where('t_article', array('user_id' => $user_id));
			$data['article'] = $query->result_array();
			$this->load->view('article/userinfo', $data);
		}

		public function log_out()
		{
			unset($_SESSION['name']);
			$this->session->sess_destroy();

			$data['article'] = $this->article_model->get_article();
			$data['title'] = "Chinese Food";
			$this->load->view('article/index', $data);
		}

		// public function user_manage()
		// {

		// 	$data['user'] = $this->user_model->get_user();	
		// 	$this->load->view('article/user_management', $data);
		// }

		public function user_manage()
	    {
	        $lang = 'en';
      		if($this->input->post("language") != NULL)
        		$lang = $this->input->post("language");
        	$user = $this->user_model->get_user();
	      	$this->twig->render('article/'.$lang.'_user_management',array('user' => $user));
	    }

}
<?php
	/**
	* 
	*/
	class Article extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('article_model');
			$this->load->model('user_model');
			$this->load->helper('url_helper');
			$this->load->helper(array('form', 'url'));
			$this->load->library('session');
		}

		public function index()
		{
			$data['article'] = $this->article_model->get_article();
			$data['title'] = "Chinese Food";

			$this->load->view('article/index', $data);
		}

		public function view($slug = NULL)
		{
			$data['article_item'] = $this->article_model->get_article($slug);

	        if (empty($data['article_item']))	
	        {
	                show_404();
	        }

	        $data['title'] = $data['article_item']['title'];
	        $this->load->view('article/view', $data);
		}

		public function create()
		{
			$config['upload_path']      = './uploads/';
	        $config['allowed_types']    = 'jpg';
	        $config['file_name']	= $this->input->post("title");
	        $config['overwrite']	= TRUE;
	        $config['max_size']     = 0;
	        $config['max_width']        = 0;
	        $config['max_height']       = 0;
	        $this->load->library('upload', $config);

			$this->load->library('form_validation');
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('text', 'Text', 'required');

			if ( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else
			{
				$config['image_library'] = 'gd2';
				$config['source_image'] = './uploads/'.$this->upload->data('file_name');
				$config['create_thumb'] = TRUE;
				$config['new_image'] = './uploads/thumb_imgs/'.$this->upload->data('file_name');
				$config['maintain_ratio'] = TRUE;
				$config['width']     = 100;
				$config['height']   = 100;

				$this->load->library('image_lib', $config);
				if ( ! $this->image_lib->resize())
				{
				    echo $this->image_lib->display_errors();
				}
				
			}

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('article/create');

			}
			else
			{
				$this->article_model->set_article();
				$data = array(
					'upload_data' => $this->upload->data(),
					'title' => $this->input->post('title'),
					'text' => $this->input->post('text')
					);
            	$this->load->view('article/create_success', $data);
			}
		}

		public function contact()
		{
			$this->load->view('article/contact');
		}
	}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//chk news_backend status
		if($this->session->userdata('admin_status') !=1){
				redirect('login/logout','refresh');
		}
		$this->load->model('news_model');
	}

	public function index()
	{
		$data['query']=$this->news_model->list_all();
		$this->load->view('template/header');
		$this->load->view('backend/news_backend_list',$data);
		$this->load->view('template/footer');
	}
	public function add()
	{
		$this->load->view('template/header');
		$this->load->view('backend/news_backend_form_add' , array('error' => ' ' ));
		$this->load->view('template/footer');
	}

	public function adding()
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// exit;

		$this->form_validation->set_rules('news_title', 'หัวข้อข่าว', 'trim|required|min_length[4]',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 4 ตัว'));
		$this->form_validation->set_rules('news_intro', 'เนื้อข่าวย่อๆ', 'trim|required|min_length[10]',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 10 ตัว'));
		$this->form_validation->set_rules('news_detail', 'รายละเอียดข่าว', 'trim|required|min_length[10]',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 10 ตัว'));

		               if ($this->form_validation->run() == FALSE)
		                {
						      	$this->load->view('template/header');
								$this->load->view('backend/news_backend_form_add' , array('error' => ' ' ));
								$this->load->view('template/footer');
		                }else{
		                	//img
							 		$config['upload_path']= 'asset/img_news/';
					                $config['allowed_types']= 'gif|jpg|png|jpeg';
					                $config['max_size']= 200;
					                $config['encrypt_name']= TRUE;

					                $this->load->library('upload', $config);
					                if ( ! $this->upload->do_upload('news_img'))
					                {
					                        $error = array('error' => $this->upload->display_errors());
											$this->load->view('template/header');
											$this->load->view('backend/news_backend_form_add' , $error);
											$this->load->view('template/footer');
									}else{
											$this->news_model->insert_news();
								            $this->session->set_flashdata('save_success', TRUE);
										    redirect('news','refresh');
									}//img
							            
					    }//form vali
	}



	public function edit($news_id)
	{
		$data['rsedit']=$this->news_model->read($news_id);

		// echo '<pre>';
		// print_r($data['rsedit']);
		// echo '</pre>';
		// exit();

		$this->load->view('template/header');
		$this->load->view('backend/news_backend_form_edit',$data);
		$this->load->view('template/footer');
	}

	public function editdata()
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		//exit;
		$this->form_validation->set_rules('news_id', 'news_id', 'trim|required|min_length[1]');
		$this->form_validation->set_rules('news_title', 'หัวข้อข่าว', 'trim|required|min_length[4]',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 4 ตัว'));
		$this->form_validation->set_rules('news_intro', 'เนื้อข่าวย่อๆ', 'trim|required|min_length[10]',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 10 ตัว'));
		$this->form_validation->set_rules('news_detail', 'รายละเอียดข่าว', 'trim|required|min_length[10]',
                array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 10 ตัว'));
		$this->form_validation->set_rules('news_status', 'สถานะ', 'trim|required|min_length[2]',
                array('required' => 'กรุณาเลือกข้อมูล %s.', 'min_length' => 'กรุณาเลือกสถานะให้ถูกต้อง'));

		if ($this->form_validation->run() == FALSE)
                {
                	$news_id = $this->input->post('news_id');
			        $data['rsedit']=$this->news_model->read($news_id);
					$this->load->view('template/header');
					$this->load->view('backend/news_backend_form_edit',$data);
					$this->load->view('template/footer');
                }else{
                	//img
						$config['upload_path']= 'asset/img_news/';
						$config['allowed_types']= 'gif|jpg|png|jpeg';
						$config['max_size']= 300;
						$config['encrypt_name']= TRUE;
						$this->load->library('upload', $config);
							if ( ! $this->upload->do_upload('news_img'))
							{
								//not upload image
								$this->news_model->update_news();
								$this->session->set_flashdata('save_success', TRUE);
								redirect('news','refresh');
							}else{
								//upload new image
								$this->news_model->update_news_img();
								$this->session->set_flashdata('save_success', TRUE);
								redirect('news','refresh');
							}//img
                }//form vali
	}

	
	public function del($news_id)
	{
		$this->news_model->del_news($news_id);
		$this->session->set_flashdata('del_success', TRUE);
		redirect('news','refresh');	
	}

	   
}

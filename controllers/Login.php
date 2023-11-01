<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
 

	public function index()
	{
		$this->load->view('frontend/login_form');
	}

	public function authen()
	{
	    $this->form_validation->set_rules('admin_email', 'Username', 'trim|required|valid_email');
		$this->form_validation->set_rules('admin_pwd', 'Password', 'trim|required|min_length[2]');

                if ($this->form_validation->run() == FALSE)
                {
                	$this->session->set_flashdata('login_error', TRUE);
					redirect('login','refresh');   
                }else{
                	//chk user & pass
                			$user = $this->security->xss_clean($this->input->post('admin_email'));
                			$pwd = $this->security->xss_clean($this->input->post('admin_pwd'));
			                $result = $this->admin_model->fetch_user_login($user,sha1($pwd));
					
						if(!empty($result)){
							//create session var & value
							$dataSession=array(
								'id'    		=> $result->id,
								'admin_status'    	=> $result->admin_status,
								'admin_name'		=> $result->admin_name
							);

							$this->session->set_userdata($dataSession);
							//admin status
							$admin_status = $_SESSION['admin_status'];

							if($admin_status==1){
								//echo 'r u admin';
								redirect('admin','refresh');
							}else{
								//u not admin
								$this->session->set_flashdata('login_error', TRUE);
								$this->session->unset_userdata(array('id','admin_status','admin_name'));
								redirect('login', 'refresh');
							}
							
						}else{
							$this->session->set_flashdata('login_error', TRUE);
							$this->session->unset_userdata(array('id','admin_status','admin_name'));
							redirect('login', 'refresh');
						}
                	 
                }//else form vali
	}




public function logout()
{
	$this->session->set_flashdata('logout_success', TRUE);
	$this->session->unset_userdata(array('id','admin_status','admin_name'));
	redirect('', 'refresh');
}



}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	// public function index()
	// { 
	// 	// echo "hello";die;
	// 	echo "hello";
	
	// }


	// public function home()
	// {
	// 	// return $this->load->view('Home');
	// 	return $this->load->view('Update');
	// }

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}





	public function update()
	{
	   
		$id['id']= $_GET['id'];
		$this->load->model('Authenticate');
	   $data['data']=$this->Authenticate->getbyid($id);

	   $this->load->view('Update',$data);


	//    $this->load->model('Authenticate');
	// 	$this->Authenticate->updatedata($id);

	}
	public function updatebyid()
	{
	
	      
		// $_POST = json_decode(file_get_contents('php://input'), true);
	    //  echo $_POST;die;
		$id['id']= $_GET['id'];
		$name=$this->input->post('name');
	    $email=$this->input->post('email');
		$mobile=$this->input->post('mobile');
		$password=$this->input->post('password');
		$data=[$name,$email,$mobile,$password,$id];
		$this->load->model('Authenticate');
		$this->Authenticate->updatedata($data);
		redirect('index.php/users');
		
	   
	}
	public function deletebyid()
	{
		$id=$_GET['id'];
		$this->load->model('Authenticate');
		$this->Authenticate->delete($id);
		redirect('index.php/users');
		
	}


	public function users()
	{
		$this->load->model('Authenticate');
		$message['users_data']=$this->Authenticate->getdata();
		$this->load->view('Users',$message);
	
		if(  $this->session->flashdata('message'))
		{
			echo $this->session->flashdata('message');
		}
		
		
        //    redirect('index.php/users');
		
		
		// }
		// $this->session->unset_userdata('message');
	
	}
	public function addusers()
	{
		$name="";
		$email="";
		$mobile="";
		$password="";
		
	  if($this->input->post())
	  {
		$this->form_validation->set_rules('name','username','required');
		$this->form_validation->set_rules('email','email','trim|required|valid_email');
		$this->form_validation->set_rules('mobile','mobile number','required');
		$this->form_validation->set_rules('password','password','required');
	
		if($this->form_validation->run())
		{	
		  $name=$this->input->post('name');
		 $email=$this->input->post('email');
		 $mobile=$this->input->post('mobile');
		 $password=$this->input->post('password');
        $data=[$name,$email,$mobile,$password];

		$this->load->model('Authenticate');
		$this->Authenticate->register($data);
		redirect('index.php/users');
		 

		}
		
		
	  }


	  $this->load->view('addusers');

	}

	}
	

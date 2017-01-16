<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->data['site_name']='PHPCHAT';
        $this->load->helper('url');
        $this->load->library('session');
    }
	public function index()
	{
		if($this->session->userdata('chat_username')){
			$this->data['logged_in']=TRUE;
		}else{
			$this->data['logged_in']=TRUE;
		}
		$this->load->view('parts/head.php',$this->data);
		$this->load->view('home',$this->data);
		$this->load->view('parts/foot.php',$this->data);
	}
	public function login()
	{
		$this->load->view('parts/head.php',$this->data);
		$this->load->view('login',$this->data);
		$this->load->view('parts/foot.php',$this->data);
	}
	public function signup()
	{
		$this->load->view('parts/head.php',$this->data);
		$this->load->view('signup',$this->data);
		$this->load->view('parts/foot.php',$this->data);
	}
	public function room($room_id)
	{
		if($this->session->userdata('chat_username')){
			$this->data['logged_in']=TRUE;
		}else{
			$this->data['logged_in']=FALSE;
		}
		$this->load->view('parts/head.php',$this->data);
		$this->load->view('room',$this->data);
		$this->load->view('parts/foot.php',$this->data);
	}
}

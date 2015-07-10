<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Find extends CI_Controller {
	
	public function index(){

		$data = array('fullWindow'=> true);
		$this->load->view('header');
		$this->load->view('find/index');
		$this->load->view('footer');
	}

   public function practise()
	{
		$data = array('fullWindow'=> true);
		$this->load->view('header');
		$this->load->view('add/practise');
		$this->load->view('footer');
	}

	 public function profile()
	{
		$data = array('fullWindow'=> true);
		$this->load->view('header');
		$this->load->view('add/profile');
		$this->load->view('footer');
	}

	 public function team()
	{
		$data = array('fullWindow'=> true);
		$this->load->view('header');
		$this->load->view('add/team');
		$this->load->view('footer',$data);
	}

	 public function about()
	{
		$data = array('fullWindow'=> true);
		$this->load->view('header');
		$this->load->view('add/about');
		$this->load->view('footer',$data);
	}

   public function jobs()
	{
		$data = array('fullWindow'=> true);
		$this->load->view('header');
		$this->load->view('add/jobs');
		$this->load->view('footer',$data);
	}

	 public function docprofile()
	{
		$data = array('fullWindow'=> true);
		$this->load->view('header');
		$this->load->view('add/docprofile');
		$this->load->view('footer',$data);
	}

	 public function partners()
	{
		$data = array('fullWindow'=> true);
		$this->load->view('header');
		$this->load->view('add/partners');
		$this->load->view('footer',$data);
	}




}
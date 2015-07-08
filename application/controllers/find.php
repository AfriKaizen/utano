<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Find extends CI_Controller {
	
	public function index(){

		$data = array('fullWindow'=> true);
		$this->load->view('header');
		$this->load->view('find/index');
		$this->load->view('footer',$data);
	}

   public function practise()
	{
		$data = array('fullWindow'=> true);
		$this->load->view('header');
		$this->load->view('add/practise');
		$this->load->view('footer',$data);
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




}
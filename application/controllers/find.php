<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Find extends CI_Controller {
	
	public function index(){
		
		$this->load->view('header');
		$this->load->view('find/index');
		$this->load->view('footer');
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index(){
				$data =  array('fullWindow'=> true);
				$this->load->view('header');
				$this->load->view('search/index');
				$this->load->view('footer', $data);
	}

	
}
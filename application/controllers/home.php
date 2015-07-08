<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		include APPPATH . 'third_party/elasticsearch/vendor/autoload.php';
	}

	public function index()
	{
		$data = array('fullWindow'=> true);
		$this->load->view('header');
		$this->load->view('home/index');
		$this->load->view('footer',$data);
	}


	

	public function get(){
		$client = new Elasticsearch\Client();
		$getParams = array();
		$getParams['index'] = 'utano';
		$getParams['type']  = 'sti';
		$getParams['id']    = '1';
		$retDoc = $client->get($getParams);
		$data = array('results'=>$retDoc);
		$this->load->view('welcome_message',$data);
	}


	public function search(){
		$client = new Elasticsearch\Client();
		$searchParams['index'] = 'utano';
		$searchParams['type']  = 'sti';
		$searchParams['body']['query']['match']['profile.female.not_pregnant.a'] = 'vagina';
		$retDoc = $client->search($searchParams);

		$result = $retDoc['hits']['hits'][0]['_source']['title'];

		$data = array('results'=>$result);
		$this->load->view('welcome_message',$data);
	}

	public function highlight(){
		$client = new Elasticsearch\Client();
		$params['body'] = array(
			'_source' => array(
				'profile.female.not_pregnant.a','title'
				),
    'query' => array(
        'match' => array(
            'profile.female.not_pregnant.a' => 'vagina'
        )
    ),
    'highlight' => array(
        'fields' => array(
            'profile.female.not_pregnant.a' => new \stdClass() 
        )
    )
);
$results = $client->search($params);
$data = array('results'=>$results);
$this->load->view('welcome_message',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/welcome.php */
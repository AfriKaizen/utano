<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		include APPPATH . 'third_party/elasticsearch/vendor/autoload.php';
	}

	public function index(){
				$data2 =  array('fullWindow'=> true);
				$this->load->view('header');
				$this->load->view('search/index');
				$this->load->view('footer');
	}

		public function get(){
		$params = array();
		//$params['hosts'] = array('http://192.168.1.4:9200');
		$client = new Elasticsearch\Client($params);
		$getParams = array();
		$getParams['index'] = 'utano';
		$getParams['type']  = 'sti';

		$profile = "profile".".".$_POST['endpoint'];

						$searchParams['body'] = array(
				 //'_source' => 'title',
						'query' => array(
		    'match' => array(
		      $profile => array(
		        'query'=>$_POST['symptoms'],
		        'operator'=>'or'
		      )
		    )
		  )
			);

			$retDoc = $client->search($searchParams);
   echo json_encode($retDoc,JSON_PRETTY_PRINT);
	}



	public function here(){
		$params = array();
		//$params['hosts'] = array('http://192.168.1.4:9200');
		$client = new Elasticsearch\Client($params);
		$searchParams['index'] = 'utano';
		$searchParams['type']  = 'sti';
		$profile = "profile".".".$_POST['gender'].".".$_POST['age'];

				$searchParams['body'] = array(
				 '_source' => $profile,
				 'query'	=> array(
				 		 'match_all'	=> new \stdClass()
				 	),
				  'highlight' => array( 
				  		 'fields' => array(
           $profile => new \stdClass()
				  		 	)
				  	)
			);

			$retDoc = $client->search($searchParams);
   echo json_encode($retDoc,JSON_PRETTY_PRINT);
	}

	public function search($gender,$age,$state="not_pregnant"){
		$client = new Elasticsearch\Client();
		$searchParams['index'] = 'utano';
		$searchParams['type']  = 'sti';
		$profile = "profile.".$gender.".".$state.".".$age;

		$searchParams['body'] = array(
				 '_source' => 'profile.female.not_pregnant.a',
				 'query'	=> array(
				 		 'match_all'	=> new \stdClass()
				 	),
				  'highlight' => array( 
				  		 'fields' => array(
           'profile.female.not_pregnant.a' => new \stdClass()
				  		 	)
				  	)
			);

		$retDoc = $client->search($searchParams);
   
		return $retDoc;
	}

	
}
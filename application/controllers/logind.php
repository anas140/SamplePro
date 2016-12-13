<?php
	class logind extends CI_Controller {
		public function Log() {
			$this->load->view("home");
		}
		public function authUser(){
			$email=$this->input->get_post('username');
			$password=$this->input->get_post('password');
			$url="http://services.trainees.baabtra.com/LoginService/login.php";
			/*$options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($user),
    						),
    					);

		$context  = stream_context_create($options);
		$result = file_get_contents($url,false, $context);    // used to call the web service
		/*print_r($result);*/
	 
		
		
	/*	$json=json_decode($result,true); //web service returns a json data, convert it to php array using json_decode
		$result1['data']=$json;
		foreach ($json as $val)
			/*Responsecode=200 means login successfull
			  Responsecode=404 means emailid incorrect
			  Responsecode=500 means emailid correct ,password wrong case*/

			/*if($val['ResponseCode']==200)	//checks the value of responsecode returned from the service
			 	$this->load->view("loginpage",$result1);  //loads a view from views folder
			 
			else if($val['ResponseCode']==500)
				$this->load->view("wrngpassw",$result1);

			else if($val['ResponseCode']==404)
				$this->load->view("wrngemail",$result1);
		
	}

}*/
		}
	}
?>
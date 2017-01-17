<?php
	class Logind extends CI_Controller {
	// 	public function Log() {
	// 		$this->load->view("home");
	// 	}
		public function authUser() {
			$user['username']=$this->input->get_post('username');
			$user['password']=$this->input->get_post('password');
			// $url="http://services.trainees.baabtra.com/LoginService/login.php";
			$url = "http://127.0.0.1/BM-41796-Services/index.php/Login/service";
			$options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($user),//generate url encoded query string
    						),
    					);

		$context  = stream_context_create($options);
		$result = file_get_contents($url,false, $context);    //  read entire file into string (path,include path(boolen),behaviour of strem options(strem_context_create))
		// print_r($result);
	 
		
		
		$json=json_decode($result,true); //web service returns a json data, convert it to php array using json_decode
		// print_r($json);
		$result1['data']=$json;
		// print_r($json);
		//foreach ($data as $val) {
		

			/*Responsecode=200 means login successfull
			  Responsecode=404 means emailid incorrect
			  Responsecode=500 means emailid correct ,password wrong case*/

			    if($json[0]['ResponseCode']==200)  //checks thevalue of responsecode returned from the service
			 	 $this->load->view("successLogin",$result1);  //loads a view from views folder
			 
			   else if($json[0]['ResponseCode']==500)
			 	$this->load->view("pwdError",$result1);
			 	// // // echo "<script>alert("hello")</alert>";

			  else if($json[0]['ResponseCode']==404)
			 	$this->load->view("emailError");
		
	// }

}
		}
	
?>
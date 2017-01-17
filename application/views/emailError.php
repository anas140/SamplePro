<!-- Password Error -->
<html>
	<head>
		<title>pwd error</title>
		<?php $this->load->helper('url'); ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
		<script type="text/javascript" src="<?php echo base_url().'js/jquery.min.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.js'?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.css'?>">
		<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url().'css/style.css'?>"> -->
		<style type="text/css">
			.container-fluid {
				padding: 0;
			}
			.header {
				height: 82px;
				background-color: #4867aa;
			}
			.logo {
				margin-top: 10px;
			}
			.perbody {
				background-color: #e9ebee;
				width: 100%;
				height: 100%;
				margin: 0;
				/*border-radius: 5px;*/
			}
			.form {
			    float: none;
    			margin: 0 auto;
				margin-top: 6%; 
				background-color: white;
				height: 60%;
				width: 40%;
				/*width: 400px;*/
				border: 2px solid;
    			border-color: #e5e6e9 #dfe0e4 #d0d1d5;
    			border-radius: 5px;
			}
			.flh {
				color: blue;
			}
			.hr {
			     margin-top: 0; 
    `			border: 0;
    			border-top: 1px solid gray;
			}
			.lftmrg{
				margin-left: 25%;
			}
			.equal {
				width: 0;
			}
		</style>
	  
	</head>
	<body>
		<div class="container-fluid">
			<div class="row header">
				<div class="col-md-offset-2 logo">
					<img src="<?php echo base_url().'images/fblogo.png' ?>">
					<input type="submit" name="" class="btn btn-success btn-sm" value="Sign Up">
				</div>
			</div>	
			<div class="row perbody">
				<div class="col-md-2 col-md-offset-5 form">
					<div class="row">
						<div class="col-md-12">
							<h4 class="flh">Facebook Login</h4><hr class="hr">
						</div>
					</div>
					
						<div class="row">
							<div class="col-md-12">
								<form class="form-vertical" method="POST" action="<?php echo base_url().'/index.php/logind/authUser' ?>">
									<div class="form-group lftmrg">
											<div class="row">
												<div class="col-md-3 ">
												<label>Login</label>
												</div>
												<div class="col-md-9">
													<input type="text" name="username">
												</div>
											</div>
											<br>
											<div class="row">
												<div class="col-md-3">
													<label>Password</label>
												</div>
												<div class="col-md-9">
													<input type="Password" name="password">
													<br>
													<input type="checkbox" name="">Keep me logged in<br>
												</div>
											</div>
											<div class="row">
												<div class="col-md-offset-3 colmd-9" >
													<br><input type="submit" name="" class="btn btn-primary btn-sm"> or <a href="#">Signup for Facebook</a><br><br>
													<a href="#">Forgotten Password</a>
												</div>
											</div>
										
										
									</div>
								</form>
							</div>
						</div>
				</div>
			</div>
		</div>
	</body>
</html>
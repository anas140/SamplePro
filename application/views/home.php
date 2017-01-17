<!DOCTYPE html>
<html>
<head>
	<?php $this->load->helper('url'); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url().'js/jquery.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.js'?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/style.css'?>">
	  
	<!-- <script type="text/javascript" src="<?php //echo base_url().'js/script.js'?>"></script>-->
	<title></title>
	<style type="text/css">
		.mgnz {
			margin-left: 0;
		}
	</style>
</head>
<body>
		<div class="container-fluid pad">

			<!-- Large Devices -->
			<div class="row header-nav">
				<div class="container ">
					<div class="col-md-offset-3 col-xs-offset-3 col-md-3">
						<img src="<?php echo base_url().'images/fblogo.png'?>">
					</div>
					<div class="col-md-offset-7 hidden-xs mgnz">
						<form class="form-inline lbl" method="POST" action="<?php echo base_url().'/index.php/Logind/authUser'?>">
							<div class="form-group top">
								<label>Email or Phone</label><br>
								<input type="text" name="username" id="username">
								<label id="username-error"></label>
							</div>
							<div class="form-group frg">
								<label>Password</label><br>
								<input type="Password" name="password" id="password"><br>
								<a href="#" class="">forgotten password?</a>
								<label id="password-error"></label>
							</div>
							<div class="form-group top">
								<input type="submit" class="btn btn-xs btn-primary login-btn" value="Login" id="bt-log">
							</div>
						</form>
					</div>
			    </div>		
			</div>
			<div class="content hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-md-6 left-panel">
							<h3 id="headfb">Facebook helps you connect and share with the people in your life.</h3>
							<img src="https://www.facebook.com/rsrc.php/v3/yx/r/pyNVUg5EM0j.png">
						</div>
						<div class="col-md-6 left-panel">
							<h1 id="headfb2">Create an account</h1>
							<h4 id="headfb3">Its always free and always will be.</h4>
							<form class="form-horizontal" id="regform" onload="return validation()">
								<div class="form-group">
									<input type="text" name="" placeholder="First name" class="form-control fir-last form-firt" id="first-name" data-toggle="tooltip">
									<label id="" ></label>
									<input type="text" name="" placeholder="Last name" class="form-control fir-last
									 form-firt" id="second-name" data-toggle="tooltip" title="Invalid Second name">
									<input type="text" name="" class="form-control input-form" placeholder="Mobile number or email address" id="mob-email">
									<input type="text" name="" class="form-control input-form" placeholder="Re-enter mobile number or email address" id="mob-email2">
									<input type="password" name="" class="form-control input-form" placeholder="New password" id="password">
									<label>Birthday</label><br>
									<div class="row">
										<div class="col-md-12">
										<select class="form">
											<option selected>Day</option>
										</select>
										<select class="">
											<option selected>Month</option>
										</select>
										<select>
											<option selected>Year</option>
										</select><br>
										</div>
									</div>
									<input type="radio" name="gender" class="" value="male" id="gm">Male
									<input type="radio" name="gender" class="" value="female" id="gf">Female<br>
									<input type="submit" name="" class="btn btn-success" value="Create an account" id="bt-up">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- LOGIN FORM MOBILE DEVICES ONLY -->
			<div class="row ">
				<div class="col-xs-12 col-sm-12 hidden-md hidden-lg bck">
					<div class="container">
						<form role="form" class="form-inline form-xs" method="POST" action="<?php echo base_url().'/index.php/logind/authUser' ?>">
							<div class="form-group">
								<input type="text" name="username" class="form-control" placeholder="Email address or phone number">
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group btn-last">
								<input type="submit" class="btn btn-primary btn-xs" style="padding: 4px 0px;" value="Login">
							</div>
							<div class="form-group btn-last">
								<input type="submit" class="btn btn-success btn-xs-2" value="Create new account" style="padding: 4px 0px;">
							</div>
						</form>
						<div class="text-centre">
							<a href="#">forgotten password? </a>
							<a href="#" class="second"> Help centre</a>
						</div>
					</div>
				</div>
			</div>


		</div>

</body>
</html>
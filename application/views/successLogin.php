<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url'); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <script type="text/javascript" src="<?php //echo base_url().'js/jquery.min.js'?>"></script>
	<script type="text/javascript" src="<?php //echo base_url().'js/bootstrap.js'?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php //echo base_url().'css/bootstrap.css'?>"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/style.css'?>">
	<style type="text/css">
		.container-fluid {
			padding: 0;
		}
		.sheader {
			width: 100%;
			height: 40px;
			background-color: #4867aa;
			margin: 0;
		}
		.input-box {
			margin-top: 3px;
		}
		.pad {
			padding: 0;
		}
		.sbody {
			width: 100%;
		}
		.mgn-non {
			margin-bottom: 0;
		}
		.fbbody {
			background-color: #e9eaed;
			height: 1000px;
			margin-right: 0;
		}
		.col3 {
			margin-top: 10px;
		}
		.mgtp {
			margin-top: 4px;
		}
		.cbody {
			background-color: white;
			padding-left: 2%;
		}
		.brdr-r {
			border-right: 1px solid grey;
			padding-left: 10%;
		}
		.brdr-b {
			border-bottom: 1px solid grey;
			padding: 2% 0;
		}
		.pbody {
			padding: 2% 0;
		}
		.wym {
			display: inline;
    		width: 91%;
    		padding: 4% 1%;
    		border: none;
    		box-shadow: none;
		}
		.cbody2 {
			margin-top: 5px;
			margin-bottom: 5px;
			/*width: 100%;*/
			height: 350px;
		}
		.lcol {
			background-color: white;
    		height: 400px;
    		width: 32.33%;
    		margin-left: 9px;
    		/*padding-right: 31%;*/
		}
	</style>
</head>
<body>
	<?php 
		foreach ($data as $value) {
			# code...
		?>
	<div class="container-fluid">
		<div class="row sheader">
			<div class="col-md-4 col-md-offset-2 input-box">
				<form class="form-horizontal" role="form">
					<div class="form-group mgn-non">
						<!-- <i class="glyphicon glyphicon-search"></i> -->
						<input type="text" name="" class="form-control" placeholder="Search..">
						<i class="glyphicon glyphicon-search form-control-feedback"></i>
					</div>
				</form>
			</div>
			<div class="col-md-4 col-md-offset-2" style="    margin-top: 8px;
    color: white;">
				<img src="<?php echo $value['vchr_prof_pic']; ?>" style="width: 6%; height: 20px;">
				<i><?php echo $value['vchr_first_name']; ?></i>
			</div>
		</div>
		<!-- <div class="container-fluid"> -->
		<div class="row fbbody">
			<div class="col-md-2 col3">
				<div class="row">
					<div class="col-md-offset-2 col-md-10">
						<a href="#" style="color: black;"><img src="<?php echo $value['vchr_prof_pic'] ?>" style=" height: 20px;">
						<?php echo $value['vchr_first_name']; ?></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-2 col-md-10">
						<a href="#"><i class="glyphicon glyphicon-edit mgtp"></i>
						Edit Profile</a>

					</div>
				</div>
			</div>
			<div class="col-md-6 col3">
				<div class="row cbody ">
					<div class="col-md-12">
						<div class="row brdr-b">
							<div class="col-md-4">
								<a href="#"><i class="glyphicon glyphicon-edit"></i> Update Status</a>
								<span class="brdr-r"></span>
							</div>
							
							<div class="col-md-4">
								<a href="#"><span class="glyphicon glyphicon-picture"></span> Add photos/video
								</a>
								<span class="brdr-r"></span>
							</div>
							<div class="col-md-4">
								<a href="#"><i class="glyphicon glyphicon-list-alt"></i> Write note</a>
							</div>
						</div>
						<div class="row pbody">
							<div col-md-offset-1 col-md-11>
								<span style><img src="<?php echo $value['vchr_prof_pic']; ?>" style="width: 50px; height: 50px;"></span>
								<input type="text" name="" class="form-control wym" placeholder="Whats on your mind">
							</div>
						</div>
					</div>
				</div>
				<div class="row cbody cbody2">
					<div class="col-md-12"></div>
				</div>
			</div>	
			

			<div class="col-md-4 col3 lcol">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<span>YOUR ADS<span></span><span class="glyphicon glyphicon-chevron-down form-control-feedback"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- </div> -->
		
	</div>
	<?php  } ?>
</body>
</html>
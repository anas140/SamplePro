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
					<div class="form-group ">
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
	</div>
	<?php  } ?>
</body>
</html>
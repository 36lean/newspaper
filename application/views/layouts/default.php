<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $template['title']; ?></title>
		<?php echo $template['metadata']; ?>
    	<link href="<?php echo base_url('public/bootstrap/css/bootstrap.css');?>" rel="stylesheet">
    	<link href="<?php echo base_url('public/bootstrap/css/bootstrap-responsive.css');?>" rel="stylesheet">
    	<link href="<?php echo base_url('public/fontawesome/css/font-awesome.min.css');?>" rel="stylesheet">
    	<style>
    	a:hover{
    		text-decoration: none;
    	}
    	</style>
</head>

<body style="padding-top:55px;">

	<div class="container-fluid">
	<div class="row-fluid">
	
	<div class="span4">
		<div class="page-header">

			<span class="label label-success"><h4>热门消息</h4></span>		
		</div>				
				
		<?php $this->load->module('front/default/left_1');?>

	</div>

	<div class="span5">
		
		<div class="page-header">
			<span class="label label-success"><h4>最高点击</h4></span>
		</div>

		<?php $this->load->module('front/default/center_1');?>

	</div>

	<div class="span3">
		
		<div class="page-header">
			<span class="label label-success"><h4>Passport</h4></span>
		</div>

		<?php $this->load->module('front/default/right_1');?>

	</div>

	</div>

<hr/>


	<div class="container-fluid">
	<div class="row-fluid">
	

		<div class="span6">
			
			<blockquote>
				
				Test

			</blockquote>

		</div>

	</div>
	</div>

</body>


</html>
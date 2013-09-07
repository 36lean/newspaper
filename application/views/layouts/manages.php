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

	<?php echo $template['body']; ?>

<?php $this->load->module('front/performance/benchmark');?>
</body>


</html>
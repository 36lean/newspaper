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
        <script src="<?php echo base_url('public/jquery-1.7.2.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('public/jquery.elastic.source.js');?>" type="text/javascript"></script>
    	<style>
    	a:hover{
    		text-decoration: none;
    	}
        textarea {
            border: 5px 
            solid #eee; 
            padding: 5px; 
            width: 100%;
            font: 14px/18px 'Helvetica', 'Arial', 'sans-serif';
        }
    	</style>
    	
    </head>

<body style="padding-top:55px;">

	<div class="container">

        <?php $this->load->module('front/text/top_1');?>

    </div>

    <div class="container">
    <div class="row-fluid">
    
        <div class="span8">
            <?php echo $template['body']; ?>
        </div>

        <div class="span4">
            <?php $this->load->module('front/text/right_1');?>
        </div>

    </div>
    </div>
    
    <div class="container">
    <div class="row-fluid">
    <div class="span8">
    <?php $this->load->module('front/text/bottom_1');?>
    </div>

    </div></div>


    <?php $this->load->module('front/performance/benchmark');?>

</body>
</html>
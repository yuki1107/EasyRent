<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Easy Rent</title>
<script src="<?= base_url()?>js/jquery.min.js"></script>
<script src="<?= base_url()?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>js/bootbox.min.js"></script>
<link href="<?= base_url()?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style>
		.circleLink{
			width:280px; 
			margin:0 auto; 
			height:280px;
			border: 2px yellow dashed;
			padding:5px;
			border-radius:200px;
		}
	</style>
</head>

<body>
	<?=$this->load->view("Template/header")?>
    <div class="container"  style="margin-top:250px;>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">        
 			<?php echo anchor('base/rentingPage', '<img src="'.base_url().'/abc.gif" class="circleLink"/>')?>          
        </div>
        <div class="col-md-4">
            <?php echo anchor('base/needRoomPage', '<img src="'.base_url().'/def.jpg" class="circleLink"/>')?> 
       </div>
        <div class="col-md-4">
        	<?php echo anchor('base/needRoomatePage', '<img src="'.base_url().'/abc.gif" class="circleLink"/>')?>            
        </div>
      </div> <!--row-->
	</div> <!--container-->

<?=$this->load->view('Template/footer')?>
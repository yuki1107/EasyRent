<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Easy Rent</title>
<link href="<?= base_url()?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Easy Rent</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
            <?php echo anchor('authorize/registerPage', 'Register', array('class'=>'btn btn-success'))?>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    
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
      </div>
              
<center>
      <footer class="navbar-fixed-bottom">
      	<hr>
		<p>© easyrent.ca 2014</p>
      	</footer>
</center>
   </div>

</body>
</html>
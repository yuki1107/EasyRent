<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		<?php echo anchor('base/index', 'Easy Rent', array('class'=>'navbar-brand'));?>
        </div>
        <div class="navbar-collapse collapse">
            <?php 			
			if(!isset($_SESSION['user'])){
				echo form_open('authorize/login', "class='navbar-form navbar-right' role='form'");
				echo form_input('username',set_value('username'), "class=form-control placeholder='Username'", "required");
				echo " "; // for space in between			
				echo form_password('password',set_value(),"class=form-control placeholder='Password'","required");
				echo " ";
				echo form_submit('submit', 'Sign in', "class = 'btn btn-success'");
				echo " ";
				echo anchor('authorize/registerPage', 'Register', array('class'=>'btn btn-success'));
				echo form_close();
		
			}else{
				$user = $_SESSION['user'];
				echo "<div class='navbar-form navbar-right'>";
				echo "<span  style='color:white; margin-right:10px; font-size:16px'>Welcome " . $user->username  . "</span>";
				echo anchor('authorize/logout', 'Log Out', array('class'=>'btn btn-success'));
				echo "</div>";
			}		
		?>
        </div><!--/.navbar-collapse -->

      </div><!--container-->
	<?php 
			if(isset($_SESSION['errMsg'])){
				echo '<script type="text/javascript">(function(){
				bootbox.dialog({
					  message: "' . $_SESSION['errMsg']. '",
					   buttons: {
						danger: {
						  label: "OK",
						  className: "btn-danger"
						}
					}
				});})();
				</script>'; 					
//				bootbox.alert("' . $_SESSION['errMsg'] .'")})();
	//			echo '<div class="alert alert-danger" style="text-align:center" role="alert">' . $_SESSION['errMsg'] .'</div>';
				unset($_SESSION['errMsg']);
			}				
	?>	
    </div><!--navbar-->
		
		
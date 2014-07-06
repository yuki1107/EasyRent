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
            <?php 
		  	echo form_open('authorize/login', "class='navbar-form navbar-right' role='form'");
			echo form_input('username',set_value('username'), "class=form-control placeholder='Username'", "required");
			echo " "; // for space in between			
			echo form_password('password',set_value(),"class=form-control placeholder='Password'","required");
			echo " ";
			echo form_submit('submit', 'Sign in', "class = 'btn btn-success'");
			echo " ";
			echo anchor('authorize/registerPage', 'Register', array('class'=>'btn btn-success'));
			echo form_close();
		
		?>
        </div><!--/.navbar-collapse -->
      </div><!--container-->
    </div><!--navbar-->
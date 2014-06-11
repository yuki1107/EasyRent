
<!DOCTYPE html>

<html>
	<head>
		<style>
			input {
				display: block;
			}
		</style>
	</head> 
<body>  
	<h1>New Account</h1>
<?php 

	echo form_open('authorize/register');

	echo form_label('Username'); 
	echo form_error('username');
	echo form_input('username',set_value('username'),"required");

	echo form_label('Password'); 
	echo form_error('password');
	echo form_password('password','',"id='pass1' required");

	echo form_label('Password Confirmation'); 
	echo form_error('passconf');
	echo form_password('passconf','',"id='pass2' required");

	echo form_label('First');
	echo form_error('first');
	echo form_input('first',set_value('first'),"required");

	echo form_label('Last');
	echo form_error('last');
	echo form_input('last',set_value('last'),"required");

	echo form_label('Email');
	echo form_error('email');
	echo form_input('email',set_value('email'),"required");

	echo form_label('Phone');
	echo form_error('phone');
	echo form_input('phone',set_value('phone'),"required");

	echo form_submit('submit', 'Register');
	echo form_close();
?>	
</body>

</html>


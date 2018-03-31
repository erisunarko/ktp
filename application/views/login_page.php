<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<?php
			$session_data = array(
									'login' => '',
									'username' => ''
								);
			$this->session->set_userdata($session_data);
		?>
		<?php echo form_open('ktp/login_process'); ?>
			<h2>Login</h2>

			<h3>Username</h3>
			<?php echo form_error('username'); ?>
			<input type="text" name="username" required />

			<h3>Password</h3>
			<?php echo form_error('password'); ?>
			<input type="password" name="password" required />

			</br></br>
			<input type="submit" value="Submit"/>

		</form>

	</body>
</html>
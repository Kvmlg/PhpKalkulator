<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<link rel="stylesheet" href="main.css">	
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>


<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login in</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
				<div class="sign-in-htm">
					<div class="group">
						<center><label for="user" class="label">Username</label></center>
						<input id="user" type="text" name="login" class="input" value="<?php out($form['login']); ?>">
					</div>
					<div class="group">
						<center><label for="pass" class="label">Password</label></center>
						<input id="pass" type="password" name="pass" class="input" data-type="password">
					</div>
					<div class="group">
						<input id="check" type="checkbox" class="check" checked>
						<label for="check"><span class="icon"></span> Keep me Signed in</label>
					</div>
					<div class="group">
						<center><input type="submit" value="zaloguj" class="pure-button pure-button-primary"/></center>
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<a href="#forgot">Forgot Password?</a>
					</div>
				</div>
				<div class="sign-up-htm">
					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user" type="text" class="input">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<label for="pass" class="label">Repeat Password</label>
						<input id="pass" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<label for="pass" class="label">Email Address</label>
						<input id="pass" type="text" class="input">
					</div>
					<div class="group">
						<input type="submit" class="button" value="Sign Up">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<label for="tab-1">Already Member?</a>
					</div>
				</div>
			</div>
			<?php
					//wyświeltenie listy błędów, jeśli istnieją
					echo '<br><br>';
					if (isset($messages)) {
						if (count ( $messages ) > 0) {
							echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88;">';
							foreach ( $messages as $key => $msg ) {
								echo '<li>'.$msg.'</li>';
							}
							echo '</ol>';
						}
					}
					?>
		</div>
	</div>
</form>	


</div>

</body>
</html>
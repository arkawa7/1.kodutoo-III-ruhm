<?php

	// LOGIN.PHP
	
	//errori muutujad peavad igal juhul olemas olema
	$email_error= "";
	$password_error="";
	//echo $_POST["email"];
	
	//kontrollime et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "keegi vajutas nuppu";
		
		//kontrollin, et e-post ei ole tühi
		
		$email_error = "";
		
		if(empty($_POST["email"] ) ) {
				$email_error = "See vali on kohustuslik";
				
				//kontrollin, et parool ei ole tühi
				if (empty($_POST["password"])) {
					$password_error = "See väli on kohustuslik";
				} else {
				
					//kui oleme siia jõudnud, siis parool ei ole tühi
					// kontrollin, et oleks vähemalt 8 sümbolit pikk
					if(strlen($_POST["password"]) <8) {
						$password_error = "Peab olema vähemalt 8 tähemärki pikk!";
					}	
				}
		}
		
	}

?>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h2>Log in</h2>
	<form action="login.php" method="POST" >
		<input name="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
		<input type="submit" value="Log in">
		
	</form>
	
	<h2>Create user</h2>
	<form action="login.php" method="POST" >
		<input name="First_name" placeholder="First name"> <br><br>
		<input name="Last_name" placeholder="Last name"> <br><br>
		<input name="email" placeholder="Email"> <?php echo $email_error; ?> <br><br>
		<input name="email" placeholder="Re-enter Email"> <?php echo $email_error; ?> <br><br>
				<?php
				echo "<select name='sel_date'>";
				$i = 1;
				while ($i <= 31) {
					echo "<option value='" . $i . "'>$i</option>";
					$i++;
				}
				echo "</select>";

				echo "<select name='sel_month'>";
				$month = array(
					"Jan",
					"Feb",
					"Mar",
					"Apr",
					"May",
					"Jun",
					"Jul",
					"Aug",
					"Sep",
					"Oct",
					"Nov",
					"Dec"
				);
				foreach ($month as $m) {
					echo "<option value='" . $m . "'>$m</option>";
				}
				echo "</select>";
				echo "<select name='sel_year'>";
				$j = 1920;
				while ($j <= 2015) {
					echo "<option value='" . $j . "'>$j</option>";
					$j++;
				}
				echo "</select>" ;
				?> <br><br>
		<input name="password" type="password" placeholder="Password"> <?php echo $password_error; ?> <br><br>
		<input name="password" type="password" placeholder="Re-enter Password"> <?php echo $password_error; ?>  <br><br>
		<input type="submit" value="Registreeru"><br>
		 
		 <form>
		 Minu idee on teha spordilehekülg spordilehekülg jalgpalli meeskonnas Manchester United, kus ma lisan uudiseid meeskonnas, siis võib teha foorumi, kus userid võivad arutlada meeskonna mänge ja jalgpallureid ja teha enda
		 teemasid.
		 </form>

</body>

</html>
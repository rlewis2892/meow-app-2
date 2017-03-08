<?php
if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,700italic,700|Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>

		<base href="<?php echo dirname($_SERVER["PHP_SELF"]) . "/"; ?>" />

		<title>Meow App 2</title>
	</head>
	<body>
		<!-- This custom tag much match your Angular @Component selector name in app/app.component.ts -->
		<meow-app>Loading&hellip;</meow-app>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<header><?php require 'header.php'?></header>
<form class="regform" action="reg.php" method="post">
	<input type="" name="firstname" placeholder="First Name" required="required">
	<input type="" name="lastname" placeholder="Last Name" required="required">

	<select name="role">
		<option value="1">User</option>
		<option value="2">Administrator</option>
	</select>
	<input type="email" name="email" placeholder="E-Mail" required="required">
	<input type="password" minlength="6" name="password" placeholder="Password" required="required">
	<input type="password" minlength="6"  name="confirm_password" placeholder="Repeat Password" required="required"><p>

</form>

	<footer><?php require 'footer.php'?></footer>
</body>

</html>
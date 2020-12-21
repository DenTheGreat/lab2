<?php 
session_start();
$session = $_SESSION["act"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'assets/db.php'; ?>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="header">
	<a href="index.php" id="logo"><img src="assets/images/logo.png"></a>
	<div class="nav">
  <?php 

if ($session==1){
echo '<a href="logout.php" id="register">Logout</a>';
}
else{

     echo '
    <a href="#" id="signin">Sign in</a>
    <a href="register.php" id="register">Register</a>
  

</div>
</div>
<!----------Modal------->
 <div id="signinModal" class="modal">
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Sign in</h2>
  </div>
  <div class="modal-body">
  <form method="POST" action="loginscript.php">
  	E-Mail<p>
  		<input type="email" name="email"><p>
  	Password<p>
  	<input type="password" name="password">
  	<input type="submit" value="Sign in" id="submit_btn">
  </form>
  </div>

  <div class="modal-footer">

  	Maksymenko 2020
        '; }
?>
  </div>
  </div> 
</div>

</body>
<script type="text/javascript" src="assets/js/modal.js">
</script>
</html>
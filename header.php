<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="header">
	<img src="assets/images/logo.png" width="3%">
	<div class="nav">
		<a href="#" id="signup">Signup</a>
		<a href="##" id="register">Register</a>
	</div>
</div>
 <!-- Modal content -->
 <div id="signupModal" class="modal">
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Modal Header</h2>
  </div>
  <div class="modal-body">
    <p>Some text in the Modal Body</p>
    <p>Some other text...</p>
  </div>
  <div class="modal-footer">
    <h3>Modal Footer</h3>
  </div>
</div> 
</div>
</body>
<script> 
	
var modal = document.getElementById("signupModal");
var btn = document.getElementById("signup");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 
</script>
</html>
<html lang="en">
<head>
<?php
 $id=$_GET['id'];
 ?>
</head>
<body>
    <div class="wrapper">
    <?php require 'header.php'?>

<center>
    
  <?php $user=getuser($id);
  foreach ($user as $row){ ?>
    <div id="profpic">
 <img src="public/images/<?php echo $row['photo'];?>">
</div>
    <table id="table">

    <tr>
    <td colspan="2">
        <center>User Info</center>
        <form action="edit.php" method="post">
    </td>
    </tr>



    <tr>
    <td>
    ID <p>
    </td>
    <td>
    <?php echo '<input name="id" readonly value="', $row['id'],'"';?>
    </td>
    </tr>

    
    <tr>
    <td>Firstname <p></td>
    <td><input name="firstname" value="<?php echo $row['firstname']; ?>"></td>
    </tr>

    <tr>
    <td>Lastname <p></td>
    <td><input name="lastname" value="<?php echo $row['lastname']; ?>"></td>
    </tr>

    <tr>
    <td>E-Mail <p></td>
    <td><input name="email" value="<?php echo $row['email']; ?>"></td>
    </tr>

<tr>
    
   <td> Role ID: <p></td>
    
    <td><input name="role_id" value="<?php echo $row['role_id'];?>"></td>
    </tr>
<?php if ($_SESSION["role"] == 2||$_SESSION["id"] == $id){
        echo '
    <tr>
    
   <td> Password: <p></td>
    
    <td><input name="password" value="',
   $row['password'],
    '"></td>
    </tr>


<tr>
<td colspan="2"> 
<center><button type="submit">Change</button></center>
</form>
</td>
</tr>
<tr>
<td colspan="2"> 
<form action="delete.php" method="post">
<center>
<input name="id" type="hidden" value="',$id,'"> </input>
<button type="submit">Delete</button></center>
</form>
</td>
</tr>
<form action="upload.php" method="POST" enctype="multipart/form-data">
  Select image to upload:
   <input type="hidden" name="id" value="',$row['id'],'">
  <input type="file" name="fileToUpload" id="fileToUpload" required>
  <input type="submit" value="Upload Image" name="submit">
</form>

</table>

';
 }} ?>
<footer><?php require 'footer.php'?></footer>
</div>
</body>
</html>
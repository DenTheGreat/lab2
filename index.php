<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Система</title>


</head>
<body>
<?php require 'header.php'?>
<div id="indexwrapper">
<table id="indextable">
	<tr>
	<td>#</td>
	<td>Firstname</td>
	<td>Lastname</td>
	<td>Email</td>
	<td>Role</td>
	</tr>
<?php
$users = getuserlist();
foreach ($users as $row){ ?>
                        <tr>
                          <th>
                          <a href="profile.php?id=<?php echo $row['id'] ; ?>">  <?php echo $row['id'] ; ?> </a>
                          </th>
                          <td>
                            <?php echo $row['firstname']; ?>
                          </td>
                          <td>
                            <?php echo $row['lastname']; ?>
                          </td>
                          <td>
                            <?php echo $row['email']; ?>
                          </td>
                          <td>
                            <?php if($row['role_id']==2){
                            	echo 'admin';
                            }
                            else echo 'user';
                             ?>
                          </td>
                        </tr>
                        <tr>
                          <?php } 
?></tr>
<?php if ($_SESSION["role"] == 2){
    echo '
<td colspan="5">
<a href="register.php">Add user</a>
</td>';} ?>

</table>

</div>


<?php require 'footer.php'?>
</body>
</html>
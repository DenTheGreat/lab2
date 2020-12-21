
<?php
$id = $_POST['id'];
require 'header.php';
$filename=$_FILES['fileToUpload']['name'];
$target_dir = "public/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".<p>";
    $uploadOk = 1;
    updatepic($id, $filename);
  } else {
    echo "File is not an image.<p>";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Error, file already exists.<p>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Error, only JPG, JPEG, PNG or GIF allowed.<p>";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "File was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.<p>";
  } else {
    echo "Sorry, there was an error uploading your file.<p>";
  }
}
require 'footer.php';
?>

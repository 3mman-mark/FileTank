<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
 <?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



// Check if file already exists
if (file_exists($target_file)) {
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 266076.16) {
  echo "Sorry, your file is too large. Maximum is 266076.16 KB ";
  $uploadOk = 0;
}



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded to the uploads folder";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
echo '<br><button onclick="window.history.back()">Back</button>'
?>
</body>
<script type="text/javascript" src="secondjs.js"></script>
</html>

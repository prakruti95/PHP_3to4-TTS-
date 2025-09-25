<form method="post" enctype="multipart/form-data">
  Select file: <input type="file" name="myFile">
  <input type="submit" value="Upload">
</form>



 <?php
echo "File Name: " . $_FILES['myFile']['name'];
echo "Temp Path: " . $_FILES['myFile']['tmp_name'];
?>




<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Your Name is " . $_SESSION["name"]=$_POST["name"] ;
echo "<br>";
echo "Your Email is " . $_SESSION["email"]=$_POST["email"];
echo "<br>";
echo "Your gender is " . $_SESSION["gender"]=$_POST["gender"];
echo "<br>";
echo "Your password is " . $_SESSION["password"]=$_POST["password"];


?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>



</body>
</html>
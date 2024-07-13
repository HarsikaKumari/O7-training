<?php
$name = $_POST["name"];
$password = $_POST["password"];
$image = $_FILES["image"];
 
// print_r($image);
$imageName = rand().$image["name"];
// echo $imageName;

echo "name is $name" . "<br>";
echo "password is $password" . "<br>";
// echo "name is $name" . "<br>";

$sql = "INSERT INTO practice(Name, Password, Image) VALUES ('$name', '$password', $image)";

include("config.php");
$result = mysqli_query($connect, $sql);

if ($result) {
    echo "you are registered" . "<br>";
} else {
    echo "try again after Some time";
}

$temp_path = $image["tmp_name"];

move_uploaded_file($temp_path, "images/". $imageName)

?>

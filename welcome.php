<?php
function input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = input($_POST['name']);
$email = input($_POST['email']);
$district = input($_POST['district']);
$gender = input($_POST['gender']);

echo "Hi my Name is : $name & Email is : $email <br/>";
echo "District Name is: $district <br/>";
echo "Gender Name is: $gender <br/>";
?>
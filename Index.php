<?php

if(isset($_POST['name']))
{

$server = "localhost";
$userName = "root";
$password = "";

$connection = mysqli_connect($server,$userName,$password);

if(!$connection)
{
    die("connection to this databases failed due to ".mysqli_connect_error());
}
// else
// {
//     echo "Success the Connection of Databases";
// }

$yourName = $_POST['name'];
$surName = $_POST['surname'];
$fatherName = $_POST['fathername'];
$zender = $_POST['zender'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$sql = "INSERT INTO `submit_form`.`student` (`Your Name`, `Surname`, `Father's Name`, `Zender`, `Phone`, `Email`, `Date`)
VALUES ('$yourName', '$surName', '$fatherName', '$zender', '$phone', '$email', current_timestamp());";

echo $sql;

if($connection->query($sql) == true)
{
    echo "Successfully inserted";
}
else
{
    echo "Error : $sql <br> $connection->error";
}

$connection->close();

}

?>
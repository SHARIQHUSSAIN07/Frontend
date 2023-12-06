<?php
require("conn2.php");
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gen'];
$subject = $_POST['subject'];
$batch = $_POST['batch'];

$query = "INSERT INTO student (name, email, age, gender, sub_id, batch_id) VALUES ('$name', '$email', '$age', '$gender', '$subject', '$batch')";
$row = mysqli_query($con, $query);

if ($row) {
    echo "<script> alert('Registered Successfully')</script>";
    header("location: student.php");
} else {
    echo "<script> alert('Failed')</script>";
}
?>


<?php

if($_POST['terms'] == "accepted") {

print_r($_POST);

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$text = $_POST['message'];
$location = $_POST['location'];
$department = $_POST['department'];
$interest = $_POST['interest'];


// save person's info into a file

$message = "Dear " . $first_name . ", \rHere are the details you entered below: \r\r";

$message .= "First Name : " . $first_name . "\r";
$message .= "Last Name : " . $last_name . "\r";
$message .= "Gender : " . $gender . "\r";
$message .= "Email : " . $email . "\r";
$message .= "Location : " . $location . "\r";
$message .= "Department : " . $department . "\r";
$message .= "Interest : " . $interest . "\r";
$message .= "Your Message : " . $text;

$personFile = fopen($first_name . ".txt", "w") or die("Unable to open file!");
fwrite($personFile, $message);
fclose($personFile);

} else {
    echo " You must accept our terms and conditions";
}

?>

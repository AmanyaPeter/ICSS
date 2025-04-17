<?php
include 'db_connect.php';

// Collect data
$nin = $_POST['nin'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$district = $_POST['district'];

$facility = $_POST['facility'];
$diagnosis = $_POST['diagnosis'];
$visit_date = $_POST['visit_date'];

$plot_no = $_POST['plot_no'];
$size = $_POST['size'];
$location = $_POST['location'];

$employment_status = $_POST['employment_status'];
$income = $_POST['income'];
$receives_aid = $_POST['receives_aid'];

// Insert into Citizen
$conn->query("INSERT INTO Citizen (nin, name, date_of_birth, gender, district) VALUES ('$nin', '$name', '$dob', '$gender', '$district')");

// Insert into Health
if ($facility != '') {
    $conn->query("INSERT INTO Health (nin, health_facility, diagnosis, visit_date) VALUES ('$nin', '$facility', '$diagnosis', '$visit_date')");
}

// Insert into Land
if ($plot_no != '') {
    $conn->query("INSERT INTO Land (nin, plot_number, size, location) VALUES ('$nin', '$plot_no', '$size', '$location')");
}

// Insert into Welfare
$conn->query("INSERT INTO Welfare (nin, employment_status, income, receives_aid) VALUES ('$nin', '$employment_status', '$income', '$receives_aid')");

echo "<h2 style='text-align:center;'>Data Saved Successfully!</h2>";
echo "<p style='text-align:center;'><a href='index.php'>Go back</a></p>";
?>

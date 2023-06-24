<?php
// Establish a database connection
$host = 'localhost';  // Replace with your host name
$dbName = 'form_data';  // Replace with your database name
$username = 'root';  // Replace with your database username
$password = '';  // Replace with your database password

$conn = new mysqli($host, $username, $password, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$surname = $_POST['surname'];
$organization = $_POST['organization'];
$mobile_number = $_POST['mobile_number'];
$alternative_number = $_POST['alternative_number'];
$email = $_POST['email'];
$address = $_POST['address'];
$region = $_POST['region'];
$commission = $_POST['commission'];
$date = $_POST['date'];

// Sanitize and validate the form data
$name = mysqli_real_escape_string($conn, $name);
$surname = mysqli_real_escape_string($conn, $surname);
$organization = mysqli_real_escape_string($conn, $organization);
$mobile_number = mysqli_real_escape_string($conn, $mobile_number);
$alternative_number = mysqli_real_escape_string($conn, $alternative_number);
$email = mysqli_real_escape_string($conn, $email);
$address = mysqli_real_escape_string($conn, $address);
$region = mysqli_real_escape_string($conn, $region);
$commission = mysqli_real_escape_string($conn, $commission);
$date = mysqli_real_escape_string($conn, $date);

// Construct the SQL INSERT statement
$sql = "INSERT INTO form_data (name, surname, organization, mobile_number, alternative_number, email, address, region, commission, date)
        VALUES ('$name', '$surname', '$organization', '$mobile_number', '$alternative_number', '$email', '$address', '$region', '$commission', '$date')";

// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    echo "Form data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

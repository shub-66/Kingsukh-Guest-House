
<?php
// Database configuration
$servername = "localhost"; // Change if your server is different
$username = "root"; // Your MySQL username
$password = "Shubham@2004"; // Your MySQL password
$dbname = "guesthouse"; // Your database name
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contact_messages (first_name, last_name, email, mobile, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $first_name, $last_name, $email, $mobile, $message);
// Set parameters and execute
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

if ($stmt->execute()) {
    // Redirect to the original page after successful submission
    header("Location: http://localhost/guesthouse/index.html?success=1");
    exit(); // Make sure to call exit after header to stop further execution
} else {
    echo "Error: " . $stmt->error;
}
// Close the statement and connection
$stmt->close();
$conn->close();
?>
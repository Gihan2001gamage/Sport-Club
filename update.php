<?php
include 'connect.php';
// Get POST data
$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$sql = "UPDATE users SET firstName = ?, lastName = ?, email = ? WHERE id = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    // Handle preparation errors
    die("Prepare failed: " . $conn->error);
}

// Bind parameters and execute the statement
$stmt->bind_param("ssss", $firstName, $lastName, $email, $id);

if (!$stmt->execute()) {
    // Handle execution errors
    die("Execute failed: " . $stmt->error);
}

// Check if any row was affected
if ($stmt->affected_rows > 0) {
    echo "Record updated successfully";
} else {
    echo "No record was updated. Please check if the ID exists and the data is correct.";
}

header("Location: login.php");
exit();

// Close the statement and connection
$stmt->close();
$conn->close();


?>

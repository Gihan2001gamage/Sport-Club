<?php
include 'connect.php';


// Get POST data
$id = $_POST['id'];

// Prepare SQL query
$sql = "DELETE FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

// Bind parameters and execute the statement
$stmt->bind_param("s", $id);



if (!$stmt->execute()) {
    die("Execute failed: " . $stmt->error);
    
}

// Check if any row was affected
if ($stmt->affected_rows > 0) {
    echo "Record deleted successfully";
  

} else {
    echo "No record was deleted. Please check if the ID exists.";
}

header("Location: login.php");
exit();

// Close the statement and connection
$stmt->close();
$conn->close();
?>


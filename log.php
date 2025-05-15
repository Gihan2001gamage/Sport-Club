<?php
include 'connect.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (!empty($email) && !empty($password)) {
        // Prepare the SQL query to select both email and password (non-hashed)
        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $password);  // Bind both email and password
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            // Email and password matched, start session
            session_start();
            $user = $result->fetch_assoc();
            $_SESSION['email'] = $user['email'];
            header("Location: home.php");
            exit();
        } else {
            echo "<script>alert('Invalid email or password');</script>";
        }
    } else {
        echo "<script>alert('Please enter both email and password');</script>";
    }
}
?>
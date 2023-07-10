<?php

// Database connection
$conn = new mysqli('localhost','root','','emunicipalitydb');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);

    // Check if a user with the given email exists
    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch();
        $hashedPassword = $user['password'];

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, perform login
            // Store the user's session, redirect to the home page, etc.
            echo "Login successful!";
        } else {
            // Password is incorrect
            echo "Invalid password!";
        }
    } else {
        // User with the given email doesn't exist
        echo "User not found!";
    }
}
?>

<?php
// Database connection
$servername = "localhost";
$db_username = "root"; // Replace with your MySQL username
$db_password = "";     // Replace with your MySQL password
$dbname = "orgconnect";    // Replace with your database name

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate form fields
    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($confirm_password)) {
        echo "<h1 style='color:red;'>All fields are required. Please fill in all fields.</h1>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h1 style='color:red;'>Invalid email format. Please enter a valid email address.</h1>";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "<h1 style='color:red;'>Passwords do not match. Please try again.</h1>";
        exit;
    }

    // Check if the username or email already exists
    $sql = "SELECT * FROM users WHERE StudentID = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h1 style='color:red;'>Username or email already registered. Please try again.</h1>";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user into the database
        $sql = "INSERT INTO users (name, email, StudentID, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $username, $hashed_password);

        if ($stmt->execute()) {
            echo "<h1>Registration successful! <a href='loginpagev2.php'>Log in</a></h1>";
        } else {
            echo "<h1 style='color:red;'>Error: Could not register. Please try again later.</h1>";
        }
    }

    $stmt->close();
}

$conn->close();
?>

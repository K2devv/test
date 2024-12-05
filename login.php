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

// Start a session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validate input
    if (empty($username) || empty($password)) {
        echo "<script>alert('Please fill in all fields.'); window.location.href='loginpageV2.php';</script>";
        exit;
    }

    // Query to find the user
    $sql = "SELECT * FROM users WHERE StudentID = ?";  // Query to select user based on StudentID
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);  // 's' for string (StudentID is a string)
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();  // Fetch user data

        // Verify the entered password with the hashed password stored in the database
        if (password_verify($password, $user['Password'])) {
            // Password is correct, set session variables
            $_SESSION['username'] = $username;

            // Redirect to homepage or dashboard
            header("Location: aboutusV2.html");  // Adjust this to the page the user should be redirected to
            exit;
        } else {
            // Invalid password
            echo "<script>alert('Invalid password. Please try again.'); window.location.href='loginpageV2.php';</script>";
        }
    } else {
        // Username not found
        echo "<script>alert('Username not found. Please register.'); window.location.href='loginpageV2.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>

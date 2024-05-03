<?php
// Start the session
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect user to login page if not logged in
    header("Location: login.html"); // Change this to the path of your login page
    exit();
}

// Display welcome message
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="homepage.css"> <!-- You can link your CSS file here -->
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
        <p>You have successfully logged in.</p>
        <p>Now you can proceed with your ticket purchase or perform other actions.</p>
        <p><a href="ticketselling.html" class="btn">Proceed to Ticket Purchase</a></p> <!-- Link to the ticket purchase page -->
        <p><a href="login.html" class="btn">Logout</a></p> <!-- Link to the logout page -->
    </div>
</body>
</html>

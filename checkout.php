<?php
// Assuming ticket prices for different zones
$ticket_prices = [
    "general" => 2500, // Price for General Admission
    "vip" => 12000    // Price for VIP
    // Add more ticket prices if needed
];

// Retrieve form data
$ticket_type = $_POST['ticket_type'];
$quantity = $_POST['quantity'];

// Calculate total price
$total_price = $ticket_prices[$ticket_type] * $quantity;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <div class="container">
        <h1>Checkout</h1>
        <p>Number of Tickets: <?php echo isset($_POST['quantity']) ? $_POST['quantity'] : '0'; ?></p>
        <p>Seat Zone: <?php echo isset($_POST['ticket_type']) ? ucfirst($_POST['ticket_type']) : ''; ?></p>
        <p>Price per Ticket: $<?php echo isset($_POST['ticket_type']) ? $ticket_prices[$_POST['ticket_type']] : ''; ?></p>
        <p>Total Price: $<?php echo isset($_POST['quantity']) && isset($_POST['ticket_type']) ? $total_price : '0'; ?></p>

        <!-- Make Another Purchase Button -->
        <a href="ticketselling.html" class="btn">Make Another Purchase</a>
        <p><a href="login.html" class="btn">Logout</a></p> <!-- Link to the logout page -->
    </div>
</body>
</html>

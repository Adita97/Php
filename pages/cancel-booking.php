<?php
session_start();
include_once "pdo.php"; // Assuming this file contains your database connection
include "navbar.php";



// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the booking ID from the form submission
    $bookingId = $_POST["booking_id"];

    // Delete the booking from the database
    $query = "DELETE FROM bookings WHERE bookings_id = :bookingId";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':bookingId', $bookingId, PDO::PARAM_INT);
    $stmt->execute();

    // Redirect back to the page displaying bookings after deleting
    header("Location: my-bookings.php");
    exit();
} else {
    // If the form was not submitted via POST method, redirect or display an error message
    echo "Error: Form not submitted.";
}
?>

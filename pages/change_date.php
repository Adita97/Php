<?php
session_start();
include_once "pdo.php"; // Assuming this file contains your database connection
include "navbar.php";

// Check if user is logged in
if(!isset($_SESSION['full_name'])) {
    header("Location: login.php");
    exit();
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate the new date
    $newDate = $_POST["newDate"];
    $bookingId = $_POST["booking_id"];

    // Update the booking date in the database
    $query = "UPDATE bookings SET booking_date = :newDate WHERE bookings_id = :bookingId";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':newDate', $newDate, PDO::PARAM_STR);
    $stmt->bindParam(':bookingId', $bookingId, PDO::PARAM_INT);
    $stmt->execute();

    // Redirect back to the page displaying bookings after updating
    header("Location: my-bookings.php");
    exit();
} else {
    // If the form was not submitted via POST method, redirect or display an error message
    echo "Error: Form not submitted.";
}
?>

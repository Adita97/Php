<?php
session_start();
include_once "pdo.php";
include "navbar.php";

// Check if user is logged in
if(isset($_SESSION['full_name'])) {
    $fullName = $_SESSION['full_name'];
    $query = "SELECT phone_number, email FROM users WHERE full_name = :fullName";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':fullName', $fullName, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    
    $phoneNumber = $user['phone_number'];
    $email = $user['email'];
} else {
    // If user is not logged in, initialize variables
    $fullName = "";
    $phoneNumber = "";
    $email = "";
}

if(isset($_POST['date'])) {
    $date = $_POST['date'];
    $fullName = isset($_POST['fullName']) ? $_POST['fullName'] : $fullName;
    $phoneNumber = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : $phoneNumber;
    $email = isset($_POST['email']) ? $_POST['email'] : $email;

    $query = "INSERT INTO bookings (full_name, phone_number, email, booking_date) VALUES (:fullName, :phoneNumber, :email, :date)";
    $stmt = $conn->prepare($query);
    $stmt->execute(array(
        ':fullName' => $fullName,
        ':phoneNumber' => $phoneNumber,
        ':email' => $email,
        ':date' => $date
    ));

    
    header("Location: ../index.php");
    exit();
} else {
    echo "Date not set!";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photosession Booking</title>
    <!--Bootastrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="/My-first-website/styles/style.css" />
</head>
<body>
    <div class="container mt-5">
        <h2>Book a Photosession</h2>
        <form action="bookings.php" method="POST">
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" <?php if(isset($_SESSION['full_name'])): ?> value ="<?php echo $fullName ?>" disabled<?php endif ?> required>
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" <?php if(isset($_SESSION['full_name'])): ?> value ="<?php echo $phoneNumber ?>" disabled<?php endif ?> required>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" <?php if(isset($_SESSION['full_name'])): ?> value ="<?php echo $email ?>" disabled<?php endif ?> required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>

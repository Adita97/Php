<?php
session_start();
include_once "pdo.php";
include "navbar.php";

// Check if user is logged in
if(!isset($_SESSION['full_name'])) {
    header("Location: login.php");
    exit();
}

$userId = $_SESSION['full_name'];

// Fetch bookings for the logged-in user
$query = "SELECT bookings_id, booking_date FROM bookings WHERE full_name = :userId";
$stmt = $conn->prepare($query);
$stmt->bindParam(':userId', $userId, PDO::PARAM_STR);
$stmt->execute();
$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/My-first-website/styles/style.css" />
</head>
<body>
<div class="container mt-5 text-center">
    <h2>My Bookings</h2>
    <?php if(count($bookings) > 0): ?>
        <div class="row text-center">
            <?php foreach($bookings as $booking): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Booking ID: <?php echo $booking['bookings_id']; ?></h5>
                            <p class="card-text">Date: <?php echo $booking['booking_date']; ?></p>
                            <form action="cancel-booking.php" method="POST">
                                <input type="hidden" name="booking_id" value="<?php echo $booking['bookings_id']; ?>">
                                <button type="submit" class="my-3 px-4 btn btn-danger">Cancel</button>
                            </form>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changeDateModal<?php echo htmlspecialchars($booking['bookings_id']); ?>">Change Date</button>
                        </div>
                    </div>
                </div>

                <!-- Change Date Modal -->
                <div class="modal fade" id="changeDateModal<?php echo htmlspecialchars($booking['bookings_id']); ?>" tabindex="-1" aria-labelledby="changeDateModalLabel<?php echo htmlspecialchars($booking['bookings_id']); ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="changeDateModalLabel<?php echo htmlspecialchars($booking['bookings_id']); ?>">Change Date for Booking ID: <?php echo htmlspecialchars($booking['bookings_id']); ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="change_date.php" method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="newDate">New Date</label>
                                        <input type="date" class="form-control" id="newDate" name="newDate" required>
                                    </div>
                                    <input type="hidden" name="booking_id" value="<?php echo htmlspecialchars($booking['bookings_id']); ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <h4 class="my-4 text-danger">No bookings found.<h4>
            <h4>Capture the moment, before it's just a memory! Book your photo session now!</h4>
            <a href="booking.php"><button class="my-5 px-4 btn btn-primary">Book now</button></a>

        <?php endif; ?>
    </div>
      <!------FOOTER------->
    
      <div id="socialMedia">
      <?php include 'social-media.php' ?>
    </div>
    <div id="footer">
      <?php include 'footer.php' ?>
    </div>
</body>
</html>

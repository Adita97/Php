<?php

include './navbar.php';
// Create connection
$conn = new mysqli("localhost", "root", "admin", "users");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);


    // Prepare a statement
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");

    $check_username_sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($check_username_sql);


    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ss", $username, $password);

        // Execute the statement
        if($result && $result->num_rows > 0) {
            // Username already exists, display an error message
            echo "Username already exists. Please choose a different username.";
        
        } else if ($stmt->execute()) {
            // Registration successful
            echo "Registration Succesfull";
            // Redirect to login page after 2 seconds using JavaScript
            echo "<script>setTimeout(function() { window.location.href = 'login.php'; }, 2000);</script>";
            echo "Registration successful. Redirecting to login page...";
            
        }  else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error: Unable to prepare statement";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <script src="/My-first-website/scripts/navbar.js" defer></script> -->
    <link rel="stylesheet" href="/My-first-website/styles/style.css">
</head>
<body>
    <div class="container d-flex flex-column align-items-center">
        <h2 class="mt-5">Register</h2>
        <form class="mt-4" method="post" action="register.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="mx-2 my-4 btn btn-primary">Register</button>
            <a href="login.php"><button  type="button" class="mx-2 my-4 px-3 btn btn-primary" style="width:12vw">I already have an account</button></a>
        </form>
    </div>
</body>
</html>

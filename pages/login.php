<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Database connection
        $conn = new mysqli("localhost", "root", "admin", "users");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $full_name = $row['full_name'];
            $first_name = explode(' ', $full_name)[0];

            $_SESSION['full_name'] = $full_name;
            // echo "Login successful, Welcome $first_name!";
            header("location: /My-first-website/index.php");
            exit();
        } else {
            echo "Invalid username or password";
        }

        $conn->close();
    } else {
        echo "Please provide both username and password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/My-first-website/styles/style.css">
</head>
<body>
<?php include '../pages/navbar.php'; ?>
    <div class="container d-flex flex-column align-items-center">
        <h2 class="mt-5">Login</h2>
        <?php if(isset($_SESSION['full_name'])): ?>
            <?php
            // Extracting first name from full name
            $first_name = explode(' ', $_SESSION['full_name'])[0];
            ?>
            <p>Welcome, <?php echo $first_name; ?></p>
            <form action="logout.php" method="post">
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        <?php else: ?>
                <form class="mt-4" method="post" action="login.php">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control contact-input" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control contact-input" id="password" name="password" required>
                    </div>
                    <button type="submit" class="mx-2 my-4 btn btn-lg btn-primary">Login</button>
                    <a href="register.php"><button type="button" class="mx-2 my-4 btn btn-lg btn-primary">Register</button></a>
                </form>
            
        <?php endif; ?>
    </div>
</body>
</html>

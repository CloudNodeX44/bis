<?php
session_start();
include 'conn/conn.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="configs/onlineLib.js"></script>
    <link rel="stylesheet" href="configs/login.css">
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://w.wallhaven.cc/full/kx/wallhaven-kxj3l1.jpg" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                    <!-- form start here -->
                    <form action="login.php" method="POST">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Go Home</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <a href="index.php">
                                <i class="bi bi-arrow-left-square"></i>
                                <!-- Fix this! -->
                                </a>
                            </button>

                            <!-- <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="bi bi-people"></i>
                            </button> -->

                            <!-- <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </button> -->
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <!-- <p class="text-center fw-bold mx-3 mb-0">Or</p> -->
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Enter username" />
                            <label class="form-label" for="username">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter password" />
                            <label class="form-label" for="password">Password</label>
                        </div>
                        <!-- Checkbox -->
                        <!-- <div class="d-flex justify-content-between align-items-center">
                            
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div> -->

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="admin/registration/registration.php" class="link-danger">Register</a></p>
                        </div>

                    </form>

                    <?php
                    // Login connection starts here...
                    // Check if the form is submitted
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Get the entered username and password from the form
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        // Define the userStatus
                        $userStatus = "userStatus";

                        // SQL query for user accounts
                        $userSql = "SELECT userId, username, password, accountLevel FROM registration WHERE username = '$username' AND userStatus ='Approved'
                        UNION
                        SELECT businessId, username, password, accountLevel FROM businessaccount WHERE username = '$username' AND userStatus ='Approved'";

                        $userResult = mysqli_query($conn, $userSql);

                        if (!$userResult) {
                            // Handle query execution error
                            echo "Error executing user query: " . mysqli_error($conn);
                            exit;
                        }

                        // Check if a user with the given username exists
                        if (mysqli_num_rows($userResult) > 0) {
                            $row = mysqli_fetch_assoc($userResult);
                            $hashed_password = $row['password'];

                            // Verify the entered password with the hashed password
                            if (password_verify($password, $hashed_password)) {
                                // Passwords match, set session variables and redirect to userAuth.php
                                $_SESSION['userId'] = $row['userId'];
                                $_SESSION['username'] = $row['username'];
                                $_SESSION['accountLevel'] = $row['accountLevel'];
                                unset($_SESSION["error"]);
                                header("Location: userAuth.php");
                                exit;
                            }
                        }

                        // If the user is not found or passwords do not match, set an error message
                        $_SESSION["error"] = "Incorrect username or password.";
                        header('Location: login.php'); // Redirect back to the login page
                        exit;
                    }

                    mysqli_close($conn);

                    ?>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2020. All rights reserved.
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <!-- <div>
                <a href="#!" class="text-white me-4">
                    <i class="bi bi-briefcase"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div> -->
            <!-- Right -->
        </div>
    </section>
</body>

</html>
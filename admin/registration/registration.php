<?php include '../../conn/conn.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<script src="../../configs/callAll.js"></script>
<script src="../../configs/onlineLib.js"></script>

<body>

    <main>
        <form action="registration.php" method="POST">
            <div class="container text-center">
                <div class="row">
                    <!-- Personal Information -->
                    <p class="h3 fw-bold">Personal Information</p>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label class="col-form-label" for="firstName">First Name:</label>
                                <input class="form-control form-control-sm" type="text" id="firstName" name="firstName" required placeholder="ex. Juan">
                            </div>
                            <div class="col-6">
                                <label class="col-form-label" for="middleName">Middle Name:</label>
                                <input class="form-control form-control-sm" type="text" id="middleName" name="middleName" required placeholder="ex. Gitna">
                            </div>
                            <div class="col-6">
                                <label class="col-form-label" for="lastName">Last Name:</label>
                                <input class="form-control form-control-sm" type="text" id="lastName" name="lastName" required placeholder="ex. Huli">
                            </div>
                            <div class="col-6">
                                <label class="col-form-label" for="birthDate">Date of birth:</label>
                                <input class="form-control form-control-sm" type="date" id="birthDate" name="birthDate">
                            </div>
                        </div>

                        <hr class="mt-3">

                        <div class="row">
                            <div class="col-6">
                                <label class="col-form-label" for="gender">Gender:</label>
                                <select class="form-select form-select-sm" name="gender" id="gender" required>
                                    <option selected hidden>Select an option</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label" for="lgbtq">Part of LGBTQ:</label>
                                <select class="form-select form-select-sm" name="lgbtq" id="lgbtq" required>
                                    <option selected hidden>Select an option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label" for="education">Education:</label>
                                <select class="form-select form-select-sm" name="education" id="education" required>
                                    <option selected hidden>Select an option</option>
                                    <option value="Currently Studying">Currently Studying</option>
                                    <option value="Elementary Graduate">Elementary Graduate</option>
                                    <option value="High School Graduate">High School Graduate</option>
                                    <option value="College Graduate">College Graduate</option>
                                    <option value="Post Graduate">Post Graduate</option>
                                    <option value="Doctoral Graduate">Doctoral Graduate</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label" for="currentlyStudying">Level of current Education:</label>
                                <select class="form-select form-select-sm" name="currentlyStudying" id="currentlyStudying">
                                    <option value="N/A">N/A</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <label class="col-form-label" for="pwd">Part of PWD:</label>
                                <select class="form-select form-select-sm" name="pwd" id="pwd" required onchange="showDisabilityDropdown()">
                                    <option selected hidden>Select an option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <div id="disabilityDropdown" style="display: none;">
                                    <label class="col-form-label" for="disability">What is your disability:</label>
                                    <select class="form-select form-select-sm" name="disability" id="disability" required>
                                        <option selected hidden>Select an option</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <label class="col-form-label" for="work">Work status:</label>
                                <select class="form-select form-select-sm" name="work" id="work" required>
                                    <option selected hidden>Select an option</option>
                                    <option value="Employed">Employed</option>
                                    <option value="Business-owner">Business-owner</option>
                                    <option value="Private-employee">Private-employee</option>
                                    <option value="Government-employee">Government-employee</option>
                                    <option value="Self-employed">Self-employed</option>
                                    <option value="Unemployed">Unemployed</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label class="col-form-label" for="maritalStatus">Marital status:</label>
                                <select class="form-select form-select-sm" name="maritalStatus" id="maritalStatus" required>
                                    <option selected hidden>Select an option</option>
                                    <option value="Single">Single</option>
                                    <option value="Single parent">Single parent</option>
                                    <option value="Married">Married</option>
                                    <option value="Widow">Widow</option>
                                    <option value="live-in">live-in</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label class="col-form-label" for="informalSettler">Are you informal settler:</label>
                                <select class="form-select form-select-sm" name="informalSettler" id="informalSettler" required>
                                    <option selected hidden>Select an option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label class="col-form-label" for="electricity">Have access on electricity:</label>
                                <select class="form-select form-select-sm" name="electricity" id="electricity" required>
                                    <option selected hidden>Select an option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label class="col-form-label" for="water">Have access on clean water:</label>
                                <select class="form-select form-select-sm" name="water" id="water" required>
                                    <option selected hidden>Select an option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label class="col-form-label" for="barangaySince">Lived in Barangay since:</label>
                                <input class="form-control form-control-sm" type="date" id="barangaySince" name="barangaySince">
                            </div>
                        </div>
                        <hr>
                        <!-- Contact Information -->

                        <div class="form-group">
                            <label class="col-form-label" for="">Contact Information</label><br>
                            <div class="row">
                                <label class="col-sm-1 col-form-label col-form-label-sm" for="email">Email:</label>
                                <div class="col-sm-5">
                                    <input class="form-control form-control-sm" type="email" id="email" name="email" required placeholder="abc@gmail.com"><br>
                                </div>
                                <label class="col-sm-1 col-form-label col-form-label-sm" for="contactNo">Contact No:</label>
                                <div class="col-sm-5">
                                    <input class="form-control form-control-sm" type="tel" id="contactNo" name="contactNo" minlength="11" maxlength="11" required placeholder="09000000000"><br>
                                </div>
                                <!-- Address Information -->
                                <label class="col-form-label" for="">Address Information</label>
                                <label class="col-sm-1 col-form-label col-form-label-sm" for="zone">Zone:</label>
                                <div class="col-sm-5">
                                    <select class="form-select form-select-sm" name="zone" id="zone" required>
                                        <option selected hidden>Select an option</option>
                                        <option value="Zone 1">Zone 1</option>
                                        <option value="Zone 2">Zone 2</option>
                                        <option value="Zone 3">Zone 3</option>
                                        <option value="Zone 4">Zone 4</option>
                                        <option value="Zone 5">Zone 5</option>
                                    </select>
                                </div>

                                <label class="col-sm-1 col-form-label col-form-label-sm" for="village">Subdivision / Village:</label>
                                <div class="col-sm-5">
                                    <select class="form-select form-select-sm" name="village" id="village" required>
                                        <option selected hidden>Select a zone first</option>
                                    </select>
                                </div>

                                <label class="col-sm-1 col-form-label col-form-label-sm" for="street">Street:</label>
                                <div class="col-sm-3">
                                    <select class="form-select form-select-sm" name="street" id="street" required>
                                        <option selected hidden>Select a village first</option>
                                    </select>
                                </div>

                                <label class="col-sm-1 col-form-label col-form-label-sm" for="lot">Lot:</label>
                                <div class="col-sm-3">
                                    <input class="form-control form-control-sm" type="lot" id="lot" name="lot" placeholder="ex. Lot 1"><br>
                                </div>
                                <label class="col-sm-1 col-form-label col-form-label-sm" for="buildingNo">Building No:</label>
                                <div class="col-sm-3">
                                    <input class="form-control form-control-sm" type="buildingNo" id="buildingNo" name="buildingNo" placeholder="ex. Building 1">
                                </div>

                            </div>
                            <hr>
                            <label class="col-form-label" for="">Other Information</label><br>
                            <div class="row">
                                <label class="col-sm-1 col-form-label col-form-label-sm" for="familyHead">Are you head of the Family:</label>
                                <div class="col-sm-5">
                                    <select class="form-select form-select-sm" name="familyHead" id="familyHead" required>
                                        <option selected hidden>Select an option</option>
                                        <option value="Yes" id="Yes">Yes</option>
                                        <option value="No" id="No">No</option>
                                    </select>
                                </div>
                                <label class="col-sm-1 col-form-label col-form-label-sm" for="registeredVoter">Are you registered Voter:</label>
                                <div class="col-sm-5">
                                    <select class="form-select form-select-sm" name="registeredVoter" id="registeredVoter" required onchange="showBarangayDropdown()">
                                        <option selected hidden>Select an option</option>
                                        <option value="Yes" id="voterYes">Yes</option>
                                        <option value="No" id="voterNo">No</option>
                                    </select>
                                </div>

                                <div class="col-6" id="inBarangayDropdown" style="display:none;">
                                    <label class="col-form-label col-form-label-sm" for="inBarangay">Registered in Barangay:</label>
                                    <select class="form-select form-select-sm" name="inBarangay" id="inBarangay" required onchange="showInWhatDropdown()">
                                        <option selected hidden>Select an option</option>
                                        <option value="Yes" id="voterBarangayYes">Yes</option>
                                        <option value="No" id="voterBarangayNo">No</option>
                                    </select>

                                </div>

                                <div class="col-6" id="inWhatDropdown" style="display:none;">
                                    <label class="col-form-label col-form-label-sm" for="whatBarangay">What Barangay:</label>
                                    <input class="form-control form-control-sm" type="whatBarangay" id="whatBarangay" name="whatBarangay" required placeholder="ex. Barangay"><br>
                                </div>

                            </div>
                            <label class="col-form-label" for="">Create Username and Password</label><br>
                            <div class="row">
                                <label class="col-sm-1 col-form-label col-form-label-sm" for="username">Username:</label>
                                <div class="col-sm-3">
                                    <input class="form-control form-control-sm" type="username" id="username" name="username" required placeholder="username123"><br>
                                </div>
                                <?php
                                    if(isset($_SESSION['upload'])){
                                    echo $_SESSION['upload'];
                                    unset ($_SESSION['upload']);
                                    }
                                ?>
                                <label class="col-sm-1 col-form-label col-form-label-sm" for="password">Password:</label>
                                <div class="col-sm-3">
                                    <input class="form-control form-control-sm" type="password" id="password" name="password" required placeholder="password"><br>
                                </div>
                                <label class="col-sm-1 col-form-label col-form-label-sm" for="cpassword">Confirm Password:</label>
                                <div class="col-sm-3">
                                    <input class="form-control form-control-sm" type="password" id="cpassword" name="cpassword" required placeholder="repeat password"><br>
                                </div>
                                <label class="col-sm-1 col-form-label col-form-label-sm" for="validId">Attach valid ID:</label>
                                <div class="col-sm-5">
                                    <input class="form-control form-control-sm" type="file" id="validId" name="validId" required><br>
                                </div>
                                <label class="col-sm-1 col-form-label col-form-label-sm" for="selfie">Attach Selfie:</label>
                                <div class="col-sm-5">
                                    <input class="form-control form-control-sm" type="file" id="selfie" name="selfie" required>
                                </div>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <input type="submit" value="Register">

                    </div>
                </div>
        </form>
    </main>

</body>

</html>

<?php

// Check if the required fields are set
if (
    isset($_POST['firstName']) &&
    isset($_POST['middleName']) &&
    isset($_POST['lastName']) &&
    isset($_POST['birthDate']) &&
    isset($_POST['gender']) &&
    isset($_POST['lgbtq']) &&
    isset($_POST['education']) &&
    isset($_POST['currentlyStudying']) &&
    isset($_POST['pwd']) &&
    isset($_POST['disability']) && // Add "disability" field here
    isset($_POST['work']) &&
    isset($_POST['maritalStatus']) &&
    isset($_POST['informalSettler']) &&
    isset($_POST['electricity']) &&
    isset($_POST['water']) &&
    isset($_POST['zone']) &&
    isset($_POST['village']) &&
    isset($_POST['lot']) &&
    isset($_POST['street']) &&
    isset($_POST['buildingNo']) &&
    isset($_POST['contactNo']) &&
    isset($_POST['email']) &&
    isset($_POST['barangaySince']) &&
    isset($_POST['registeredVoter']) &&
    isset($_POST['inBarangay']) &&
    isset($_POST['whatBarangay']) &&
    isset($_POST['familyHead']) &&
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    $_FILES['validId']['error'] == UPLOAD_ERR_OK &&
    $_FILES['selfie']['error'] == UPLOAD_ERR_OK
) {
    // Retrieve the values from the form
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $birthDate = $_POST['birthDate'];
    $gender = $_POST['gender'];
    $lgbtq = $_POST['lgbtq'];
    $education = $_POST['education'];
    $currentlyStudying = $_POST['currentlyStudying'];
    $pwd = $_POST['pwd'];
    $disability = $_POST['disability']; // Retrieve the value of the "disability" field
    $work = $_POST['work'];
    $maritalStatus = $_POST['maritalStatus'];
    $informalSettler = $_POST['informalSettler'];
    $electricity = $_POST['electricity'];
    $water = $_POST['water'];
    $zone = $_POST['zone'];
    $village = $_POST['village'];
    $lot = $_POST['lot'];
    $street = $_POST['street'];
    $buildingNo = $_POST['buildingNo'];
    $contactNo = $_POST['contactNo'];
    $email = $_POST['email'];
    $barangaySince = $_POST['barangaySince'];
    $registeredVoter = $_POST['registeredVoter'];
    $inBarangay = $_POST['inBarangay'];
    $whatBarangay = $_POST['whatBarangay'];
    $familyHead = $_POST['familyHead'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $checkQuery = "SELECT * FROM registration WHERE username = '$username'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Display an error message indicating that the username already exists
		$_SESSION['upload'] = "<div class='error'>Username already exists. Please choose a different username.</div>";
        echo '<script>document.getElementById("username").value = "";</script>'; // Clear the username textbox
        echo '<script>document.getElementById("username").focus();</script>'; // Set focus back to the username textbox
        echo '<script>window.location.href = "../../index.php";</script>'; // Redirect to index.php
        exit(); // Stop further execution of the script
    }

    $tmp_name_validId = $_FILES['validId']['tmp_name'];
    $name_validId = $username . '_' . basename($_FILES['validId']['name']);
    $name_selfie = $username . '_' . basename($_FILES['selfie']['name']);
    $uploads_dir_validId = 'admin/registration/regIds/'; // the folder where the valid id file will be stored
    $uploads_dir_selfie = 'admin/registration/regSelfies/'; // the folder where the selfie file will be stored
    move_uploaded_file($tmp_name_validId, $uploads_dir_validId . $name_validId);
    move_uploaded_file($tmp_name_selfie, $uploads_dir_selfie . $name_selfie);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // code to insert the username, hashed password, and filename into the database
    $familyId = uniqid('FAM2023');
    $barangayId = uniqid('BRGY2023');
    $houseId = uniqid('HOUSE2023');
    $familyRelation = 'Family Head';

    $sql = "INSERT INTO registration (familyId, barangayId, houseId, firstName, middleName, lastName, birthDate, gender, lgbtq, education, currentlyStudying, pwd, disability, work, maritalStatus, informalSettler, electricity, water, zone, village, lot, street, buildingNo, contactNo, email, barangaySince, registeredVoter, inBarangay, whatBarangay, familyHead, familyRelation, username, password, validId, selfie) VALUES ('$familyId', '$barangayId', '$houseId', '$firstName', '$middleName', '$lastName', '$birthDate', '$gender', '$lgbtq', '$education', '$currentlyStudying', '$pwd', '$disability', '$work', '$maritalStatus', '$informalSettler', '$electricity', '$water', '$zone', '$village', '$lot', '$street', '$buildingNo', '$contactNo', '$email', '$barangaySince', '$registeredVoter', '$inBarangay', '$whatBarangay', '$familyHead', '$familyRelation', '$username', '$hashed_password', '$name_validId', '$name_selfie')";
    $result = mysqli_query($conn, $sql);

    // Check if data was inserted successfully
    if ($result == true) {
        // Show success message
        echo "<script>alert('Your request has been successfully submitted.');</script>";

        // Add JavaScript to redirect after 2 seconds
        echo '<script>setTimeout(function(){window.location.href="../../index.php"}, 2000);</script>';
    } else {
        // Redirect
        echo "<script>alert('Error.');</script>";
        header('location: ../../index.php');
    }
} else {
    // Redirect if required fields are missing
    echo "<script>alert('Error. Some required fields are missing.');</script>";
}

?>
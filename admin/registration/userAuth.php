<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

// SUPER ADMIN
if ($_SESSION['userLevel'] == 1) {
} elseif ($_SESSION['userLevel'] == 2) {
    // CAPTAIN
    header("Location: ../admins/admin_barangayProfiles.php");
} elseif ($_SESSION['userLevel'] == 3) {
    // SECRETARY
    header("Location: ../admins/admin_barangayProfiles.php");
} elseif ($_SESSION['userLevel'] == 4) {
    // HEALTH OFFICER
    header("Location: ../admins/admin_health.php");
} elseif ($_SESSION['userLevel'] == 5) {
    // COUNCILOR
    header("Location: ../admins/admin_barangayProfiles.php");
} elseif ($_SESSION['userLevel'] == 6) {
    // CHAIRPERSON
    header("Location: ../admins/admin_barangayProfiles.php");
} elseif ($_SESSION['userLevel'] == 7) {
    // Constituent Account
    header("Location: ../user/index.php");
} else {
    // Business Account
    header("Location: ../business_ui/index.php"); 
}
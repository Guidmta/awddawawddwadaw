<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    
    // Ideiglenesen elmentjük a nevet a sessionbe, és átirányítjuk a dashboardra
    if (!empty($username)) {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit();
    }
}

// Ha valaki közvetlenül ide jön, visszadobjuk az UCP-re
header("Location: ucp.php");
exit();
?>

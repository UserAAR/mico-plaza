<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    
    header("Location: confirmation.php");
    exit();
} else {
    
    header("Location: contact_form.php");
    exit();
}
?>

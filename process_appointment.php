<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $patient_name = htmlspecialchars($_POST['patient_name']);
    $doctor_name = htmlspecialchars($_POST['doctor_name']);
    $department_name = htmlspecialchars($_POST['department_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $symptoms = htmlspecialchars($_POST['symptoms']);
    $appointment_date = htmlspecialchars($_POST['appointment_date']);

  
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Appointment Confirmation</title>
        <link rel='stylesheet' href='path_to_your_css_file.css'>
    </head>
    <body>
        <section class='confirmation_section layout_padding'>
            <div class='container'>
                <h2>Appointment Confirmation</h2>
                <p>Thank you, <strong>$patient_name</strong>. Your appointment has been booked successfully.</p>
                <p><strong>Doctor:</strong> $doctor_name</p>
                <p><strong>Department:</strong> $department_name</p>
                <p><strong>Phone Number:</strong> $phone</p>
                <p><strong>Symptoms:</strong> $symptoms</p>
                <p><strong>Appointment Date:</strong> $appointment_date</p>
            </div>
        </section>
    </body>
    </html>";
} else {
   
    header("Location: your_form_page.php");
    exit();
}
?>

<?php
require_once '../vendor/autoload.php'; // Load Symfony Mailer

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quantac";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date_submitted = date('Y-m-d H:i:s');

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contact_messages (first_name, last_name, email, message, date_submitted) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $first_name, $last_name, $email, $message, $date_submitted);

// Execute the statement
if ($stmt->execute()) {
    // Symfony Mailer configuration
    $transport = Transport::fromDsn('smtp://golu@quantanc.com:Computer@2024@smtp.zoho.in:587');
    $mailer = new Mailer($transport);

    $body = "Dear $first_name $last_name,<br><br>Thank you for contacting us. We have received your message and will get back to you shortly.<br><br>Best regards,<br>Quantac Team";
    $altBody = "Dear $first_name $last_name,\n\nThank you for contacting us. We have received your message and will get back to you shortly.\n\nBest regards,\nQuantac Team";

    $emailMessage = (new Email())
        ->from('golu@quantanc.com')
        ->to($email)
        ->subject('Contact Form Submission Confirmation')
        ->html($body)
        ->text($altBody);

    try {
        $mailer->send($emailMessage);
    } catch (TransportExceptionInterface $e) {
        echo "Message could not be sent. Error: " . $e->getMessage();
    }
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission | Quantac</title>
    <meta name="description" content="Thank you for submitting the contact form. We'll get back to you shortly. Contact Quantac for any inquiries or support." />
    <meta name="keywords" content="contact form submission, contact us, Quantac, inquiries, support" />
    <link rel="canonical" href="https://quantac.com/ajax/submit_contact.php" />
    <link rel="stylesheet" href="../style.css">
    <?php include_once '../component/link.php'; ?>
</head>
<body>
    <?php include_once '../component/Header.php'; ?>

    <div class="container-fluid py-lg-5 vh-100" style="background-color: #071a30">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="textColor">Thank You!</h2>
                <p class="text-light">Your message has been sent successfully. We will get back to you shortly.</p>
                <a href="http://localhost/Qunatac/index.php">
                    <button class="btn text-capitalize">Back to Home Page</button>
                </a>
            </div>
        </div>
    </div>

    <?php include_once '../component/Footer.php'; ?>
</body>
</html>



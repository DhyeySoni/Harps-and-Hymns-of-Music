<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $state = $_POST['states'];
    $zipCode = $_POST['zip'];
    $cardName = $_POST['cardName'];
    $cardNumber = $_POST['cardNum'];
    $expMonth = $_POST['expMonth'];
    $expYear = $_POST['expYear'];
    $cvv = $_POST['cvv'];
    $quantity = $_POST['quantity'];

    // Database connection
    $servername = "localhost"; // Change this to your database server
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "login"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the database
    $sql = "INSERT INTO payment (fullName, email, city, states, zip, cardName, cardNum, expMonth, expYear, cvv, quantity)
    VALUES ('$fullName', '$email', '$city', '$state', '$zipCode', '$cardName', '$cardNumber', '$expMonth', '$expYear', '$cvv', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["Paynow"])) { // Corrected case of $_POST
    try {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dhyey.imscit21@gmail.com'; // Update with your email
        $mail->Password = 'hemduylttbyrudom'; // Update with your password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('dhyey.imscit21@gmail.com'); // Update with your email
        $mail->addAddress($_POST["email"]); // Make sure your form has an input field with name="email"
        $mail->isHTML(true);
        $mail->Subject = "ticket Booking";
        $mail->Body = "hey user your booking is confirmed!!! ";

        // Get the quantity from the form
        $quantity = $_POST['quantity'];

        // Path to the PDF file
        $pdfFilePath = 'C:\xampp\htdocs\project\image\ticket.pdf';

        // Attach the same PDF file multiple times based on the quantity
        for ($i = 0; $i < $quantity; $i++) {
            $attachmentName = 'ticket_' . ($i + 1) . '.pdf'; // Generate a unique file name for each attachment
            $mail->addAttachment($pdfFilePath, $attachmentName); // Add the attachment with the unique file name
        }

        $mail->send();
        echo
            "<script>
        document.location.href='thank_you2.php';
        </script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
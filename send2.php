<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $pass = $_POST['pass']; // This is the plain text password provided by the user

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

    // SQL query to retrieve the hashed password from the database
    $checkUserQuery = "SELECT pass FROM userdata WHERE email='$email'";
    $result = $conn->query($checkUserQuery);

    if ($result->num_rows > 0) { // If a matching record is found
        $row = $result->fetch_assoc();
        $hashedPassword = $row['pass']; // This is the hashed password from the database

        // Verify that the provided password matches the hashed password
        if (password_verify($pass, $hashedPassword)) {
            // Passwords match, proceed with subscription
            // Retrieve other form data
            $cardName = $_POST['cardName'];
            $cardNumber = $_POST['cardNum'];
            $expMonth = $_POST['expMonth'];
            $expYear = $_POST['expYear'];
            $cvv = $_POST['cvv'];

            // SQL query to insert data into the subscribe table
            $sql = "INSERT INTO subscribe (fullName, email, pass, cardName, cardNum, expMonth, expYear, cvv)
            VALUES ('$fullName', '$email', '$pass', '$cardName', '$cardNumber', '$expMonth', '$expYear', '$cvv')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<script>
                    alert('You email and password are incorrect');
                    window.location.href = 'checkout2.php';
                    </script>";
        }

    } else {
        echo "<script>
                alert('You cannot subscribe because you are not signed up with the $email account');
                window.location.href = 'checkout2.php';
                </script>";
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
        $mail->Subject = "Subscription";

        // Calculate start date (today) and expiry date (one year from now)
        $subscriptionStartDate = date('Y-m-d');
        $subscriptionExpiryDate = date('Y-m-d', strtotime('+1 year'));

        $mail->Body = "Hey user, your Subscription is confirmed!<br><br>"
            . "Subscription Start Date: $subscriptionStartDate<br>"
            . "Subscription Expiry Date: $subscriptionExpiryDate<br>";

        $mail->send();
        echo
            "<script>
        document.location.href='thank_you1.php';
        </script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
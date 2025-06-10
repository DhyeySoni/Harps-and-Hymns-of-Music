<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo '<script>alert("You are logged out!!");</script>';
    header('location:login.php');
}
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "INSERT INTO contact (fname, email, mobile)
    VALUES ('$fname', '$email', '$mobile')";

    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
            location.replace("thank_you.php");
        </script>
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


<body style="background-color:#FFE5B4">
    <?php include 'menu.php'; ?>
    <div class="container">

        <div class="input-fields w-20">

        <form action="" method="post" class="bg-warning" style="display: flex; flex-wrap: wrap; justify-content: space-between; padding: 20px;">
    <div class="col" style="flex: 1; min-width: 300px; padding: 10px;">
        <div class="information bg-warning">
            <h2>Contact Information</h2><br><br>
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa-solid fa-user"></i>&nbsp; Name : Hiren Chate</span>
            </div><br><br>

            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa-solid fa-envelope"></i>&nbsp; Email : hirenchate@samraga.com</span>
            </div><br><br>

            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa-solid fa-phone"></i>&nbsp; Phone : 91674 67646</span>
            </div><br><br>

            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa-solid fa-location-dot"></i>&nbsp; Address : Ahmedabad, Gujarat, India</span>
            </div>
        </div>
    </div>
    <div class="text-center" style="flex: 1; min-width: 300px; padding: 10px;">
        <h2>Contact Us</h2><br>
        <p>
            <label for="name">Name:</label>
            <input type="text" name="fname" required
                style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ced4da; border-radius: 4px; box-sizing: border-box;">
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" required
                style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ced4da; border-radius: 4px; box-sizing: border-box;">
        </p>
        <p>
            <label for="mobile">Phone:</label>
            <input type="text" name="mobile" pattern="[0-9]{10}" required
                style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ced4da; border-radius: 4px; box-sizing: border-box;">
        </p>
        <button type="submit" name="submit"
            style="background-color: black; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; width: 100%;">Contact
            Now</button>
    </div>
</form>


        </div>
    </div>

</body>
<?php include 'footer.php'; ?>

</html>
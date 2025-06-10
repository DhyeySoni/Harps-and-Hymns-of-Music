<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo '<script>alert("You are logged out!!");</script>';
    header('location:login.php');
}
?>
<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

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
    $sql = "INSERT INTO contact (fname, email, mobile)
    VALUES ('$fname', '$email', '$mobile')";

    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
            location.replace("thank_you3.php");
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

<body style="background-color:#FFE5B4;">
    <?php include 'menu.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/70.png" class="d-block w-100" alt="First Slide">
            </div>
            <div class="carousel-item">
                <img src="image/5.png" class="d-block w-100" alt="Second Slide">
            </div>
            <div class="carousel-item">
                <img src="image/19.png" class="d-block w-100" alt="Third Slide">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center"> About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="image/11.png" class="d-block w-50">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h3>
                        <p class="py-3">Founded in 2016, the Samraga School of Arts and Music is dedicated to
                            promoting
                            art to diverse audiences. whether it is performing arts, fine arts, or any other art
                            form, Samraga is committed to providing a platform for its flourishing. Acting as a
                            bridge,
                            we connect contempory audiences to the vast reservoir of culture and heritage, allowing
                            them
                            to experience and appreciate its richness.
                        </p>
                    </h3>
                    <a href="about.php" class="btn btn-success">check more</a>
                </div>
            </div>
    </section>

    <section class="my-3">
        <div class="py-5">
            <h2 class="text-center"> Upcoming Event</h2>
        </div>
        <div class="container-fluid">
            <div class="col-lg-4 col-md-4 col-12 py-4">
                <div class="card bg-warning">
                    <a href="image/61.png" target="_blank">
                        <img src="image/61.png" class="card-img-top" alt="Card Image"
                            style="max-height: 100%; width: 100%;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">SAMRAGA 2023</h5>

                        <h6 class="card-text">16 DEC 2023 AT 20:00 - 17 DEC 2023 AT 23:00</h6>
                        <h7>

                            Event by Samraga-The Festival Of Indian Classical Music
                        </h7><br><br>

                        <h6> About</h6>
                        <p style="color: grey ;">Samraga 2023 - the Magic of Indian Classical Music!<br><br>

                            Step into a world of classical enchantment on December 16th & 17th with extraordinary
                            performances by incredibly talented artists.<br><br>

                            Dec 16 : Tanmay Deochake and his band, Harmony<br><br>
                            Dec 17 : First Half - Jugalbandi (Flute & Santoor with Tabla) by Dr. Bipul Kumar Ray,
                            Mayank Raina & Hiren Chate<br><br>
                            Dec 17 : Second Half - Sitar and Tabla performance by Maestro Niladri Kumar & Satyajit
                            Talwalkar.<br>
                        </p>
                        <i class="fa-solid fa-location-dot" style="font-size: 20px; color:red">&nbsp; &nbsp;
                            <a href="https://maps.app.goo.gl/GN8j5hN3YK4gzvaN7"></i>
                        Shreyas Foundation ,shreyas Tekra,manekbaug Ahmedabad</a>
                        <br><br>

                        <div
                            style="text-align: center; margin-top: 20px; background-color: #f0f0f0; padding: 10px; border-radius: 8px;">
                            <span style="font-size: 18px;">Price: Rs. 5000 Only</span>
                        </div>
                        <br>
                        <div class="text-center">
                            <a href="checkout.php" class="btn btn-success">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-3">
        <div class="py-5">
            <h2 class="text-center">Gallery</h2>
        </div>
        <div class="container-fluid py-4 bg-warning">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/20.png" class="img-fluid pb-4 " style="height:250px; width: 400px;">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/21.png" class="img-fluid pb-4" style="height:250px; width: 400px;">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/26.png" class="img-fluid pb-4" style="height:250px; width: 400px;">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/27.png" class="img-fluid pb-4" style="height:250px; width: 400px;">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/30.png" class="img-fluid pb-4" style="height:250px; width: 400px;">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/44.png" class="img-fluid pb-4" style="height:250px; width: 400px;">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <blockquote class="instagram-media" style="height:600px; width: 400px;"
                        data-instgrm-permalink="https://www.instagram.com/reel/CxiIhjmp3Gu/?utm_source=ig_web_copy_link"
                        data-instgrm-version="13"></blockquote>
                    <script async src="https://www.instagram.com/embed.js"></script>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <blockquote class="instagram-media" style="height:600px; width: 400px;"
                        data-instgrm-permalink="https://www.instagram.com/reel/C0ea7WptmJQ/?utm_source=ig_web_copy_link"
                        data-instgrm-version="13"></blockquote>
                    <script async src="https://www.instagram.com/embed.js"></script>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <blockquote class="instagram-media" style="height:600px; width: 400px;"
                        data-instgrm-permalink="https://www.instagram.com/reel/ClvKC8pAmra/?utm_source=ig_web_copy_link"
                        data-instgrm-version="13"></blockquote>
                    <script async src="https://www.instagram.com/embed.js"></script>
                </div>

            </div>
    </section>
    <div>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.2248584630856!2d72.5165102747171!3d23.05221647915298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b54bf8d0907%3A0x50e2d8064c4137fb!2s23%2C%20Jay%20Ambe%20Nagar%2C%20Patel%20Society%2C%20Jai%20Ambe%20Nagar%2C%20Thaltej%2C%20Ahmedabad%2C%20Gujarat%20380054!5e0!3m2!1sen!2sin!4v1706630815772!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <section class="my-5">
        <div class="w-20 m-auto text-center container-fluid">
            <form action="" method="post" class="bg-warning">
                <div class="py-3">
                    <h2 class="text-center">Contact Us</h2>
                </div>
                <div class="form-group input-group  mx-auto py-2" style="width:50%;">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    </div>
                    <input type="text" placeholder="Name" name="fname" autocomplete="off" class="form-control" required>
                </div>
                <div class="form-group input-group  mx-auto py-2" style="width:50%;">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    </div>
                    <input type="text" placeholder="Email i'd" name="email" autocomplete="off" class="form-control"
                        pattern="^[a-z0-9.]+@[a-z]+\.[a-z]{2,3}$"
                        title="must be in this format e.g. alex2001@gmail.com " required>
                </div>
                <div class="form-group input-group  mx-auto py-2" style="width:50%;">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                    </div>
                    <input type="text" placeholder="Contact Number" name="mobile" autocomplete="off"
                        class="form-control" pattern="^[0-9]{10}$" title="contact number must be 10 digits" required>
                </div>

                <button type="submit" name="submit" class="btn py-2"
                    style="background-color: black; color: white; width: auto;">
                    Contact Now </button>


            </form>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>
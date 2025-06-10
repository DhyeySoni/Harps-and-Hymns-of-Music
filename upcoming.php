<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo '<script>alert("You are logged out!!");</script>';
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>

<head>

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
</head>

<body style="background-color:#FFE5B4">
    <?php include 'menu.php'; ?>
    <section class="my-5">
        <div class="py-4">
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
        <div class="py-4">
            <h2 class="text-center"> Past Event</h2>
        </div>
        </div>
        <div class="container-fluid bg-warning">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 py-4">
                    <div class="card">
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

                                Step into a world of classical enchantment on December 16th & 17th with
                                extraordinary
                                performances by incredibly talented artists.<br><br>

                                Dec 16 : Tanmay Deochake and his band, Harmony<br><br>
                                Dec 17 : First Half - Jugalbandi (Flute & Santoor with Tabla) by Dr. Bipul Kumar
                                Ray,
                                Mayank Raina & Hiren Chate<br><br>
                                Dec 17 : Second Half - Sitar and Tabla performance by Maestro Niladri Kumar &
                                Satyajit
                                Talwalkar.<br>
                            </p>
                            <i class="fa-solid fa-location-dot" style="font-size: 20px; color:red">&nbsp; &nbsp;
                                <a href="https://maps.app.goo.gl/GN8j5hN3YK4gzvaN7"></i>
                            Shreyas Foundation ,shreyas Tekra,manekbaug Ahmedabad</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 py-4">
                    <div class="card">
                        <a href="image/60.png" target="_blank">
                            <img src="image/60.png" class="card-img-top" alt="Card Image"
                                style="max-height: 100%; width: 100%;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">SAMRAGA MUSICAL FESTIVAL 2022</h5>

                            <h6 class="card-text">16 DEC 2022 AT 7:30 - 18 DEC 2022 AT 10:30</h6>
                            <h7>

                                Event by Samraga-The Festival Of Indian Classical Music
                            </h7><br><br>

                            <h6> About</h6>
                            <p style="color: grey ;">
                                SAMRAGA 2022 Artist Lineup:<br><br>
                                <b> 16th December:</b><br>
                                1. Pavin Gaonkar- Vocal
                                Joby Joy- Tabla
                                Nilay Salvi- Harmonium
                                Ikram Khan- Sarangi<br>

                                2. Pt Ronu Majumdar- Flute
                                Jayant- Carnatic Flute
                                Hiren Chate- Tabla
                                Sai Giridhar- Mridangam<br><br>

                                <b>17th December:</b><br>
                                1. Dr Viraj Amar- Vocal
                                Sapan Anjaria- Tabla
                                Nilay Salvi- Harmonium
                                Sangeet Mishra- Sarangi<br>

                                2. Pt Rajendra Gangani- Kathak
                                Hiren Chate- Tabla
                                Ashish Gangani- Pakhawaj
                                Sangeet Mishra- Sarangi
                                Sami Ullah – Vocal<br><br>

                                <b>18th December:</b><br>
                                1. Shravan Samsi- Drums
                                Shikhar Naad Qureshi - Djembe
                                Vanraj Shastri- Sarangi
                                Nilay Salvi- vocal<br>
                                2. Pratibha Singh bagel- Thumri and ghazal
                                Venue ; Shreyas Foundation, Ahmedabad
                                Time ; 7:30 PM to 10:30
                                Date ; 16, 17 & 18 Dec 2022<br><br>
                                <b>Terms & Condition</b><br><br>
                                Age Limit: Open To All
                                Internet handling fee per ticket may be levied. Please check your total amount
                                before
                                payment.
                                Tickets once booked cannot be exchanged or refunded.
                                We recommend that you arrive at least 20 minutes prior at the venue.
                                Re-entry is not allowed.
                            </p>
                            <i class="fa-solid fa-location-dot" style="font-size: 20px; color:red">&nbsp; &nbsp;
                                <a href="https://maps.app.goo.gl/GN8j5hN3YK4gzvaN7"></i>
                            Shreyas Foundation ,shreyas Tekra,manekbaug Ahmedabad</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 py-4">
                    <div class="card">
                        <a href="image/58.png" target="_blank">
                            <img src="image/58.png" class="card-img-top" alt="Card Image"
                                style="max-height: 100%; width: 100%;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">HOMAGE 2022</h5>

                            <h6 class="card-text">16 JULY 2022 AT 19:00 - 17 JULY 2022 AT 22:00 BST</h6>
                            <h7>

                                Event by Samraga-The Festival Of Indian Classical Music
                            </h7><br><br>

                            <h6> About</h6>
                            <p style="color: grey ;">Homage is a Series of event just like SAMARAGA organised by
                                Beat of a Drum in the memories of Lt. Shree Raghunath Chate. We try to bring Young
                                artist from across india and overseas to Promote them and Indian Classical Music.
                            </p>
                            <i class="fa-solid fa-location-dot" style="font-size: 20px; color:red">&nbsp; &nbsp;
                                <a href="https://maps.app.goo.gl/vJvCGyFGfNWuoEVr9"></i>Dr. Shyama Prasad Mukherjee
                            Auditorium, Mathematics-Department, Gujarat University Campus, Ahmedabad-380009</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 py-4">
                    <div class="card">
                        <a href="image/57.png" target="_blank">
                            <img src="image/57.png" class="card-img-top" alt="Card Image"
                                style="max-height: 100%; width: 100%;"> </a>
                        <div class="card-body">
                            <h5 class="card-title">SAMRAGA Presents Ustad Zakir Hussain</h5>

                            <h6 class="card-text">9 DEC 2019 AT 20:00 - 10 DEC 2019 AT 23:00 GMT </h6>
                            <h7>

                                Event by Samraga-The Festival Of Indian Classical Music
                            </h7><br><br>

                            <h6> About</h6>
                            <p style="color: grey ;">SAMRAGA - A two day festival of Indian Classical Music
                                celebrating the birth centenary of tabla maestro Ustad Allah Rakha.<br><br>
                                Headlining this year’s festival 10th December is his illustrious sons Ustad
                                Zakir Hussain and Taufiq Qureshi accompanied by Tanmay Deochake.<br><br>
                                The first half will feature well known vocalist from Delhi Nabanita Choudhary
                                accompanied by Mithilesh Jha (Tabla) and Vinay Mishra ( Harmonium)<br><br>
                                9th Dec features Taka Hiro Aria (Santoor) Hiren chate (Tabla) Aniket Khandekar (
                                vocals) Hemant Joshi (Tabla) Nilay Salvi ( Harmonium).
                            </p>
                            <i class="fa-solid fa-location-dot" style="font-size: 20px; color:red">&nbsp; &nbsp;
                                <a href="https://maps.app.goo.gl/GN8j5hN3YK4gzvaN7"></i>Shreyas Foundation ,shreyas
                            Tekra ,manekbaug Ahmedabad, Ahmedabad, India</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 py-4">
                    <div class="card">
                        <a href="image/56.png" target="_blank">
                            <img src="image/56.png" class="card-img-top" alt="Card Image"
                                style="max-height: 100%; width: 100%;"> </a>
                        <div class="card-body">
                            <h5 class="card-title">SAMRAGA - Morning Raga(Melodies)</h5>

                            <h6 class="card-text">SUNDAY, 29 SEPTEMBER 2019 AT 10:30 BST</h6>
                            <h7>
                                Event by Samraga-The Festival Of Indian Classical Music
                            </h7><br><br>

                            <h6> About</h6>
                            <p style="color: grey ;">An indian classical music event featuring morning ragas. A
                                perfect way to destress your mind and meditate with the perfect indian classical
                                musical scales. A rare opportunity to get to hear morning ragas
                            </p>
                            <i class="fa-solid fa-location-dot" style="font-size: 20px; color:red">&nbsp; &nbsp;
                                <a href="https://maps.app.goo.gl/3yXjyELCuVfGofTn9"></i>Tileyard
                            Studio, Kings Cross, London, United Kigndom</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 py-4">
                    <div class="card">
                        <a href="image/55.png" target="_blank">
                            <img src="image/55.png" class="card-img-top" alt="Card Image"
                                style="max-height: 100%; width: 100%;"> </a>
                        <div class="card-body">
                            <h5 class="card-title">HOMAGE 2019</h5>

                            <h6 class="card-text">SATURDAY, 7 SEPTEMBER 2019 AT 19:00</h6>
                            <h7>

                                Event by Samraga-The Festival Of Indian Classical Music
                            </h7><br><br>

                            <h6> About</h6>
                            <p style="color: grey ;">Homage is a Series of event just like SAMARAGA organised by
                                Beat of a Drum in the memories of Lt. Shree Raghunath Chate. We try to bring Young
                                artist from across india and overseas to Promote them and Indian Classical Music.
                            </p>
                            <i class="fa-solid fa-location-dot" style="font-size: 20px; color:red">&nbsp; &nbsp;
                                <a href="https://maps.app.goo.gl/xyarbDLdeqM1Tbi78"></i>Nehru Foundation for
                            Development, Thaltej Tekra, Ahmedabad, India, Gujarat</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 py-4">
                    <div class="card">
                        <a href="image/54.png" target="_blank">
                            <img src="image/54.png" class="card-img-top" alt="Card Image"
                                style="max-height: 100%; width: 100%;"> </a>
                        <div class="card-body">
                            <h5 class="card-title">SAMRAGA-The Festival of Music</h5>

                            <h6 class="card-text">SATURDAY, 8 DECEMBER 2018 AT 19:30</h6>
                            <h7>
                                Event by Samraga-The Festival Of Indian Classical Music
                            </h7><br><br>

                            <h6> About</h6>
                            <p style="color: grey ;"> This years festival features young talkenys like Ashwin
                                Srinivasan( Flute) Nandini Shankar (Violin) Hiren Chate (TAbla) shruteendra
                                Katagade(Tabla) Shravan Samsi (Drums) gian Singh (Pakhawaj) Tanmay Deochake (
                                Harmonium).
                                Stalwarts like Pandit Yogesh Samsi ( Tabla) Ustad Shahid Parvez( Sitar)
                                Guruprassna(Kanjira) Aditi Upadhaya (Vocals) are the artists who will be spreading
                                the essence of indian and Carnatic classical music.</p>
                            <i class="fa-solid fa-location-dot" style="font-size: 20px; color:red">&nbsp; &nbsp;
                                <a href="https://maps.app.goo.gl/GN8j5hN3YK4gzvaN7"></i>
                            Shreyas Foundation ,shreyas Tekra,manekbaug Ahmedabad</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 py-4">
                    <div class="card">
                        <a href="image/53.png" target="_blank">
                            <img src="image/53.png" class="card-img-top" alt="Card Image"
                                style="max-height: 100%; width: 100%;"> </a>
                        <div class="card-body" style="height: 100%;">
                            <h5 class="card-title">HOMAGE 2018</h5>

                            <h6 class="card-text">SUNDAY, 22 JULY 2018 AT 18:00</h6>
                            <h7>
                                Event by Samraga-The Festival Of Indian Classical Music and Priyanshkumar B Rajput
                            </h7><br><br>

                            <h6> About</h6>
                            <p style="color: grey ;"> Homage is a Classical Tribute to Lt. Shree Raghunath Chate.
                                Shree Hiren Chate and
                                Beat of a Drum have been organising this event since 2016. The event will be open
                                for all music lovers and it will feature great Indian classical artist from India.
                                Your presence will be of great support.</p>
                            <i class="fa-solid fa-location-dot" style="font-size: 20px; color:red">&nbsp; &nbsp;
                                <a href="https://maps.app.goo.gl/xyarbDLdeqM1Tbi78"></i>Nehru Foundation for
                            Development, Thaltej Tekra, Ahmedabad, India, Gujarat</a>
                        </div>
                    </div>
                </div>


                <style>
                    .card {
                        height: 100%;
                        display: flex;
                        flex-direction: column;
                    }

                    .card-img-top {
                        object-fit: cover;
                        height: 100%;
                    }

                    .card-body {
                        margin-top: auto;
                        position: relative;
                    }
                </style>


            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>

</html>
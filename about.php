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
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center"> About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="image/11.png" class="d-block w-70">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h4>
                        <p class="py-3">Founded in 2016, the Samraga School of Arts and Music is
                            dedicated to
                            promoting
                            art to diverse audiences. whether it is performing arts, fine arts, or
                            any other art
                            form, Samraga is committed to providing a platform for its flourishing.
                            Acting as a
                            bridge,
                            we connect contempory audiences to the vast reservoir of culture and
                            heritage, allowing
                            them
                            to experience and appreciate its richness.
                        </p>
                    </h4>
                </div>
            </div>

            <div class="my-4">
                <h1 class="text-center bg-warning"> Events
                </h1>
            </div>
            <div class="my-5">
                <h2 class="text-center"> Homage</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 py-3">
                        <img src="image/9.png" class="d-block w-60" alt="Half Width Image">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h4>
                            <p class="py-2">Homage is a heartfelt event organised in loving memory
                                of the late Shri
                                Raghunath Chate, the esteemed father of our founder, Hiren Chate. It
                                serves as a
                                beautiful tribute, honouring the exceptional bond between a revered
                                guru and his devoted
                                student. At Homage, we provide a platform for talented regional
                                artists to showcase
                                their remarkable skills and artistic prowess. Moreover, to the
                                delight of the audience,
                                we are privileged to host a distinguished and accomplished senior
                                artist as a special
                                guest at the event. Homage is an inclusive and accessible occasion,
                                welcoming people of
                                all backgrounds to revel in the extraordinary talents of both
                                regional and national
                                artists at their very best.
                            </p>
                        </h4>
                    </div>
                </div>
                <div class="my-5">
                    <h2 class="text-center"> Samraga Music Festival</h2>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 py-3">
                      
    <img src="image/70.png" class="d-block w-100" alt="Half Width Image">

                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h4>
                                <p class="py-2">The Samraga Music Festival is the pinnacle event of
                                    our annual
                                    calendar, featuring illustrious performances by marquee artists
                                    and a captivating
                                    symphony of melodies. Renowned maestro Ustaad Zakir Hussain and
                                    his esteemed brother
                                    Ustaad Taufiq Qureshi have graced the festival with their
                                    mesmerizing talent.
                                    Alongside the captivating performances, the festival also
                                    includes workshops, jam
                                    sessions, and interactive sessions, creating a unique and
                                    enriching environment.
                                    This distinctive blend of extraordinary performances and
                                    engaging activities is what
                                    sets the Samraga Music Festival apart, making it a truly
                                    unforgettable experience.
                                </p>
                            </h4>
                        </div>
                    </div>
                    <div class="my-5">
                        <h2 class="text-center"> Baithak</h2>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 py-3">
                                <img src="image/13.png" class="d-block w-70">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <h4>
                                    <p class="py-2">Baithak, deeply rooted in Indian Classical
                                        Music, is a cherished
                                        tradition. Its distinctive charm lies in its small and
                                        intimate setting. Samraga
                                        has successfully organised Baithaks in prominent cities such
                                        as Ahmedabad,
                                        Mumbai, London, and Toronto, receiving an overwhelmingly
                                        positive response from
                                        attendees.
                                    </p>
                                </h4>
                            </div>
                        </div>
                        <div class="my-5">
                            <h2 class="text-center"> Rivaj</h2>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 py-3">
                                    <img src="image/14.png" class="d-block w-70">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h4>
                                        <p class="py-2">Rivaj, a word that embodies tradition,
                                            represents an event
                                            deeply rooted in the rich heritage of Hindustani arts.
                                            It serves as a
                                            captivating showcase for the finest cultural art, music,
                                            and literature that
                                            often remain unappreciated in today's fast-paced world.
                                            Rivaj provides
                                            a platform where art, culture, and tradition seamlessly
                                            converge, creating
                                            an immersive and transformative experience for all.
                                            Here, classical
                                            compositions harmoniously intertwine with modern
                                            adaptations, bridging the
                                            gap between the past and the present.
                                        </p>
                                    </h4>
                                </div>
                            </div>
                            <div class="my-5">
                                <h2 class="text-center"> Morning Ragas </h2>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 py-3">
                                        <img src="image/15.png" class="d-block w-70">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <h4>
                                            <p class="py-2">Discover a one-of-a-kind experience with
                                                "Morning
                                                Ragas." As the sun rises, immerse yourself in the
                                                captivating blend
                                                of music and art, inspired by the wisdom of gurus
                                                and teachers who favor
                                                morning creativity. Breaking the norm of evening
                                                events, our unique
                                                approach offers a fresh and soulful start to the
                                                day. Embrace the
                                                tranquil melodies and explore the vibrancy of
                                                artistic expression in the
                                                early hours. "Morning Ragas" is set to become an
                                                unforgettable
                                                journey into the heart of music's true essence. Mark
                                                your calendars
                                                for next year's event and join us at the dawn of a
                                                melodious
                                                morning celebration.
                                            </p>
                                        </h4>
                                    </div>
                                </div>

                                <div class="my-5">
                                    <h2 class="text-center"> Why Us? </h2>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 py-3">
                                            <img src="image/3.png" class="d-block w-70">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <h4>
                                                <p class="py-2">At Samraga, we hold a strong belief in the
                                                    transformative power of businesses to influence society and
                                                    the environment positively. All our programs are carefully
                                                    designed with a focus on creating a positive impact on
                                                    society through the medium of art. We recognize art's
                                                    remarkable ability to connect people in profound and
                                                    meaningful ways, fostering understanding, empathy, and
                                                    cultural enrichment. By harnessing this potential, we aim to
                                                    contribute to a more harmonious and enlightened world.
                                                </p>
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="my-5">
                                        <h2 class="text-center"> Next Step </h2>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12 py-3">
                                                <img src="image/4.png" class="d-block w-70">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <h4>
                                                    <p class="py-2">We would be delighted to arrange a meeting with
                                                        your CSR team to explore the potential avenues of collaboration
                                                        further.<br>
                                                        Together, let us embark on a journey that not only enhances your
                                                        corporation's bottom line but also ushers in a brighter and
                                                        more compassionate future.
                                                    </p>
                                                </h4>
                                            </div>
                                        </div>

                                        <div class="my-5">
                                            <h2 class="text-center"> Vision </h2>
                                        </div>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-12 py-3">
                                                    <img src="image/16.png" class="d-block w-70">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <h4>
                                                        <p class="py-2">Samraga envisions a world where individuals are
                                                            empowered to freely express themselves through art. It is a
                                                            world where every person, irrespective of age or gender,
                                                            embraces a profound sense of cultural identity.
                                                        </p>
                                                    </h4>
                                                </div>
                                            </div>

                                            <div class="my-5">
                                                <h2 class="text-center"> Belief </h2>
                                            </div>
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-12 py-3">
                                                        <img src="image/17.png" class="d-block w-70">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <h4>
                                                            <p class="py-2">Samraga firmly believes that in order to
                                                                preserve and promote the essence and cultural wealth of
                                                                classical art forms, it is imperative for all of us to
                                                                actively participate in the presentation for a broader
                                                                audience. We are dedicated to cultivating an ecosystem
                                                                that gives platform to artits across varied genres and
                                                                styles to exhibit their art at the highest level.
                                                            </p>
                                                        </h4>
                                                    </div>
                                                </div>

                                                <div class="my-5">
                                                    <h2 class="text-center"> Aim </h2>
                                                </div>
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-12 py-3">
                                                            <img src="image/18.png" class="d-block w-70">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <h4>
                                                                <p class="py-2">Samraga's primary objective is to
                                                                    host and promote a diverse range of classical and
                                                                    experimental events that embody the essence of
                                                                    interaction and collaboration. In addition, we
                                                                    strive to foster an innovative spirit and encourage
                                                                    experimentation by exploring dynamic combinations
                                                                    such as Music and Theatre, Art and Literature, Music
                                                                    and Mathematics, and Art and therapy.
                                                                </p>
                                                            </h4>
                                                        </div>
                                                    </div>


    </section>

    <?php include 'footer.php'; ?>
</body>

</html>
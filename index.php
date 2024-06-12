<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quantac";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM casestudy ORDER BY id DESC LIMIT 3";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM casestudy ORDER BY id  ASC LIMIT 3";
$result3 = $conn->query($sql3);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantac | Web Development, App Development, MVP Services</title>
    <meta name="description"
        content="Quantac is a leading service-based company offering web development, app development, and MVP services. We cater to clients and government projects with innovative solutions and expert support.">
    <meta name="keywords"
        content="Quantac, web development, app development, MVP services, software development, government projects, client projects, IT solutions, technology services">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="Quantac | Web Development, App Development, MVP Services">
    <meta property="og:description"
        content="Quantac provides top-notch web and app development services, specializing in MVPs for clients and government projects. Discover our innovative solutions today.">
    <meta property="og:image" content="assets\Quantac.png">
    <meta property="og:url" content="https://quantac.com">
    <meta property="og:type" content="website">
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Quantac | Web Development, App Development, MVP Services">
    <meta name="twitter:description"
        content="Quantac offers exceptional web and app development services, with a focus on MVPs for clients and government projects. Explore our services today.">
    <meta name="twitter:image" content="https://quantac.com/assets\Quantac.png">
    <style>
        .hero {
            position: relative;
            background: url('assets/Hero1.png') no-repeat center center/cover;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            /* Optional: If you want the text to be white for better contrast */
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Adjust the alpha value for the desired darkness */
            z-index: 1;
            /* Ensures the overlay is above the background image */
        }

        .hero>.container {
            position: relative;
            z-index: 2;
            /* Ensures the content is above the overlay */
        }

        .hero h1 {
            font-size: 4rem;
        }

        .hero p {
            color: white;
            font-size: 1.2rem;
            margin-top: 20px;
        }

        .testimonials {
            background-color: #ffe164;
            color: #071a30;
            padding: 40px 20px;
            border-radius: 10px;
        }

        .testimonials .card {
            background-color: #071a30 !important;
            color: white;
        }


        .container {
            position: relative;
        }

        .step {
            display: flex;
            align-items: center;
            margin: 50px 0;
            position: relative;
            padding: 10px;
        }


        .content {
            flex: 1;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .image-container {
            flex: 1;
            text-align: center;
        }

        .image-container img {
            max-width: 100%;
            border-radius: 10px;
        }

        .serviceCard{
            height: 67vh !important;
        }
    </style>
    <?php include_once './component/link.php'; ?>
</head>

<body>

    <?php include_once './component/Header.php'; ?>

    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <h1>Your Trusted Service Partner</h1>
            <p>Delivering Excellence in Web Development, App Development, MVP , AI & ML solutions, and more.</p>
            <button class="btn btn-primary rounded-8 text-capitalize" onclick="BookMeeting()">Get a Free Consultation
            </button>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center text-light">
                <h2 class="textColor">About Us</h2>
                <p>We are committed to providing top-notch services that help businesses thrive in the digital age. Our
                    team of experts is dedicated to delivering innovative solutions tailored to meet your specific
                    needs.</p>
                <a href="about_us/"> <button class="btn text-capitalize"> Read More </button></a>

            </div>
        </div>
    </div>

    <div class="stepper">
        <div class="indicator" id="indicator"></div>
    </div>

    <div class="container g-0 text-light ">
        <div class="step ">
            <div class="content">
                <h3> Company</h3>
                <p>Quantac Software Private Limited is a premier provider of cutting-edge digital solutions, dedicated
                    to
                    driving success for our clients through innovative technology. Specializing in government and
                    private
                    sector projects, we excel in a diverse range of services including web development, app development,
                    MVP
                    services for startups, Android development, and machine learning. Our commitment to excellence and
                    customer satisfaction is evident in every project we undertake, helping businesses streamline
                    operations
                    and achieve remarkable growth. Partner with Quantac to transform your ideas into reality and take
                    your
                    business to new heights.</p>
            </div>
            <div class="image-container">
                <img src="http://localhost/Qunatac/assets/CompanyFoundation.png" alt="Founded in 2010">
            </div>
        </div>

    </div>

    <!-- Services Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4 textColor">Our Services</h2>

        <div class="row g-6">

            <div class="col-md-4 col-12 my-2">
                <div class="card rounded-6 p-3 border border-dark serviceCard">
                    <img src="http://localhost/Qunatac/assets/webDevelopment.png" class="img-fluid cardImageHeight" alt="">
                    <h3>Web Development</h3>
                    <p class="text-light">Our web development services deliver innovative solutions, ensuring your
                        online platform is
                        robust and engaging.</p>
                    <p class="text-light"><strong>Client Testimonial:</strong> "Thanks to Quantac's web development
                        team, our website
                        truly reflects our brand and has greatly improved our business."</p>
                   
                    <div class="row">
                        <div class="col-6"><button class="btn text-capitalize">Read </button></div>
                        <div class="col-6"><button class="btn rounded-8 text-capitalize" onclick="BookMeeting()"> Schedule a Meeting </button></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 my-2">
                <div class="card rounded-6 p-3 border border-dark serviceCard">
                    <img src="http://localhost/Qunatac/assets/AppDevelopment.png" class="img-fluid cardImageHeight" alt="">
                    <h3>App Development</h3>
                    <p class="text-light">We craft innovative and user-friendly mobile applications tailored to your
                        business needs to gain more user that will directly makes profit.

                    </p>
                    <p class="text-light"><strong>Client Testimonial:</strong> "Our app has received fantastic reviews,
                        thanks to
                        Quantac's
                        expertise and dedication."</p>
                        <div class="row">
                        <div class="col-6"><button class="btn text-capitalize">Read </button></div>
                        <div class="col-6"><button class="btn rounded-8 text-capitalize" onclick="BookMeeting()"> Schedule a Meeting </button></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 my-2">
                <div class="card rounded-6 p-3 border border-dark serviceCard">
                    <img src="http://localhost/Qunatac/assets/MultiVendorApp.png" class="img-fluid cardImageHeight" alt="">
                    <h3>Multivendor App Development</h3>
                    <p class="text-light">We create robust multivendor applications designed to streamline marketplace
                        operations and
                        enhance user experience.</p>
                    <p class="text-light"><strong>Client Testimonial:</strong> "Quantac's multivendor solution has been
                        a game-changer
                        for
                        our business."</p>
                        <div class="row">
                        <div class="col-6"><button class="btn text-capitalize">Read </button></div>
                        <div class="col-6"><button class="btn rounded-8 text-capitalize" onclick="BookMeeting()"> Schedule a Meeting </button></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 my-2">
                <div class="card rounded-6 p-3 border border-dark serviceCard">
                    <img src="http://localhost/Qunatac/assets/MvpImages.png" class="img-fluid cardImageHeight" alt="">
                    <h3>MVP for Startups</h3>
                    <p class="text-light">Empowering startups to validate their ideas and enter the market swiftly with
                        a high-quality
                        Minimum Viable Product (MVP). </p>
                    <p class="text-light"><strong>Client Testimonial:</strong> "The MVP Quantac developed helped us
                        secure crucial
                        funding."</p>
                        <div class="row">
                        <div class="col-6"><button class="btn text-capitalize">Read </button></div>
                        <div class="col-6"><button class="btn rounded-8 text-capitalize" onclick="BookMeeting()"> Schedule a Meeting </button></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 my-2">
                <div class="card rounded-6 p-3 border border-dark serviceCard">
                    <img src="http://localhost/Qunatac/assets/Aiml.png" class="img-fluid cardImageHeight" alt="">
                    <h3>AI & ML Solutions</h3>
                    <p class="text-light">Unlocking the potential of artificial intelligence and machine learning, we
                        leverage
                        cutting-edge
                        technologies to automate tasks and optimize business workflows.</p>
                    <p class="text-light"><strong>Client Testimonial:</strong> "Quantac's AI solutions have completely
                        transformed our
                        approach to data analysis, providing invaluable insights and driving remarkable business
                        growth."</p>
                        <div class="row">
                        <div class="col-6"><button class="btn text-capitalize">Read </button></div>
                        <div class="col-6"><button class="btn rounded-8 text-capitalize" onclick="BookMeeting()"> Schedule a Meeting </button></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 my-2">
                <div class="card rounded-6 p-3 border border-dark serviceCard">
                    <img src="http://localhost/Qunatac/assets/FullStackDevelopment.png" class="img-fluid cardImageHeight" alt="">
                    <h3>Full Stack Projects</h3>
                    <p class="text-light">Empowering businesses with end-to-end full stack development solutions, we
                        craft dynamic and
                        scalable applications tailored to your unique requirements.</p>
                    <p class="text-light"><strong>Client Testimonial:</strong> "Quantac's full stack development team
                        surpassed our
                        expectations, delivering a solution that exceeded our goals."</p>
                        <div class="row">
                        <div class="col-6"><button class="btn text-capitalize">Read </button></div>
                        <div class="col-6"><button class="btn rounded-8 text-capitalize" onclick="BookMeeting()"> Schedule a Meeting </button></div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Why Choose Us Section -->
    <div class="container mt-5 text-light">
        <div class="row text-center">
            <div class="col-md-4 my-2">
                <h4>10+ Years Experience</h4>
                <p>We have a decade of experience delivering quality services to our clients.</p>
            </div>
            <div class="col-md-4 my-2">
                <h4>100+ Projects Completed</h4>
                <p>Our team has successfully completed over 100 projects across various industries.</p>
            </div>
            <div class="col-md-4 my-2">
                <h4>95% Client Satisfaction</h4>
                <p>We pride ourselves on maintaining a high client satisfaction rate.</p>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="container mt-5 testimonials">
        <h2 class="text-center text-black">Client Testimonials</h2>
        <div class="container-fluid">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="row g-0">
                    <div class="col-lg-1">
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                    <div class="col-lg-10">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                    <?php
                                    if ($result2->num_rows > 0) {
                                        while ($row = $result2->fetch_assoc()) {
                                            ?>
                                            <!-- Case Study -->
                                            <div class="col-md-4 col-12 my-3">
                                                <div class="card text-light border border-dark rounded-6 cardHeight p-3"
                                                    style="background-color: #071a30">
                                                    <img src="<?php echo $row['image']; ?>" class="bg-image cardImageHeight"
                                                        alt="card image">
                                                    <h6><?php echo $row['client_name']; ?></h6>
                                                    <p><?php echo $row['designation']; ?></p>

                                                    <p><?php echo $row['summary']; ?></p>
                                                    <p><strong>Feedback:</strong> "<?php echo $row['feedback']; ?>"</p>
                                                    <hr>
                                                    <div class=" d-flex justify-content-around align-items-center">
                                                        <a
                                                            href="http://localhost/Qunatac/case_studies/CaseStudy.php?id=<?php echo $row['id']; ?> ">
                                                            <button class="btn  text-capitalize">Read More</button> </a>
                                                        <?php
                                                        $date = new DateTime($row['date_posted']);
                                                        $formattedDate = $date->format('F j, Y, g:i a');
                                                        ?>
                                                        <p> <?php echo $formattedDate; ?></p>


                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <?php
                                    if ($result3->num_rows > 0) {
                                        while ($row = $result3->fetch_assoc()) {
                                            ?>
                                            <!-- Case Study -->
                                            <div class="col-md-4 col-12 my-3">
                                                <div class="card text-light border border-dark cardHeight p-3"
                                                    style="background-color: #071a30">
                                                    <img src="<?php echo $row['image']; ?>" class="bg-image cardImageHeight"
                                                        alt="card image">
                                                    <h6><?php echo $row['client_name']; ?></h6>
                                                    <p><?php echo $row['designation']; ?></p>

                                                    <p><?php echo $row['summary']; ?></p>
                                                    <p><strong>Feedback:</strong> "<?php echo $row['feedback']; ?>"</p>
                                                    <hr>
                                                    <div class=" d-flex justify-content-around align-items-center">
                                                        <a
                                                            href="http://localhost/Qunatac/case_studies/CaseStudy.php?id=<?php echo $row['id']; ?> ">
                                                            <button class="btn  text-capitalize">Read More</button> </a>
                                                        <?php
                                                        $date = new DateTime($row['date_posted']);
                                                        $formattedDate = $date->format('F j, Y, g:i a');
                                                        ?>
                                                        <p> <?php echo $formattedDate; ?></p>


                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-1">
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="container mt-5 text-center">
        <h2>Ready to Get Started?</h2>
        <p>Contact us today to discuss your project and see how we can help you achieve your business goals.</p>
        <button class="btn text-capitalize" onclick="BookMeeting()">Get a Free Consultation </button>
    </div>

    <!-- Footer -->
    <div class="footer mt-5">
        <?php include_once './component/Footer.php'; ?>
    </div>
    <script>
            function BookMeeting() {
                window.open('https://koalendar.com/e/meet-with-dave-miller')
            }
        </script>
</body>

</html>
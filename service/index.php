<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | Quantac</title>
    <meta name="description"
        content="Discover the wide range of services offered by Quantac, including web development, app development, MVP for startups, AI/ML solutions, and more.">
    <meta name="keywords"
        content="Quantac services, web development, app development, MVP for startups, AI solutions, ML solutions, full stack projects, government projects, service-based company">
    <meta name="author" content="Quantac">
    <meta property="og:title" content="Our Services - Quantac">
    <meta property="og:description"
        content="Discover the wide range of services offered by Quantac, including web development, app development, MVP for startups, AI/ML solutions, and more.">
    <meta property="og:image" content="https://quantac.com/assets/Quantac.png">
    <meta property="og:url" content="https://quantac.com/services/">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Our Services - Quantac">
    <meta name="twitter:description"
        content="Discover the wide range of services offered by Quantac, including web development, app development, MVP for startups, AI/ML solutions, and more.">
    <meta name="twitter:image" content="https://quantac.com/assets/Quantac.png">
    <link rel="canonical" href="https://quantac.com/service/">
    <meta name="robots" content="index, follow">

    <?php include_once '../component/link.php'; ?>
    <style>
        .service-card {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
        }

        .booking-section {
            background-color: #ffe164;
            padding: 40px;
            border-radius: 10px;
            color: #071a30;
        }

        .carousel-item {
            position: relative;
            border: none;
        }

        .book-now-btn {
            position: absolute;
            top: 70%;
            left: 25%;
            transform: translate(-50%, -50%);
            background-color: #ffe164;
            color: #000;
            padding: 10px 20px;
            border: none;
            width: 240px;
        }

        @media only screen and (max-width: 767px) {
            .book-now-btn {
            position: absolute;
            top: 72%;
            left: 32%;
            transform: translate(-50%, -50%);
            width: 120px;
            padding: 5px 10px;
        }
        }

    </style>
</head>

<body>
    <?php include_once '../component/Header.php'; ?>

    <!-- Carousel Section -->
    <div class="container-fluid g-0">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="row g-0">

                <div class="col-lg-1 col-">
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>

                <div class="col-lg-10 col-12 d-md-block d-none">
                    <div class="carousel-inner">

                        <div class="carousel-item active position-relative">
                            <img src="../assets/MvpService.png" class="img-fluid" alt=" mvp service ">
                            <button class="btn rounded-8 text-capitalize book-now-btn"onclick="BookMeeting()">Schedule a Meeting</button>
                        </div>
                        <div class="carousel-item  position-relative">
                            <img src="../assets/AppService.png" class="img-fluid" alt=" app service">
                            <button class="btn rounded-8 text-capitalize book-now-btn"onclick="BookMeeting()">Schedule a Meeting</button>
                        </div>
                        <div class="carousel-item  position-relative">
                            <img src="../assets/WebService.png" class="img-fluid" alt=" web services">
                            <button class="btn rounded-8 text-capitalize book-now-btn"onclick="BookMeeting()">Schedule a Meeting</button>
                        </div>

                    </div>

                </div>

                <div class="col-12 d-md-none d-block">
                    <div class="carousel-inner">

                        <div class="carousel-item active position-relative">
                            <img src="../assets/MvpService.png" class="img-fluid" alt=" mvp service ">
                            <button class="btn btn-sm rounded-8 text-capitalize book-now-btn"onclick="BookMeeting()">Schedule a Meeting</button>
                        </div>
                        <div class="carousel-item  position-relative">
                            <img src="../assets/AppService.png" class="img-fluid" alt=" app service">
                            <button class="btn rounded-8 text-capitalize book-now-btn"onclick="BookMeeting()">Schedule a Meeting</button>
                        </div>
                        <div class="carousel-item  position-relative">
                            <img src="../assets/WebService.png" class="img-fluid" alt=" web services">
                            <button class="btn btn-sm rounded-8 text-capitalize book-now-btn"onclick="BookMeeting()">Schedule a Meeting</button>
                        </div>

                    </div>

                </div>

                <div class="col-lg-1 col-">
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Services Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="service-card">
                    <h3>Web Development</h3>
                    <p>Our web development services deliver innovative solutions, ensuring your online platform is
                        robust and engaging. We specialize in creating responsive, high-performance websites that drive
                        business growth. With a focus on user experience and cutting-edge technology, we help you stand
                        out in the digital landscape.</p>
                    <p><strong>Client Testimonial:</strong> "Thanks to Quantac's web development team, our website now
                        truly reflects our brand and has greatly improved our business."</p>

                </div>
            </div>
            <div class="col-md-6">
                <img src="../assets/webDevelopment.png" class="img-fluid" alt="Web Development">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 order-md-2">
                <div class="service-card">
                    <h3>App Development</h3>
                    <p>We craft innovative and user-friendly mobile applications tailored to your business needs. Our
                        expert developers leverage the latest technologies to create intuitive, secure, and scalable
                        apps. From sleek designs to seamless performance, we ensure your app stands out in the market.
                    </p>
                    <p><strong>Client Testimonial:</strong> "Our app has received fantastic reviews, thanks to Quantac's
                        expertise and dedication."</p>

                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="../assets/AppDevelopment.png" class="img-fluid" alt="App Development">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="service-card">
                    <h3>Multivendor App Development</h3>
                    <p>We create robust multivendor applications designed to streamline marketplace operations and
                        enhance user experience. Our solutions facilitate seamless interactions between vendors and
                        customers, ensuring a scalable and efficient platform for your business. With our expertise,
                        your marketplace will thrive in a competitive environment.</p>
                    <p><strong>Client Testimonial:</strong> "Quantac's multivendor solution has been a game-changer for
                        our business."</p>

                </div>
            </div>
            <div class="col-md-6">
                <img src="../assets/MultiVendorApp.png" class="img-fluid" alt="Multivendor App Development">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 order-md-2">
                <div class="service-card">
                    <h3>MVP for Startups</h3>
                    <p>Empowering startups to validate their ideas and enter the market swiftly with a high-quality
                        Minimum Viable Product (MVP). Our MVP development services focus on delivering essential
                        features that attract early adopters and investors, ensuring your startup's vision is realized
                        efficiently. Trust us to build a strong foundation for your business success.</p>
                    <p><strong>Client Testimonial:</strong> "The MVP Quantac developed helped us secure crucial
                        funding."</p>

                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="../assets/MvpImages.png" class="img-fluid" alt="MVP for Startups">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="service-card">
                    <h3>AI & ML Solutions</h3>
                    <p>Unlocking the potential of artificial intelligence and machine learning, we leverage cutting-edge
                        technologies to automate tasks and optimize business workflows. Our AI & ML solutions deliver
                        actionable insights and predictive analytics, empowering you to make data-driven decisions and
                        achieve unparalleled operational efficiency. Partner with us to transform your data into a
                        strategic asset and stay ahead in the digital era.</p>
                    <p><strong>Client Testimonial:</strong> "Quantac's AI solutions have completely transformed our
                        approach to data analysis, providing invaluable insights and driving remarkable business
                        growth."</p>

                </div>
            </div>
            <div class="col-md-6">
                <img src="../assets/Aiml.png" class="img-fluid" alt="AI & ML Solutions">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 order-md-2">
                <div class="service-card">
                    <h3>Full Stack Projects</h3>
                    <p>Empowering businesses with end-to-end full stack development solutions, we craft dynamic and
                        scalable applications tailored to your unique requirements. With expertise in cutting-edge
                        front-end and back-end technologies, we ensure seamless integration and optimal performance.</p>
                    <p><strong>Client Testimonial:</strong> "Quantac's full stack development team surpassed our
                        expectations, delivering a solution that exceeded our goals."</p>

                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="../assets/FullStackDevelopment.png" class="img-fluid" alt="Full Stack Projects">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="service-card">
                    <h3>Government Projects</h3>
                    <p>At Quantac, we excel in crafting robust and secure solutions tailored specifically for government
                        projects. With a deep understanding of regulatory requirements and a commitment to excellence,
                        we deliver innovative and efficient solutions that meet the unique needs of governmental
                        organizations. Partner with us to embark on a successful journey towards digital transformation.
                    </p>
                    <p><strong>Client Testimonial:</strong> "Quantac's expertise and dedication were pivotal in ensuring
                        the success of our government project, setting a new standard for efficiency and reliability."
                    </p>

                </div>
            </div>
            <div class="col-md-6">
                <img src="../assets/GovernmentProjcets.png" class="img-fluid" alt="Government Projects">
            </div>
        </div>
    </div>

    <!-- Tech Stack Section -->
    <div class="container mt-5 g-0">
        <h2 class="text-center" style="color: #ffe164;">Our Tech Stack</h2>
        <div class="tech-stack mt-3 no-scrollbar">
            <img src="https://codesaarthi.com/img/html1.png" class="img-fluid rotate" alt="Html">
            <img src="https://delta-dev-software.fr/wp-content/uploads/2024/05/CSS-Logo.png" class="rotate" alt="CSS">
            <img src="https://ncarb.github.io/bootstrap/assets/img/bootstrap-stack.png" class="rotate" alt="BootStrap">
            <img src="https://cdn3d.iconscout.com/3d/free/thumb/free-tailwind-9294852-7577995.png?f=webp" class="rotate"
                alt="Tailwind CSS">
            <img src="https://multishoring.com/wp-content/uploads/2024/04/JavaScript-Symbol.png" class="rotate"
                alt="JS">
            <img src="https://codesaarthi.com/img/php1.png" class="img-fluid rotate" alt="PHP">
            <img src="https://adware-technologies.s3.amazonaws.com/uploads/technology/thumbnail/45/logo-mysql-mysql-logo-png-images-are-download-crazypng-21.png"
                class="img-fluid rotate" alt="MySQL">
            <img src="https://codesaarthi.com/img/React1.png" class="img-fluid rotate" alt="React">
            <img src="https://ajeetchaulagain.com/static/7cb4af597964b0911fe71cb2f8148d64/87351/express-js.png"
                class="img-fluid rotate" alt="Express">
            <img src="https://miro.medium.com/v2/resize:fit:900/1*TY9uBBO9leUbRtlXmQBiug.png" class="img-fluid rotate"
                alt="Node.js">
            <img src="https://www.opc-router.de/wp-content/uploads/2021/03/mongodb_thumbnail.png"
                class="img-fluid rotate" alt="Mongo DB">
            <img src="https://codesaarthi.com/img/java1.png" class="img-fluid rotate" alt="Java">
            <img src="https://prepinstadotcom.s3.ap-south-1.amazonaws.com/wp-content/uploads/2020/07/python-removebg-preview.webp"
                class="img-fluid rotate" alt="Python">
        </div>
        <style>
            .rotate {
                display: inline-block;
                animation: rotate 10s linear infinite;
            }

            @keyframes rotate {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }

            .tech-stack img {
                width: 75px !important;
                /* Adjust the width as needed */
                height: auto;
                margin: 10px;
                /* Adjust the margin as needed */
            }

            .no-scrollbar {
                overflow-x: scroll;
                /* Enable horizontal scrolling */
                white-space: nowrap;
                /* Prevent line breaks between images */
            }

            .no-scrollbar::-webkit-scrollbar {
                display: none;
                /* Hide the scrollbar on WebKit browsers */
            }

            .no-scrollbar {
                -ms-overflow-style: none;
                /* Hide the scrollbar on IE and Edge */
                scrollbar-width: none;
                /* Hide the scrollbar on Firefox */
            }
        </style>
    </div>


    <!-- Booking Section -->
    <div class="container my-5">
        <div class="booking-section text-center">
            <div class="row g-0 d-flex flex-row">
                <div class="col-lg-6 col-12">
                    <h2 class="text-dark">Book a Meeting</h2>
                    <p>Ready to take your business to the next level? Book a meeting with us today!</p>
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="../assets/sitting.png" class="img-fluid" alt="">
                        <button class="btn rounded-8 text-capitalize btn-primary border border-dark" onclick="BookMeeting()">Schedule a Meeting</button>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <img src="../assets/service.png" class="img-fluid" alt="">
                </div>
            </div>

        </div>
        <script>
  function BookMeeting(){
window.open( 'https://koalendar.com/e/meet-with-dave-miller')
  }
</script>
    </div>

    <?php include_once '../component/Footer.php'; ?>

</body>

</html>
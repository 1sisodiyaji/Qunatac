<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Quantac</title>
    <meta name="description"
        content="Learn more about Quantac, our mission, vision, and the team that drives our success. Discover how we deliver innovative solutions to help businesses grow and thrive in the digital era.">
    <meta name="keywords"
        content="Quantac, About Quantac, our mission, our vision, Quantac team, business solutions, technology company, digital transformation, innovation, IT services">
    <meta name="author" content="Quantac">
    <meta property="og:title" content="About Us - Quantac">
    <meta property="og:description"
        content="Learn more about Quantac, our mission, vision, and the team that drives our success. Discover how we deliver innovative solutions to help businesses grow and thrive in the digital era.">
    <meta property="og:image" content="https://quantac.com/assets/Quantac.png">
    <meta property="og:url" content="https://quantac.com/about_us">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="About Us - Quantac">
    <meta name="twitter:description"
        content="Learn more about Quantac, our mission, vision, and the team that drives our success. Discover how we deliver innovative solutions to help businesses grow and thrive in the digital era.">
    <meta name="twitter:image" content="https://quantac.com/assets/Quantac.png">
    <link rel="canonical" href="https://quantac.com/about_us">
    <meta name="robots" content="index, follow">

    <?php include_once '../component/link.php'; ?>
    <style>
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

        .step:nth-child(odd) .content {
            order: 1;
            margin-right: 50px;
        }

        .step:nth-child(odd) .image-container {
            order: 2;
            margin-left: 50px;
        }

        .step:nth-child(even) .content {
            order: 2;
            margin-left: 50px;
        }

        .step:nth-child(even) .image-container {
            order: 1;
            margin-right: 50px;
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

        .stepper {
            position: fixed;
            left: 50%;
            width: 10px;
            color: #ffe164;
            transform: translateX(-50%);
            z-index: 10;
        }

        .indicator {
            position: absolute;
            left: 50%;
            width: 30px;
            height: 30px;
            background-color: #ffe164;
            border-radius: 50%;
            transform: translateX(-50%);
            transition: top 0.3s;
        }
    </style>
</head>

<body>
    <?php include_once '../component/Header.php'; ?>

    <div class="container py-5 ">
        <h1 class="text-center" style="color: #ffe164;">About Us</h1>
        <div class="card text-light p-4 my-3 fontsmallSize">
            <h2>Company Overview</h2>
            <p>Quantac Software Private Limited is a premier provider of cutting-edge digital solutions, dedicated to
                driving success for our clients through innovative technology. Specializing in government and private
                sector projects, we excel in a diverse range of services including web development, app development, MVP
                services for startups, Android development, and machine learning. Our commitment to excellence and
                customer satisfaction is evident in every project we undertake, helping businesses streamline operations
                and achieve remarkable growth. Partner with Quantac to transform your ideas into reality and take your
                business to new heights.</p>
        </div>
        
        <div class="stepper">
            <div class="indicator" id="indicator"></div>
        </div>

        <div class="container-fluid g-0 text-light ">
            <div class="step ">
                <div class="content">
                    <h3> Founded in 2023</h3>
                    <p>Quantac Software Private Limited was founded with the vision to revolutionize the tech industry
                        by providing cutting-edge solutions. In just a short span, we've established ourselves as
                        leaders in government and private sector projects. Our expertise spans web development, app
                        development, MVP services for startups, Android development, and machine learning. At Quantac,
                        we are dedicated to transforming your business ideas into impactful digital solutions, driving
                        growth and innovation for our clients</p>
                </div>
                <div class="image-container">
                    <img src="http://localhost/Qunatac/assets/CompanyFoundation.png" alt="Founded in 2010">
                </div>
            </div>
            <div class="step">
                <div class="image-container">
                    <img src="http://localhost/Qunatac/assets/Victory.png" alt="Founded in 2010">
                </div>
                <div class="content">
                    <h3> First Major Client in 2023</h3>
                    <p> Securing our first major client was a pivotal moment in Quantac's journey. This achievement
                        underscored our commitment to delivering exceptional solutions and set the foundation for our
                        future growth. Our dedication to quality, innovation, and client satisfaction has been the
                        cornerstone of our success. We pride ourselves on transforming complex challenges into effective
                        digital solutions, ensuring each project exceeds expectations and drives significant value for
                        our clients.

                    </p>
                </div>
            </div>
            <div class="step">
                <div class="content">
                    <h3> Expanded Services in 2023</h3>
                    <p>In 2023, we broadened our horizons to include cutting-edge machine learning solutions alongside
                        our comprehensive digital marketing and development services. This expansion reflects our
                        commitment to staying at the forefront of technology, ensuring our clients benefit from the
                        latest innovations. At Quantac, we continuously strive to deliver advanced, customized solutions
                        that drive growth and efficiency for businesses of all sizes.</p>
                </div>
                <div class="image-container">
                    <img src="http://localhost/Qunatac/assets/expandedService.png" alt="Expanded Services in 2015">
                </div>
            </div>
            <div class="step">
                <div class="image-container">
                    <img src="http://localhost/Qunatac/assets/globalPresence.png" alt="Global Presence in 2018">
                </div>
                <div class="content">
                    <h3> Global Presence in 2023</h3>
                    <p>In 2023, Quantac Software Private Limited established a significant global presence, serving
                        clients across multiple continents. Our dedication to excellence and innovation has enabled us
                        to deliver top-tier solutions worldwide, empowering businesses to achieve remarkable success.
                        With a strong international footprint, we continue to expand our reach, offering unparalleled
                        service and support to clients globally. Quantac is committed to transforming the technological
                        landscape, ensuring our clients stay ahead in a competitive market.</p>
                </div>
            </div>
            <div class="step">
                <div class="content">
                    <h3> Achieved Industry Recognition in 2023</h3>
                    <p>In 2023, Quantac Software Private Limited garnered numerous industry awards and recognitions for
                        our innovative solutions and exceptional service. Our commitment to excellence and cutting-edge
                        technology has been acknowledged by industry leaders, setting us apart as a trusted partner in
                        web development, app development, MVP services for startups, and machine learning solutions.
                        These accolades reflect our dedication to pushing the boundaries of what's possible and
                        delivering outstanding results for our clients.</p>
                </div>
                <div class="image-container">
                    <img src="http://localhost/Qunatac/assets/achievedCompany.png"
                        alt="Achieved Industry Recognition in 2020">
                </div>
            </div>
            <div class="step">
                <div class="image-container">
                    <img src="http://localhost/Qunatac/assets/FutureGoal.png" alt="Future Goals">
                </div>
                <div class="content">
                    <h3> Future Goals</h3>
                    <p>At Quantac Software Private Limited, our vision extends beyond the horizon. We are committed to
                        driving innovation and exceeding client expectations in the ever-evolving tech landscape. Our
                        future goals revolve around being at the forefront of technology and ensuring unparalleled
                        customer satisfaction. We strive to anticipate market trends, harness emerging technologies, and
                        deliver solutions that empower businesses to thrive in the digital age. With a relentless
                        pursuit of excellence and a customer-centric approach, we are poised to shape the future of
                        technology and lead our clients to unprecedented success.</p>
                </div>
            </div>
        </div>

    </div>



    <?php include_once '../component/Footer.php'; ?>

    <script>
        window.addEventListener('scroll', function () {
            var indicator = document.getElementById('indicator');
            var stepperHeight = document.querySelector('.stepper').offsetHeight;
            var pageHeight = document.documentElement.scrollHeight - window.innerHeight;
            var scrollPosition = window.scrollY;

            var position = (scrollPosition / pageHeight) * stepperHeight;
            indicator.style.top = position + 'px';
        });
    </script>
</body>

</html>
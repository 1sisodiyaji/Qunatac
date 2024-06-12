
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact - Quantac</title>
<meta name="description" content="Get in touch with Quantac. We're here to assist you with any questions or support you may need. Contact us via phone, email, or our online form.">
<meta name="keywords" content="Quantac contact, contact Quantac, get in touch, Quantac support, Quantac customer service, contact form, email Quantac, call Quantac">
<meta name="author" content="Quantac">
<meta property="og:title" content="Contact - Quantac">
<meta property="og:description" content="Get in touch with Quantac. We're here to assist you with any questions or support you may need. Contact us via phone, email, or our online form.">
<meta property="og:image" content="https://quantac.com/assets/Quantac.png">
<meta property="og:url" content="https://quantac.com/contact">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Contact - Quantac">
<meta name="twitter:description" content="Get in touch with Quantac. We're here to assist you with any questions or support you may need. Contact us via phone, email, or our online form.">
<meta name="twitter:image" content="https://quantac.com/assets/Quantac.png">
<link rel="canonical" href="https://quantac.com/contact">
<meta name="robots" content="index, follow">

    <?php include_once '../component/link.php'; ?>
</head>
<body>
    <?php include_once '../component/Header.php'; ?>

    <div class="container py-5">
        <div class="row py-lg-5">
            <!-- Company Description -->
            <div class="col-lg-6 col-12 mb-4 text-light">
                <h2 class="textColor">About Us</h2>
                <p>
                    Welcome to Quantac! We are a service-based company dedicated to providing top-notch solutions to meet your needs. Our team of experts is committed to delivering excellence and ensuring customer satisfaction. Whether you need assistance with technology, consulting, or any other service, we are here to help.
                </p>
                <h3  class="textColor" >Our Services</h3>
                <ul>
                    <li>Technology Solutions</li>
                    <li>Consulting Services</li>
                    <li>Customer Support</li>
                    <li>Project Management</li>
                </ul>
                <h3  class="textColor" >Contact Information</h3>
                <p>
                <i class="fi fi-ss-building pe-2"></i>Address: Galaxia Garden . Patia , Bhubaneswar , Odisha , India , 751024<br>
                    <i class="fi fi-ss-mobile-notch pe-2"></i> Phone: +91 93484 72417<br>
                    <i class="fi fi-ss-envelope pe-2"></i> Email:  sunil@quantanc.com
                </p>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6 col-12">
                <h2 class =" textColor" >Contact Us</h2>
                <form action="../ajax/submit_contact.php" method="POST" class=" border rounded-8 p-lg-5 p-2">
                    <div class="row">
                        <div class="col-6">
                        <div class="form-group mb-3 text-light">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control bg-transparent rounded-8  text-light" id="first_name" name="first_name" required>
                    </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group mb-3 text-light">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control bg-transparent rounded-8  text-light" id="last_name" name="last_name" required>
                    </div>
                        </div>          
                           </div>
                  
                   
                    <div class="form-group mb-3 text-light">
                        <label for="email">Email</label>
                        <input type="email" class="form-control bg-transparent rounded-8  text-light" id="email" name="email" required>
                    </div>
                    <div class="form-group mb-3 text-light">
                        <label for="message">Message</label>
                        <textarea class="form-control bg-transparent rounded-8  text-light" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <div class="text-center ">
                    <button type="submit" class="btn rouned-8 text-capitalize">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include_once '../component/Footer.php'; ?>
</body>
</html>

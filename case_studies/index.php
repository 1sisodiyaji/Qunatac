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

// Fetch data from casestudy table
$sql = "SELECT * FROM casestudy";
$result = $conn->query($sql);

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
    <title>Case Studies</title>

    <meta name="description"
        content="Discover how Quantac has helped businesses achieve their goals through innovative solutions. Read our detailed case studies on web development, app development, AI, ML, MVP for startups, and more.">
    <meta name="keywords"
        content="Quantac case studies, business solutions, web development case studies, app development case studies, AI solutions, ML case studies, MVP for startups, technology case studies, IT solutions, digital transformation">
    <meta name="author" content="Quantac">
    <meta property="og:title" content="Case Studies">
    <meta property="og:description"
        content="Discover how Quantac has helped businesses achieve their goals through innovative solutions. Read our detailed case studies on web development, app development, AI, ML, MVP for startups, and more.">
    <meta property="og:image" content="https://quantac.com/assets/Quantac.png">
    <meta property="og:url" content="https://quantac.com/case-studies">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Case Studies">
    <meta name="twitter:description"
        content="Discover how Quantac has helped businesses achieve their goals through innovative solutions. Read our detailed case studies on web development, app development, AI, ML, MVP for startups, and more.">
    <meta name="twitter:image" content="https://quantac.com/assets/Quantac.png">
    <link rel="canonical" href="https://quantac.com/case_studies">
    <meta name="robots" content="index, follow">

    <?php include_once '../component/link.php'; ?>
   
</head>

<body>
    <?php include_once '../component/Header.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1 class="textColor">Case Studies</h1>
                <p class="text-light">See how we've helped our clients achieve their goals.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="row g-0">
                <div class="col-lg-1">
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
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
                                                    <a href="CaseStudy.php?id=<?php echo $row['id']; ?> "> <button
                                                            class="btn  text-capitalize">Read More</button> </a>
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
                                                    <a href="CaseStudy.php?id=<?php echo $row['id']; ?> "> <button
                                                            class="btn  text-capitalize">Read More</button> </a>
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
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
<div class="container p-5">
   <div class="row">
    <div class="col-8 text-light"> 
        <h3 class="my-3">What Our Team Thinks </h3>  
       
       <p class="my-2"> "The best way to shape your future is by partnering with us to create it."</p>
<hr>
       <p class="text-end my-2"> "Success finds those who are dedicated to achieving excellence for their clients."</p>
<hr>
       <p class="my-2">"Don't settle for good when you can achieve greatness with our help."</p>
       <hr>
     </div>
    <div class="col-4 text-end"><img src="../assets/1.png" class="img-fluid" alt=""></div>
   </div>
   </div>
   <h1 class="text-center my-2 text-light">: Look What Our Clients Say about US :  </h1>
    <div class="container mt-5">
        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <!-- Case Study -->
                    <div class="col-md-4 col-12 my-3">
                        <div class="card text-light border cardHeight p-2  border-dark rounded-6" style="background-color: #071a30">
                            <img src="<?php echo $row['image']; ?>" class="bg-image cardImageHeight" alt="card image">
                            <h6><?php echo $row['client_name']; ?></h6>
                            <p><?php echo $row['designation']; ?></p>

                            <p><?php echo $row['summary']; ?></p>
                            <p><strong>Feedback:</strong> "<?php echo $row['feedback']; ?>"</p>
<hr>
                            <div class=" d-flex justify-content-around align-items-center">
                                <a href="CaseStudy.php?id=<?php echo $row['id']; ?> "> <button class="btn  text-capitalize">Read
                                        More</button> </a>
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
            } else {
                echo "No case studies found.";
            }
            ?>
        </div>
    </div>

    <?php include_once '../component/Footer.php'; ?>
</body>

</html>

<?php
// Close database connection
$conn->close();
?>
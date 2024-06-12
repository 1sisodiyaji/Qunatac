<?php
// Check if the ID parameter is set in the URL
if (isset($_GET['id'])) {
    // Retrieve the case study ID from the URL
    $caseStudyID = $_GET['id'];

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

    // Prepare and execute the SQL query to fetch the case study details based on the ID
    $sql = "SELECT * FROM casestudy WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $caseStudyID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $client_name = $row['client_name'];
            $designation = $row['designation'];
            $image = $row['image'];
            $summary = $row['summary']; 
            $feedback = $row['feedback'];
            $date = new DateTime($row['date_posted']);
            $formattedDate = $date->format('F j, Y, g:i a');
        }}
    $sql = "SELECT id, client_name ,designation , date_posted  FROM casestudy LIMIT 9";
    $result2 = $conn->query($sql);

} else {
    // No ID parameter provided in the URL
    echo "No case study ID provided.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $client_name ;?> . <?php echo $designation ;?> </title>
<meta name="description" content="<?php echo $summary ;?>">
<meta name="keywords" content="Quantac case studies, business solutions, web development case studies, app development case studies, AI solutions, ML case studies, MVP for startups, technology case studies, IT solutions, digital transformation">
<meta name="author" content="Quantac">
<meta property="og:title" content=" <?php echo $client_name ;?> . <?php echo $designation ;?> ">
<meta property="og:description" content="<?php echo $summary ;?>">
<meta property="og:image" content="<?php echo $image ;?>">
<meta property="og:url" content="<?php echo $client_name ;?> . <?php echo $designation ;?> .<?php echo $feedback ;?> ">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Case Studies">
<meta name="twitter:description" content="<?php echo $summary ;?>.">
<meta name="twitter:image" content="<?php echo $image ;?>">
<link rel="canonical" href="https://quantac.com/case_studies/CaseStudy.php?id=<?php echo $id ;?>">
<meta name="robots" content="index, follow">
    <?php include_once "../component/link.php" ?>
</head>

<body>
    <?php include_once "../component/Header.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12">
                        <div class="conatiner py-lg-4">
                            <h1 class="text-center textColor"> <?php echo $client_name; ?> </h1>
                            <div class="row  g-0">
                                <div class="col-6 text-end"> <p class="text-light"> <?php echo $designation; ?> </p></div>
                                <div class="col-6 text-end"> <p class="text-light">
                               
                                  <?php echo $formattedDate; ?> </p></div>
                            </div>
                           

                            <div class="text-center my-3">
                                <img src="<?php echo $image; ?>" alt=" Company Image" class="img-fluid ">
                            </div>
<div class="text-light">
                            <p> <?php echo $summary; ?></p>
                            <p> <strong> Feedback : </strong><?php echo $feedback; ?></p>
                            </div>
                        </div>
                        
            </div>
            <div class="col-md-4 py-lg-2 py-5">
                <div class="container border border-dark my-lg-5" style="color: whitesmoke">
                <?php
            if ($result2->num_rows > 0) {
                while ($row2 = $result2->fetch_assoc()) {
                    ?>
                            <div class="row">
                                <div class="col-8">
                                    <a href="CaseStudy.php?id=<?php echo $row2['id']; ?>"><strong><?php echo $row2['client_name']; ?></strong>
                                    </a>
                                    <p class=""> <?php echo $row2['designation']; ?></p>
                                </div>
                                <div class="col-4 text-end">
                                    <?php
                                    $date = new DateTime($row2['date_posted']);
                                    $formattedDate = $date->format('F j, Y  g:i a');

                                    ?>
                                    <?php echo $formattedDate; ?>
                                </div>
                            </div>
                            <hr>
                        <?php }
                    } else {
                        echo "No blog posts found.";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include_once "../component/Footer.php" ?>
</body>

</html>
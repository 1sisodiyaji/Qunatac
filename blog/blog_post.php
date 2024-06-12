<!-- single blog -- -->
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "quantac";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch specific blog post by ID
    if (isset($_GET['id'])) {
        $post_id = $_GET['id'];
        $sql = "SELECT id, title, image, description, date_posted FROM blog_posts WHERE id=$post_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $id = $row['id'];
               $image = $row['image'];
               $title = $row['title'];
               $description = $row['description'];
               $date = new DateTime($row['date_posted']);
               $formattedDate = $date->format('F j, Y, g:i a');
            }
            }
    } else {
        echo "Invalid request.";
    }

    $sql2 = "SELECT id, title ,image ,description , date_posted  FROM blog_posts LIMIT 9";
$result2 = $conn->query($sql2);

  
   
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title;?></title>
<meta name="description" content="<?php echo $description;?>">
<meta name="keywords" content="Quantac blogs, web development, app development, AI, ML, MVP for startups, technology insights, digital solutions, tech trends, software development, IT services">
<meta name="author" content="Quantac">
<meta property="og:title" content="<?php echo $title;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:image" content="<?php echo $image;?>">
<meta property="og:url" content="https://quantac.com/<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $title;?>">
<meta name="twitter:description" content="<?php echo $description;?>">
<meta name="twitter:image" content="<?php echo $image;?>">
<link rel="canonical" href="https://quantac.com/blog/blog_post.php?id=<?php echo $id;?>">
<meta name="robots" content="index, follow">

    <?php include_once '../component/link.php';?>
</head>
<body>
    <?php include_once '../component/Header.php';?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-12">
        <div class="container py-lg-5">
            <img src="<?php echo $image?> " alt="" class="img-fluid w-100 rounded-8" style="height: 550px">
            <div class="row text-end">
                <p class=" text-light "><?php echo $formattedDate;?> </p>
            </div>
            <div class=" text-light text-capitalize text-start py-2">
            <h5 > <?php echo $title ; ?></h5>
            <p class="text-start " > <?php echo $description ;?> </p>
            </div>
        </div>
            </div>
            <div class="col-lg-4 col-12">

                <div class="container border border-dark my-lg-5" style="color: whitesmoke">
                    <?php
                    if ($result2->num_rows > 0) {
                        while ($row = $result2->fetch_assoc()) {
                            echo '<strong><a href="blog_post.php?id=' . $row['id'] . '">' . $row['title'] . '</a></strong> <br/> <hr/>';
                        }
                    } else {
                        echo "No blog posts found.";
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
   <?php 

    ?>
     <?php include_once '../component/Footer.php';?>
</body>
</html>

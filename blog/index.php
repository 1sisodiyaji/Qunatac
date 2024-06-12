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

$sql = "SELECT id, title ,image ,description , date_posted  FROM blog_posts LIMIT 9";
$result = $conn->query($sql);

$sql2 = "SELECT id, title, image, description, date_posted FROM blog_posts ORDER BY date_posted DESC LIMIT 1";
$result2 = $conn->query($sql2);

$sql3 = "SELECT id, title ,image ,description , date_posted  FROM blog_posts  LIMIT 6";
$result3 = $conn->query($sql3);


?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs - Insights on Web Development, App Development, AI, and More</title>
    <meta name="description" content="Discover insightful articles and blog posts on web development, app development, AI, ML, MVP for startups, and more. Stay updated with Quantac's latest innovations and expert opinions.">
    <meta name="keywords" content="Quantac blogs, web development, app development, AI, ML, MVP for startups, technology insights, digital solutions, tech trends, software development, IT services">
    <meta name="author" content="Quantac">
    <meta property="og:title" content="Quantac Blogs - Insights on Web Development, App Development, AI, and More">
    <meta property="og:description" content="Discover insightful articles and blog posts on web development, app development, AI, ML, MVP for startups, and more. Stay updated with Quantac's latest innovations and expert opinions.">
    <meta property="og:image" content="http://localhost/Qunatac/assets/Quantac.png">
    <meta property="og:url" content="https://quantac.com/blogs">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Quantac Blogs - Insights on Web Development, App Development, AI, and More">
    <meta name="twitter:description" content="Discover insightful articles and blog posts on web development, app development, AI, ML, MVP for startups, and more. Stay updated with Quantac's latest innovations and expert opinions.">
    <meta name="twitter:image" content="http://localhost/Qunatac/assets/Quantac.png">
    <link rel="canonical" href="https://quantac.com/blogs">
    <meta name="robots" content="index, follow">
    <?php include_once '../component/link.php'; ?>
</head>

<body>
    <?php include_once '../component/Header.php'; ?>
    <div class="container">

        <!-- Modal -->
        <div class="modal fade" id="postBlog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl ">
                <div class="modal-content" style="background-color: #071a30">
                    <div class="modal-body">
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "quantac";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Function to handle file uploads
                        function uploadFile($file)
                        {
                            $targetDir = "uploads/";
                            $targetFile = $targetDir . basename($file["name"]); // Path to the uploaded file
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                            // Check if image file is a actual image or fake image
                            $check = getimagesize($file["tmp_name"]);
                            if ($check !== false) {
                                $uploadOk = 1;
                            } else {
                                $uploadOk = 0;
                            }

                            // Check file size (you can adjust the limit as needed)
                            if ($file["size"] > 5000000) {
                                // echo "Sorry, your file is too large.".$file["size"];
                                $uploadOk = 0;
                            }

                            // Allow only certain file formats (you can adjust as needed)
                            if (
                                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                && $imageFileType != "gif"
                            ) {
                                // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.".$imageFileType;
                                $uploadOk = 0;
                            }

                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                // echo "Sorry, your file was not uploaded.";
                                // if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                                    return $targetFile; // Return the path to the uploaded file
                                } else {
                                    // echo "Sorry, there was an error uploading your file.";
                                }
                            }
                        }

                        // Function to insert data into the database
                        function insertData($conn, $email, $headline, $imageUrl, $text)
                        {
                            $sql = "INSERT INTO blog_posts ( title, image, description , date_posted) VALUES (?, ?, ?, NOW())";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("sss", $headline, $imageUrl, $text);

                            if ($stmt->execute() === TRUE) {
                                // echo "New record created successfully";
                                header("Location: {$_SERVER['PHP_SELF']}");
                                exit;

                            } else {
                                // echo "Error: " . $sql . "<br>" . $conn->error;
                            }

                            $stmt->close();
                        }

                        // Check if form is submitted
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Handle file upload
                            $uploadedFile = $_FILES["file"];
                            $imageUrl = uploadFile($uploadedFile);

                            // Get form data
                            $headline = $_POST["ContentHeading"];
                            $text = $_POST["contentWrite"];

                            // Insert data into database
                            insertData($conn, $email, $headline, $imageUrl, $text);
                        }
                        ?>

                        <link rel='stylesheet'
                            href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
                        <style>
                            input[type="file"] {
                                display: none;
                            }

                            /* Style for the image icon */
                            .image-icon {

                                cursor: pointer;
                                display: inline-block;
                            }

                            /* Style for the uploaded image */
                            .uploaded-image {
                                max-width: 200px;
                                /* Ensure the image fits within its container */
                                max-height: 200px;
                                /* Ensure the image fits within its container */
                                border: 1px solid white;
                            }
                        </style>
                        <div class="row">
                            <div class="col-10 text-center">
                                <h1 class="text-center my-3 text-warning text-capitalize">post your own blog Here</h1>
                            </div>
                            <div class="col-2 text-end">
                                <button type="button" class="close bg-transparent border-0 textColor"
                                    data-dismiss="modal" aria-label="Close">
                                    <span style="font-size: 1rem">X</span>
                                </button>
                            </div>
                        </div>



                        <div class="container">
                            <form action="#" method="post" enctype="multipart/form-data"
                                onsubmit="getContentFromEditor()">
                                <label for="ContentHeading" class="text-light"> Write your Heading here </label>
                                <textarea class="textarea border border-dark w-100 mb-3" rows="3" id="ContentHeading"
                                    name="ContentHeading" required></textarea>

                                <label for="contentWrite" class="text-light">Write your content here </label>
                                <textarea class="textarea border border-dark w-100" rows="12" id="contentWrite"
                                    name="contentWrite" required></textarea>




                                <!--  upload image-->
                                <!-- Image icon -->
                                <label for="file-upload" class="image-icon">
                                    <i class="fi fi-sr-add-image fa-2x text-warning"></i>
                                </label>
                                <!-- Hidden file input -->
                                <input id="file-upload" type="file" accept="image/png, image/jpeg, image/webp"
                                    name="file" onchange="previewImage(event)">
                                <!-- Preview uploaded image -->
                                <div id="image-preview"></div>

                                <script>
                                    function previewImage(event) {
                                        var file = event.target.files[0];
                                        var reader = new FileReader();
                                        reader.onload = function () {
                                            var img = document.createElement('img');
                                            img.src = reader.result;
                                            img.classList.add('uploaded-image');
                                            document.getElementById('image-preview').innerHTML = '';
                                            document.getElementById('image-preview').appendChild(img);
                                        }
                                        reader.readAsDataURL(file);
                                    }
                                </script>

                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn  text-capitalize">Publish <i
                                                class="fi fi-sr-share-square"></i></button>
                                    </div>
                                </div>
                            </form>

                        </div>


                        <!-- MDB -->
                        <script type="text/javascript"
                            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js">
                            </script>
                        <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
                        <script>
                            // Initialize CKEditor
                            CKEDITOR.replace('contentWrite', {
                                // Enable the source button
                                extraPlugins: 'sourcearea'
                            });

                            // Function to retrieve HTML content from CKEditor
                            function getContentFromEditor() {
                                // Get the CKEditor instance
                                var editor = CKEDITOR.instances['contentWrite'];
                                // Retrieve the HTML content
                                var content = editor.getData();
                                // Set the HTML content to the hidden textarea (for form submission)
                                document.getElementById('contentWrite').value = content;
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>

<div class="container-fluid py-lg-5">
    <h1 class="text-center my-lg-4"> <span style="border-bottom: 1px solid #ffe164;"> Blogs </span> </h1>
  <h3 class="text-center my-2">  "Crafting Exceptional Websites: Unveiling our Best Strategies for Success" </h3>
 <p class="text-light text-center"> "We spare no effort in sharing our top-notch insights on nurturing and promoting a thriving online presence for business expansion." </p>
</div>

        <div class="row  g-0">

            <div class="col-md-8 col-12">
                <div class="container">
                    <?php
                    if ($result2->num_rows > 0) {
                        while ($row2 = $result2->fetch_assoc()) {
                            echo '<a href="blog_post.php?id='. $row2['id'].' ">';
                            echo '<div class= "py-lg-3 p-2 py-2 border border-dark">';
                            echo '<img src="' . $row2['image'] . '" alt="blog latest image" class = "img-fluid w-100" style= "height: 550px" > ';
                            echo '<h5 class= "text-light text-start my-2"> ' . $row2['title'] . '</h5>';
                         
                            $description = $row2['description'];
                            $maxWords = 80;
                            $words = explode(' ', $description);
                            if (count($words) > $maxWords) {
                                $truncatedDescription = implode(' ', array_slice($words, 0, $maxWords)) . '...';
                            } else{
                                $truncatedDescription = implode(' ', array_slice($words, 0, $maxWords)) . '...';
                            }
                            echo '<p class= "text-light text-start"> ' . $truncatedDescription . '</p>';
                            echo '</div>';
                            echo '</a>';
                        }
                    } else {
                        echo "No blog posts found.";
                    }
                    ?>

                </div>

            </div>
            <div class="col-md-4 col-12  py-lg-2 py-5">
                <div class="d-flex justify-content-center align-items-center">
                <button class="btn my-3 text-capitalize " data-toggle="modal" data-target="#postBlog"><i class="fi fi-sr-add" ></i>  Post your own blog </button>
                </div>
              

                <div class="container border border-dark my-lg-5" style="color: whitesmoke">
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<strong><a href="blog_post.php?id=' . $row['id'] . '">' . $row['title'] . '</a></strong> <br/> <hr/>';
                        }
                    } else {
                        echo "No blog posts found.";
                    }
                    $conn->close();
                    ?>
                </div>

            </div>
        </div>



        <div class="row py-lg-5 py-2">
            <?php
            if ($result3->num_rows > 0) {
                while ($row3 = $result3->fetch_assoc()) {
                    ?>
                    <div class="col-lg-4 col-12">
                        <div class="card border border-dark my-2 cardHeight rounded-6 p-3">
                            <div class="bg-image text-center">
                                <img src="<?php echo $row3['image']; ?>" class="img-fluid cardImageHeight"/>
                            </div>

                            <div class="card-body text-light">
                                <?php
                                // Assuming $row3 contains the result row from your query
                                $title = $row3['title'];
                                $maxWords = 25;

                                $words = explode(' ', $title);
                                if (count($words) > $maxWords) {
                                    $titleDescription = implode(' ', array_slice($words, 0, $maxWords)) . '...';
                                } else {
                                    $titleDescription = implode(' ', array_slice($words, 0, $maxWords)) . '...';
                                }
                                ?>
                                <h5 class="card-title text-warning"><?php echo $titleDescription ?></h5>
                                <?php
                                // Assuming $row3 contains the result row from your query
                                $description = $row3['description'];
                                $maxWords1 = 35;

                                $words1 = explode(' ', $description);
                                if (count($words1) > $maxWords1) {
                                    $truncatedDescription = implode(' ', array_slice($words1, 0, $maxWords)) . '...';
                                } else{
                                     $truncatedDescription = implode(' ', array_slice($words1, 0, $maxWords)) . '...';
                                }
                                ?>
                                <p class="card-text text-start"><?php echo $truncatedDescription; ?></p>



                            </div>
                            <div class="py-2 d-flex justify-content-around align-items-center text-light">
                                <a href="blog_post.php?id=<?php echo $row3['id']; ?> ">
                                    <button class="btn  text-capitalize border border-dark">Read More</button>
                                </a>
                                <?php
                                $date = new DateTime($row3['date_posted']);
                                $formattedDate = $date->format('F j, Y  g:i a');

                                ?>
                                <?php echo $formattedDate; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        
    </div>

    <?php include_once '../component/Footer.php'; ?>
</body>

</html>
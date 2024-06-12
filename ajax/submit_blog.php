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

// Get form data
$title = $_POST['title'];
$image = $_FILES['image']['name'];
$description = $_POST['description'];
$date = date('Y-m-d H:i:s');

// File upload
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

// Save data to database
$sql = "INSERT INTO blog_posts (title, image, description, date_posted) VALUES ('$title', '../uploads/$image', '$description', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Blog post submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php

$db_name = "mysql:host=localhost;dbname=user_form";

$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);

if (isset($_POST['submit'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $discount_price = $_POST["discount_price"];
        $quantity = $_POST["quantity"];

        // Handle image upload
        $target_dir = "uploads/";  // Make sure this directory exists and is writable
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        $sql = "INSERT INTO product (title, description, price, discount_price, image, quantity)
          VALUES ('$title', '$description', '$price', '$discount_price', '$target_file', '$quantity')";

        if ($conn->query($sql) === TRUE) {
            echo "Product added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> ENOLA FURNITURE</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
  </head>
  <body>
<div class="main-panel">
    <div class="content_wrapper">

        <div class="div_center">
            <h2>Add Product </h2>

            <form class="div_form" action=" " method="POST" enctype="multipart/form-data">

                <input class="btn btn-primary" type="submit" name="submit" value="Add title">
                <input class="section" type="text" name="title" placeholder="Write title" Required=''> <br>

                <input class="btn btn-primary" type="submit" name="submit" value="Add description">
                <input class="section" type="text" name="description" placeholder="Write description"><br>

                <input class="btn btn-primary" type="submit" name="submit" value="Add quantity">
                <input class="section" type="number" name="quantity" placeholder="Write quantity" Required=''><br>

                <input class="btn btn-primary" type="submit" name="submit" value="Add price">
                <input class="section" type="number" name="price" placeholder="Write price" Required=''><br>

                <input class="btn btn-primary" type="submit" name="submit" value="Add discount price">
                <input class="section" type="number" name="discount price" placeholder="Write discount price"><br>

                <input class="btn btn-primary" type="submit" name="submit" value="Add image">
                <input class="section" type="file" name="image" placeholder="Write image" Required=''><br>
                <br>



                <input class="btn btn-primary btn-secondary" type="submit" name="submit" value="Submit Product">
            </form>

        </div>

    </div>
</div>
  </body>
  </html>
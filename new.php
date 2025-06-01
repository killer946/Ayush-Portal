<!-- <?php
$connection = mysqli_connect("localhost", "root", "", "ayushportal");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $option = $_POST['option'];
    $description = $_POST['description'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];

    // Handle image upload
    $imageupload = $_FILES['imageUpload']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($imageupload);
    
    if (move_uploaded_file($_FILES['imageUpload']['tmp_name'], $target_file)) {
        // Insert into database
        $insert = "INSERT INTO profiles (name, option, description, gender, image, age) 
                   VALUES ('$name', '$option', '$description', '$gender', '$imageupload', '$age')";
        
        if (mysqli_query($connection, $insert)) {
            echo "Profile created successfully!";
            header("Location: new.php"); // Redirect after success
        } else {
            echo "Error inserting data: " . mysqli_error($connection);
        }
    } else {
        echo "Error uploading file.";
    }
}


mysqli_close($connection);
?> -->

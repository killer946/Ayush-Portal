<?php
include("connection.php");
?>
<?php
//print_r($_POST);
print_r($_FILES);
if(isset($_POST["signup"]))
{
  $name=$_POST["name"];
   $option=$_POST["option"];
  $description=$_POST["description"];
  $photo=$_FILES["imageUpload"]["name"];
  $gender=$_POST["gender"];
  $age=$_POST["age"];
  $contact=$_POST["contact"];
  $email=$_POST["email"];

  if(move_uploaded_file($_FILES["imageUpload"]["tmp_name"],"images/$photo"))
  {
    //echo "moved";
     $insert="insert into profiles values('','$name','$option','$description','$photo','$gender','$age','','$contact','$email')";
     mysqli_query($connection,$insert);
     header("location:dash.php");

  }
  // $insert="insert into profiles values('','$name','$option','$description','$gender','$age')";
 // echo $insert;

}
?>

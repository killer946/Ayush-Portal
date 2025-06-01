<?php
include("connection.php")
?>


<?php
if(isset($_POST["sign-up"]))
{ 
   
    $email=$_POST["t1"];
    $pass=$_POST["t2"];
    $field=$_POST["field"];

    if($field=='entrepreneur')
    {
    $insert="insert into entrepreneur values('$email','$pass','$field')";
    echo $insert;
    mysqli_query($connection,$insert);
    header("location:index.php") ;
    }
    elseif($field=='investor'){
        $insert="insert into investor values('$email','$pass','$field')";
        echo $insert;
        mysqli_query($connection,$insert);
        header("location:index.php") ;    
    }
    elseif($field=='stakeholder'){
        $insert="insert into stakeholder values('$email','$pass','$field')";
        echo $insert;
        mysqli_query($connection,$insert);
        header("location:index.php") ;    
    }
    elseif($field=='government'){
        $insert="insert into government values('$email','$pass','$field')";
        echo $insert;
        mysqli_query($connection,$insert);
        header("location:index.php") ;    
    }
}
?>

<?php
if (isset($_POST["log-in"])) {
  $email = $_POST["t3"];
  $pass = $_POST["t4"];

  // Check the login in each of the tables
  $tables = ['entrepreneur', 'government', 'investor', 'stakeholder'];
  $loggedIn = false;

  foreach ($tables as $table) {
    $select = "SELECT * FROM $table WHERE email='$email' AND password='$pass'";
    $result = mysqli_query($connection, $select);

    if (mysqli_num_rows($result) > 0) {
      //echo "<script>alert('Login successful as $table')</script>";
      header("location:dash.php");
      
      $loggedIn = true;
      break;
    }
  }

  if (!$loggedIn) {
    echo "<script>alert('INVALID CREDENTIALS')</script>";
  }
}
?>

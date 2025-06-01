<?php
$connection=mysqli_connect("localhost","root","","ayushportal");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <header>
    <?php
if (isset($_GET["id"])) {
    $id=$_GET["id"];
    $query = "select * from profiles where id = $id"; 
    $result = mysqli_query($connection, $query);
    
    while ($row = mysqli_fetch_array($result)) 
    {
        ?>
      <div class="logo"><?php echo $row[2]; ?></span></div>
      <nav>
        <a href="#"><?php echo $row[8]; ?></a>
        <a href="#"><?php echo $row[9]; ?></a>
        <!-- <a href="#">Download CV</a>
        <a href="#">Let's chat</a> -->
      </nav>
    </header>

    <section class="hero">
      <div class="text-content">
        <span class="tag">About me</span>
        <h1>
          Hi, <br />
          I'm <span class="name"><?php echo $row[1]; ?></span>
        </h1>
        <!-- <h2>User Interface Designer</h2> -->
        <div style="margin-bottom: 20px;"> <?php echo $row[3]; ?>
        
        </div>
        <span class="tag1">Achievements</span>
        <ul >
        <?php 
          $achievements = preg_split('/\./', $row[7]); // Split achievements at each period
          foreach ($achievements as $achievement) {
              if (trim($achievement) !== '') {
                  echo "<li>" . trim($achievement) . ".</li>";
              }
          }
        ?>
        </ul>
        <!-- <p><h4><?php echo $row[7]; ?></h4></p> -->
        
        <!-- <button class="hire-btn">Hire me →</button> -->
      </div>
      <div class="illustration">
        <img src="images/<?php echo $row[4]; ?>" alt="Designer illustration" />
      </div>
      <?php
    }
}
?>
    </section>
  </body>
</html>

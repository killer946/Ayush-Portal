<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX PAGE</title>
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:wght@400&display=swap">

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="script.js" defer></script>
    
</head>
<style>
        /* .card
{
margin-top: 100px;
} */
.card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
            animation: fadeIn 1s ease-in-out; /* Fade-in animation */
            margin-top: 100px;
        }

        .card {
            width: 15rem;
            margin: 5px;
            border: none;
            border-radius: 25px; /* More rounded corners */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            background: #ffffff;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }

        .card img {
            border-bottom: 5px solid #007bff;
            transition: transform 0.3s;
        }

        .card:hover img {
            transform: scale(1.05);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 500;
            color: #333;
        }

        .card-text {
            color: #666;
        }
        .footer {
            background-color:black;
            padding: 0px;
            color:white;
            text-align: center;
            /* position: fixed; */
            width: 100%;
            height:120px;
            bottom: 0;
            left: 0;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
        }
        .footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .footer a:hover {
            color: #007bff;
        }
        .footer .social-media a {
            font-size: 15px;
            margin: 0 10px;
        }
        .card-img, .card-img-bottom, .card-img-top {
    width: 90%;
    margin: auto;
}
.card-container
{
    height:"100px";
}
.carousel-inner .carousel-item
{
  margin-top:40px;
  border:5px solid black;
}  



        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            max-width: none;
            margin: auto;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        #policy {
            font-size: 2rem;
            font-weight: 400;
            line-height: 1.8;
            margin-top: 20px;
            min-height: 80px;
        }

        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }

        #cursor {
            font-weight: bold;
            font-size: 1.2rem;
            animation: blink 1s infinite;
        }
        .container-policy
        {
            background-color:lightblue;
            margin-top:10px;
            width:"200 px";
        }
 /* Overall body styling */

/* Classy heading container */
.heading {
    margin-top:30px;
    font-size: 3rem;
    font-weight: bold;
    text-transform: capitalize;
    padding: 20px 40px;
    border-radius: 12px;
    background: linear-gradient(145deg, #ffffff, #dfe9f3);
    box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.1), -10px -10px 30px rgba(255, 255, 255, 0.8);
    color: #2c3e50;
    text-align: center;
    font-family: 'Times New Roman', serif;
    letter-spacing: 1.5px;
 line-height: 1.5;
    transition: transform 0.3s, box-shadow 0.3s;
}

/* Hover effect for the heading */
.heading:hover {
    transform: translateY(-5px);
    box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.2);
}

/* Adding elegant text gradient for the heading */
.heading {
    background-clip: text;
    background: linear-gradient(90deg, #6a11cb, #2575fc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Subtle animation for the heading glow */
@keyframes subtle-glow {
    0%, 100% {
        box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.1), -10px -10px 30px rgba(255, 255, 255, 0.8);
    }
    50% {
        box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.15), -10px -10px 40px rgba(255, 255, 255, 0.9);
    }
}

/* Apply animation to the heading */
.heading {
    animation: subtle-glow 5s infinite ease-in-out;
}

    </style>

<body>
    <header>
        <nav class="navbar">
            <span class="hamburger-btn material-symbols-rounded">menu</span>
            <a href="#" class="logo">
                <img src="IMAGES/logo image.jpg" alt="logo">
                <h2>AYUSH PORTAL</h2>
            </a>
            <ul class="links">
                <span class="close-btn material-symbols-rounded">close</span>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="contactus.php">Contact us</a></li>
            </ul>
            <button class="login-btn">LOG IN/SIGN UP</button>
        </nav>
    </header>

    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
        <span class="close-btn material-symbols-rounded">close</span>
        <div class="form-box login">
            <div class="form-details">
                <h2>Welcome Back</h2>
                <p>Please log in using your personal information to stay connected with us.</p>
            </div>
            <div class="form-content">
                <h2>LOGIN</h2>
                <form action="database.php" method="POST">
                <div class="input-field">
                <select name="field" id="option" >
                        <option value="#">----select field-----</option>
                        <option value="entrepreneur">Entrepreneur</option>
                        <option value="investor">Investor</option>
                        <option value="government">Government</option>
                        <option value="stakeholder">Stakeholder</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <input type="email" name="t3" required
                         pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}"
                        title="Enter a valid email address with a '.com' domain, e.g., user@example.com">
                        <label>Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="t4" required
                       pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{4,}"
                        title="Password must include at least 8 characters, one uppercase, one lowercase, one number, and one special character.">
                        <label>Password</label>
                    </div>
                    <!-- <a href="#" class="forgot-pass-link">Forgot password?</a> -->
                    <button type="submit" name="log-in">Log In</button>
                </form>
                <div class="bottom-link">
                    Don't have an account?
                    <a href="" id="signup-link">Signup</a>
                </div>
            </div>
        </div>
        <div class="form-box signup">
            <div class="form-details">
                <h2>Create Account</h2>
                <p>To become a part of our community, please sign up using your personal information.</p>
            </div>
            <div class="form-content">
                <h2>SIGNUP</h2>
                <form action="database.php" method="POST">
                    <div class="input-field">
                        <input type="email" name="t1" required
                        pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}"
title="Enter a valid email address with a '.com' domain, e.g., user@example.com">
                        <label>Enter your email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="t2" 
                        required
                        pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{4,}"
            title="Password must include at least 8 characters, one uppercase, one lowercase, one number, and one special character.">
                        <label>Create password</label>
                    </div>
                    <div class="input-field ent"><p id="field">Choose Field</p>
                       <select name="field" id="option" >
                        <option value="#">----select field-----</option>
                        <option value="entrepreneur">Entrepreneur</option>
                        <option value="investor">Investor</option>
                        <option value="government">Government</option>
                        <option value="stakeholder">Stakeholder</option>
                        </select>
                        <!-- <label>Select your field</label> -->
                    </div>

                    <div class="policy-text">
                        <!-- <input type="checkbox" id="policy">
                        <label for="policy">
                            I agree the
                            <a href="#" class="option">Terms & Conditions</a>
                        </label> -->
                    </div>
                    <button type="submit" name="sign-up">Sign Up</button>
                    </form>
                   
                <div class="bottom-link">
                    Already have an account? 
                    <a href="#" id="login-link">Login</a>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- carousel -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner mt-5">
    <div class="carousel-item active">
      <img src="./IMAGES/crousal 1.webp" class="d-block w-100" alt="..." height="400 px">
    </div>
    <div class="carousel-item">
      <img src="./IMAGES/crousal2.webp" class="d-block w-100" alt="..." height="400 px">
    </div>
    <div class="carousel-item">
      <img src="./IMAGES/crousal3.webp" class="d-block w-100" alt="..." height="400 px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class=" container container-policy" >
    <h1>Government Policies for Entrepreneurs & Investors</h1>
        <div id="policy"></div>
    </div>

<div class="heading">
    Our Entrepreneurs ,Stakeholders,Investors and Government Agencies.
</div>

<div class="card-container">
<?php
$select = "SELECT * FROM profiles";
$result = mysqli_query($connection, $select);
while ($row = mysqli_fetch_array($result)) {
?>
<div class="card" style="width: 18rem;">
  <img src="images/<?php echo $row[4]; ?>" style="border-radius:50%" width="50px" height="200px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Name: <?php echo $row[1]; ?></h5>
    <p class="card-text">Option: <?php echo $row[2]; ?></p>
    <!-- <p class="card-text">Description: <?php echo $row[3]; ?></p> -->
    <p class="card-text">Gender: <?php echo $row[5]; ?></p>
    <p class="card-text">Age: <?php echo $row[6]; ?></p>
    <a href="entrepreneur.php?id=<?php echo $row[0]; ?>" class="btn btn-primary">Details</a>
  </div>
</div>
<?php
}
?>
</div>


<div class="footer">
    <p>&copy; 2024 Ayush Portal. All rights reserved.</p>
    <p>Contact us: <a href="mailto:info@ayushportal.com">info@ayushportal.com</a> | Phone: +123 456 7890</p>
    <div class="social-media">
        <a href="https://www.facebook.com/ayushportal" target="_blank">Facebook</a>
        <a href="https://www.twitter.com/ayushportal" target="_blank">Twitter</a>
        <a href="https://www.linkedin.com/company/ayushportal" target="_blank">LinkedIn</a>
    </div>
</div>

<script>
        const policies = [
            "Startup India Initiative: Tax exemptions and funding support for startups.",
            "Stand-Up India Scheme: Loans for women and SC/ST entrepreneurs.",
            "Make in India: Encouragement for manufacturing and foreign investments.",
            "Digital India: Support for tech innovation and digital infrastructure.",
            "Single Window Clearance: Streamlined approvals for starting a business.",
            "Faster Patent Examination: Speedy processing for innovation patents.",
            "Foreign Direct Investment (FDI): Policies allowing up to 100% FDI in various sectors."
        ];

        let index = 0;
        let charIndex = 0;
        const policyElement = document.getElementById('policy');
        const cursorElement = document.getElementById('cursor');

        function typeEffect() {
            if (index < policies.length) {
                if (charIndex < policies[index].length) {
                    policyElement.textContent += policies[index][charIndex];
                    charIndex++;
                    setTimeout(typeEffect, 50);
                } else {
                    // Pause after finishing the current policy
                    setTimeout(() => {
                        charIndex = 0;
                        policyElement.textContent = "";
                        index = (index + 1) % policies.length; // Loop back to the first policy
                        typeEffect();
                    }, 2000);
                }
            }
        }

        typeEffect();
    </script>
<script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"/></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</script>

</body>
</html>





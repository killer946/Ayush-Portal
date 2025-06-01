<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
  body {
    background-color: #e9ecef;
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 20px;
}

form {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: auto;
    padding: 30px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    color: #333;
    display: block;
    margin-bottom: 5px;
}

label i {
    margin-right: 8px;
    color: #4CAF50;
}

input[type="text"],
input[type="email"],
input[type="password"],
select,
textarea {
    width: 100%;
    padding: 12px;
    border: 2px solid #ccc;
    border-radius: 6px;
    font-size: 16px;
    transition: border-color 0.3s;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus,
select:focus,
textarea:focus {
    border-color: #4CAF50;
    outline: none;
}

input[type="submit"] {
    background-color: #ff4081;
    color: white;
    border: none;
    border-radius: 6px;
    padding: 12px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s, transform 0.3s;
    position: relative;
}

input[type="submit"]:hover {
    background-color: #f50057;
    transform: scale(1.05);
}

input[type="submit"]:active {
    animation: shake 0.2s;
}

textarea {
    resize: vertical; /* Allow vertical resizing only */
}

@keyframes shake {
    0% { transform: translate(1px, 0); }
    25% { transform: translate(-1px, 0); }
    50% { transform: translate(1px, 0); }
    75% { transform: translate(-1px, 0); }
    100% { transform: translate(0, 0); }
}

@keyframes fadeOut {
    0% { opacity: 1; }
    100% { opacity: 0; }
}

@media (max-width: 600px) {
    form {
        padding: 20px;
    }
}

/* Success message animation */
.success-message {
    background-color: #4CAF50;
    color: white;
    border-radius: 6px;
    padding: 10px;
    margin-top: 20px;
    animation: fadeOut 2s forwards;
}


</style>
<body>

      

    <form action="" method="POST">

        <!-- <input type="hidden" name="access_key" value="4395a962-9dde-403d-b64e-0c28dbef1be5"> -->
        <div class="form-group">
            <label for="fname"><i class="fas fa-user"></i> First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
        </div>
        <div class="form-group">
            <label for="lname"><i class="fas fa-user"></i> E-MAIL</label>
            <input type="text" id="lname" name="Email Id" placeholder="Your email id" required>
        </div>
        <div class="form-group">
            <label for="country"><i class="fas fa-globe"></i> Country</label>
            <select id="country" name="country" required>
                <option value="">---- Select Country ----</option>
                <option value="australia">India</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>
        </div>
        <div class="form-group">
            <label for="subject"><i class="fas fa-comment"></i> Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." required></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="send" value="Submit">
        </div>
        <div id="successMessage" class="success-message" style="display: none;"></div>

</form>


<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        const formData = new FormData(this);

        fetch('your-form-handler.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(message => {
            const messageDiv = document.getElementById('successMessage');
            messageDiv.innerText = message;
            messageDiv.style.display = 'block';

            // Optionally reset the form
            document.getElementById('contactForm').reset();

            // Hide the success message after 2 seconds
            setTimeout(() => {
                messageDiv.style.display = 'none';
            }, 2000);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>

    <!-- <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
            document.getElementById('successMessage').innerText = 'Form submitted successfully!';
            document.getElementById('successMessage').style.display = 'block';

            // Optionally reset the form
            this.reset();

            // Hide the success message after 2 seconds
            setTimeout(() => {
                document.getElementById('successMessage').style.display = 'none';
            }, 2000);
        });
    </script> -->
</body>
</html>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['send']))
{
    $name=$_POST['firstname'];
    $Email=$_POST['Email Id'];
    $country=$_POST['country'];
    $subject=$_POST['subject'];



//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'php mailer/Exception.php';
require 'php mailer/PHPMailer.php';
require 'php mailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sahilmittalynr@gmail.com';                     //SMTP username
    $mail->Password   = 'tlup asur gypa phvg';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sahilmittalynr@gmail.com', 'Contact Form');
    $mail->addAddress('sahilmittalynr@gmail.com', 'Ayush Portal');     //Add a recipient
    

   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Form';
    $mail->Body    = "Sender Name- $name <br>   Sender Country- $country <br>  Subject- $subject";
    

    $mail->send();
    echo 'Form Submit Successfully';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}
}

?>

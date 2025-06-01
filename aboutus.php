<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
body {
    background-color: #e0f7fa; /* Light teal background */
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 1200px; /* Wide layout for landscape */
    margin: auto;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.heading {
    text-align: center;
    color: #00796b; /* Dark teal for headings */
    margin: 20px 0;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
}

.subheading {
    text-align: center;
    color: #ff5722; /* Bright orange for subheading */
}

.mission-vision {
    display: flex; /* Horizontal layout */
    justify-content: space-around;
    margin: 20px 0;
}

.mission, .vision {
    width: 45%; /* Equal width for both sections */
    text-align: center;
    background-color: #ffe082; /* Light yellow background */
    border-radius: 10px;
    padding: 10px;
    transition: transform 0.3s ease;
}

.mission:hover, .vision:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

.responsive-img {
    width: 100%;
    border-radius: 10px;
    margin: 15px 0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.responsive-img:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

ul {
    list-style-type: none;
    padding: 0;
    margin: 20px 0;
}

ul li {
    margin: 10px 0;
    line-height: 1.6;
    background-color: #ffccbc; /* Light coral background */
    border-radius: 5px;
    padding: 10px;
}

.thank-you {
    text-align: center;
    color: #d50000; /* Bright red for thank you message */
    margin: 20px 0;
}

@media (max-width: 800px) {
    .mission-vision {
        flex-direction: column; /* Stack vertically on smaller screens */
        align-items: center;
    }

    .mission, .vision {
        width: 90%; /* Full width for smaller screens */
        margin-bottom: 20px;
    }
}

    
</style>
<body>
    <div class="container">
        <h1 class="heading">About Us</h1>
        <h3>Welcome to Ayush Portal!</h3>
        <p>At Ayush Portal, we are committed to fostering innovation and collaboration among investors, government stakeholders, and entrepreneurs. Our platform serves as a comprehensive hub where these key players can come together to drive progress, create impactful solutions, and build a sustainable future.</p>

        <h1 class="heading">Our Mission</h1>
        <img src="./IMAGES/images.jpg" alt="Our Mission" class="responsive-img" height="400px"
        width="800px">
        <p>Our mission is to empower entrepreneurs by providing them with the resources, connections, and support they need to bring their visions to life. We aim to bridge the gap between innovative ideas and the necessary funding and regulatory support, ensuring that great ideas have the opportunity to flourish and make a real difference.</p>

        <h1 class="heading">What We Offer</h1>
        <ul>
            <li class="heading heading1">For Investors:</li>
            <p>Access to a curated list of promising startups and innovative projects. Our platform provides detailed information, performance metrics, and growth potential analysis to help you make informed investment decisions.</p>

            <li class="heading heading1">For Government Stakeholders:</li>
            <p>A streamlined interface to engage with entrepreneurs and investors. Ayush Portal offers tools to monitor project progress, assess impact, and collaborate on policy initiatives that support innovation and economic growth.</p>

            <li class="heading heading1">For Entrepreneurs:</li>
            <p>Comprehensive resources to help you navigate the startup ecosystem. From finding the right investors and understanding regulatory requirements to accessing mentorship and networking opportunities, Ayush Portal is your go-to resource for turning ideas into reality.</p>
        </ul>
        
        <h1 class="heading">Our Vision</h1>
        <img src="./IMAGES/images.jpg" alt="Our Vision" class="responsive-img" height="400px" width="800px">
        <p>We envision a world where innovation thrives and impactful ideas are not limited by access to resources. By creating a vibrant community of investors, government stakeholders, and entrepreneurs, Ayush Portal aims to be at the forefront of driving economic development and technological advancement.</p>

        <h1 class="heading">Join Us</h1>
        <p>Whether you are an investor looking for the next big opportunity, a government official seeking to support and regulate innovation, or an entrepreneur with a groundbreaking idea, Ayush Portal is here to support your journey. Together, we can create a thriving ecosystem where innovation knows no bounds.</p>

        <h1 class="headingl">Thank you for visiting Ayush Portal. Let's innovate, collaborate, and succeed together!</h1>
    </div>
</body>
</html>
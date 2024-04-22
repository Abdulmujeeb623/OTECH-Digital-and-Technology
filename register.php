<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Web Development - Register Now | O2Tech</title>
    <meta name="description" content="Join O2Tech's comprehensive web development courses covering front end, back end, and full stack development. Learn HTML5, CSS3, JavaScript, PHP, Python, SQL, and more. Get certified and access job opportunities. Register now!">
    <meta name="keywords" content="O2Tech, web development, programming, coding, front end, back end, full stack, HTML5, CSS3, JavaScript, PHP, Python, SQL, database">
    <meta name="author" content="O2Tech">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Solway:400,700&display=swap" rel="stylesheet"> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .map-responsive {
            overflow: hidden;
            padding-bottom: 56.25%; /* Aspect ratio 16:9 */
            position: relative;
            height: 0;
        }
        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>
</head>
<body>

<!-- Nav Start -->
<div class="header">
    <div class="container">
        <div class="logo pull-left">
            <h1><a href="index.php">O2TECH</a></h1>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <nav class="nav social-nav pull-right d-none d-lg-inlinre">
            <a href="https://twitter.com/home"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="www.linkedin.com/in/abdulmujeeb-otuyo-24540121a"><i class="fa fa-linkedin"></i></a>
        </nav>
    </div>
</div>
<!-- Nav End -->

<div class="container">
    <h2 class="mt-4">Unlock Your Potential with Web Development</h2>
    <p>Take the next step in your career with O2Tech's comprehensive web development courses. Whether you're a beginner or an experienced coder, our courses are designed to equip you with the skills and knowledge needed to succeed in today's digital landscape.</p>

    <h4 class="mt-4">What You'll Learn:</h4>
    <ul>
        <li><strong>Frontend Development:</strong> HTML5, CSS3, JavaScript, Bootstrap, jQuery, Vue.js, React</li>
        <li><strong>Backend Development:</strong> PHP, Python, SQL, MySQL, Laravel framework</li>
        <li><strong>Full Stack Development:</strong> A combination of frontend and backend technologies for a comprehensive understanding</li>
    </ul>

    <h4 class="mt-4">Course Features:</h4>
    <ul>
        <li>Hands-on projects to apply your learning</li>
        <li>Expert instructors with real-world experience</li>
        <li>Flexible learning options - online or in-person</li>
        <li>Access to a supportive community of learners</li>
        <li>Job placement assistance for top-performing students</li>
    </ul>

    <h4 class="mt-4">Limited Time Offer:</h4>
    <p>Register now and secure your spot! Special discounts available for the first five students in each course.</p>

    <h4 class="mt-4">Opportunities Await:</h4>
    <p>Upon successful completion of the course, you'll receive certification and gain access to exclusive job opportunities through our network of partner companies.</p>

    <div class="map-responsive mt-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15784.230179219321!2d4.5807008499999995!3d8.493786199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10364d730627d8b5%3A0x287a6c8b3c3f4f2b!2sMagaji%20Are%2011%2C%20Kwara!5e0!3m2!1sen!2sng!4v1713731627349!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" class="form-control" placeholder="Enter your phone number" required>
        </div>

        <div class="form-group">
            <label for="course">Select Course:</label>
            <select name="course" class="form-control" required>
                <option value="frontend">Frontend Development</option>
                <option value="backend">Backend Development</option>
                <option value="fullstack">Full Stack Development</option>
            </select>
        </div>

        <div class="form-group">
            <label for="message">Additional Comments:</label>
            <textarea name="message" class="form-control" rows="4" placeholder="Enter any additional comments"></textarea>
        </div>

        <button type="submit" class="btn btn-dark">Register</button>
    </form>
</div>

<footer class="footer mt-5">
    <div class="container">
        <div class="text-center">
            <p>&copy; Copyright <a href="https://o2tech.com.ng">O2TECH</a>. All Rights Reserved</p>
            <p>Powered by <a href="https://o2tech.com.ng">O2TECH</a></p>
            <p>Offer ends on May 1st, 2024. Hurry up and register now!</p>
            <p>Physical Address: Sango, Ilorin, Kwara State Opp Oando filling station</p>
            <p>Contact: 07048014881 | Email: admin@o2tech.com.ng</p>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/typed/typed.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/stickyjs/sticky.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="js/main.js"></script>


<?php

// Database connection configuration
$host = 'localhost';
$username = 'gtyurygv_o2tech';
$password = 'gtyurygv_o2tech';
$database = 'gtyurygv_o2tech';

// Create a new MySQLi object
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Prepare and bind SQL statement
    $sql = "INSERT INTO registrations (name, email, phone, course, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $phone, $course, $message);

    // Set parameters and execute
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $phone = test_input($_POST['phone']);
    $course = test_input($_POST['course']);
    $message = test_input($_POST['message']);

    if ($stmt->execute() === TRUE) {
        echo "<script>alert('Registration successful!'); window.location='register.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


</body>
</html>

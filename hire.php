<?php

$host = 'localhost';
$username = 'gtyurygv_o2tech';
$password = 'gtyurygv_o2tech';
$database = 'gtyurygv_o2tech';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
class Employer
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function submitHiringRequest($company_name, $contact_name, $email, $phone, $job_title, $job_description, $comments)
    {
        $stmt = $this->conn->prepare("INSERT INTO hiring_requests (company_name, contact_name, email, phone, job_title, job_description, comments) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $company_name, $contact_name, $email, $phone, $job_title, $job_description, $comments);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
$employer = new Employer($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company_name = $_POST['company_name'];
    $contact_name = $_POST['contact_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $job_title = $_POST['job_title'];
    $job_description = $_POST['job_description'];
    $comments = $_POST['comments'];

    if ($employer->submitHiringRequest($company_name, $contact_name, $email, $phone, $job_title, $job_description, $comments)) {
        echo "<script>alert('Contact successfull!'); window.location='hire.php'</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MyFolio - Portfolio O2Tech</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Portfolio HTML Template" name="keywords">
        <meta content="Portfolio HTML Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Solway:400,700&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
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
                        <li><a href="#about">About me</a></li>
                        <li><a href="#experience">Experience</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        
                        <li><a href="#contact">Contact me</a></li>
                        <li><a href="hire.php">Hire me</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </nav>

                <nav class="nav social-nav pull-right d-none d-lg-inlinre">
                    <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a>
                </nav>
            </div>
        </div>
        <!-- Nav End -->


        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <label for="company_name">Company Name:</label>
                    <input type="text" name="company_name" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="contact_name">Contact Name:</label>
                    <input type="text" name="contact_name" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="job_title">Job Title:</label>
                    <input type="text" name="job_title" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="job_description">Job Description:</label>
                    <textarea name="job_description" class="form-control" rows="4" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="comments">Additional Comments:</label>
                    <textarea name="comments" class="form-control" rows="4"></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-dark">Submit Request</button>
                </div>
            </div>
        </div>
    </form>
    <br>

   <!-- Footer Start -->
   <div class="footer">
            <div class="container">
                <div class="copyright">
                    <p>&copy; Copyright <a href="https://o2tech.com.ng">O2TECH</a>. All Rights Reserved</p>
                    <p>Powered by <a href="https://o2tech.com.ng">O2TECH</a></p>
                </div>
            </div>
        </div>
        <!-- Footer end -->
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
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

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

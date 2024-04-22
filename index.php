<?php
// Assuming you have a database connection established
$servername = "localhost";
$username = "gtyurygv_o2tech";
$password = "gtyurygv_o2tech";
$dbname = "gtyurygv_o2tech";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

class ContactForm
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function saveFormData($yourName, $yourEmail, $yourSubject, $yourMessage)
    {
        // Use prepared statement to prevent SQL injection
        $stmt = $this->conn->prepare("INSERT INTO contact (your_name, your_email, your_subject, your_message) VALUES (?, ?, ?, ?)");

        // Check if the prepared statement was successful
        if ($stmt === false) {
            die("Prepare failed: " . $this->conn->error);
        }

        // Bind parameters with types
        $stmt->bind_param("ssss", $yourName, $yourEmail, $yourSubject, $yourMessage);

        // Validate and sanitize input using test_input function
        $yourName = $this->test_input($yourName);
        $yourEmail = $this->test_input($yourEmail);
        $yourSubject = $this->test_input($yourSubject);
        $yourMessage = $this->test_input($yourMessage);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "<script>alert('Contact successfull!'); window.location='index.php'</script>";
                } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }

    private function test_input($data)
    {
        // Use the built-in PHP function to sanitize and validate input
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

// Create an instance of the DonationForm class
$contactForm = new ContactForm($conn);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $yourName = $_POST["your_name"];
    $yourEmail = $_POST["your_email"];
    $yourSubject = $_POST["your_subject"];
    $yourMessage = $_POST["your_message"];

    // Save form data using the DonationForm class method
    $contactForm->saveFormData($yourName, $yourEmail, $yourSubject, $yourMessage);
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>MyFolio - Portfolio O2Tech</title>
    <meta name="description" content="Welcome to O2TECH, your destination for comprehensive web development courses. Learn front end, back end, and full stack development with courses covering HTML5, CSS3, JavaScript, Bootstrap, jQuery, Vue.js, React, PHP, Python, SQL, MySQL, and more. Join us and embark on a rewarding journey in programming and coding.">
    <meta name="keywords" content="O2TECH, programming, coding, web development, front end, back end, full stack, PHP, JavaScript, Python, SQL, MySQL, database, HTML5, CSS3, Bootstrap, jQuery, Vue.js, React">
    <meta name="author" content="O2TECH">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:title" content="O2TECH - Comprehensive Web Development Courses">
    <meta property="og:description" content="Welcome to O2TECH, your destination for comprehensive web development courses. Learn front end, back end, and full stack development with courses covering HTML5, CSS3, JavaScript, Bootstrap, jQuery, Vue.js, React, PHP, Python, SQL, MySQL, and more. Join us and embark on a rewarding journey in programming and coding.">
    <meta property="og:image" content="https://example.com/og-image.jpg">
    <meta property="og:url" content="https://o2tech.com.ng">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="O2TECH">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="O2TECH - Comprehensive Web Development Courses">
    <meta name="twitter:description" content="Welcome to O2TECH, your destination for comprehensive web development courses. Learn front end, back end, and full stack development with courses covering HTML5, CSS3, JavaScript, Bootstrap, jQuery, Vue.js, React, PHP, Python, SQL, MySQL, and more. Join us and embark on a rewarding journey in programming and coding.">
    <meta name="twitter:image" content="https://example.com/twitter-image.jpg">
    <link rel="canonical" href="https://o2tech.com.ng">
    <link rel="icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Solway:400,700&display=swap" rel="stylesheet"> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Additional CSS or scripts can be included here -->
</head>
    <body>
        <

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
                        <li><a href="hire.php">Hire Me</a></li>
                        <li><a href="register.php">Register</a></li>
                        
                        <li><a href="#contact">Contact me</a></li>
                    </ul>
                </nav>

                <nav class="nav social-nav pull-right d-none d-lg-inlinre">
                    <a href="https://twitter.com/home"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="www.linkedin.com/in/abdulmujeeb-otuyo-24540121a"><i class="fa fa-linkedin"></i></a>
                </nav>
            </div>
        </div>
        <!-- Nav End -->

        <!-- About Me Start-->
        <div class="about" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <img class="img-fluid" src="img/Scc5.png" />
                    </div>

                    <div class="col-md-6 col-lg-8">
                        <header class="section-header">
                            <h2>About Me</h2>
                        </header>
                        <h3><strong>Name:</strong> Abdulmujeeb Ibrahim Otuyo</h3>
                        <h4><strong>Profession:</strong> Web Application and Software Engineer</h4>
                        <p>
                            A passionate Full Stack Developer dedicated to crafting innovative and efficient digital solutions. With a keen eye for detail and a commitment to delivering high-quality software, I thrive in dynamic and collaborative environments.
                        </p>
                        <p>
                            In my journey as a developer, I've honed my skills across the entire software development lifecycle. From conceptualization and design to implementation and maintenance, I bring a holistic approach to every project. My proficiency spans both front-end and back-end technologies, allowing me to create seamless, user-centric applications that meet and exceed client expectations.
                        </p>
                        <p>
                            I am well-versed in a variety of programming languages, including but not limited to JavaScript, PHP, and RUST. Leveraging frameworks such as Vue.js and Laravel, I've successfully delivered responsive and scalable web applications. My experience extends to database management and optimization, ensuring data integrity and performance in every solution I develop.
                        </p>
                        
                        <a href="hire.php">Hire Me</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="skills">
                            <h3>Front End Skills</h3>
                            <div class="skill-name">
                                <p>HTML</p><p>85%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            
                            <div class="skill-name">
                                <p>CSS</p><p>95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p>Javascript</p><p>90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            
                            <div class="skill-name">
                                <p>jQuery</p><p>80%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p>Vue.js</p><p>80%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p>Bootstrap</p><p>90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skills">
                            <h3>Back End Skills</h3>
                            <div class="skill-name">
                                <p>PHP</p><p>90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            
                            <div class="skill-name">
                                <p>Laravel</p><p>85%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p>SQL</p><p>90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p>PhpMyAdmin</p><p>90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            
                            <div class="skill-name">
                                <p>MySQL</p><p>95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Me End-->
        
        <!-- Job Experience Start -->
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header">
                    <h3>Job Experience</h3>
                    <p>
                        With a strong command over back-end technologies, I boast extensive expertise in PHP, with a proficiency level of 90%. My skills extend to Laravel, where I've achieved an 85% mastery, allowing me to build robust and scalable applications efficiently. My deep understanding of SQL (90%), PhpMyAdmin (90%), and MySQL (95%) enables me to handle database management and optimization seamlessly. These skills, combined with a meticulous approach, empower me to deliver high-quality, performance-driven back-end solutions.
                    </p>
                </header>
                <div class="row">
                    <div class="col-md-6">
                        <div class="exp-column">
                            <p class="exp-date">2024 <span>to</span> present</p>
                            <h4 class="exp-company">PAUZII TECHI</h4>
                            <h4 class="exp-designation">Full Stack Developer</h4>
                            <p class="exp-detail">
                                As a Full Stack Developer at Pauzii Techi, I played a key role in crafting dynamic and responsive web applications. Leveraging my expertise in PHP and Laravel, I successfully delivered projects that met the highest standards of functionality and design. My commitment to innovation and attention to detail contributed to the success of the team and the satisfaction of clients.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="exp-column">
                            <p class="exp-date">2020 <span>to</span> 2023</p>
                            <h4 class="exp-company">Madros Technology and Digital Services</h4>
                            <h4 class="exp-designation">Full Stack Developer</h4>
                            <p class="exp-detail">
                                During my time at MADROS TDS, I began my journey in web development as a Web Designer. While my focus was on design, I laid the groundwork for my back-end skills, gaining valuable insights into the intricacies of web development. This experience laid the foundation for my transition into a more comprehensive role as a Full Stack Developer.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="exp-column">
                            <p class="exp-date">2019 <span>to</span> 2020</p>
                            <h4 class="exp-company">AMCO HUB</h4>
                            <h4 class="exp-designation">Web Designer</h4>
                            <p class="exp-detail">
                                At AMCO, I started my career in the tech industry as a Web Designer. As I evolved in this role, I began incorporating back-end development skills, setting the stage for my progression into more advanced and comprehensive roles in subsequent years.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="exp-column">
                            <p class="exp-date">2019 <span>to</span> 2019</p>
                            <h4 class="exp-company">Femtech IT</h4>
                            <h4 class="exp-designation">Internship</h4>
                            <p class="exp-detail">
                                At Femtech, I did my internship in the tech industry as a Web Designer. As I evolved in this role, I began incorporating back-end development skills, setting the stage for my progression into more advanced and comprehensive roles in subsequent years.
                            </p>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <!-- Job Experience End -->

       1<!-- Services Start -->
<div class="services" id="services">
    <div class="container">
        <header class="section-header">
            <h3>My Services</h3>
            <p>
                As a dedicated professional with a passion for crafting digital solutions, I offer a range of services that cater to diverse needs. My commitment to excellence and innovation is reflected in the following areas of expertise:
            </p>
        </header>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="single-service">
                    <span></span>
                    <div class="service-icon"><i class="fa fa-television"></i></div>
                    <h4><a href="#">Web Design</a></h4>
                    <p>Transform your ideas into visually stunning and user-friendly websites. I specialize in creating engaging web designs that leave a lasting impression on your audience.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="single-service">
                    <span></span>
                    <div class="service-icon"> <i class="fa fa-laptop"></i> </div>
                    <h4><a href="#">Web Development</a></h4>
                    <p>Bring your digital vision to life with robust and scalable web development solutions. I leverage cutting-edge technologies to deliver websites that are not just functional but also optimized for performance.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="single-service">
                    <span></span>
                    <div class="service-icon"> <i class="fa fa-android"></i> </div>
                    <h4><a href="#">Apps Development</a></h4>
                    <p>Create powerful and intuitive mobile applications that cater to the growing needs of your audience. My expertise in app development ensures seamless user experiences across various platforms.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="single-service">
                    <span></span>
                    <div class="service-icon"> <i class="fa fa-envelope-o"></i> </div>
                    <h4><a href="#">Email List Building</a></h4>
                    <p>Build and nurture your email list strategically. I employ effective tactics to grow your subscriber base, ensuring targeted communication and increased engagement with your audience.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="single-service">
                    <span></span>
                    <div class="service-icon"> <i class="fa fa-signal"></i> </div>
                    <h4><a href="#">Custom Analytics</a></h4>
                    <p>Gain valuable insights into user behavior and website performance with custom analytics solutions. I implement analytics tools tailored to your specific needs, helping you make data-driven decisions.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="single-service">
                    <span></span>
                    <div class="service-icon"> <i class="fa fa-globe"></i> </div>
                    <h4><a href="#">Online Marketing</a></h4>
                    <p>Elevate your online presence with targeted and effective digital marketing strategies. From SEO to social media, I create comprehensive plans to enhance your brand visibility and reach your target audience.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

        <!-- Counter Start -->
        <div class="counters">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon-box"><i class="fa fa-calendar"></i></div>
                            <div class="number animateNumber" data-toggle="counter-up"> <span>5</span></div>
                            <h4 class="font-weight">Years of Experience</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon-box"><i class="fa fa-check"></i></div>
                            <div class="number animateNumber" data-toggle="counter-up"> <span>8</span></div>
                            <h4 class="font-weight">Completed Projects</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon-box"><i class="fa fa-users"></i></div>
                            <div class="number animateNumber" data-toggle="counter-up"> <span>7</span></div>
                            <h4 class="font-weight">Total Clients</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon-box"><i class="fa fa-heart"></i></div>
                            <div class="number animateNumber" data-toggle="counter-up"> <span>4</span></div>
                            <h4 class="font-weight">Award Won</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter End -->

       <!-- Portfolio Start -->
<div class="portfolio" id="portfolio">
    <div class="container">
        <header class="section-header">
            <h3 class="section-title">My Portfolio</h3>
            <p>
                Welcome to my showcase of work where creativity meets functionality. Each project in my portfolio is a testament to my commitment to delivering innovative and tailored solutions. Explore the diverse range of projects that highlight my skills and expertise across various domains.
            </p>
        </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".web-des">Web Design</li>
                            <li data-filter=".web-dev">Web Development</li>
                            <li data-filter=".app-dev">App Development</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item web-des">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/Screenshot (94).png" class="img-fluid" alt="">
                                <a href="img/Screenshot (94).png" data-lightbox="portfolio" data-title="Curabitur semper erat" class="link-preview" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="https://o2tech.com.ng/" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Portfolio <span>Web Design</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item web-des">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/Screenshot (91).png" class="img-fluid" alt="">
                                <a href="img/Screenshot (91).png" class="link-preview" data-lightbox="portfolio" data-title="Maecenas a tempus tortor" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="https://albabislamiccenter.com.ng/school_management/index.php" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">School Management System <span>Web App Design and Development</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item web-dev">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/Screenshot (90).png" class="img-fluid" alt="">
                                <a href="img/Screenshot (90).png" class="link-preview" data-lightbox="portfolio" data-title="Aliquam id sapien lorem" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="https://albabislamiccenter.com.ng" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">E-Commerce <span>Web Development</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item web-dev">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/Screenshot (58).png" class="img-fluid" alt="">
                                <a href="img/Screenshot (58).png" class="link-preview" data-lightbox="portfolio" data-title="Quisque lectus mauris" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Socia Media <span>Web Development</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item app-dev">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/Screenshot (123).png" class="img-fluid" alt="">
                                <a href="img/Screenshot (123).png" class="link-preview" data-lightbox="portfolio" data-title="Interdum et malesuada" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="https://www.dexteroushealthcareservices.co.uk/" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Elderly and Children health care sysytem <span>Apps Development</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item app-dev">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/Screenshot (96).png" class="img-fluid" alt="">
                                <a href="img/Screenshot (96).png" class="link-preview" data-lightbox="portfolio" data-title="Pellentesque lacus" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">E-Commerce <span>Apps Development</span></h4>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->

        <!-- Testimonials Start -->
<div class="testimonials" id="testimonials">
    <div class="container">
        <i class="fa fa-4x fa-quote-left"></i>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <img src="img/Screenshot (92).png" class="testimonial-img" alt="">
                <h3>Ibrahim Muhsinat</h3>
                <h4> Lecturer </h4>
                <p>
                    "Working with [Your Name] has been an absolute pleasure. Their commitment to excellence and attention to detail is truly commendable. As a Principal, I needed a website that showcased our products and services, and [Your Name] delivered beyond expectations. The website design was not only visually appealing but also highly functional. I appreciate their dedication to understanding our unique needs and translating them into an engaging online presence."
                </p>
            </div>

            <div class="testimonial-item">
                <img src="img/Screenshot (92).png" class="testimonial-img" alt="">
                <h3>Jake Gregory</h3>
                <h4>News Correspondent</h4>
                <p>
                    "In the fast-paced world of news reporting, having a reliable and user-friendly platform is crucial. [Your Name] played a pivotal role in developing a website that streamlined our news delivery process. Their web development skills and strategic approach ensured that our online presence was not only informative but also aesthetically pleasing. The collaboration with [Your Name] was smooth, and their professionalism stood out throughout the project."
                </p>
            </div>

            <div class="testimonial-item">
                <img src="img/Screenshot (92).png" class="testimonial-img" alt="">
                <h3>Maddison Hughes</h3>
                <h4>Social Worker</h4>
                <p>
                    "As a social worker, I needed a website that could effectively communicate our mission and connect with our community. [Your Name] understood the importance of storytelling and designed a website that resonates with our audience. Their expertise in web development, combined with a keen understanding of social initiatives, r esulted in a website that goes beyond being a digital presence – it's a platform that fosters engagement and community involvement. Working with [Your Name] was not just a professional collaboration but a meaningful partnership in our outreach efforts."
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials End -->

        <!-- Contact Start -->
        <div class="contact" id="contact">
            <div class="container">
                <div class="section-header">
                    <h3>Contact Me</h3>
                    <p>
                        Welcome to the gateway of collaboration! I am thrilled to connect with you and explore how we can bring your ideas to life. My commitment to excellence and passion for crafting digital solutions make me your ideal partner in achieving your goals.

            Whether you have a specific project in mind, need consultation on web development, or simply want to discuss the potential of our collaboration, I'm here to listen and provide valuable insights.

            Feel free to reach out using the contact form below or connect with me on social media. Your inquiries are important to me, and I look forward to the opportunity to contribute to your success.

            Let's turn your vision into reality!
                    </p>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <p><i class="fa fa-user"></i>Abdulmujeeb Ibrahim Otuyo</p>
                            <p><i class="fa fa-tag"></i>Full Stack Developer</p>
                            <p><i class="fa fa-map-marker"></i>Apapa, Lagos</p>
                            <p><i class="fa fa-envelope"></i><a href="mailto:admin@o2tech.com.ng">admin@o2tech.com.ng</a></p>
                            <p><i class="fa fa-phone"></i><a href="tel:+2347048014881">07048014881</a></p>
                            <div class="social">
                                <a href="https://twitter.com/Otu1Otuyo"><i class="fa fa-twitter"></i></a>
                                <a href="https://mobile.facebook.com/O2TECHKING"><i class="fa fa-facebook"></i></a>
                                <a href="www.linkedin.com/in/abdulmujeeb-otuyo-24540121a"><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name" name="your_name" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email" name="your_email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" name="your_subject" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Message" name="your_message"></textarea>
                                </div>
                                <div><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

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

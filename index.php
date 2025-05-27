<?php
include_once "contact_us.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PebbleBridge | Commercial Cleaning, Maintenance & Supplies</title>

    <meta name="description" content="PebbleBridge offers expert commercial cleaning, hygiene maintenance, and reliable supply solutions for businesses. Ensure a spotless, healthy, and productive environment with our efficient services.">

    <meta name="keywords" content="commercial cleaning, hygiene services, maintenance services, office cleaning, industrial cleaning, floor cleaning, lawn cutting, waste management, bin bags, detergents, wash cloths, cleaning supplies, commercial hygiene, healthy environment, business cleaning solutions">

    <meta property="og:title" content="PebbleBridge | Commercial Cleaning, Maintenance & Supplies">
    <meta property="og:description" content="PebbleBridge offers expert commercial cleaning, hygiene maintenance, and reliable supply solutions for businesses. Ensure a spotless, healthy, and productive environment with our efficient services.">
    <meta property="og:image" content="https://www.pebblebridge.co.za/images/pebblebridge-image.jpg">
    <meta property="og:url" content="https://www.pebblebridge.co.za/index.php">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="PebbleBridge">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@PebbleBridgeCo">
    <meta name="twitter:title" content="PebbleBridge | Commercial Cleaning, Maintenance & Supplies">
    <meta name="twitter:description" content="PebbleBridge offers expert commercial cleaning, hygiene maintenance, and reliable supply solutions for businesses. Ensure a spotless, healthy, and productive environment with our efficient services.">
    <meta name="twitter:image" content="https://www.pebblebridge.co.za/images/pebblebridge-social-share.jpg">

    <link rel="canonical" href="https://www.pebblebridge.co.za/index.php">

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/content.css">

    <style>
        /* Basic styling for form messages - you can enhance this in content.css */
        .form-message {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            font-weight: bold;
        }

        .form-message.success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .form-message.error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .error-text {
            color: #721c24;
            font-size: 0.85em;
            margin-top: 5px;
            display: block;
        }
    </style>
</head>

<body>
    <header id="topbar">
        <div id="scrolling_mark" aria-hidden="true"></div>

        <div id="logo">
            <a href="index.php">
                <img src="images/logo.svg" alt="PebbleBridge Logo - Commercial Cleaning & Maintenance Services">
            </a>
        </div>

        <div class="header-right-content">
            <nav aria-label="Main Navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#about_us">About</a></li>
                    <li><a href="#our_services">Services</a></li>
                    <li><a href="#contact_us">Contact</a></li>
                </ul>
            </nav>

            <div id="social">
                <ul class="social_media" aria-label="PebbleBridge Social Media Links">
                    <li><a href="#" aria-label="PebbleBridge on Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" aria-label="PebbleBridge on Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" aria-label="Email PebbleBridge"><i class="fas fa-envelope"></i></a></li>
                    <li><a href="#" aria-label="Call PebbleBridge"><i class="fas fa-phone"></i></a></li>
                </ul>
            </div>
        </div>
    </header>

    <section id="hero-section">
        <div id="hero-image">
            <img src="images/vacuumcleaning.svg" alt="Illustration of efficient vacuum cleaning service for commercial spaces">
            <div id="hero-content">
                <h1>Smart Ways to Cleaning!!</h1>
                <p>
                    <span id="heading-color">PebbleBridge</span> is focused on rendering hygiene services which comprise of maintenance and supply functions for commercial services. We bring innovation and efficiency to commercial cleaning, ensuring a spotless and healthy environment for your business.
                </p>
                <p>
                    <a href="#our_services" class="btn btn-primary">Explore Our Commercial Cleaning & Maintenance Services</a>
                </p>
            </div>
        </div>
    </section>

    <div class="section-divider slope-bottom"></div>

    <section id="about_us">
        <img src="images/lawnmowing.svg" alt="Illustration of professional lawn mowing service for commercial properties">
        <div id="about_content">
            <h2>About <span id="heading-color">PebbleBridge Company</span></h2>
            <hr>
            <h4>Who <span id="heading-color">We Are</span></h4>
            <div id="about_content2">
                <span id="heading-color">PebbleBridge</span> is a fairly newfangled business which its model is based on being an everyday service provider. We are dedicated to delivering exceptional hygiene and maintenance solutions tailored to the unique needs of commercial clients.
                <p>
                    The drive of <span id="heading-color">PebbleBridge</span> is to provide a holistic approach to our clientele in terms of taking care of all the facilities cleanliness internally. We ensure every corner of your commercial space is immaculate, contributing to a healthier and more productive work environment. Our team is committed to excellence and customer satisfaction.
                </p>
            </div>
        </div>
    </section>

    <div class="section-divider slope-top"></div>

    <section id="our_services">
        <h2>Our <span id="heading-color">Comprehensive Services</span></h2>
        <hr>
        <h4>Maintenance, Cleaning <span id="heading-color">& Our Supply</span></h4>
        <div class="services-grid">
            <div class="service-item">
                <img src="images/floorcleaning.svg" alt="Floor Cleaning service icon for commercial spaces">
                <p>Floor Cleaning</p>
                <small>Expert floor cleaning services for all commercial spaces, ensuring pristine and hygienic surfaces.</small>
            </div>
            <div class="service-item">
                <img src="images/lawn-cutting.svg" alt="Lawn Cutting service icon for commercial properties">
                <p>Lawn Cutting</p>
                <small>Professional lawn cutting and garden maintenance to keep your commercial property's exterior immaculate.</small>
            </div>
            <div class="service-item">
                <img src="images/waste-management.svg" alt="Waste Management service icon for businesses">
                <p>Waste Management</p>
                <small>Efficient and eco-friendly waste collection and disposal solutions for a cleaner environment.</small>
            </div>
            <div class="service-item">
                <img src="images/binbags.svg" alt="Bin Bags supply icon for commercial use">
                <p>Bin Bags Supply</p>
                <small>Reliable supply of high-quality bin bags and waste disposal consumables for all your needs.</small>
            </div>
            <div class="service-item">
                <img src="images/wash-cloths.svg" alt="Wash Cloths supply icon for cleaning">
                <p>Wash Cloths Supply</p>
                <small>Consistent provision of durable and hygienic wash cloths for various cleaning applications.</small>
            </div>
            <div class="service-item">
                <img src="images/detergents.svg" alt="Detergents supply icon for commercial cleaning">
                <p>Detergents Supply</p>
                <small>Bulk supply of effective and safe cleaning detergents for comprehensive hygiene maintenance.</small>
            </div>
        </div>
    </section>

    <div class="section-divider slope-bottom"></div>

    <section id="testimonials">
        <h2>What Our <span id="heading-color">PebbleBridge Clients Say!</span></h2>
        <hr>
        <div class="testimonials-grid">
            <div class="testimonial-item">
                <p>"PebbleBridge transformed our office space! Their cleaning services are top-notch, and the team is incredibly professional and efficient. Highly recommended!"</p>
                <h4>- Sarah M., Office Manager</h4>
            </div>
            <div class="testimonial-item">
                <p>"We've been using PebbleBridge for our waste management and supply needs for months. Their service is reliable, and their products are always high quality. A truly dependable partner."</p>
            </div>
            <div class="testimonial-item">
                <p>"From lawn cutting to deep cleaning, PebbleBridge handles it all. Their comprehensive approach means we only need one provider for all our hygiene services. Excellent work!"</p>
                <h4>- Emily R., Business Owner</h4>
            </div>
        </div>
    </section>

    <div class="section-divider slope-top"></div>

    <section id="promos">
        <div id="headline">Get our Newsletters & Discounts straight to your mail!</div>
        <?php
        // Display newsletter messages from session data
        if (!empty($promo_message)) {
            echo '<div class="form-message ' . htmlspecialchars($promo_message_type) . '">';
            echo '<p>' . htmlspecialchars($promo_message) . '</p>';
            echo '</div>';
        }
        ?>
        <form action="#promos" method="POST">
            <input type="hidden" name="subscribe_form_submit" value="1"> <label for="name" class="sr-only">Your Name</label>
            <input type="text" id="name" name="user_name" placeholder="Your Name" value="<?php echo htmlspecialchars($newsletter_name); ?>" required>
            <?php if (!empty($newsletter_name_error)) {
                echo '<span class="error-text">' . htmlspecialchars($newsletter_name_error) . '</span>';
            } ?>

            <label for="email" class="sr-only">Your Email</label>
            <input type="email" id="email" name="user_email" placeholder="Your Email" value="<?php echo htmlspecialchars($newsletter_email); ?>" required>
            <?php if (!empty($newsletter_email_error)) {
                echo '<span class="error-text">' . htmlspecialchars($newsletter_email_error) . '</span>';
            } ?>

            <button type="submit">Subscribe</button>
        </form>
    </section>

    <div class="section-divider slope-bottom"></div>

    <section id="contact_us">
        <h2>Contact <span id="heading-color">PebbleBridge Today</span></h2>
        <hr>
        <p class="contact-intro">Have questions or need a quote for commercial cleaning, maintenance, or supplies? Reach out to us using the form below, and we'll get back to you promptly.</p>

        <?php
        // Display success or error messages from contact form submission using session data
        if (isset($_SESSION['contact_message'])) {
            $message_type = $_SESSION['contact_message_type'] ?? 'info';
            echo '<div class="form-message ' . htmlspecialchars($message_type) . '">';
            echo '<p>' . htmlspecialchars($_SESSION['contact_message']) . '</p>';
            echo '</div>';
            // Clear session messages after displaying
            unset($_SESSION['contact_message']);
            unset($_SESSION['contact_message_type']);
        }
        ?>

        <form action="process_contact.php" method="POST" class="contact-form">
            <div class="form-group">
                <label for="contact_name">Your Name:</label>
                <input type="text" id="contact_name" name="contact_name" placeholder="Enter your name" value="<?php echo htmlspecialchars($_SESSION['contact_name_input'] ?? '');
                                                                                                                unset($_SESSION['contact_name_input']); ?>" required>
                <?php if (isset($_SESSION['contact_name_error'])) {
                    echo '<span class="error-text">' . htmlspecialchars($_SESSION['contact_name_error']) . '</span>';
                    unset($_SESSION['contact_name_error']);
                } ?>
            </div>

            <div class="form-group">
                <label for="contact_email">Your Email:</label>
                <input type="email" id="contact_email" name="contact_email" placeholder="Enter your email" value="<?php echo htmlspecialchars($_SESSION['contact_email_input'] ?? '');
                                                                                                                    unset($_SESSION['contact_email_input']); ?>" required>
                <?php if (isset($_SESSION['contact_email_error'])) {
                    echo '<span class="error-text">' . htmlspecialchars($_SESSION['contact_email_error']) . '</span>';
                    unset($_SESSION['contact_email_error']);
                } ?>
            </div>

            <div class="form-group">
                <label for="contact_subject">Subject:</label>
                <input type="text" id="contact_subject" name="contact_subject" placeholder="Subject of your message" value="<?php echo htmlspecialchars($_SESSION['contact_subject_input'] ?? '');
                                                                                                                            unset($_SESSION['contact_subject_input']); ?>" required>
                <?php if (isset($_SESSION['contact_subject_error'])) {
                    echo '<span class="error-text">' . htmlspecialchars($_SESSION['contact_subject_error']) . '</span>';
                    unset($_SESSION['contact_subject_error']);
                } ?>
            </div>

            <div class="form-group">
                <label for="contact_message">Message:</label>
                <textarea id="contact_message" name="contact_message" rows="6" placeholder="Your message here..." required><?php echo htmlspecialchars($_SESSION['contact_message_input'] ?? '');
                                                                                                                            unset($_SESSION['contact_message_input']); ?></textarea>
                <?php if (isset($_SESSION['contact_message_error'])) {
                    echo '<span class="error-text">' . htmlspecialchars($_SESSION['contact_message_error']) . '</span>';
                    unset($_SESSION['contact_message_error']);
                } ?>
            </div>

            <div class="form-group honeypot-field">
                <label for="website_url">Leave this field blank:</label>
                <input type="text" id="website_url" name="website_url">
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </section>

    <footer>
        <div id="footer-content">
            <img src="images/logo.svg" alt="PebbleBridge Logo - Commercial Cleaning & Hygiene Solutions">
            <p>&copy; <?php echo date("Y"); ?> PebbleBridge. All rights reserved.</p>
            <div class="footer-links">
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>Contact</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/themify-icons@0.1.2/css/themify-icons.css">

    <!-- Bootstrap + Steller main styles -->
	<link rel="stylesheet" href="assets/css/steller.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <?php include 'common/header.php'; ?>
    <!-- End of page navibation -->

    <!-- Page Header -->
    <header class="header" id="home">
        <div class="container">
            <div class="infos">
                <h6 class="subtitle">hello,I'm</h6>
                <h6 class="title">Harsh Shah</h6>
                <p>Php Developer</p>

                <div class="buttons pt-3">
                    <button class="btn btn-primary rounded">HIRE ME</button>
                    <button class="btn btn-dark rounded">DOWNLOAD CV</button>
                </div>      

                <div class="socials mt-4">
                    <a class="social-item" href="javascript:void(0)"><i class="ti-instagram"></i></a>
                    <a class="social-item" href="javascript:void(0)"><i class="ti-github"></i></a>
                    <a class="social-item" href="javascript:void(0)"><i class="ti-linkedin"></i></a>
                </div>
            </div>              
            <div class="img-holder">
                <img src="assets/imgs/man.svg" alt="">
            </div>      
        </div>  

        <!-- Header-widget -->
        <div class="widget">
            <div class="widget-item">
                <h2>7</h2>
                <p>Happy Clients</p>
            </div>
            <div class="widget-item">
                <h2>4</h2>
                <p>Project Completed</p>
            </div>
            <!--
            <div class="widget-item">
                <h2>789</h2>
                <p>Awards Won</p>
            </div>
            -->
        </div>
    </header>
    <!-- End of Page Header -->
    
   

    <!-- Contact Section -->
    <section id="contact" class="position-relative section">
        <div class="container text-center">
            <h6 class="subtitle">Contact</h6>
            <h6 class="section-title mb-4">Get In Touch With Me</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

            <div class="contact text-left">
                <div class="form">
                    <h6 class="subtitle">Available 24/7</h6>
                    <h6 class="section-title mb-4">Get In Touch</h6>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <textarea name="contact-message" id="" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block rounded w-lg">Send Message</button>
                    </form>
                </div>
                <div class="contact-infos">
                    <div class="item">
                        <i class="ti-location-pin"></i>
                        <div class="">
                            <h5>Location</h5>
                            <p> 12345 Fake ST NoWhere AB Country</p>
                        </div>                          
                    </div>
                    <div class="item">
                        <i class="ti-mobile"></i>
                        <div>
                            <h5>Phone Number</h5>
                            <p>(123) 456-7890</p>
                        </div>                          
                    </div>
                    <div class="item">
                        <i class="ti-email"></i>
                        <div class="mb-0">
                            <h5>Email Address</h5>
                            <p>info@website.com</p>
                        </div>
                    </div>
                </div>                  
            </div>
        </div>  
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1060.519786095435!2d72.6264660100312!3d23.035718143237112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e869abc2d8043%3A0xf87ea5a9ba3f1b84!2sMahila%20Vanijya%20Mahavidhyalay%2C%204935%2C%20Bapu%20Nagar%20Rd%2C%20Bapunagar%2C%20Ahmedabad%2C%20Gujarat%20380024!5e0!3m2!1sen!2sin!4v1747227797060!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>      
    </section>
    <!-- End of Contact Section -->

    <!-- Page Footer -->
    <?php include 'common/footer.php'; ?>
    <!-- End of page footer -->
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- steller js -->
    <script src="assets/js/steller.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="ar" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Mohammed Meibil AlEnezi Group</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;700&family=Work+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Header Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-lg-5">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h6 class="mb-0 text-primary text-uppercase">Mohammed Meibil AlEnezi Group</h6>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto p-4 p-lg-0">
                    <a href="/#header-carousel" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#services" class="nav-item nav-link">Services</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="team.html" class="dropdown-item">Our Models</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div> -->
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex">
                    <a class="btn btn-outline-primary border-2" href="https://themewagon.com/themes/poseify">En</a>
                </div>
            </div>
        </nav>
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if ($bannerModel): ?>
                    <?php foreach ($bannerModel as $index => $banner): ?>
                        <div class="carousel-item <?= $index == 0 ? "active" : "" ?>">
                            <img class="w-100" height="900px" style="object-fit:cover;" src="/uploads/<?= $banner->image_en ?>" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="title mx-5 px-5 animated slideInDown">
                                    <div class="title-center">
                                        <h4><?= $banner->title_en ?></h4>
                                    </div>
                                </div>
                                <p class="fs-5 mb-5 animated slideInDown"><?= $banner->desc_en ?></p>

                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Header End -->
    <!-- About Start -->
    <div class="container-fluid bg-secondary" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 pb-0 pb-lg-5 py-5">
                    <div class="pb-0 pb-lg-5 py-5">
                        <div class="title wow fadeInUp" data-wow-delay="0.1s">
                            <div class="title-left">
                                <h5>History</h5>
                                <h1>About Our Agency</h1>
                            </div>
                        </div>
                        <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                            diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                            lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                            ut dolore vero eos.</p>
                        <ul class="list-group list-group-flush mb-5 wow fadeInUp" data-wow-delay="0.3s">
                            <li class="list-group-item bg-dark text-body border-secondary ps-0">
                                <i class="fa fa-check-circle text-primary me-1"></i> Lorem ipsum dolor sit amet
                                consectetur elit.
                            </li>
                            <li class="list-group-item bg-dark text-body border-secondary ps-0">
                                <i class="fa fa-check-circle text-primary me-1"></i> Donec vehicula, sem ut tempus
                                tempus.
                            </li>
                            <li class="list-group-item bg-dark text-body border-secondary ps-0">
                                <i class="fa fa-check-circle text-primary me-1"></i> Morbi mi dapibus, feugiat nisi non
                                mollis justo.
                            </li>
                        </ul>
                        <div class="row wow fadeInUp" data-wow-delay="0.4s">
                            <div class="col-6">
                                <a href="#!" class="btn btn-outline-primary border-2 py-3 w-100">Become A Model</a>
                            </div>
                            <div class="col-6">
                                <a href="#!" class="btn btn-primary py-3 w-100">Schedule Casting</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/about.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Service Start -->
    <div class="container-fluid py-5" id="services">
        <div class="container py-5">
            <div class="text-center">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5>Services</h5>
                        <h1>How We Help You</h1>
                    </div>
                </div>
            </div>
            <?php if ($serviceModel): ?>
                <?php foreach ($serviceModel as $serviceIndex => $service): ?>
                    <div class="service-item service-item-<?= ($serviceIndex % 2 == 0) ? "left" : "right"  ?>">
                        <div class="row g-0 align-items-center ">
                            <div class="col-md-4 <?= ($serviceIndex % 2 == 0) ? "text-md-start" : "order-md-1  text-md-end"  ?> ">
                                <div class="service-img p-5 wow fadeInRight" data-wow-delay="0.2s">
                                    <img class="img-fluid rounded-circle" height="250" width="250" src="/uploads/<?= $service->image_en ?>" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 ps-1 pe-5">
                                <div class="service-text px-5 px-md-0 py-md-5 wow <?= ($serviceIndex % 2 == 0) ? "fadeInLeft" : "fadeInRight"  ?> <?= ($serviceIndex % 2 == 0) ? "" : "text-md-start"  ?>" data-wow-delay="0.5s">
                                    <h6 class="text-uppercase"><?= $service->title_en ?></h6>
                                    <p class="mb-4"><?= $service->desc_en ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            <?php endif; ?>


        </div>
    </div>
    <!-- Service End -->




    <!-- Team Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5>Models</h5>
                        <h1>Meet Our Models</h1>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-body">
                            <div class="team-before">
                                <span>Age</span>
                                <span>Height</span>
                                <span>Weight</span>
                                <span>Bust</span>
                                <span>Waist</span>
                                <span>Hips</span>
                            </div>
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-after">
                                <span>22</span>
                                <span>185</span>
                                <span>55</span>
                                <span>79</span>
                                <span>59</span>
                                <span>89</span>
                            </div>
                        </div>
                        <a class="team-name" href="#">
                            <h5 class="text-uppercase mb-0">Naomy Olsen</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="team-body">
                            <div class="team-before">
                                <span>Age</span>
                                <span>Height</span>
                                <span>Weight</span>
                                <span>Bust</span>
                                <span>Waist</span>
                                <span>Hips</span>
                            </div>
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-after">
                                <span>22</span>
                                <span>185</span>
                                <span>55</span>
                                <span>79</span>
                                <span>59</span>
                                <span>89</span>
                            </div>
                        </div>
                        <a class="team-name" href="#">
                            <h5 class="text-uppercase mb-0">Pamela Torney</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="team-body">
                            <div class="team-before">
                                <span>Age</span>
                                <span>Height</span>
                                <span>Weight</span>
                                <span>Bust</span>
                                <span>Waist</span>
                                <span>Hips</span>
                            </div>
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-after">
                                <span>22</span>
                                <span>185</span>
                                <span>55</span>
                                <span>79</span>
                                <span>59</span>
                                <span>89</span>
                            </div>
                        </div>
                        <a class="team-name" href="#">
                            <h5 class="text-uppercase mb-0">Joanne Irwin</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="team-body">
                            <div class="team-before">
                                <span>Age</span>
                                <span>Height</span>
                                <span>Weight</span>
                                <span>Bust</span>
                                <span>Waist</span>
                                <span>Hips</span>
                            </div>
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-after">
                                <span>22</span>
                                <span>185</span>
                                <span>55</span>
                                <span>79</span>
                                <span>59</span>
                                <span>89</span>
                            </div>
                        </div>
                        <a class="team-name" href="#">
                            <h5 class="text-uppercase mb-0">Gillian Rowe</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-body">
                            <div class="team-before">
                                <span>Age</span>
                                <span>Height</span>
                                <span>Weight</span>
                                <span>Bust</span>
                                <span>Waist</span>
                                <span>Hips</span>
                            </div>
                            <img class="img-fluid" src="img/team-5.jpg" alt="">
                            <div class="team-after">
                                <span>22</span>
                                <span>185</span>
                                <span>55</span>
                                <span>79</span>
                                <span>59</span>
                                <span>89</span>
                            </div>
                        </div>
                        <a class="team-name" href="#">
                            <h5 class="text-uppercase mb-0">Naomy Olsen</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="team-body">
                            <div class="team-before">
                                <span>Age</span>
                                <span>Height</span>
                                <span>Weight</span>
                                <span>Bust</span>
                                <span>Waist</span>
                                <span>Hips</span>
                            </div>
                            <img class="img-fluid" src="img/team-6.jpg" alt="">
                            <div class="team-after">
                                <span>22</span>
                                <span>185</span>
                                <span>55</span>
                                <span>79</span>
                                <span>59</span>
                                <span>89</span>
                            </div>
                        </div>
                        <a class="team-name" href="#">
                            <h5 class="text-uppercase mb-0">Pamela Torney</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="team-body">
                            <div class="team-before">
                                <span>Age</span>
                                <span>Height</span>
                                <span>Weight</span>
                                <span>Bust</span>
                                <span>Waist</span>
                                <span>Hips</span>
                            </div>
                            <img class="img-fluid" src="img/team-7.jpg" alt="">
                            <div class="team-after">
                                <span>22</span>
                                <span>185</span>
                                <span>55</span>
                                <span>79</span>
                                <span>59</span>
                                <span>89</span>
                            </div>
                        </div>
                        <a class="team-name" href="#">
                            <h5 class="text-uppercase mb-0">Joanne Irwin</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="team-body">
                            <div class="team-before">
                                <span>Age</span>
                                <span>Height</span>
                                <span>Weight</span>
                                <span>Bust</span>
                                <span>Waist</span>
                                <span>Hips</span>
                            </div>
                            <img class="img-fluid" src="img/team-8.jpg" alt="">
                            <div class="team-after">
                                <span>22</span>
                                <span>185</span>
                                <span>55</span>
                                <span>79</span>
                                <span>59</span>
                                <span>89</span>
                            </div>
                        </div>
                        <a class="team-name" href="#">
                            <h5 class="text-uppercase mb-0">Gillian Rowe</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->




    <div class="container-fluid py-5" id="contact">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="title wow fadeInUp" data-wow-delay="0.1s">
                        <div class="title-left">
                            <h5>Contact</h5>
                            <h1>We’re Here to Help</h1>
                        </div>
                    </div>
                    <h6 class="lh-base mb-4">Get in touch with Mohammed Meibil AlEnezi Group for legal consultations, inquiries, or appointments. Our team responds promptly to every message.</h6>
                    <table class="table table-dark mb-0 wow fadeInUp" data-wow-delay="0.3s">
                        <tr>
                            <td>PHONE</td>
                            <td>+0123456789</td>
                        </tr>
                        <tr>
                            <td>E-MAIL</td>
                            <td>info@example.com</td>
                        </tr>
                        <tr>
                            <td>ADDRESS</td>
                            <td>123 Street, New York, USA</td>
                        </tr>
                        <tr class="border-dark">
                            <td>FOLLOW US</td>
                            <td>
                                <a class="me-1" href="#!"><i class="fab fa-x-twitter"></i></a>
                                <a class="me-1" href="#!"><i class="fab fa-facebook-f"></i></a>
                                <a class="me-1" href="#!"><i class="fab fa-youtube"></i></a>
                                <a class="me-1" href="#!"><i class="fab fa-linkedin-in"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-secondary border-0" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-secondary border-0" id="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-secondary border-0" id="subject"
                                        placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-secondary border-0"
                                        placeholder="Leave a message here" id="message"
                                        style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-primary border-2 w-100 py-3" type="submit">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <a href="index.html">
                <h4 class=" mb-3 text-white text-uppercase">Mohammed Meibil AlEnezi Group</h4>
            </a>
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-lg-square btn-outline-primary border-2 m-1" href="#!"><i
                        class="fab fa-x-twitter"></i></a>
                <a class="btn btn-lg-square btn-outline-primary border-2 m-1" href="#!"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg-square btn-outline-primary border-2 m-1" href="#!"><i
                        class="fab fa-youtube"></i></a>
                <a class="btn btn-lg-square btn-outline-primary border-2 m-1" href="#!"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <p>&copy; <a class="border-bottom" href="#">mma-lawyers.co</a>, All Right Reserved.</p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#header-carousel" class="btn btn-outline-primary border-2 btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</body>

</html>
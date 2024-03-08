<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- owl caurosal cdn links for css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/bd03566d29.js" crossorigin="anonymous"></script>

    <!-- boottsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- custom css file -->

    <link rel="stylesheet" href="assets/css/style.css">
    <title>Pets4homes</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar bg-success fixed-top p-4 mb-5">
        <div class="container">

            <div class="row">
                <div class="col-auto d-flex">

                    <a class="navbar-brand mx-4 d-none d-md-block" href="#">
                        <img src="./assets/images/logowhitesmall.png" alt="" class="m-0">
                    </a>
                    <a class="navbar-brand mx-4 d-block d-md-none" href="#">
                        <img src="./assets/images/smallLogo.svg" alt="" class="m-0">
                    </a>

                </div>
            </div>

            <!-- Navbar right side -->
            <div class="col-auto d-flex justify-content-center align-items-center">
                <div>
                    <i class="fa fa-search fs-5 mx-4 text-white"></i>
                </div>

                <div class="dropdown">
                    <a class="btn btn-success rounded-pill  d-md-block text-white px-3  dropdown-toggle border border-light"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        English
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>




            </div>
        </div>

    </nav>
    <!-- Hero Section -->
    <section class="hero-section bg-success">
        <div class="container my-4">
            <h2>How Can We Help You Today?</h2>
        </div>
        <div class="container d-flex justify-content-center align-items-center ">

            <div class=" mb-3 d-flex">
                <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Enter your search term here...">
                </div>


                <button class="btn custom_btn mx-2 text-light" type="button" id="button-addon2">Search</button>

            </div>

        </div>

    </section>
    <!-- Slope below -->
    <div><img src="./assets/images/wavesOpacity.svg" alt="" width="100%"></div>


    <div class="container support">
        <div class="row">
            <div class="col-md-3">
                <div class="card border-0 text-center mb-3 p-3" style="width: 100%;">
                    <div class="card-body card_icon">
                        <img src="./assets/images/supporticon1.png" alt="" class="img-fluid">
                        <div class="mt-5">

                            <h5 class="fw-bold ">Animal Welfare</h5>
                            <small class="card-text">Purchase with peace of mind with our Pets4Homes
                                Guarantee.</small>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 text-center mb-3 p-3" style="width: 100%;">
                    <div class="card-body card_icon">
                        <img src="./assets/images/safe payment.png" alt="" class="img-fluid">
                        <div class="mt-5">

                            <h5 class="fw-bold ">Animal Welfare</h5>
                            <small class="card-text">Purchase with peace of mind with our Pets4Homes
                                Guarantee.</small>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 text-center mb-3 p-3" style="width: 100%;">
                    <div class="card-body card_icon">
                        <img src="./assets/images/supporticon1.png" alt="" class="img-fluid">
                        <div class="mt-5">

                            <h5 class="fw-bold ">Animal Welfare</h5>
                            <small class="card-text">Purchase with peace of mind with our Pets4Homes
                                Guarantee.</small>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 text-center mb-3 p-3" style="width: 100%;">
                    <div class="card-body card_icon">
                        <img src="./assets/images/supporticon2.png" alt="" class="img-fluid">
                        <div class="mt-5">

                            <h5 class="fw-bold ">Animal Welfare</h5>
                            <small class="card-text">Purchase with peace of mind with our Pets4Homes
                                Guarantee.</small>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container my-5">

        <div class="row g-4">
            <div class="container my-5 d-flex text-align-center justify-content-center">
                <h2><a href="" class="text-decoration-none text-black">Animal Welfare</a></h2>
            </div>
            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Breeding Licences and Breeder Directory</a></h4>
                <a href="">Breeding Licences on Pets4Homes</a><br>
                <a href="">The Pets4Homes Breeder Directory</a><br>
                <a href="">How do we enable compliance with licensing requirements?</a><br>
            </div>
            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Protecting Animal Welfare</a></h4>
                <a href="">Breeding Licences on Pets4Homes</a><br>
                <a href="">The Pets4Homes Breeder Directory</a><br>
                <a href="">How do we enable compliance with licensing requirements?</a><br>
            </div>
            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Information for Authorities</a></h4>
                <a href="">Puppy/Dog Checklist</a><br>
                <a href="">The Pets4Homes Breeder Directory</a><br>
                <a href="">How do we enable compliance with licensing requirements?</a><br>
            </div>
            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Pet Checklists - Before You Buy</a></h4>
                <a href="">Puppy/Dog Checklist</a><br>
                <a href="">Kitten/Cat Checklist</a><br>
                <a href="">Bird Checklist</a><br>
                <a href="">Fish Checklist</a><br>
                <a href="">Horse Checklist</a><br>
                <a href="" class="btn custom_btn text-white my-3">View All (10)</a>
            </div>

        </div>
    </div>
    <div class="container my-5">

        <div class="row g-4">
            <div class="container my-5 d-flex text-align-center justify-content-center">
                <h2><a href="" class="text-decoration-none text-black">Pet Payments</a></h2>
            </div>
            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Breeding Licences and Breeder Directory</a></h4>
                <a href="">Breeding Licences on Pets4Homes</a><br>
                <a href="">The Pets4Homes Breeder Directory</a><br>
                <a href="">How do we enable compliance with licensing requirements?</a><br>
            </div>
            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Protecting Animal Welfare</a></h4>
                <a href="">Breeding Licences on Pets4Homes</a><br>
                <a href="">The Pets4Homes Breeder Directory</a><br>
                <a href="">How do we enable compliance with licensing requirements?</a><br>
            </div>
            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Information for Authorities</a></h4>
                <a href="">Puppy/Dog Checklist</a><br>
                <a href="">The Pets4Homes Breeder Directory</a><br>
                <a href="">How do we enable compliance with licensing requirements?</a><br>
            </div>


        </div>
    </div>
    <div class="container my-5">

        <div class="row g-4">
            <div class="container my-5 d-flex text-align-center justify-content-center">
                <h2><a href="" class="text-decoration-none text-black">General Pets4Homes</a></h2>
            </div>
            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Breeding Licences and Breeder Directory</a></h4>
                <a href="">Breeding Licences on Pets4Homes</a><br>
                <a href="">The Pets4Homes Breeder Directory</a><br>
                <a href="">How do we enable compliance with licensing requirements?</a><br>
            </div>
            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Protecting Animal Welfare</a></h4>
                <a href="">Breeding Licences on Pets4Homes</a><br>
                <a href="">The Pets4Homes Breeder Directory</a><br>
                <a href="">How do we enable compliance with licensing requirements?</a><br>
                <a href="" class="btn custom_btn text-white my-3">View All (10)</a>
            </div>
            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Information for Authorities</a></h4>
                <a href="">Puppy/Dog Checklist</a><br>
                <a href="">The Pets4Homes Breeder Directory</a><br>
                <a href="">How do we enable compliance with licensing requirements?</a><br>
            </div>
            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Information for Authorities</a></h4>
                <a href="">Puppy/Dog Checklist</a><br>
                <a href="">The Pets4Homes Breeder Directory</a><br>
                <a href="">How do we enable compliance with licensing requirements?</a><br>
            </div>
            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Information for Authorities</a></h4>
                <a href="">Puppy/Dog Checklist</a><br>
                <a href="">The Pets4Homes Breeder Directory</a><br>
                <a href="">How do we enable compliance with licensing requirements?</a><br>
            </div>


        </div>
    </div>
    <div class="container my-5">

        <div class="row g-4">
            <div class="container my-5 d-flex text-align-center justify-content-center">
                <h2><a href="" class="text-decoration-none text-black">Trust and Safety</a></h2>
            </div>
            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Breeding Licences and Breeder Directory</a></h4>
                <a href="">Breeding Licences on Pets4Homes</a><br>
                <a href="">The Pets4Homes Breeder Directory</a><br>
                <a href="">How do we enable compliance with licensing requirements?</a><br>
            </div>


            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Information for Authorities</a></h4>
                <a href="">Puppy/Dog Checklist</a><br>
                <a href="">The Pets4Homes Breeder Directory</a><br>
                <a href="">How do we enable compliance with licensing requirements?</a><br>
            </div>
            <div class="col-md-4 support-checklists">
                <h4 class="my-3"><a href="">Information for Authorities</a></h4>
                <a href="">Puppy/Dog Checklist</a><br>
                <a href="">The Pets4Homes Breeder Directory</a><br>
                <a href="">How do we enable compliance with licensing requirements?</a><br>
            </div>


        </div>
    </div>






    <!--upper Footer -->
    <section class="footer-section bg-success">
        <!-- Slope above -->
        <div class="custom-shape-divider-top-1688468849">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
        <div class="container mt-5">
            <h1>Can't find what you are looking for?</h1>
            <h4 class="mt-5">Let us help you right now!</h3>
                <a href="" class="btn text-white mt-2 footer-btn">Submit a Ticket</a>
        </div>


    </section>

    <!-- Lower Footer -->
    <div class="row bg-success">
        <div class="col-12">
            <div class="container pb-5 d-flex justify-content-between align-items-center">
                <a href="index.php" class="text-decoration-none text-white">Return to Pets4Homes</a>
                <div>
                    <a href="" class="text-white"><i class="fa fa-facebook"></i></a>
                    <a href="" class="mx-3 text-white"><i class="fa fa-instagram"></i></a>

                </div>
            </div>
        </div>
    </div>


    <!-- Fixed Help Button -->
    <div class="fixed-help-button">

        <a href="" class="btn text-decoration-none bg-success text-white"> <i
                class="fa-regular fa-circle-question me-2"></i>Help</a>

    </div>



    <!-- required links -->
    <!-- owl caurosal cdn link for jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- owl caurosal cdn link for js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- owl caurosal file for custome jquery -->
    <script src="assets/js/app.js"></script>
    <!-- bootrsap cdn link for js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>



    <script src="assets/js/script.js"></script>



</body>

</html>
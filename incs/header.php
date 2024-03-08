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
    <nav class="navbar bg-body-tertiary fixed-top p-4 mb-5">
        <div class="container">

            <div class="row">
                <div class="col-auto d-flex">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <a class="navbar-brand mx-4 d-none d-md-block" href="#">
                        <img src="./assets/images/logo.svg" alt="" class="m-0">
                    </a>
                    <a class="navbar-brand mx-4 d-block d-md-none" href="#">
                        <img src="./assets/images/smallLogo.svg" alt="" class="m-0">
                    </a>

                </div>
            </div>


            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a href="index.php" class="text-decoration-none text-dark">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                            Pets4Homes
                        </h5>
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <h5>Pets</h5>
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">

                        <li class="nav-item d-flex justify-content-between align-items-center">
                            <span class="nav-link">Pets for sale</span>
                            <!--collapse icon trigger the custom JavaScript function -->
                            <a class="nav-link" id="expandItemsButton1">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                        <li class="nav-item d-flex justify-content-between align-items-center">
                            <span class="nav-link">Pets for adoption</span>
                            <!--collapse icon trigger the custom JavaScript function -->
                            <a class="nav-link" id="expandItemsButton2">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Pets for stud
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Wanted pets
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Breeders
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <h5>Accessories & Services</h5>
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">

                        <li class="nav-item d-flex justify-content-between align-items-center">
                            <span class="nav-link">Pets for sale</span>
                            <!--collapse icon trigger the custom JavaScript function -->
                            <a class="nav-link" id="expandItemsButton3">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                        <li class="nav-item d-flex justify-content-between align-items-center">
                            <span class="nav-link">Pets services offered</span>
                            <!--collapse icon trigger the custom JavaScript function -->
                            <a class="nav-link" id="expandItemsButton4">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <h5>Knowledge hub</h5>
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">

                        <li class="nav-item d-flex justify-content-between align-items-center">
                            <span class="nav-link">Pets articles & advice</span>
                            <!--collapse icon trigger the custom JavaScript function -->
                            <a class="nav-link" id="expandItemsButton5">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                        <li class="nav-item d-flex justify-content-between align-items-center">
                            <span class="nav-link">Breed directory</span>
                            <!--collapse icon trigger the custom JavaScript function -->
                            <a class="nav-link" id="expandItemsButton6">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <h5>Support</h5>
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">

                        <li class="nav-item ">

                            <!--collapse icon trigger the custom JavaScript function -->
                            <a class="nav-link" href="support.php">
                                Support & safety portal
                            </a>

                    </ul>


                </div>
            </div>

            <!--1 Create a separate offcanvas for nested items -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedItemsCanvas1"
                aria-labelledby="nestedItemsCanvasLabel">
                <div class="offcanvas-header">

                    <a data-bs-dismiss="offcanvas" class="text-success nav-link"> <i
                            class="fa-solid fa-chevron-left me-2"></i>Go Back</a>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <!-- Nested items go here -->
                    <h5>Pets for sale</h5>
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">

                        <li class="nav-item ">

                            <!--collapse icon trigger the custom JavaScript function -->
                            <a class="nav-link fw-bolder" href="Allpetsforsale.php">
                                All Pets for sale
                            </a>
                        </li>
                        <li class="nav-item d-flex justify-content-between align-items-center">
                            <span class="nav-link">Puppies for sale</span>
                            <!--collapse icon trigger the custom JavaScript function -->
                            <a class="nav-link" id="expandItemsButton7">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                        <li class="nav-item d-flex justify-content-between align-items-center">
                            <span class="nav-link">Kittens for sale</span>
                            <!--collapse icon trigger the custom JavaScript function -->
                            <a class="nav-link" id="expandItemsButton8">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                        <li class="nav-item d-flex justify-content-between align-items-center">
                            <span class="nav-link">Other pets for sale</span>
                            <!--collapse icon trigger the custom JavaScript function -->
                            <a class="nav-link" id="expandItemsButton9">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--2 Create a separate offcanvas for nested items -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedItemsCanvas2"
                aria-labelledby="nestedItemsCanvasLabel">
                <div class="offcanvas-header">

                    <a data-bs-dismiss="offcanvas" class="text-success nav-link"> <i
                            class="fa-solid fa-chevron-left me-2"></i>Go Back</a>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <!-- Nested items go here -->
                    <h5>Pets for adoption</h5>
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">

                        <li class="nav-item ">

                            <!--collapse icon trigger the custom JavaScript function -->
                            <a class="nav-link fw-bolder">
                                All Pets for adoption
                            </a>
                        </li>
                        <li class="nav-item ">

                            <!--collapse icon trigger the custom JavaScript function -->
                            <a class="nav-link ">
                                Dogs for adoption
                            </a>
                        </li>
                        <li class="nav-item ">

                            <!--collapse icon trigger the custom JavaScript function -->
                            <a class="nav-link ">
                                Cats for adoption
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
            <!--3 Create a separate offcanvas for nested items -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedItemsCanvas3"
                aria-labelledby="nestedItemsCanvasLabel">
                <div class="offcanvas-header">

                    <a data-bs-dismiss="offcanvas" class="text-success nav-link"> <i
                            class="fa-solid fa-chevron-left me-2"></i>Go Back</a>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <!-- Nested items go here -->
                    <h5>Pets accessories for sale</h5>
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">

                        <li class="nav-item ">


                            <a class="nav-link fw-bolder">
                                All Pets accessories for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Dogs accessories
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Cat accessories
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Reptile accessories
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Rabbit accessories
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Livestock accessories
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Poultry accessories
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Bird accessories
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Fish accessories
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Horse accessories
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Small Animal accessories
                            </a>
                        </li>



                    </ul>
                </div>
            </div>
            <!--4 Create a separate offcanvas for nested items -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedItemsCanvas4"
                aria-labelledby="nestedItemsCanvasLabel">
                <div class="offcanvas-header">

                    <a data-bs-dismiss="offcanvas" class="text-success nav-link"> <i
                            class="fa-solid fa-chevron-left me-2"></i>Go Back</a>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <!-- Nested items go here -->
                    <h5>Pets services offered</h5>
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">

                        <li class="nav-item ">


                            <a class="nav-link fw-bolder">
                                All Pets services offered
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Animal Jobs
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Holiday for pets
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Boarding
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Day Care
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Dog Walking
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Grooming / Care
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Horse Share
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Pasture
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Riding Holidays
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Other Services
                            </a>
                        </li>



                    </ul>
                </div>
            </div>
            <!--5 Create a separate offcanvas for nested items -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedItemsCanvas5"
                aria-labelledby="nestedItemsCanvasLabel">
                <div class="offcanvas-header">

                    <a data-bs-dismiss="offcanvas" class="text-success nav-link"> <i
                            class="fa-solid fa-chevron-left me-2"></i>Go Back</a>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <!-- Nested items go here -->
                    <h5>Pet articles & advice</h5>
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">

                        <li class="nav-item ">


                            <a class="nav-link fw-bolder" href="Allarticles.php">
                                All Articles
                            </a>
                        </li>
                        <h5>By Pet</h5>
                        <li class="nav-item ">


                            <a class="nav-link " href="birds.php">
                                Birds
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Cats
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Dogs
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Fish
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Horses
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Invertebrates
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Livestock
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Poultry
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Rabbits
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Reptiles
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Rodents
                            </a>
                        </li>



                    </ul>
                    <hr>
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">



                        <h5>By Topic</h5>
                        <li class="nav-item ">
                            <a class="nav-link ">
                                Breeding
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Industry Report
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--6 Create a separate offcanvas for nested items -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedItemsCanvas6"
                aria-labelledby="nestedItemsCanvasLabel">
                <div class="offcanvas-header">

                    <a data-bs-dismiss="offcanvas" class="text-success nav-link"> <i
                            class="fa-solid fa-chevron-left me-2"></i>Go Back</a>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <!-- Nested items go here -->
                    <h5>Breed directory</h5>
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">




                        <li class="nav-item ">
                            <a class="nav-link " href="dog_breeds.php">
                                Dog Breed
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Cat Breed
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Rabbit Breed
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--7 Create a separate offcanvas for nested items -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedItemsCanvas7"
                aria-labelledby="nestedItemsCanvasLabel">
                <div class="offcanvas-header">

                    <a data-bs-dismiss="offcanvas" class="text-success nav-link"> <i
                            class="fa-solid fa-chevron-left me-2"></i>Go Back</a>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <!-- Nested items go here -->
                    <h5>Most popular puppies for sale</h5>
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">

                        <li class="nav-item ">


                            <a href="Allpuppiesforsale.php" class="nav-link fw-bolder">
                                All puppies for sale
                            </a>
                        </li>

                        <li class="nav-item ">


                            <a href="akitaforsale.php" class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                American Bulldog for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                American Bulley for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Beagle for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>



                    </ul>
                </div>
            </div>
            <!--8 Create a separate offcanvas for nested items -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedItemsCanvas8"
                aria-labelledby="nestedItemsCanvasLabel">
                <div class="offcanvas-header">

                    <a data-bs-dismiss="offcanvas" class="text-success nav-link"> <i
                            class="fa-solid fa-chevron-left me-2"></i>Go Back</a>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <!-- Nested items go here -->
                    <h5>Most popular kittens for</h5>
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">

                        <li class="nav-item ">


                            <a class="nav-link fw-bolder">
                                All kittens for sale
                            </a>
                        </li>

                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                American Bulldog for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                American Bulley for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Beagle for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>



                    </ul>
                </div>
            </div>
            <!--9 Create a separate offcanvas for nested items -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="nestedItemsCanvas9"
                aria-labelledby="nestedItemsCanvasLabel">
                <div class="offcanvas-header">

                    <a data-bs-dismiss="offcanvas" class="text-success nav-link"> <i
                            class="fa-solid fa-chevron-left me-2"></i>Go Back</a>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <!-- Nested items go here -->
                    <h5>Other pets for sale</h5>
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">



                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                American Bulldog for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                American Bulley for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Beagle for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link ">
                                Akita for sale
                            </a>
                        </li>



                    </ul>
                </div>
            </div>


            <!-- Navbar right side -->
            <div class="col-auto d-flex justify-content-center align-items-center">
                <div>
                    <i class="fa fa-search fs-5 mx-4 d-md-none d-block"></i>
                </div>

                <div>
                    <i class="fa-regular fa-envelope fs-md-3 fs-2"></i>
                </div>
                <div class="dropdown mx-4 d-flex justify-content-center align-items-center ">
                    <div class=" mx-md-2" type="button" id="userDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="user-icon"> <i class="fa-solid fa-user"></i></div>
                    </div>

                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                    <!-- Down Arrow Icon -->
                    <i class="fas fa-chevron-down ml-2  d-none d-md-block" data-bs-toggle="dropdown"
                        aria-expanded="false"></i>
                </div>

                <a href="" type="submit" class="btn custom_btn rounded-pill d-none d-md-block text-white px-3"> <i
                        class="fa fa-plus mx-2"></i>New
                    Advert</a>
                <a href="" type="submit" class="btn custom_btn rounded-pill d-block d-md-none text-white"> <i
                        class="fa fa-plus mx-2"></i></a>
            </div>
        </div>

    </nav>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Include Bootstrap JS (for tab toggling) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        
        <style>
            .build-container {
                padding: 100px 0;
                background-color: #f6f6f6;
            }
            .build-title-container {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0 20px;
            }
            .build-title {
                font-size: 32px;
                font-weight: bold;
                text-align: left;
            }
            .build-cards-container {
                display: flex;
                justify-content: center;
                gap: 20px;
                flex-wrap: wrap;
                padding: 0 20px;
            }
            .build-card {
                background-color: white;
                border-radius: 10px;
                padding: 30px;
                width: 230px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                text-align: center;
                transition: all 0.3s ease-in-out;
            }
            .build-card:hover {
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
                transform: translateY(-5px);
            }
            .icon-container {
                margin-bottom: 20px;
            }
            .build-card i {
                font-size: 40px;
                color: #6c757d;
            }
            .build-card h3 {
                font-size: 20px;
                font-weight: 600;
                color: #333;
                margin-bottom: 10px;
            }
            .build-card p {
                font-size: 14px;
                color: #777;
            }
            .btn-outline-dark {
                margin-top: 20px;
            }
            .btn-container {
                margin-top: 20px;
                text-align: right;
                padding-right: 20px;
            }
            /* Ensure proper responsiveness on smaller screens */
            @media (max-width: 768px) {
                .build-cards-container {
                    grid-template-columns: repeat(2, 1fr);
                }
            }
            @media (max-width: 480px) {
                .build-cards-container {
                    grid-template-columns: 1fr;
                }
            }
        </style>

        <title>Mazda Service and Dealer</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .custom-card-container {
                display: flex;
                justify-content: center;
                gap: 20px;
                margin-top: 60px;
            }

            .custom-card {
                background-color: white;
                border-radius: 10px;
                width: 300px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                text-align: center;
                transition: all 0.3s ease-in-out;
            }

            .custom-card:hover {
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
                transform: translateY(-5px);
            }

            .custom-card img {
                width: 100%;
                height: 200px;
                object-fit: cover;
                border-radius: 10px 10px 0 0;
            }

            .custom-card h3 {
                font-size: 24px;
                margin-top: 20px;
                font-weight: 600;
            }

            .custom-card p {
                font-size: 14px;
                color: #777;
                margin-bottom: 20px;
            }

            .btn-outline-dark {
                margin-bottom: 20px;
            }

            .plus-button {
                position: fixed;
                bottom: 20px;
                right: 20px;
                background-color: #d32f2f;
                color: white;
                border-radius: 50%;
                padding: 20px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                font-size: 22px;
                cursor: pointer;
            }

            .plus-button:hover {
                background-color: #c62828;
            }
        </style>


    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <!-- Logo on the left -->
                <a class="navbar-brand" href="#page-top">
                    <img src="img/ML-Logo_Monochrome_Vertical_cs5 1 (1).png" alt="Logo" style="width: 80px; height: auto;">
                </a>
                <!-- Toggler for mobile view -->
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <svg class="svg-inline--fa fa-bars" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path>
                    </svg>
                </button>
                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Vehicle">Vehicle</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Autoexe">Autoexe</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#ShoppingTools">Shopping Tools</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#WhyMazda">Why Mazda</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Corporate">Corporate</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#ForOwner">For Owner</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#ContactUs">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead bg-primary text-white text-center" style="background-image: url('img/bg_mobil.jpg'); background-size: cover; background-position: center; height: 100vh;">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="container d-flex align-items-center flex-column" style="height: 100%;">
                <!-- Discover More Button -->
                <a href="/product/mazda-cx-80/" class="btn btn-outline-light btn-lg mt-4">DISCOVER MORE</a>
            </div>
        </header>
        
        <div id="range-category" class="container-fluid pt-4">
            <div class="row">
                <div class="col-12 ps-5 pe-5">
                    <h2 class="mazdaBlack pt-3 pb-3">EXPLORE THE RANGE</h2>
                    <div id="range-category-selector">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item p-1 rounded" role="presentation">
                                <button class="nav-link active" id="SUV-tab" data-bs-toggle="tab" data-bs-target="#SUV" type="button" role="tab" aria-controls="SUV" aria-selected="true">SUV</button>
                            </li>
                            <!-- Other tabs like Hatchback, Sedan, Estate, Roadster, Electrified -->
                            <li class="nav-item p-1 rounded" role="presentation">
                                <button class="nav-link" id="Hatchback-tab" data-bs-toggle="tab" data-bs-target="#Hatchback" type="button" role="tab" aria-controls="Hatchback" aria-selected="false">Hatchback</button>
                            </li>
                            <li class="nav-item p-1 rounded" role="presentation">
                                <button class="nav-link" id="sedan-tab" data-bs-toggle="tab" data-bs-target="#sedan" type="button" role="tab" aria-controls="sedan" aria-selected="false">Sedan</button>
                            </li>
                            <li class="nav-item p-1 rounded" role="presentation">
                                <button class="nav-link" id="Estate-tab" data-bs-toggle="tab" data-bs-target="#Estate" type="button" role="tab" aria-controls="Estate" aria-selected="false">Estate</button>
                            </li>
                            <li class="nav-item p-1 rounded" role="presentation">
                                <button class="nav-link" id="Roadster-tab" data-bs-toggle="tab" data-bs-target="#Roadster" type="button" role="tab" aria-controls="Roadster" aria-selected="false">Roadster</button>
                            </li>
                            <li class="nav-item p-1 rounded" role="presentation">
                                <button class="nav-link" id="Electrified-tab" data-bs-toggle="tab" data-bs-target="#Electrified" type="button" role="tab" aria-controls="Electrified" aria-selected="false">Electrified</button>
                            </li>
                        </ul>
                    </div>
                </div>
        
                <div class="col-12 ps-0 pe-0">
                    <div class="categorywrapper pb-5 ps-5">
                        <div class="tab-content" id="myTabContent">
                            <!-- SUV Tab Content -->
                            <div class="tab-pane fade show active" id="SUV" role="tabpanel" aria-labelledby="SUV-tab">
    <div class="d-flex overflow-auto">
        <div class="range-box" name="MAZDA CX-3">
            <img src="img/770x420-mazda-cx-3-pro-min.png" alt="MAZDA CX-3">
            <h3 class="text-uppercase">MAZDA CX-3</h3>
            <span class="rangeTitle mazdaGrey">SUV</span>
            <span class="rangePrice mb-3">Rp403,300,000</span>
            <a href="/product/mazda-cx-3/" class="btn btn-outline-dark">EXPLORE</a>
        </div>

        <div class="range-box" name="MAZDA CX-30">
            <img src="img/770x420-mazda-cx-30-min.png" alt="MAZDA CX-30">
            <h3 class="text-uppercase">MAZDA CX-30</h3>
            <span class="rangeTitle mazdaGrey">SUV</span>
            <span class="rangePrice mb-3">Rp585,500,000</span>
            <a href="/product/mazda-cx-30/" class="btn btn-outline-dark">EXPLORE</a>
        </div>

        <div class="range-box" name="MAZDA CX-5">
            <img src="img/770x420-mazda-cx-5-elite-min.png" alt="MAZDA CX-5">
            <h3 class="text-uppercase">MAZDA CX-5</h3>
            <span class="rangeTitle mazdaGrey">SUV</span>
            <span class="rangePrice mb-3">Rp647,700,000</span>
            <a href="/product/mazda-cx-5/" class="btn btn-outline-dark">EXPLORE</a>
        </div>

        <div class="range-box" name="MAZDA CX-8">
            <img src="img/770x420-mazda-cx-8-min.png" alt="MAZDA CX-8">
            <h3 class="text-uppercase">MAZDA CX-8</h3>
            <span class="rangeTitle mazdaGrey">SUV</span>
            <span class="rangePrice mb-3">Rp828,800,000</span>
            <a href="/product/mazda-cx-8/" class="btn btn-outline-dark">EXPLORE</a>
        </div>

        <div class="range-box" name="MAZDA CX-9">
            <img src="img/770x420-mazda-cx-9-min.png" alt="MAZDA CX-9">
            <h3 class="text-uppercase">MAZDA CX-9</h3>
            <span class="rangeTitle mazdaGrey">SUV</span>
            <span class="rangePrice mb-3">Rp955,500,000</span>
            <a href="/product/mazda-cx-9/" class="btn btn-outline-dark">EXPLORE</a>
        </div>

        <div class="range-box" name="MAZDA CX-60">
            <img src="img/770x420-mazda-cx-60-kuro-min.png" alt="MAZDA CX-60">
            <h3 class="text-uppercase">MAZDA CX-60</h3>
            <span class="rangeTitle mazdaGrey">SUV</span>
            <span class="rangePrice mb-3">Rp1,188,800,000</span>
            <a href="/product/mazda-cx-60/" class="btn btn-outline-dark">EXPLORE</a>
        </div>

                            <!-- Hatchback Tab Content -->
                            <div class="tab-pane fade" id="Hatchback" role="tabpanel" aria-labelledby="Hatchback-tab">
                                <div class="d-flex overflow-auto">
                                    <div class="range-box" name="MAZDA2 HATCHBACK">
                                        <img src="img/hatchback1.png" alt="MAZDA2 HATCHBACK">
                                        <h3 class="text-uppercase">MAZDA2 HATCHBACK</h3>
                                        <span class="rangeTitle mazdaGrey">Hatchback</span>
                                        <span class="rangePrice mb-3">Rp371,100,000</span>
                                        <a href="/product/mazda2-hatchback/" class="btn btn-outline-dark">EXPLORE</a>
                                    </div>
                                    <!-- Add more Hatchback cars here -->
                                    <div class="range-box" name="MAZDA CX-30">
                                        <img src="img/770x420-mazda-cx-30-min.png" alt="MAZDA CX-30">
                                        <h3 class="text-uppercase">MAZDA CX-30</h3>
                                        <span class="rangeTitle mazdaGrey">SUV</span>
                                        <span class="rangePrice mb-3">Rp585,500,000</span>
                                        <a href="/product/mazda-cx-30/" class="btn btn-outline-dark">EXPLORE</a>
                                    </div>
        
                                    <div class="range-box" name="MAZDA CX-5">
                                        <img src="img/770x420-mazda-cx-5-elite-min.png" alt="MAZDA CX-5">
                                        <h3 class="text-uppercase">MAZDA CX-5</h3>
                                        <span class="rangeTitle mazdaGrey">SUV</span>
                                        <span class="rangePrice mb-3">Rp647,700,000</span>
                                        <a href="/product/mazda-cx-5/" class="btn btn-outline-dark">EXPLORE</a>
                                    </div>
        
                                    <div class="range-box" name="MAZDA CX-8">
                                        <img src="img/770x420-mazda-cx-8-min.png" alt="MAZDA CX-8">
                                        <h3 class="text-uppercase">MAZDA CX-8</h3>
                                        <span class="rangeTitle mazdaGrey">SUV</span>
                                        <span class="rangePrice mb-3">Rp828,800,000</span>
                                        <a href="/product/mazda-cx-8/" class="btn btn-outline-dark">EXPLORE</a>
                                    </div>
                                    
                                    <div class="range-box" name="MAZDA CX-9">
                                        <img src="img/770x420-mazda-cx-9-min.png" alt="MAZDA CX-9">
                                        <h3 class="text-uppercase">MAZDA CX-8</h3>
                                        <span class="rangeTitle mazdaGrey">SUV</span>
                                        <span class="rangePrice mb-3">Rp955,500,000</span>
                                        <a href="/product/mazda-cx-8/" class="btn btn-outline-dark">EXPLORE</a>
                                    
                                    </div>
                                    <div class="range-box" name="MAZDA CX-60">
                                        <img src="img/770x420-mazda-cx-60-kuro-min.png" alt="MAZDA CX-60">
                                        <h3 class="text-uppercase">MAZDA CX-8</h3>
                                        <span class="rangeTitle mazdaGrey">SUV</span>
                                        <span class="rangePrice mb-3">Rp1,188,800,000</span>
                                        <a href="/product/mazda-cx-8/" class="btn btn-outline-dark">EXPLORE</a>
                                    </div>
                                </div>
                            </div>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="build-your-mazda" class="build-container">
            <div class="build-title-container">
                <h2 class="build-title">LET'S BUILD YOUR MAZDA UNIQUELY FOR YOU</h2>
                <a href="#" class="btn btn-outline-dark">Build Your Mazda →</a>
            </div>
        
            <div class="build-cards-container">
                <!-- Card 1: Grade -->
                <div class="build-card">
                    <div class="icon-container">
                        <img src="img/vector-engine.png" alt="Grade Icon">
                    </div>
                    <h3>GRADE</h3>
                    <p>Performance and key features</p>
                </div>
        
                <!-- Card 2: Visual -->
                <div class="build-card">
                    <div class="icon-container">
                        <img src="img/Vector-car.png" alt="Visual Icon">
                    </div>
                    <h3>VISUAL</h3>
                    <p>Look and feel</p>
                </div>
        
                <!-- Card 3: Accessories -->
                <div class="build-card">
                    <div class="icon-container">
                        <img src="img/vector-wheel.png" alt="Accessories Icon">
                    </div>
                    <h3>ACCESSORIES</h3>
                    <p>Perfection into detail</p>
                </div>
        
                <!-- Card 4: Summary -->
                <div class="build-card">
                    <div class="icon-container">
                        <img src="img/icon-summary-grey.png" alt="Summary Icon">
                    </div>
                    <h3>SUMMARY</h3>
                    <p>Get your Mazda</p>
                </div>
            </div>
        </section>

        <div class="card-wrapper" style="display: flex; justify-content: space-between; gap: 20px; flex-wrap: wrap;">
            <!-- Card 1: View Dealer -->
            <div class="custom-card" style="flex: 1 1 45%; height: auto; padding: 15px; box-sizing: border-box;">
                <img src="img/mobilkado.jpg" alt="View Dealer" style="width: 100%; height: auto;">
                <h3>VIEW DEALER</h3>
                <p>Discover your nearest official dealer</p>
                <a href="#" class="btn btn-outline-dark">FIND A DEALER</a>
            </div>
            
            <!-- Card 2: For Mazda Owner -->
            <div class="custom-card" style="flex: 1 1 45%; height: auto; padding: 15px; box-sizing: border-box;">
                <img src="img/kunci.png" alt="For Mazda Owner" style="width: 100%; height: auto;">
                <h3>FOR MAZDA OWNER</h3>
                <p>We're here to assist you</p>
                <a href="#" class="btn btn-outline-dark">BOOK A SERVICE</a>
            </div>
        </div>
        
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact US</h2>
        
                <!-- Contact Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- First Name input-->
                            <div class="form-floating mb-3">
                            <input class="form-control" id="firstName" type="text" placeholder="Enter your first name..." pattern="[A-Za-z]+" title="Only letters are allowed" required>
                            <label for="firstName">First Name</label>
                            </div>

                            <!-- Last Name input-->
                            <div class="form-floating mb-3">
                            <input class="form-control" id="lastName" type="text" placeholder="Enter your last name..." pattern="[A-Za-z]+" title="Only letters are allowed" required>
                            <label for="lastName">Last Name</label>
                            </div>

        
                            <!-- Phone input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" required>
                                <label for="phone">Phone</label>
                            </div>
        
                            <!-- Email input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" required>
                                <label for="email">Email Address</label>
                            </div>
        
                            <!-- Preferred Contact Method -->
                            <div class="form-group mb-3">
                                <label for="preferredContact">Preferred Contact</label><br>
                                <input type="radio" id="phoneRadio" name="preferredContact" value="Phone" required> Phone
                                <input type="radio" id="emailRadio" name="preferredContact" value="Email"> Email
                            </div>
        
                            <!-- VIN input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="vin" type="text" placeholder="Enter VIN..." required>
                                <label for="vin">VIN</label>
                            </div>
        
                            <!-- Subject input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="subject" type="text" placeholder="Enter subject..." required>
                                <label for="subject">Subject</label>
                            </div>
        
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                                <label for="message">Message</label>
                            </div>
        
                            <!-- Checkbox inputs for consent-->
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="consent1" required>
                                <label class="form-check-label" for="consent1">
                                    I acknowledge that Mazda or Mazda Dealers may send me further information about Mazda products or services.
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="consent2" required>
                                <label class="form-check-label" for="consent2">
                                    I have read and agree to Mazda’s Indonesia Privacy Policy.
                                </label>
                            </div>
        
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>

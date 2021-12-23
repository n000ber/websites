<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css" />
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/21d5dda1bb.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    </script>

    <title>乐 Aircon Repairs</title>
</head>

<body>
    <?php include "nav.php" ?>
    <div class="jumbotron jumbotron-fluid">
        <h1>乐 Aircon Repairs & Cleaning</h1>
        <p class="lead">Providing top-notch services since 2001</p>
    </div>
    <main>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container"><img class="d-block w-100" src="images/carousel2.jpeg" alt="First slide">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <p>Over 20 years of experience 🙌</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container"><img class="d-block w-100" src="images/carousel1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <p>Highly skilled 🛠</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container"><img class="d-block w-100" src="images/carousel3.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <p>Follows Covid-19 Safe-Management protocols 😷</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <section id="services">
            <div class="jumbotron jumbotron-fluid">
                <h2 class="h1">Services</h2>
                <p class="lead">Competitive pricing that's hard to beat!💪</p>

                <div class="card-group container" id="card_size">
                    <div class="card">
                        <img class="card-img-top" src="images/general.jpg" alt="General Servicing">
                        <div class="card-body">
                            <h5 class="card-title">General Servicing</h5>
                            <p class="card-text">Servicing every 6 months will prolong the lifespan of the aircon!😁</p>
                            <p class="card-text">
                            <ul>
                                <div class=checkboxes-center>
                                    <li><i class="fas fa-check-square"></i> Comprehensive pipes cleaning 🧼</li>
                                    <li><i class="fas fa-check-square"></i> Aircon health check 🩺</li>
                                    <li><i class="fas fa-check-square"></i> 30 days warranty 😌</li>
                                </div>
                            </ul>
                            </p>
                            <p>$99 for 3 units!</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="images/chemicalwash.jpg" alt="Chemical Wash">
                        <div class="card-body">
                            <h5 class="card-title">Chemical Wash</h5>
                            <p class="card-text">Using industral grade chemicals to wash off stubborn dust, stains and
                                grease!🤮</p>
                            <ul>
                                <div class=checkboxes-center>
                                    <li><i class="fas fa-check-square"></i> Comprehensive chemical pipes clean 🧼</li>
                                    <li><i class="fas fa-check-square"></i> Aircon health check 🩺</li>
                                    <li><i class="fas fa-check-square"></i> 90 days warranty 😌</li>
                                </div>
                            </ul>
                            </p>
                            <p>$199 for 3 units!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="why_us">
            <div class="jumbotron jumbotron-fluid">
                <h2 class="h1">Why Us?</h2>

                <div class="container">
                    <p class="lead">We provide the best service at an affordable price!</p>



                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators" style="padding: 40px;">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <h3 class="card_para">"10/10. The services provided were really the best!"<br><span
                                        style="font-style:normal;">Michael Ho, Long-time customer</span></h3>
                            </div>
                            <div class="carousel-item">
                                <h3 class="card_para">"The 30 days warranty provided me with an ease of mind! "<br><span
                                        style="font-style:normal;">Melvin Chen, new customer</span>
                                </h3>
                            </div>
                            <div class="carousel-item">
                                <h3 class="card_para">"They fixed my spolit aircon with 15 minutes! Very
                                    efficient!!"<br><span style="font-style:normal;">Crystal Lim, new customer</span>
                                </h3>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" id="left-arrow" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" id="right-arrow" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="jumbotron jumbotron-fluid">

                <h2 class="h1">Contact</h2>
                <div class="container">
                    <p class="lead">Whatsapp or call us for an appointment!</p>
                    <p class="lead">Whatsapp us at 8437 4358 <a href="
https://wa.link/8uyyas"> <i class="fab fa-whatsapp"></i>
                        </a>
                    </p>
                    <p class="lead">Call us at 6837 4325 <a href="tel:6837-4325"> <i class="fas fa-phone-alt"></i></a>
                    </p>
                </div>
            </div>
        </section>
        <?php include "footer.php"; ?>
    </main>
</body>

</html>
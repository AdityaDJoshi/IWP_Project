<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <?php session_start(); ?>
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="AfterLoggeinHome.php">
                <img src="https://www.publicdomainpictures.net/pictures/200000/nahled/unicorn-icon.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                Unicorn Hotels</a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="AfterLoggeinHome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="AfterAbutus.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tourism.php">Tourist spots</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="invoice.php">Invoice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AfterRooms.php">Rooms & Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AfterRestnt.php">Restaurant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="background-color: white; margin-left:15px; color: black;"><img style="background-color: white;" src="https://img.icons8.com/ios/40/000000/user--v3.png" /><?php echo $_SESSION['userName']; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main">
        <h1 style="text-align: center; ">About Us</h1>
        <hr style="width:50%; margin: auto;" />
        <br>

        <div class="main-content">
            <p style="width:50%; margin: auto;">
                We believe in delivering the best quality and service to our customers. We have been awarded the best
                hotel of india award three times in the past. This and the satisfaction of our customers
            </p>
        </div>
    </div>
    <br><br>

    <img class="a" src="https://news.gtp.gr/wp-content/uploads/2018/11/World-Luxury-Awards-logo.jpg" width="15%" alt="" style="object-fit: cover;">
    <img class="b" src="https://images.squarespace-cdn.com/content/v1/592c1a183e00be0c6ceb3dcb/1593510784782-7B6T1UGAD179E5QDWRDT/2019+World+Luxury+Hotel+Awards.jpg?format=500w" alt="" width="15%">
    <img class="c" src="https://thedynastyvillas.com/wp-content/uploads/2020/10/2020-Hotel-Awards-Winner-logo.jpg" alt="" width="15%">
    <div class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel test-slides" id="testimonial-carousel">
                        <div class="item">
                            <div class="single-testimonial">
                                <div class="img-area"><img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
                                </div>
                                <div class="testi-text">
                                    <h4>Aditya Joshi<span>VIP member for 2.5 years</span></h4>
                                    <p>Best hotel locations and best sights, visit every year! Keeps surprising
                                        everytime</p><br>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-testimonial">
                                <div class="img-area"><img class="card-img-top" src="https://images.pexels.com/photos/1861594/pexels-photo-1861594.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                                </div>
                                <div class="testi-text">
                                    <h4>Yogendra Joshi<span>VIP customer for 3 years</span></h4>
                                    <p>Just love to keep coming again and again! Incredible service
                                        and value for money! </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-testimonial">
                                <div class="img-area"><img class="card-img-top" src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301" alt="">
                                </div>
                                <div class="testi-text">
                                    <h4>Rajashree Jha<span>Web Developer</span></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam voluptas ratione
                                        autem, ab veniam vel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-testimonial">
                                <div class="img-area"><img class="card-img-top" src="https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302" alt="">
                                </div>
                                <div class="testi-text">
                                    <h4>Haley J<span>Web Developer</span></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam voluptas ratione
                                        autem, ab veniam vel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-testimonial">
                                <div class="img-area"><img class="card-img-top" src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303" alt="">
                                </div>
                                <div class="testi-text">
                                    <h4>Erika Johnson<span>Web Developer</span></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam voluptas ratione
                                        autem, ab veniam vel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-testimonial">
                                <div class="img-area"><img class="card-img-top" src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=304" alt="">
                                </div>
                                <div class="testi-text">
                                    <h4>Erika Johnson<span>Web Developer</span></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam voluptas ratione
                                        autem, ab veniam vel.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $('#testimonial-carousel').owlCarousel({
            autoplay: true,
            loop: true,
            dots: false,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
</body>

</html>
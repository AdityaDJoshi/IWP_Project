<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="rooms.css">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script>
        (function() {

            window.inputNumber = function(el) {

                var min = el.attr('min') || false;
                var max = el.attr('max') || false;

                var els = {};

                els.dec = el.prev();
                els.inc = el.next();

                el.each(function() {
                    init($(this));
                });

                function init(el) {

                    els.dec.on('click', decrement);
                    els.inc.on('click', increment);

                    function decrement() {
                        var value = el[0].value;
                        value--;
                        if (!min || value >= min) {
                            el[0].value = value;
                        }
                    }

                    function increment() {
                        var value = el[0].value;
                        value++;
                        if (!max || value <= max) {
                            el[0].value = value++;
                        }
                    }
                }
            }
        })();

        inputNumber($('.input-number'));
    </script>
</head>

<body>
    <!-- ======= Menu Section ======= -->
    <form method="get" action="menu2db.php">
        <section id="menu" class="menu">
            <div class="container">

                <div class="section-title">
                    <h2>Check our tasty <span>Menu</span></h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li data-filter="*" class="filter-active">Show All</li>
                            <li data-filter=".filter-starters">Starters</li>
                            <li data-filter=".filter-salads">Salads</li>
                            <li data-filter=".filter-specialty">Specialty</li>
                        </ul>
                    </div>
                </div>

                <div class="row menu-container">

                    <div class="col-lg-6 menu-item filter-starters">
                        <div class="menu-content">
                            <a href="#">Lobster Bisque</a><span>$5.95</span><input id="food1" style="width: 80px;vertical-align: top;text-align: center;outline: none;border: 1px solid #ccc;height: 40px; z-index: 10; " type="number" value="1" min="0" max="10">
                        </div>
                        <div class="menu-ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <div class="menu-content">
                            <a href="#">Bread barrel</a><span>$6.95</span><input id="food2" style="width: 80px;vertical-align: top;text-align: center;outline: none;border: 1px solid #ccc;height: 40px; z-index: 10; " type="number" value="1" min="0" max="10">
                        </div>
                        <div class="menu-ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <div class="menu-content">
                            <a href="#">Crab Cake</a><span>$7.95</span><input id="food3" style="width: 80px;vertical-align: top;text-align: center;outline: none;border: 1px solid #ccc;height: 40px; z-index: 10; " type="number" value="1" min="0" max="10">
                        </div>
                        <div class="menu-ingredients">
                            A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <div class="menu-content">
                            <a href="#">Caesar Selections</a><span>$8.95</span><input id="food4" style="width: 80px;vertical-align: top;text-align: center;outline: none;border: 1px solid #ccc;height: 40px; z-index: 10; " type="number" value="1" min="0" max="10">
                        </div>
                        <div class="menu-ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <div class="menu-content">
                            <a href="#">Tuscan Grilled</a><span>$9.95</span><input id="food5" style="width: 80px;vertical-align: top;text-align: center;outline: none;border: 1px solid #ccc;height: 40px; z-index: 10; " type="number" value="1" min="0" max="10">
                        </div>
                        <div class="menu-ingredients">
                            Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <div class="menu-content">
                            <a href="#">Mozzarella Stick</a><span>$4.95</span><input id="food6" style="width: 80px;vertical-align: top;text-align: center;outline: none;border: 1px solid #ccc;height: 40px; z-index: 10; " type="number" value="1" min="0" max="10">
                        </div>
                        <div class="menu-ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <div class="menu-content">
                            <a href="#">Greek Salad</a><span>$9.95</span><input id="food7" style="width: 80px;vertical-align: top;text-align: center;outline: none;border: 1px solid #ccc;height: 40px; z-index: 10; " type="number" value="1" min="0" max="10">
                        </div>
                        <div class="menu-ingredients">
                            Fresh spinach, crisp romaine, tomatoes, and Greek olives
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <div class="menu-content">
                            <a href="#">Spinach Salad</a><span>$9.95</span><input id="food8" style="width: 80px;vertical-align: top;text-align: center;outline: none;border: 1px solid #ccc;height: 40px; z-index: 10; " type="number" value="1" min="0" max="10">
                        </div>
                        <div class="menu-ingredients">
                            Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <div class="menu-content">
                            <a href="#">Lobster Roll</a><span>$12.95</span><input id="food9" style="width: 80px;vertical-align: top;text-align: center;outline: none;border: 1px solid #ccc;height: 40px; z-index: 10; " type="number" value="1" min="0" max="10">
                        </div>
                        <div class="menu-ingredients">
                            Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                        </div>
                    </div>

                </div>
                <input type="submit" id="buynow" value="Buy now" style="text-align: center;border-radius: 50px;color: #fff;background: #ffb03b; margin: 0 auto 0 50%;">
            </div>
        </section><!-- End Menu Section -->
    </form>
</body>

</html>
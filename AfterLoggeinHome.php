<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php session_start() ?>
  <meta charset="utf-8">
  <title>Home page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style1.css">
  <script>
    function fun() {
      document.getElementById("signout").submit();
    }
  </script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="hotelhome.html">
        <img src="https://www.publicdomainpictures.net/pictures/200000/nahled/unicorn-icon.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        Unicorn Hotels</a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="nav-ul">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="hotelhome.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="AfterAbutus.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="touristspots.html">Tourist spots</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="features.html">Invoice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="AfterRooms.php">Rooms & Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="AfterRestnt.php">Restaurant</a>
          </li>
          <li class="nav-item" id="nav-li">
            <a id="nav-a" class="nav-link" href="#" style="background-color: white; margin-left:15px; color: black;"><img style="background-color: white;" src="https://img.icons8.com/ios/40/000000/user--v3.png" /><?php echo $_SESSION['userName']; ?></a>
            <ul id="nav-ul" class="dropdown">

              <li id="nav-li">
                <form id="signout" action="logout.php" method="post">
                  <a id="nav-a" href="#" onclick="fun()">Logout</a>
                </form>
              </li>
              <li id="nav-li"><a id="nav-a" href="#">Update</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="">
    <table>
      <tr class="r1">
        <td class="cell1">
          <img style="display:block;" width="100%" height="100%" src="https://media.istockphoto.com/photos/hotel-room-suite-with-view-picture-id627892060?k=20&m=627892060&s=612x612&w=0&h=k6QY-qWNlFbvYhas82e_MoSXceozjrhhgp-krujsoDw=" alt="">
        </td>
        <td class="cell2">
          <h1 class="r1h">Welcome to the Unicorn Hotels</h1>
          <h4 class="r1h">Unicron Hotel offers ultimate comfort and luxury. This 4-storied hotel is a beautiful
            combination of traditional grandeur and modern facilities. The 255 exclusive guest rooms are furnished with
            a range of modern amenities
            such as
            television and internet access. International direct-dial phone and safe are also available in any of these
            rooms. Wake-up call facility is also available in these rooms.</h4>
        </td>
      </tr>
      <tr>
        <td class="cell1">
          <h1>World Class Amenities</h1>
          <h4>Planning to grab some groceries? A room fridge makes for a great addition.
            When you know there will be downtime in your room, it's nice to know that an HD TV is there for your
            entertainment.
            Got some business to take care of? You'll probably need access to WiFi.
            And if you don't want to bring your own hairdryer, make sure your hotel has you covered.
            Planning to dress up? Hope your clothes didn't get wrinkled. Otherwise, you'll need an in-room iron.
            There's not a lot of grace for those of us with allergies. But some hotels do provide hypoallergenic
            bedding.</h4>
        </td>
        <td class="cell2">
          <img style="display:block;" width="100%" height="100%" src="https://hotellimamarbella.com/wp-content/uploads/2016/12/amenities-hotel-lima.jpg" alt="">
        </td>
      </tr>
    </table>
  </div>

  <div class="log">
    <img src="https://www.publicdomainpictures.net/pictures/200000/nahled/unicorn-icon.jpg" width="170" height="170" style="padding:2rem;" />
    <h1>Already a Registered member of our hotel? Sign in to make another Booking!!!</h1>
    <h3>New User? You are most welcome to Register as a customer and enjoy our Lavish services!!!</h3>


    <div class="" style="padding-bottom:1.5rem;padding-top:1.5rem;">

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?php session_start(); ?>
  <title>Rooms</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="rooms.css">
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
            <a class="nav-link" href="AfterAbutus.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tourism.php">Tourist spots</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="invoice.php">Invoice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="AfterRooms.php">Rooms & Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="AfterRestnt.php">Restaurant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="background-color: white; margin-left:15px; color: black;"><img style="background-color: white;" src="https://img.icons8.com/ios/40/000000/user--v3.png" /><?php echo $_SESSION['userName']; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <h1>Rooms and Pricing</h1>
  <h5>We provide various types of rooms with international standards and high class amenities. Room service is available
    all week long 24x7.</h5>
  <table style="margin-left:auto;margin-right:auto;">
    <tr>
      <td class="cell">

        <div class="card" style="width: 18rem;">
          <img src="https://media.istockphoto.com/photos/hotel-room-suite-with-view-picture-id627892060?k=20&m=627892060&s=612x612&w=0&h=k6QY-qWNlFbvYhas82e_MoSXceozjrhhgp-krujsoDw=" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="color:black;">Deluxe</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <form class="" action="roomReg.php" method="post">
              <button type="submit" class="btn btn-outline-success">Book Now!</button>
            </form>
          </div>
        </div>
      </td>
      <td class="cell">
        <div class="card" style="width: 18rem;">
          <img src="https://cache.marriott.com/marriottassets/marriott/AMDCY/amdcy-king-guestroom-1689-hor-clsc.jpg?interpolation=progressive-bilinear&downsize=378px:*" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="color:black;">Suite</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <form class="" action="roomReg.php" method="post">
              <button type="submit" class="btn btn-outline-success">Book Now!</button>
            </form>
          </div>
        </div>
      </td>
      <td class="cell">
        <div class="card" style="width: 18rem;">
          <img src="https://media-cdn.tripadvisor.com/media/photo-s/05/eb/3a/81/jeju-oriental-hotel.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="color:black;">Family Suite</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <form class="" action="roomReg.php" method="post">
              <button type="submit" class="btn btn-outline-success">Book Now!</button>
            </form>
          </div>
        </div>
      </td>
    </tr>

  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
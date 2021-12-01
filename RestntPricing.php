<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php



  session_start();
  if (isset($_POST['buynow'])) {
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "iwp";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $f1 = $_POST['food1'] * 5.95;
    $f2 = $_POST['food2'] * 6.95;
    $f3 = $_POST['food3'] * 7.95;
    $f4 = $_POST['food4'] * 8.95;
    $f5 = $_POST['food5'] * 9.95;
    $f6 = $_POST['food6'] * 4.95;
    $f8 = $_POST['food8'] * 9.95;
    $f7 = $_POST['food7'] * 9.95;
    $f9 = $_POST['food9'] * 12.95;
    $bill = $f1 + $f2 + $f3 + $f4 + $f5 + $f6 + $f7 + $f8 + $f9;
    $nn = $_SESSION['userName'];
    $sql1 = "INSERT INTO rest (uname, bill) VALUES ( '$nn', '$bill')";
    if ($conn->query($sql1) === TRUE) {
    } else {
      echo "SORRY, SOME ERROR OCCURED. PLEASE TRY AGAIN.";
      sleep(3);
      header('Location: AfterRestnt.php');
    }
    $inv = rand(12345, 19999);
    // $_SESSION['invRest'] = $inv;
    file_put_contents('secret.txt', $inv);
  }



  ?>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
    /* -------------------------------------
  GLOBAL
  A very basic CSS reset
------------------------------------- */
    * {
      margin: 0;
      padding: 0;
      font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
      box-sizing: border-box;
      font-size: 14px;
    }

    img {
      max-width: 100%;
    }

    body {
      -webkit-font-smoothing: antialiased;
      -webkit-text-size-adjust: none;
      width: 100% !important;
      height: 100%;
      line-height: 1.6;
    }

    /* Let's make sure all tables have defaults */
    table td {
      vertical-align: top;
    }

    /* -------------------------------------
  BODY & CONTAINER
------------------------------------- */
    body {
      background-color: #f6f6f6;
    }

    .body-wrap {
      background-color: #f6f6f6;
      width: 100%;
    }

    .container {
      display: block !important;
      max-width: 600px !important;
      margin: 0 auto !important;
      /* makes it centered */
      clear: both !important;
    }

    .content {
      max-width: 600px;
      margin: 0 auto;
      display: block;
      padding: 20px;
    }

    /* -------------------------------------
  HEADER, FOOTER, MAIN
------------------------------------- */
    .main {
      background: #fff;
      border: 1px solid #e9e9e9;
      border-radius: 3px;
    }

    .content-wrap {
      padding: 20px;
    }

    .content-block {
      padding: 0 0 20px;
    }

    .header {
      width: 100%;
      margin-bottom: 20px;
    }

    .footer {
      width: 100%;
      clear: both;
      color: #999;
      padding: 20px;
    }

    .footer a {
      color: #999;
    }

    .footer p,
    .footer a,
    .footer unsubscribe,
    .footer td {
      font-size: 12px;
    }

    /* -------------------------------------
  TYPOGRAPHY
------------------------------------- */
    h1,
    h2,
    h3 {
      font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
      color: #000;
      margin: 40px 0 0;
      line-height: 1.2;
      font-weight: 400;
    }

    h1 {
      font-size: 32px;
      font-weight: 500;
    }

    h2 {
      font-size: 24px;
    }

    h3 {
      font-size: 18px;
    }

    h4 {
      font-size: 14px;
      font-weight: 600;
    }

    p,
    ul,
    ol {
      margin-bottom: 10px;
      font-weight: normal;
    }

    p li,
    ul li,
    ol li {
      margin-left: 5px;
      list-style-position: inside;
    }

    /* -------------------------------------
  LINKS & BUTTONS
------------------------------------- */
    a {
      color: #1ab394;
      text-decoration: underline;
    }

    .btn-primary {
      text-decoration: none;
      color: #FFF;
      background-color: #1ab394;
      border: solid #1ab394;
      border-width: 5px 10px;
      line-height: 2;
      font-weight: bold;
      text-align: center;
      cursor: pointer;
      display: inline-block;
      border-radius: 5px;
      text-transform: capitalize;
    }

    /* -------------------------------------
  OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */
    .last {
      margin-bottom: 0;
    }

    .first {
      margin-top: 0;
    }

    .aligncenter {
      text-align: center;
    }

    .alignright {
      text-align: right;
    }

    .alignleft {
      text-align: left;
    }

    .clear {
      clear: both;
    }

    /* -------------------------------------
  ALERTS
  Change the class depending on warning email, good email or bad email
------------------------------------- */
    .alert {
      font-size: 16px;
      color: #fff;
      font-weight: 500;
      padding: 20px;
      text-align: center;
      border-radius: 3px 3px 0 0;
    }

    .alert a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      font-size: 16px;
    }

    .alert.alert-warning {
      background: #f8ac59;
    }

    .alert.alert-bad {
      background: #ed5565;
    }

    .alert.alert-good {
      background: #1ab394;
    }

    /* -------------------------------------
  INVOICE
  Styles for the billing table
------------------------------------- */
    .invoice {
      margin: 40px auto;
      text-align: left;
      width: 80%;
    }

    .invoice td {
      padding: 5px 0;
    }

    .invoice .invoice-items {
      width: 100%;
    }

    .invoice .invoice-items td {
      border-top: #eee 1px solid;
    }

    .invoice .invoice-items .total td {
      border-top: 2px solid #333;
      border-bottom: 2px solid #333;
      font-weight: 700;
    }

    /* -------------------------------------
  RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */
    @media only screen and (max-width: 640px) {

      h1,
      h2,
      h3,
      h4 {
        font-weight: 600 !important;
        margin: 20px 0 5px !important;
      }

      h1 {
        font-size: 22px !important;
      }

      h2 {
        font-size: 18px !important;
      }

      h3 {
        font-size: 16px !important;
      }

      .container {
        width: 100% !important;
      }

      .content,
      .content-wrap {
        padding: 10px !important;
      }

      .invoice {
        width: 100% !important;
      }
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js">
  </script>
</head>

<body>
  <table class="body-wrap">
    <tbody>
      <tr>
        <td></td>
        <td class="container" width="600">
          <div class="content" id="bill">
            <table class="main" width="100%" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td class="content-wrap aligncenter">
                    <table width="100%" cellpadding="0" cellspacing="0">
                      <tbody>
                        <tr>
                          <td class="content-block">
                            <h2>Thanks for Ordering</h2>
                          </td>
                        </tr>
                        <tr>
                          <td class="content-block">
                            <table class="invoice">
                              <tbody>
                                <tr>
                                  <td><?php echo $_SESSION['userName'] ?><br>Invoice #<?php echo $inv; ?></td>
                                </tr>
                                <tr>
                                  <td>
                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                      <tbody>
                                        <tr>
                                          <td>Lobster Bisque</td>
                                          <td class="alignright">$ <?php echo $f1; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Bread barrel</td>
                                          <td class="alignright">$ <?php echo $f2; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Crab Cake</td>
                                          <td class="alignright">$ <?php echo $f3; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Caesar Selections</td>
                                          <td class="alignright">$ <?php echo $f4; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Tuscan Grilled</td>
                                          <td class="alignright">$ <?php echo $f5; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Mozzarella Stick</td>
                                          <td class="alignright">$ <?php echo $f6; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Greek Salad</td>
                                          <td class="alignright">$ <?php echo $f7; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Spinach Salad</td>
                                          <td class="alignright">$ <?php echo $f8; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Lobster Roll</td>
                                          <td class="alignright">$ <?php echo $f9; ?></td>
                                        </tr>
                                        <tr class="total">
                                          <td class="alignright" width="80%">Total</td>
                                          <td class="alignright">$ <?php echo $bill; ?></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td class="content-block">
                            <a onclick="doCapture()" href="#" id="cmd">Download Bill</a><br>
                            <a href="AfterRestnt.php">Order Some more</a><br>
                            <a href="AfterLoggeinHome.php">Go back</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="content-block">
                            Unicorn Hotels Inc. 147 Van Ness, San Francisco 94102
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="footer">
              <table width="100%">
                <tbody>
                  <tr>
                    <td class="aligncenter content-block">Questions? Email <a href="mailto:">support@unicornHotels.inc</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </td>
        <td></td>
      </tr>
    </tbody>
  </table>
</body>

</html>

<script>
  function doCapture() {
    html2canvas(document.getElementById("bill")).then(function(canvas) {

      var ajax = new XMLHttpRequest();

      ajax.open("POST", "receive.php", true);

      ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

      ajax.send("image=" + canvas.toDataURL("image/jpeg", 0.9));
      ajax.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

          console.log(this.responseText);
        }
      };
    });
  }
</script>
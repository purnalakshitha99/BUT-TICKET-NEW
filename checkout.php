<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Payment Form</title>
  <link rel="stylesheet" href="./css/checkout.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <h2>Confirm Your Payment</h2>
    <div class="first-row">
      <div class="owner">
        <h3>Owner</h3>
        <div class="input-field">
          <input type="text" required />
        </div>
      </div>
      <div class="cvv">
        <h3>CVV</h3>
        <div class="input-field">
          <input type="password" required />
        </div>
      </div>
    </div>
    <div class="second-row">
      <div class="card-number">
        <h3>Card Number</h3>
        <div class="input-field">
          <input type="text" required />
        </div>
      </div>
    </div>
    <div class="third-row">
      <h3>Expiry Date</h3>
      <div class="selection">
        <div class="date">
          <select name="months" id="months">
            <option value="Jan">Jan</option>
            <!-- Add other months here -->
          </select>
          <select name="years" id="years">
            <option value="2020">2020</option>
            <!-- Add other years here -->
          </select>
        </div>
        <div class="cards">
          <img src="mc.png" alt="" />
          <img src="vi.png" alt="" />
          <img src="pp.png" alt="" />
        </div>
      </div>
    </div>

    <?php
    session_start();
    if (isset($_SESSION["userid"])) {
      $user_id = $_SESSION["userid"];
      echo "User ID: " . $user_id;
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
      echo "Request method is POST, and 'submit' button was pressed.";
    }
    ?>

    <form class="form-horizontal" action="" method="POST">
      <button type="submit" class="btn btn-primary update-button" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>
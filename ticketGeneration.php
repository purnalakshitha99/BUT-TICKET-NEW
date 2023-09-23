<?php
try {
  // Replace with your database credentials
  $host = 'Localhost';
  $dbname = 'journey_ease';
  $user = 'root';
  $password = '';

  // Create a new PDO instance
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

  // Set PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Fetch ticket data for the select options
  $query = "SELECT Ticket_ID, Date, Time FROM tickets";
  $stmt = $pdo->query($query);
  $tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  // Handle any database connection or query errors
  echo "Database Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="./css/ticketgeneration.css" />
</head>

<body>
  <!--Ticket Generation POPUP Start-->
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-outline-warning ticketGenerationBTN" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Generate Ticket
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- New BODY Start-->
          <h1>Select a Ticket</h1>
          <form action="" method="post">
            <label for="ticket">Select a Ticket:</label>
            <select name="ticket" id="ticket">
              <option value="">Select a Ticket</option>
              <?php foreach ($tickets as $ticket) : ?>
                <option value="<?= $ticket['Ticket_ID'] ?>">
                  Ticket ID: <?= $ticket['Ticket_ID'] ?> - Date: <?= $ticket['Date'] ?> - Time: <?= $ticket['Time'] ?>
                </option>
              <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" value="Submit">
          </form>
          <?php
          try {
            // Create a new PDO instance
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

            // Set PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // You can now execute SQL queries using this $pdo object

            // Example: Select all tickets
            $query = "SELECT * FROM tickets";
            $stmt = $pdo->query($query);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              // Handle each row of data
              $ticketID = $row['Ticket_ID'];
              $date = $row['Date'];
              $time = $row['Time'];
              $busID = $row['Bus_ID'];
              $routeID = $row['Route_ID'];
              $ticketStatus = $row['Ticket_Status'];
              $ticketCat = $row['Ticket_Cat'];

              // Do something with the data, e.g., display it
              echo "Ticket ID: $ticketID, Date: $date, Time: $time, Bus ID: $busID, Route ID: $routeID, Ticket Status: $ticketStatus, Ticket Category: $ticketCat<br>";
            }
          } catch (PDOException $e) {
            // Handle any database connection or query errors
            echo "Database Error: " . $e->getMessage();
          }
          ?>
          <!-- New Body End -->

          <!--Ticket Generation Body Start-->
          <div class="row">
            <div class="headline text-center">
              <h4>Grab Your Ticket</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-2"></div>
            <div class="col-8 table ">
              <table class="table">
                <tbody>
                  <tr>
                    <td class="text-center"><strong>Coustomer Id : </strong></td>
                    <td>abcd1234</td>
                  </tr>
                  <tr>
                    <td class="text-center"><strong>Bus Register No : </strong></td>
                    <td>NC WE 1234</td>
                  </tr>
                  <tr>
                    <td class="text-center"><strong>Departure Date : </strong></td>
                    <td>12.12.2023</td>
                  </tr>
                  <tr>
                    <td class="text-center"><strong>Departure Place : </strong></td>
                    <td>Badulla</td>
                  </tr>
                  <tr>

                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-2"></div>
          </div>
          <div class="row">
            <div class="text-center">
              <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=testticket12345" alt="" class="qrImage">
            </div>
            <label class="text-center mt-2">Scan this QR to varify</label>
            <br>
            <label class="text-center"><strong>Ticked ID : testticket12345</strong></label>
          </div>
          <div class="row">
            <br>
            <div class="col text-center">
              <button type="button" class="btn btn-success">
                Download PDF<ion-icon name="document-outline"></ion-icon>
              </button>
            </div>
          </div>



        </div>
      </div>
      <!--Ticket Generation Body End-->
    </div>
  </div>
  </div>
  </div>
  <!--Ticket Generation POPUP End-->
</body>

</html>
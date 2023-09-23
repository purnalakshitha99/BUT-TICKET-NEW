<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

        // Retrieve the selected Ticket_ID from the form
        $selectedTicketID = $_POST['ticket'];

        // Fetch all details of the selected ticket from the database
        $query = "SELECT * FROM tickets WHERE Ticket_ID = :ticketID";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':ticketID', $selectedTicketID);
        $stmt->execute();
        $ticketDetails = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($ticketDetails) {
            // Variables for ticket details           
            $TktID = $ticketDetails['Ticket_ID'];
            $TktDate = $ticketDetails['Date'];
            $TktTime = $ticketDetails['Time'];
            $TktBUS = $ticketDetails['Bus_ID'];
            $TktRoute = $ticketDetails['Route_ID'];
            $TktStatus = $ticketDetails['Ticket_Status'];
            $TicketCat = $ticketDetails['Ticket_Cat'];
            $qrcodetoGenarate = $ticketDetails['QRcode'];
        } else {
            echo "Ticket not found!";
        }
    } catch (PDOException $e) {
        // Handle any database connection or query errors
        echo "Database Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>TicketCustomerCopy</title>
</head>

<body>
    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="px-4 col-lg-4 mx-auto text-center">Tickets</h1>
        <div class="px-4 col-lg-4 mx-auto text-center">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Ticket ID : </td>
                        <td><?php echo $TktID; ?></td>
                    </tr>
                    <tr>
                        <td>Date : </td>
                        <td><?php echo $TktDate; ?></td>
                    </tr>
                    <tr>
                        <td>Time : </td>
                        <td><?php echo $TktTime; ?></td>
                    </tr>
                    <tr>
                        <td>Bus ID : </td>
                        <td><?php echo $TktBUS; ?></td>
                    </tr>
                    <tr>
                        <td>Route ID : </td>
                        <td><?php echo $TktRoute; ?></td>
                    </tr>
                    <tr>
                        <td>Status : </td>
                        <td><?php echo $TktStatus; ?></td>
                    </tr>
                    <tr>
                        <td>Catogery : </td>
                        <td><?php echo $TicketCat; ?></td>
                    </tr>
                    <tr>
                        <td>RefrencceNO : </td>
                        <td><?php echo $qrcodetoGenarate; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <?php
                include('phpqrcode/qrlib.php');
                // how to save PNG codes to server

                $tempDir = "QRIMAGES/";
                $codeContents = $qrcodetoGenarate;

                // we need to generate filename somehow, 
                // with md5 or with database ID used to obtains $codeContents...
                $fileName = '005_file_' . md5($codeContents) . '.png';

                $pngAbsoluteFilePath = $tempDir . $fileName;
                $urlRelativeFilePath = $tempDir . $fileName;

                // generating
                if (!file_exists($pngAbsoluteFilePath)) {
                    QRcode::png($codeContents, $pngAbsoluteFilePath);
                } else {
                    echo '<hr />';
                }
                // displaying
                echo '<img src="' . $urlRelativeFilePath . '" />';
                ?>
            </div>
        </div>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Download</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Retry</button>
        </div>
    </div>


</body>

</html>
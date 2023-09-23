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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Select a Ticket</h1>
    <form action="TicketProcessData.php" method="post">
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
</body>

</html>
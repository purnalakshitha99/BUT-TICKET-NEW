
<?php

$errors = [];
$success_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate sender's name
    $senderName = filter_input(INPUT_POST, 'sender_name', FILTER_SANITIZE_STRING);
    if (empty($senderName)) {
        $errors[] = "Sender's Name is required.";
    }

    // Sanitize and validate receiver's name
    $receiverName = filter_input(INPUT_POST, 'receiver_name', FILTER_SANITIZE_STRING);
    if (empty($receiverName)) {
        $errors[] = "Receiver's Name is required.";
    }

    // Sanitize parcel type
    $parcelType = filter_input(INPUT_POST, 'parcel_type', FILTER_SANITIZE_STRING);

    // Sanitize and validate receiver's address
    $receiverAddress = filter_input(INPUT_POST, 'receiver_address', FILTER_SANITIZE_STRING);
    if (empty($receiverAddress)) {
        $errors[] = "Receiver's Address is required.";
    }

    // Sanitize and validate telephone number
    $telephoneNum = filter_input(INPUT_POST, 'telephone_num', FILTER_SANITIZE_STRING);
    if (empty($telephoneNum)) {
        $errors[] = "Telephone Number is required.";
    }

    // Sanitize and validate weight
    $weight = filter_input(INPUT_POST, 'weight', FILTER_SANITIZE_STRING);
    if (empty($weight)) {
        $errors[] = "Weight is required.";
    }

    // Sanitize payment method (you can customize this based on your requirements)
    $paymentMethod = filter_input(INPUT_POST, 'payment_method', FILTER_SANITIZE_STRING);

    // Validate email (optional)
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email === false) {
        $errors[] = "Invalid Email Address.";
    }

    // Check if there are no errors
    if (empty($errors)) {
       
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "journey_ease";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO bookings (sender_name, receiver_name, parcel_type, receiver_address, telephone_num, weight, payment_method)
                VALUES ('$senderName', '$receiverName', '$parcelType', '$receiverAddress', '$telephoneNum', '$weight', '$paymentMethod')";

        if ($conn->query($sql) === TRUE) {
            $success_message = "Booking successful!";
        } else {
            $errors[] = "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Package Booking</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="Admin_dashboard\bus registration.css">
        <title>Package Booking </title>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="bus registration.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
              integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
<body>
    <!-- Display success message or errors -->
    <?php if (!empty($success_message)) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $success_message; ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger" role="alert">
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <div class="container-fluid bg-dark text-light py-3">
            <div class="d-flex justify-content-center">
                <h1 class="display-6">Package Booking</h1>
            </div>
        </div><br><br><br><br>
        
        <section class="container my-2 bgdark w-50 text">
        
    <form method="POST" class="row g-3 p-3">
    <div class="col-md-4">
        <label for="sender_name" class="form-label">Sender's Name</label>
        <input type="text" class="form-control" id="sender_name" name="sender_name" required>
    </div>

    <div class="col-md-4">
        <label for="receiver_name" class="form-label">Receiver's Name</label>
        <input type="text" class="form-control" id="receiver_name" name="receiver_name" required>
    </div>

    <div class="col-md-6">
        <label for="parcel_type" class="form-label">Select Parcel Type</label>
        <select id="parcel_type" class="form-select" name="parcel_type">
            <option selected>Normal Parcel</option>
            <option>Electronic Items</option>
            <option>Other</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="receiver_address" class="form-label">Receiver's Address</label>
        <input type="text" class="form-control" id="receiver_address" name="receiver_address" required>
    </div>

    <div class="col-md-6">
        <label for="telephone_num" class="form-label">Telephone Num</label>
        <input type="text" class="form-control" id="telephone_num" name="telephone_num" required>
    </div>

    <div class="col-md-6">
        <label for="weight" class="form-label">Weight(kg)</label>
        <input type="text" class="form-control" id="weight" name="weight" required>
    </div>

    <div class="col-md-6">
        <label class="form-label">Payment Method</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="payment_method" id="flexRadioDefault1">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="payment_method" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Credit Card
            </label>
        </div>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Reserve</button>
    </div>
</form>

</body>
</html>


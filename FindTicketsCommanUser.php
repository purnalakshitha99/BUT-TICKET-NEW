<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ease Travels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <!--Nav bar start-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary navBar">

        <div class="container-fluid">
            <a class="navbar-brand Logo-TravelEase logoTravelEase" href="#"><img class="LogoImage" src="./Images/2.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbarTabsMenue" id="navbarSupportedContent">
                <ul class="navbar-nav mb-lg-0 ml-auto">
                    <li class="nav-item TabsInNavbar">
                        <a class="nav-link" aria-current="page" href="commanUser.php">
                            <span class="coustomIcon ">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                            <span class="coustomText">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="nav-item TabsInNavbar">
                        <a class="nav-link" aria-current="page" href="aboutus.php">
                            <span class="coustomIcon">
                                <ion-icon name="accessibility-outline"></ion-icon>
                            </span>
                            <span class="coustomText">
                                About Us
                            </span>
                        </a>
                    </li>
                    <li class="nav-item TabsInNavbar">
                        <a class="nav-link" aria-current="page" href="contactus.php">
                            <span class="coustomIcon">
                                <ion-icon name="headset-outline"></ion-icon>
                            </span>
                            <span class="coustomText">
                                Contact Us
                            </span>
                        </a>
                    </li>
                </ul>
                <a href="findTickets.php">
                    <button class="btn btn-outline-warning buyticket-button" type="submit">
                        Buy Tickets
                    </button>
                </a>
                </form>
            </div>
        </div>
    </nav>
    <!---Nav bar End-->
    <!-- Backend Start -->
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "journey_ease";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
    if (isset($_POST['departure_location'], $_POST['arrival_location'], $_POST['departure_date'])) {
        $departureLocation = $_POST['departure_location'];
        $arrivalLocation = $_POST['arrival_location'];
        $departureDate = $_POST['departure_date'];
        $sql = "SELECT r.Route_ID, r.Start_Location, r.Destination_Of_Location, s.Date, s.Arrival_Time, s.Departure_Time
                        FROM route AS r
                        JOIN schedule AS s ON r.Route_ID = s.Route_ID
                        WHERE r.Start_Location = ? 
                        AND r.Destination_Of_Location = ?
                        AND s.Date = ?";
        $stmt_CB = $pdo->prepare($sql);
        $stmt_CB->execute([$departureLocation, $arrivalLocation, $departureDate]);
    ?>
        <?php
        if ($stmt_CB->rowCount() > 0) {
            echo '<div class="container mt-3 mb-3">';
            while ($row = $stmt_CB->fetch(PDO::FETCH_ASSOC)) {
        ?>
                <?php echo '<div class="p-5 text-center bg-body-secondary rounded-3">'; ?>
                <h1 class="text-body-emphasis"><?php echo $row['Start_Location']; ?> - <?php echo $row['Destination_Of_Location']; ?></h1>

                <div class="text-center">
                    <div class="row">
                        <div class="col-3">
                            <table>
                                <tr>
                                    <th><?php echo $row['Departure_Time']; ?></th>
                                    <th><ion-icon name="arrow-forward"></ion-icon></th>
                                    <th><?php echo $row['Arrival_Time']; ?></th>
                                </tr>
                                <tr>
                                    <td><?php echo $row['Start_Location']; ?></td>
                                    <td><ion-icon name="arrow-forward"></ion-icon></td>
                                    <td><?php echo $row['Destination_Of_Location']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-6 text-center">
                            <h3>Super Luxuary</h3>
                            <h5>UV NT-3455</h5>
                        </div>
                        <div class="col-3 text-center">
                            <h3 class="ticketPrice">RS. 2000</h3>
                            <small><?php echo $row['Date'] ?></small>
                            <button type="button" class="btn btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Choose Seat</button>
                        </div>
                    </div>
                </div>
                <?php echo '</div>'; ?>
                <?php echo '</br>'; ?>
    <?php
            }
            echo '</div>';
        } else {
            echo '<div>No available buses for the selected route and date.</div>';
        }
    }
    ?>


    <!--Footer Start-->
    <footer class="border-top footerbackground">
        <div class="row">
            <div class="col-12 col-md ">
                <span>
                    <img class="mb-2" src="images/logo2.jpg" alt="" width="24" height="19">
                </span>
                <span>
                    <p>Make Your Journy Easy</p>
                </span>
                <small class="d-block mb-3 text-body-secondary">&copy; 2017–2023</small>
                <div class="row ">
                    <div class="container firstCol">
                        <div class="col">
                            <a class="nav-link" aria-current="page" href="#">
                                <span class="coustomIcon SMLF">
                                    <ion-icon name="logo-facebook">
                                </span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="nav-link" aria-current="page" href="#">
                                <span class="coustomIcon SMLI">
                                    <ion-icon name="logo-instagram">
                                </span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="nav-link" aria-current="page" href="#">
                                <span class="coustomIcon SMLW">
                                    <ion-icon name="logo-whatsapp">
                                </span>
                            </a>
                        </div>
                        <div class="col ">
                            <a class="nav-link" aria-current="page" href="#">
                                <span class="coustomIcon SMLT">
                                    <ion-icon name="logo-twitter">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md">
                <h5>Links</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="nav-link" aria-current="page" href="#">
                            <span class="coustomIcon">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                            <span class="coustomText">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="mb-1"> <a class="nav-link" aria-current="page" href="#">
                            <span class="coustomIcon">
                                <ion-icon name="accessibility-outline"></ion-icon>
                            </span>
                            <span class="coustomText">
                                About Us
                            </span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="nav-link" aria-current="page" href="#">
                            <span class="coustomIcon">
                                <ion-icon name="headset-outline"></ion-icon>
                            </span>
                            <span class="coustomText">
                                Contact Us
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Policies</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link text-decoration-none listtext" href="#">privacy Policy</a></li>
                    <li class="mb-1"><a class="link text-decoration-none listtext" href="#">Terms & Conditions</a></li>
                    <li class="mb-1"><a class="link text-decoration-none listtext" href="#">Ticket Policy</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Contact us</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none listtext" href="#">
                            <span class="coustomIcon">
                                <ion-icon name="location-outline"></ion-icon>
                            </span>
                            <span class="coustomText listtext2">
                                No2, Passara Raod, Badulla.
                            </span>
                        </a>
                    </li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">
                            <span class="coustomIcon">
                                <ion-icon name="call-outline"></ion-icon>
                            </span>
                            <span class="coustomText listtext2">
                                +94123987456
                            </span>
                        </a>
                    </li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">
                            <span class="coustomIcon">
                                <ion-icon name="at-outline"></ion-icon>
                            </span>
                            <span class="coustomText listtext2">
                                EaseTravales@Bus.com
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
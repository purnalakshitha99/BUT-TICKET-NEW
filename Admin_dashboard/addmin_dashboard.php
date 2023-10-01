<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@100;300;400;500;600;700;800;900&family=Poppins:wght@400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&display=swap" rel="stylesheet">

    <title>Dashboard</title>
</head>

<body>
    <section>
        <div class="row">
            <div id="topbar">
                <div>
                    <h2>Journey Ease</h2>
                </div>
                <div>
                    <span>Welcome, Admin!</span>
                </div>
            </div>
        </div>
        <div id="sidebar">
            <div class="pt-5">
                <ul class="pt-4">
                    <li><a href="dashboard-page.php" class="active">Dashboard</a></li>
                    <li><a href="view_customer_feedback-page.php">View Customer's Feedback</a></li>
                    <li><a href="profile-page.php">Profile</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
        <div id="content">
            <!--breadcum bar-->
            <div class="row p-4 pb-0 pt-5">
                <div class="col pt-3">
                    <nav class="bread-card rounded-5 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li>Home </li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Inside the <div class="col-md-12"> -->
            <div class="row p-4">
                <div class="slider-container">
                    <div class="slider">
                        <div class="slide pt-5">
                            <h1>Welcome to Journey ease</h1>
                        </div>
                        <div class="slide pt-5">
                            <h1>Welcome to Journey ease</h1>
                        </div>
                        <div class="slide pt-5">
                            <h1>Welcome to Journey ease</h1>
                        </div>
                    </div>
                    <div class="slide-indicators">
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                        <span class="indicator"></span>
                    </div>
                </div>
            </div>

            <!---profile card--->
            <div class="row p-4">
                <div class="col-md-4 pb-5">
                    <div class="card shadow text-center custom-card">
                        <div class="card-body">
                            <img src="images/Admin/Add_bus.jpg" alt="Image" class="card-image" style="width: 130px;">
                            <h5 class="card-title">Add Bus</h5>
                            <p class="card-text">Manage bus here.</p>
                            <a href="bus_registration.php" class="btn btn-primary">Go to Add Bus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow text-center custom-card">
                        <div class="card-body">
                            <img src="images/Admin/Add_employee.jpg" alt="Image" class="card-image" style="width: 130px;">
                            <h5 class="card-title">Add Employee</h5>
                            <p class="card-text">Manage employee here.</p>
                            <a href="employee_registration.php" class="btn btn-primary">Go to Add Employee</a>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_POST['submit'])) {
                    // Include the TCPDF library
                    require_once('../TCPDF/tcpdf.php');

                    // Create a new PDF instance
                    $pdf = new TCPDF();

                    // Add a page
                    $pdf->AddPage();

                    // Customize PDF settings (optional)
                    $pdf->SetTitle('Sample Report');
                    $pdf->SetAuthor('Your Name');

                    // Include the database connection file
                    // Database connection
                    $db_host = 'localhost';
                    $db_user = 'root';
                    $db_password = '';
                    $db_name = 'journey_ease';

                    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Retrieve data from the three tables
                    $queryTable1 = "SELECT * FROM route";
                    $resultTable1 = $conn->query($queryTable1);

                    $queryTable2 = "SELECT * FROM package_services";
                    $resultTable2 = $conn->query($queryTable2);

                    $queryTable3 = "SELECT * FROM schedule";
                    $resultTable3 = $conn->query($queryTable3);

                    // Add content to the PDF
                    // Example: Loop through results and add them to the PDF
                    while ($row = $resultTable1->fetch_assoc()) {
                        // Customize the content as needed
                        $pdf->Cell(0, 10, "Route ID: " . $row['route_id'], 0, 1);
                        $pdf->Cell(0, 10, "Route Name: " . $row['route_name'], 0, 1);
                        // Add more data as necessary
                    }

                    while ($row = $resultTable2->fetch_assoc()) {
                        // Customize the content for table 2
                    }

                    while ($row = $resultTable3->fetch_assoc()) {
                        // Customize the content for table 3
                    }

                    // Output the PDF for download
                    $pdf->Output('report.pdf', 'D');
                }
                ?>

                <div class="col-md-4">
                    <div class="card shadow text-center custom-card">
                        <div class="card-body">
                            <img src="images/Admin/Report.jpg" alt="Image" class="card-image" style="width: 130px;">
                            <h5 class="card-title">Report Generate</h5>
                            <p class="card-text">Manage Report Generate here.</p>
                            <form class="form-horizontal" action="" method="POST">
                                <button type="submit" class="btn btn-primary update-button" name="submit">Go to Report Generate</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="java.js"></script>
</body>

</html>
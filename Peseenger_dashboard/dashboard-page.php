<?php
    session_start();
    ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@100;300;400;500;600;700;800;900&family=Poppins:wght@400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&display=swap"
        rel="stylesheet">

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
                    <span>Welcome, <?php 
                    if(isset($_SESSION["name"])){
                        echo $_SESSION["name"]. ' ! ';
                    }else{
                        echo 'user ! ';
                    }
                    ?>
                    </span>
                </div>
            </div>
        </div>        
        <div id="sidebar">
            <div class="pt-5">
                <ul class="pt-4">
                    <li><a href="dashboard-page.php" class="active">Dashboard</a></li>
                    <li><a href="feedback-page.php">Feedback</a></li>
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
                            <h1>Welcome <?php
                             if(isset($_SESSION["name"])){
                                echo $_SESSION["name"]. ' ! ';
                            }else{
                                echo 'user ! ';
                            }
                            ?></h1>
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
                            <img src="images/journey pic/Ticket Booking.jpg"alt="Image" class="card-image" style="width: 130px;">
                            <h5 class="card-title">Ticket Bookings</h5>
                            <p class="card-text">Manage ticket bookings here.</p>
                            <a href="../commanUser.php" class="btn btn-primary">Go to Ticket Booking</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow text-center custom-card">
                        <div class="card-body">
                            <img src="images/journey pic/TICKET cANCELLATION.jpg"alt="Image" class="card-image" style="width: 130px;">
                            <h5 class="card-title">Ticket Cancellations</h5>
                            <p class="card-text">Manage ticket cancellations here.</p>
                            <a href="TicketCancel.php" class="btn btn-primary">Go to Ticket Cancellations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow text-center custom-card">
                        <div class="card-body">
                            <img src="images/journey pic/Package Booking.jpg"alt="Image" class="card-image" style="width: 130px;">
                            <h5 class="card-title">Package Bookings</h5>
                            <p class="card-text">Manage package bookings here.</p>
                            <a href="../PackageBooking.php" class="btn btn-primary">Go to Package Bookings</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow text-center custom-card">
                        <div class="card-body">
                            <img src="images/journey pic/Package cancellation.jpg"alt="Image" class="card-image" style="width: 130px;">
                            <h5 class="card-title">Package Cancellations</h5>
                            <p class="card-text">Manage Package cancellations here.</p>
                            <a href="TicketCancel.php" class="btn btn-primary">Go to Package Cancellations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow text-center custom-card">
                        <div class="card-body">
                            <img src="images/journey pic/trackbus.jpg"alt="Image" class="card-image" style="width: 130px;">
                            <h5 class="card-title">Track Bus</h5>
                            <p class="card-text">Manage the Track Bus.</p>
                            <a href="#" class="btn btn-primary">Go to Track Bus</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>

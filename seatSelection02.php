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
    <style>
        .seat {
            position: relative;
            border: 0.1px;
            width: 60px;
            height: 60px;
            border-radius: 100%;
            justify-content: center;
            align-items: center;
            padding: 0px;
            background-color: #f5f5f5;
            cursor: pointer;
        }

        .selected-child {
            background-color: #FFFD8C;
        }

        .selected-woman {
            background-color: #FF9EAA;
        }

        .selected-man {
            background-color: #A2FF86;
        }
    </style>
</head>

<body class="bg-body-secondary">
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
                            <span class="coustomIcon">
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

                <!-- Notification Bell Icon and Count -->
                <div class="notification-icon">
                    <a href="#">
                        <span class="coustomIcon">
                            <ion-icon name="notifications-outline"></ion-icon>
                        </span>
                        <span class="notification-count">3</span>
                    </a>
                </div>

                <a href="findTickets.php">
                    <button class="btn btn-outline-warning buyticket-button" type="submit">
                        Buy Tickets
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <!---Nav bar End-->
    <!--Body Part Starts-->
    <div class="routeFilter">
        <div class="row align-items-center5">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col calenderDiv">
                            <input type="date" class="calender">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="genderSelectionDiv">
                            <select id="passengerCategory" class="passengerCategory">
                                <option value="child">Child</option>
                                <option value="woman">Woman</option>
                                <option value="man">Man</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-6">
                    <div class="SeatSelectionDiv">
                        <div class="busSeats">
                            <div class="row text-center">
                                <h3>Front</h3>
                            </div>
                            <div id="seatContainer">
                                <!--select seat row start-->
                                <div class="row mt-1">
                                    <div class="col-1"></div>
                                    <div class="col-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="seat seatsWithNumberImages" data-seat-number="1">
                                                    <span>
                                                        <small class="seatNumber">1</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="seat" data-seat-number="2">
                                                    <span>
                                                        <small class="seatNumber">2</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="3">
                                                    <span>
                                                        <small class="seatNumber">3</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="4">
                                                    <span>
                                                        <small class="seatNumber">4</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="5">
                                                    <span>
                                                        <small class="seatNumber">5</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                                <!--Select select Row End -->
                                <!--select seat row start-->
                                <div class="row mt-1">
                                    <div class="col-1"></div>
                                    <div class="col-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="seat seatsWithNumberImages" data-seat-number="6">
                                                    <span>
                                                        <small class="seatNumber">6</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="seat" data-seat-number="7">
                                                    <span>
                                                        <small class="seatNumber">7</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="8">
                                                    <span>
                                                        <small class="seatNumber">8</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="9">
                                                    <span>
                                                        <small class="seatNumber">9</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="10">
                                                    <span>
                                                        <small class="seatNumber">10</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                                <!--Select select Row End -->
                                <!--select seat row start-->
                                <div class="row mt-1">
                                    <div class="col-1"></div>
                                    <div class="col-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="seat seatsWithNumberImages" data-seat-number="11">
                                                    <span>
                                                        <small class="seatNumber">11</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="seat" data-seat-number="12">
                                                    <span>
                                                        <small class="seatNumber">12</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="13">
                                                    <span>
                                                        <small class="seatNumber">13</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="14">
                                                    <span>
                                                        <small class="seatNumber">14</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="15">
                                                    <span>
                                                        <small class="seatNumber">15</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                                <!--Select select Row End -->
                                <!--select seat row start-->
                                <div class="row mt-1">
                                    <div class="col-1"></div>
                                    <div class="col-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="seat seatsWithNumberImages" data-seat-number="16">
                                                    <span>
                                                        <small class="seatNumber">16</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="seat" data-seat-number="17">
                                                    <span>
                                                        <small class="seatNumber">17</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="18">
                                                    <span>
                                                        <small class="seatNumber">18</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="19">
                                                    <span>
                                                        <small class="seatNumber">19</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="20">
                                                    <span>
                                                        <small class="seatNumber">20</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                                <!--Select select Row End -->
                                <!--select seat row start-->
                                <div class="row mt-1">
                                    <div class="col-1"></div>
                                    <div class="col-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="seat seatsWithNumberImages" data-seat-number="21">
                                                    <span>
                                                        <small class="seatNumber">21</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="seat" data-seat-number="22">
                                                    <span>
                                                        <small class="seatNumber">22</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="23">
                                                    <span>
                                                        <small class="seatNumber">23</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="24">
                                                    <span>
                                                        <small class="seatNumber">24</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="25">
                                                    <span>
                                                        <small class="seatNumber">25</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                                <!--Select select Row End -->
                                <!--select seat row start-->
                                <div class="row mt-1">
                                    <div class="col-1"></div>
                                    <div class="col-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="seat seatsWithNumberImages" data-seat-number="26">
                                                    <span>
                                                        <small class="seatNumber">26</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="seat" data-seat-number="27">
                                                    <span>
                                                        <small class="seatNumber">27</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="28">
                                                    <span>
                                                        <small class="seatNumber">28</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="29">
                                                    <span>
                                                        <small class="seatNumber">29</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="30">
                                                    <span>
                                                        <small class="seatNumber">30</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                                <!--Select select Row End -->
                                <!--select seat row start-->
                                <div class="row mt-1">
                                    <div class="col-1"></div>
                                    <div class="col-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="seat seatsWithNumberImages" data-seat-number="31">
                                                    <span>
                                                        <small class="seatNumber">31</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="seat" data-seat-number="32">
                                                    <span>
                                                        <small class="seatNumber">32</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="33">
                                                    <span>
                                                        <small class="seatNumber">33</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="34">
                                                    <span>
                                                        <small class="seatNumber">34</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="35">
                                                    <span>
                                                        <small class="seatNumber">5</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                                <!--Select select Row End -->
                                <!--select seat row start-->
                                <div class="row mt-1">
                                    <div class="col-1"></div>
                                    <div class="col-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="seat seatsWithNumberImages" data-seat-number="36">
                                                    <span>
                                                        <small class="seatNumber">36</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="seat" data-seat-number="37">
                                                    <span>
                                                        <small class="seatNumber">37</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="38">
                                                    <span>
                                                        <small class="seatNumber">38</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="39">
                                                    <span>
                                                        <small class="seatNumber">39</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="40">
                                                    <span>
                                                        <small class="seatNumber">40</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                                <!--Select select Row End -->
                                <!--select seat row start-->
                                <div class="row mt-1">
                                    <div class="col-1"></div>
                                    <div class="col-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="seat seatsWithNumberImages" data-seat-number="41">
                                                    <span>
                                                        <small class="seatNumber">41</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="seat" data-seat-number="42">
                                                    <span>
                                                        <small class="seatNumber">2</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="43">
                                                    <span>
                                                        <small class="seatNumber">43</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="44">
                                                    <span>
                                                        <small class="seatNumber">44</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="seat" data-seat-number="45">
                                                    <span>
                                                        <small class="seatNumber">45</small>
                                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                                <!--Select select Row End -->

                            </div>
                            <div class="col-3"></div>
                        </div>
                        <div class="row text-center">
                            <h3>Reer</h3>
                        </div>
                        <div class="row text-center ">
                            <div class="text-center displaySeatCatogery">
                                <table>
                                    <tr>
                                        <td>
                                            <div class="text-center seatWithNumberSelectedByMale">
                                                <span>
                                                    <small class="seatNumber"></small>
                                                    <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center seatWithNumberSelectedByFemale">
                                                <span>
                                                    <small class="seatNumber"></small>
                                                    <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center seatWithNumberSelectedByChild">
                                                <span>
                                                    <small class="seatNumber"></small>
                                                    <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                                </span>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td><small>Male</small></td>
                                        <td><small>Female</small></td>
                                        <td><small>Child</small></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="displayLables">
                            <div class="row">
                                <div>
                                    <p>Selected Seats:</p>
                                    <label id="selectedSeatsLabel"></label>
                                </div>
                                <div>
                                    <p>Total Price: <span id="totalPrice">0</span></p>
                                </div>
                            </div>
                        </div>
                        <script>
                            // JavaScript code here
                            const seatButtons = document.querySelectorAll('.seat');
                            const passengerCategorySelect = document.getElementById('passengerCategory');
                            const totalPriceDisplay = document.getElementById('totalPrice');
                            const selectedSeatsLabel = document.getElementById('selectedSeatsLabel');

                            let selectedSeats = {};

                            seatButtons.forEach((seatButton) => {
                                seatButton.addEventListener('click', () => {
                                    const seatNumber = seatButton.getAttribute('data-seat-number');
                                    const passengerCategory = passengerCategorySelect.value;

                                    if (selectedSeats[seatNumber]) {
                                        // Deselect the seat
                                        delete selectedSeats[seatNumber];
                                        seatButton.classList.remove(`selected-${passengerCategory}`);
                                    } else {
                                        // Select the seat
                                        selectedSeats[seatNumber] = passengerCategory;
                                        seatButton.classList.add(`selected-${passengerCategory}`);
                                    }

                                    // Update the total price (you can set your own pricing logic)
                                    const totalPrice = Object.keys(selectedSeats).length * 2000; // Assuming each seat costs $10
                                    totalPriceDisplay.textContent = totalPrice;

                                    // Generate reference numbers for selected seats
                                    const referenceNumbers = Object.entries(selectedSeats).map(([seat, ageGroup]) => {
                                        return `SH01-${seat}-${ageGroup}`;
                                    });

                                    // Update the selected seats label
                                    selectedSeatsLabel.textContent = referenceNumbers.join(', ');
                                });
                            });
                        </script>

                        <div class="checkout mt-3">
                            <a href="checkout.php">
                                <button class="btn btn-outline-primary"> Proceed to Checkout</button>
                            </a>
                        </div>
                    </div>

                    <br>
                </div>
            </div>
        </div>


        <!--Seat Select POP UP End-->
        <!--Body Part End-->
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Body Part End -->
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
                <h5 style="color: white;">Links</h5>
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
                    <li class="mb-1"><a class="link-secondary text-decoration-none listtext" href="../contactus/index.php">
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

    <!--Footer End-->
</body>

</html>
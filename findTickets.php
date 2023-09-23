<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Find Tickets</title>
    <link rel="stylesheet" href="stylecu.css" />
    <!-- Fontawesome CDN Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./css/index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="./js/index.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </head>
  <body>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary navBar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Ease Travels</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-lg-0 ml-auto">
            <li class="nav-item homeTab homeIcon">
              <a class="nav-link" aria-current="page" href="commanUser.html" >
                <span class="coustomIcon ">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="coustomText">
                    Home
                </span>
              </a>
            </li>
            <li class="nav-item aboutUSIcon">
                <a class="nav-link" aria-current="page" href="aboutus.html">
                    <span class="coustomIcon">
                        <ion-icon name="accessibility-outline"></ion-icon>
                    </span>
                    <span class="coustomText">
                        About Us
                    </span>
                </a>
            </li>
            <li class="nav-item contactUsIcon ">
                <a class="nav-link" aria-current="page" href="contactus.html">
                    <span class="coustomIcon">
                        <ion-icon name="headset-outline"></ion-icon>
                    </span>
                    <span class="coustomText">
                        Contact Us
                    </span>
                </a>
            </li>            
          </ul>          
            <button class="btn btn-outline-warning buyticket-button" type="submit">
              Buy Tickets
            </button>
          </form>
        </div>
      </div>
    </nav>
    <!--Navbar End-->
    <!--Find Tickets Contnt Start-->
        <!--Find Rroute Page Start-->
  <div class="grid text-center mt-5">
    <h1> Our Routes </h1>
  </div>
  <div>
    <div class="row">
        <div class="col-3">
            <div class="grid text-center mt-2">
                <h2> Easy Option </h2>
              </div>

        </div>
        <div class="col-9">
            <div class="grid text-center mt-2">
                <h2> Available Routes </h2>
              </div> 
        </div>
    </div>
    <div class="row">
        <!--Easy option Tabs Start-->
        <div class="col-3">
            <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
                <div class="position-sticky">
                  <div class="list-group list-group-flush mx-3 mt-4">
                      
                      <!--Easy Option Routes Start-->
                      <!--Route No 1 Badulla to Colombo (BTC)-->
                      <a class="list-group-item list-group-item-action active sidebarnew1" id="list-dashBoard-list" data-bs-toggle="list" href="#list-dashBoard" role="tab" aria-controls="list-dashBoard" aria-selected="false" tabindex="-1"><span>Badulla to Colombo</span></a>
                      <!--Route No 2 Passara to Colombo(PTC)-->
                      <a class="list-group-item list-group-item-action sidebarnew1" id="list-proposal-list" data-bs-toggle="list" href="#list-proposal" role="tab" aria-controls="list-proposal" aria-selected="false"><span>Passara to Colombo</span></a>
                       <!--Route No 3 Ella to Colombo (ETC)-->
                      <a class="list-group-item list-group-item-action sidebarnew1" id="list-employee-list" data-bs-toggle="list" href="#list-employee" role="tab" aria-controls="list-employee" aria-selected="false"><span>Ella to Colombo</span></a>
                      <!--Route No 4 Bandarawela to Colombo (BwTC)-->
                      <a class="list-group-item list-group-item-action sidebarnew1" id="list-reports-list" data-bs-toggle="list" href="#list-reports" role="tab" aria-controls="list-reports" aria-selected="false"><span>Bandarawela to Colombo</span></a>
                      <!--Route No 5 Badulla to Kandy to Colombo (BTKTC)-->
                      <a class="list-group-item list-group-item-action sidebarnew1" id="list-communication-list" data-bs-toggle="list" href="#list-communication" role="tab" aria-controls="list-communication" aria-selected="false"><span>Badulla-Kandy to Colombo</span></a>
                      <!--Easy Option Routes End-->                
                  </div>
                </div>
              </nav>
        </div>
        <!--Easy Option Contents Start-->
        <div class="col-9">
            <div id="content">                
                <div class="tab-content" id="nav-tabContent">
                <!--BTC Content Start-->
                <div class="tab-pane fade" id="list-dashBoard" role="tabpanel" aria-labelledby="list-dashBoard-list" style="height:100%;">                    
                    <!--Route no1 start-->
                    <div class="container my-0">
                      <div class="p-5 text-center bg-body-tertiary rounded-3">
                        <h1 class="text-body-emphasis">Badulla - Colombo</h1>
                        
                        <div class="text-center">
                            <div class="row">
                            <div class="col-3">
                            <table>
                                <tr>
                                    <th>11.00 PM</th>
                                    <th><ion-icon name="arrow-forward"></ion-icon></th>
                                    <th>04.00 AM</th>
                                </tr>
                                <tr>
                                    <td>Badulla</td>
                                    <td><ion-icon name="arrow-forward"></ion-icon></td>
                                    <td>Colombo</td>
                                </tr>
                            </table>
                            </div>
                            <div class="col-6 text-center">
                                <h3>Super Luxuary</h3>
                                <h5>UV NT-3455</h5>
                            </div>
                            <div class="col-3 text-center">
                                <h3 class="ticketPrice">RS. 2000</h3>
                                <small>Available for all Days</small>
                                <button type="button" class="btn btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Choose Seat</button>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="b-example-divider"><br></div>
                    <!--Route no1 End-->
                    <!--Route no2 start-->
                    <div class="container my-0">
                        <div class="p-5 text-center bg-body-tertiary rounded-3">
                          <h1 class="text-body-emphasis">Badulla - Colombo </h1>
                          <p class="lead">
                            Route no2
                          </p>
                        </div>
                      </div>
                      <div class="b-example-divider"><br></div>
                      <!--Route no2 End-->
                      <!--Route no3 start-->
                    <div class="container my-0">
                        <div class="p-5 text-center bg-body-tertiary rounded-3">
                          <h1 class="text-body-emphasis">Badulla - Colombo</h1>
                          <p class="lead">
                            Route no3
                          </p>
                        </div>
                      </div>
                      <div class="b-example-divider"><br></div>
                      <!--Route no3 End-->
                      <!--Route no4 start-->
                    <div class="container my-0">
                        <div class="p-5 text-center bg-body-tertiary rounded-3">
                          <h1 class="text-body-emphasis">Badulla - Colombo</h1>
                          <p class="lead">
                            Route no4
                          </p>
                        </div>
                      </div>
                      <div class="b-example-divider"><br></div>
                      <!--Route no4 End-->
                </div>

                <!--BTC Content End-->
                <!--PTC Content End-->
                <div class="tab-pane fade" id="list-proposal" role="tabpanel" aria-labelledby="list-proposal-list" style="height:100vh;">
                <!--Route no1 start-->
                <div class="container my-0">
                    <div class="p-5 text-center bg-body-tertiary rounded-3">
                      <h1 class="text-body-emphasis">Passara - Colombo</h1>
                      <p class="lead">
                        Route no1
                      </p>
                    </div>
                  </div>
                  <div class="b-example-divider"><br></div>
                  <!--Route no1 End-->
                  <!--Route no2 start-->
                <div class="container my-0">
                    <div class="p-5 text-center bg-body-tertiary rounded-3">
                      <h1 class="text-body-emphasis">Passara - Colombo</h1>
                      <p class="lead">
                        Route no2
                      </p>
                    </div>
                  </div>
                  <div class="b-example-divider"><br></div>
                  <!--Route no1 End-->
                  
                </div>
                <!--PTC Content End-->
                <!--ETC Content End-->
                <div class="tab-pane fade" id="list-employee" role="tabpanel" aria-labelledby="list-employee-list" style="height:100vh;">
                <!--Route no1 start-->
                <div class="container my-0">
                    <div class="p-5 text-center bg-body-tertiary rounded-3">
                      <h1 class="text-body-emphasis">Ella - Colombo</h1>
                      <p class="lead">
                        Route no1
                      </p>
                    </div>
                  </div>
                  <div class="b-example-divider"><br></div>
                  <!--Route no1 End-->
                  <!--Route no2 start-->
                <div class="container my-0">
                    <div class="p-5 text-center bg-body-tertiary rounded-3">
                      <h1 class="text-body-emphasis">Ella - Colombo</h1>
                      <p class="lead">
                        Route no2
                      </p>
                    </div>
                  </div>
                  <div class="b-example-divider"><br></div>
                  <!--Route no1 End-->
                </div>
                <!--ETC Content End-->
                <!--BwTC Content Start-->
                <div class="tab-pane fade" id="list-reports" role="tabpanel" aria-labelledby="list-reports-list" style="height:100vh;">
                <!--Route no2 start-->
                <div class="container my-0">
                    <div class="p-5 text-center bg-body-tertiary rounded-3">
                      <h1 class="text-body-emphasis">Bandarawela - Colombo</h1>
                      <p class="lead">
                        Route no1
                      </p>
                    </div>
                  </div>
                  <div class="b-example-divider"><br></div>
                  <!--Route no1 End-->
                  <!--Route no2 start-->
                <div class="container my-0">
                    <div class="p-5 text-center bg-body-tertiary rounded-3">
                      <h1 class="text-body-emphasis">Bandarawela - Colombo</h1>
                      <p class="lead">
                        Route no2
                      </p>
                    </div>
                  </div>
                  <div class="b-example-divider"><br></div>
                  <!--Route no1 End-->
                </div>
                <!--BwTC Content End-->
                <div class="tab-pane fade" id="list-communication" role="tabpanel" aria-labelledby="list-communication-list" style="height:100vh;">
                <!--Route no2 start-->
                <div class="container my-0">
                    <div class="p-5 text-center bg-body-tertiary rounded-3">
                      <h1 class="text-body-emphasis">Bandarawela- kandy - Colombo</h1>
                      <p class="lead">
                        Route no1
                      </p>
                    </div>
                  </div>
                  <div class="b-example-divider"><br></div>
                  <!--Route no1 End-->
                  <!--Route no2 start-->
                <div class="container my-0">
                    <div class="p-5 text-center bg-body-tertiary rounded-3">
                      <h1 class="text-body-emphasis">Bandarawela- kandy - Colombo</h1>
                      <p class="lead">
                        Route no2
                      </p>
                    </div>
                  </div>
                  <div class="b-example-divider"><br></div>
                  <!--Route no1 End-->
                </div>
                <!--new menu item end-->           
                </div>
            </div>
        </div>
    </div>
  </div>
  <!--Find Rroute Page End-->
  <!--Easy Option Contents End-->
  <!--Seat Select POP UP Start-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Choose Seat</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col">
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" aria-placeholder="Pickup Point">
                        <option selected>Pickup Point</option>
                        <option value="1">Badulla</option>
                        <option value="2">Colombo</option>
                        <option value="3">Kandy</option>
                      </select>
                </div>
                <div class="col">
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Dropping Point</option>
                        <option value="1">Badulla</option>
                        <option value="2">Kandy</option>
                        <option value="3">Colombo</option>
                      </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text mt-3" id="basic-addon1">Diparture Date</span>
                        <input type="date" class="form-control mt-3" placeholder="Departure Date" aria-label="Departure Date" aria-describedby="basic-addon1">
                        
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Seat For</label>
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Choose Passanger Category</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                      <option value="3">Child</option>
                    </select>
                  </div>
            </div>
            <hr>
            <div class="busSeats">
                <div class="row text-center"><h3>Front</h3></div>
                <div class="row text-center">
                    <div class="col-1"></div>
                    <div class="col-2">
                        <table>
                            <tr>
                                <td>
                                    <button class="seatWithNumberButton" >
                                        <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">01</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                    </button>
                                </td>
                                <td>
                                    <button class="seatWithNumberButton">
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">02</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">03</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">04</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">05</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">06</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">07</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">08</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">09</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">10</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">11</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">12</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">13</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">14</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">15</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">16</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <!--Seat with number Aligned Start-->
                        <!-- <div class="text-center seatWithNumber">
                            <span>
                            <small class="seatNumber">01</small>
                            <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                            </span>
                        </div> -->
                        <!--Seat with number Aligned Start-->
                    </div>
                    <div class="col-3"></div>
                    <div class="col-3">
                        <table>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">17</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">18</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">19</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">20</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">21</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">22</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">23</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">24</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">25</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">26</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">27</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">28</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">29</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">30</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">31</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">32</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">33</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">34</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">35</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">36</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">37</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">38</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">39</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center seatWithNumber">
                                        <span>
                                        <small class="seatNumber">40</small>
                                        <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row text-center"><h3>Reer</h3></div>
                <div class="row text-center ">
                    <div class="text-center displaySeatCatogery">
                    <table>
                        <tr>
                            <td>
                                <div class="text-center seatWithNumberReserved">
                                    <span>
                                    <small class="seatNumber"></small>
                                    <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="text-center seatWithNumberSelected">
                                    <span>
                                    <small class="seatNumber"></small>
                                    <img src="https://thenounproject.com/api/private/icons/661611/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="rounded seatImage" alt="...">
                                    </span>
                                </div>
                            </td>
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
                            <td><small>Reserved</small></td>
                            <td><small>Selected</small></td>
                            <td><small>Male</small></td>
                            <td><small>Female</small></td>
                            <td><small>Child</small></td>    
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center">
                        <button class="btn btn-outline-warning">Add Seat</button>
                    </div>
                </div>
            </div>
            <hr class="mt-1">
            <div class="displayLables">
            <div class="row">
            <div class="col">
            <label>Selected Seats :</label>
            </div>
            <div class="col">
            <lable>Total : </lable>
            </div>
            </div>
            </div>
            <div class="checkout mt-3">
                <a href="checkout.html">
                <button class="btn btn-outline-primary"> Proceed to Checkout</button>
                </a>
            </div>
        </div> 
        <hr>  
        <div class="footerForPopUp">
        <div class="row">
        <div class="col-8 footerforSelectSeat">
          <button type="button" class="btn btn-outline-danger">Clear Changes</button>
        </div>
        
        <div class="col-4 footerforSelectSeat">
          <button type="button" class="btn btn-outline-success">Sign In</button>
        </div>
        </div>
        </div>
        <br>
      </div>
    </div>
  </div> 
    <!--Find Tickes Contnt End-->
    <!--Footer Start-->
    <footer class="border-top footerbackground">
      <div class="row">
        <div class="col-12 col-md ">
          <span>
          <img class="mb-2" src="../assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
          </span>
          <spa>
              <p>Make Your Journy Easy</p>
          </spa>
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
    <!--Footer End-->
  </body>
</html>

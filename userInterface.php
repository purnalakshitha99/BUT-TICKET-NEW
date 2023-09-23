<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UserInteerface</title>
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
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <link rel="stylesheet" href="./css/ui.css" />
    <link rel="stylesheet" href="./css/index.css" />
  </head>
  <body>
    <!--Navbar Start-->

    <div class="row navBarUserInterface list-group list-group-flush">
      <div class="tabsDivNav">
        <div class="row text-center">
          <div class="col">
            <button
              class="tabButton"
              id="list-dashBoard-list"
              data-bs-toggle="list"
              href="#list-dashBoard"
              aria-controls="list-dashBoard"
              aria-selected="false"
            >
              <ion-icon name="nuclear-outline" class="tabIcon"></ion-icon>
              <small class="tabText">Dash Board</small>
            </button>
          </div>
          <div class="col">
            <button
              class="tabButton"
              id="list-bookTicket-list"
              data-bs-toggle="list"
              href="#list-bookTicket"
              aria-controls="list-bookTicket"
              aria-selected="false"
            >
              <ion-icon name="ticket-outline" class="tabIcon"></ion-icon>
              <small class="tabText">Book Tickets</small>
            </button>
          </div>
          <div class="col">
            <button
              class="tabButton"
              id="list-trackBus-list"
              data-bs-toggle="list"
              href="#list-trackBus"
              aria-controls="list-trackBus"
              aria-selected="false"
            >
              <ion-icon name="location-outline" class="tabIcon"></ion-icon>
              <small class="tabText">Track Buses</small>
            </button>
          </div>
          <div class="col">
            <button
              class="tabButton"
              id="list-profile-list"
              data-bs-toggle="list"
              href="#list-profile"
              aria-controls="list-profile"
              aria-selected="false"
            >
              <ion-icon name="person-circle-outline" class="tabIcon"></ion-icon>
              <small class="tabText">Profile</small>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--Navbar End-->

    <!--Render Pages Start-->
    <div class="tabsRenderArea mt-2">
      <div class="tab-content" id="nav-tabContent">
        <div
          class="tab-pane fade"
          id="list-dashBoard"
          role="tabpanel"
          aria-labelledby="list-dashBoard-list"
          style="height: 100vh"
        >
        <iframe id="frame" style="width: 100%; height: 100%;" src="userDashBoard.html"></iframe>
        </div>
        <div
          class="tab-pane fade mt-0"
          id="list-bookTicket"
          role="tabpanel"
          aria-labelledby="list-bookTicket-list"
          style="height: 100vh"
        >
          <iframe id="frame" style="width: 100%; height: 100%;" src="findTicketforInterface.html"></iframe>
        </div>
        <div
          class="tab-pane fade mt-1"
          id="list-trackBus"
          role="tabpanel"
          aria-labelledby="list-trackBus-list"
          style="height: 100vh"
        >
          <iframe id="frame" style="width: 100%; height: 100%;" src="busTracking.html"></iframe>
        </div>
        <div
          class="tab-pane fade mt-1"
          id="list-profile"
          role="tabpanel"
          aria-labelledby="list-profile-list"
          style="height: 100vh"
          
        >
          <iframe id="frame" style="width: 100%; height: 100%;" src="profile.html"></iframe>
        </div>
      </div>
    </div>

    <!--Render Pages End-->

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

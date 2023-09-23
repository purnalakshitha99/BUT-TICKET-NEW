<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleabt.css">
    <title>About Us</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary navBar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">JourneyEase</a>
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
            <a href="findTickets.html">          
              <button class="btn btn-outline-warning buyticket-button" type="submit">
                Buy Tickets
              </button>
              </a>
            </form>
          </div>
        </div>
      </nav>
    <!--Navbar End-->
    
    <!--Niwandi Content Start-->
    <div class="heading mt-2">
        <h1>About Us</h1>
        <p><b>Our aim is to provide long-distance travelers with the convenience
                of booking bus seats to anywhere in Sri Lanka from a single, centralized platform.</b></p>

    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="about us bus.jpeg" alt="">
            </div>
            <div class="about-content">
                
                <p>At CityTravels, we are passionate about providing you with a seamless and hassle-free
                    bus ticket booking experience. Our mission is to connect travelers to their desired destinations
                    with comfort, safety, and efficiency. CityTravels is a revolutionary bus ticket booking platform,
                    established with a mission to provide travelers with a seamless and hassle-free experience.
                    Our extensive network of bus routes connects cities and towns across Sri Lanka,
                    offering easy online booking with flexible ticket options. We prioritize your safety and
                    comfort by partnering with reputable bus operators, and our real-time updates keep you informed
                    throughout your journey.<span id="dots">...</span><span id="more">
                        With 24/7 customer support and a dedicated team, we are committed to delivering delightful
                        travel experiences and invite you to join us on this exciting adventure.<br>

                        CityTravels is your convenient bus ticket booking platform, aiming to revolutionize the way
                        travelers book their journeys. Our user-friendly website and mobile app make booking easy,
                        while an extensive route network covers cities and towns throughout Sri Lanka. With a focus on
                        safety and comfort, we partner with reputable bus operators and
                        provide real-time updates on bus timings. Our commitment to excellent service is backed by
                        round-the-clock customer support, ensuring you have a memorable and worry-free travel
                        experience.
                        Join CityTravels today and discover the ease and convenience of bus ticket booking with
                        us!</span></p>

                <button onclick="myFunction()" id="myBtn" class="read-more">Read more</button>

                <script>
                    function myFunction() {
                        var dots = document.getElementById("dots");
                        var moreText = document.getElementById("more");
                        var btnText = document.getElementById("myBtn");

                        if (dots.style.display === "none") {
                            dots.style.display = "inline";
                            btnText.innerHTML = "Read more";
                            moreText.style.display = "none";
                        } else {
                            dots.style.display = "none";
                            btnText.innerHTML = "Read less";
                            moreText.style.display = "inline";
                        }
                    }
                </script>
            </div>
        </section>
    </div>
    <!--Niwandi content End-->
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
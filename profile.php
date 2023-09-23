<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>

    <!--add external files-->
    <link rel="Stylesheet" href="css/navbar.css" />
    <script src="navbar.js"></script>

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
      rel="stylesheet"
    />

    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
    ></script>

    <style>
      			/* Hide scrollbar for Chrome, Safari and Opera */
                  body::-webkit-scrollbar {
                      display: none;
                  }

                  /* Hide scrollbar for IE, Edge and Firefox */
                  body {
                      -ms-overflow-style: none;
                      /* IE and Edge */
                      scrollbar-width: none;
                      /* Firefox */
                  }
              
    </style>
  </head>
  <body>
    <section style="background-color: #eee; padding-top: 50px">
      <div class="container py-5 mt-2">
        <!--nav bar-->
        <br />
        <div class="row">
          <div class="col">
            <nav class="bg-light rounded-3 p-3 mb-4">
              <ol class="breadcrumb mb-0">
                <li>Home ></li>

                <li>Passenger</li>
              </ol>
            </nav>
          </div>
        </div>

        <!--user Information-->
        <div class="row">
          <!--propic and name-->
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body text-center">
                <img
                  src="th.JPG"
                  alt="avatar"
                  class="rounded-circle img-fluid"
                  style="width: 150px"
                />

                <div class="d-flex justify-content-center mb-2">
                  <button type="button" class="btn btn-primary">
                    Edit Profile
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <!--main information-->
            <div class="card mb-2">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4"><p class="mb-0">Full Name</p></div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-4"><p class="mb-0">Contact Number</p></div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-4"><p class="mb-0">Gender</p></div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-4"><p class="mb-0">Email</p></div>
                </div>
                <hr />
                <br />
                <div class="d-flex justify-content-center mb-2">
                  <a href="Seat Booking History.html"
                    ><button type="button" class="btn btn-primary">
                      Booking History
                    </button></a
                  >
                </div>
              </div>
            </div>

            <!--praposals-->
            <br />
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

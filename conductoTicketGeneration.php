<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UserDashBoard</title>
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
    <style>
      body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
      }
      header {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
      }
      main {
        padding: 20px;
      }
      table {
        width: 100%;
        border-collapse: collapse;
      }
      th,
      td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }
      th {
        background-color: #f2f2f2;
      }
      tr:hover {
        background-color: #f2f2f2;
      }
      footer {
        background-color: #555;
        color: #fff;
        padding: 10px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="row text-center">
      <div class="col">
        <h2>Booked seats</h2>
      </div>
    </div>

    <main>
      <table>
        <thead>
          <tr>
            <th>Booking ID</th>
            <th>Seat Number</th>
            <th>Date</th>
            <th>Time</th>
            <th>Customer Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>A1</td>
            <td>2023-07-20</td>
            <td>15:00</td>
            <td>John Doe</td>
            <td class="text-center"><!--Ticket Generation POPUP Start-->
                <!-- Button trigger modal -->
                <button
                  type="button"
                  class="btn btn-outline-warning ticketGenerationBTN"
                  data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop"
                >
                  Generate Ticket
                </button>
            
                <!-- Modal -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!--Ticket Generation Body Start-->
                            <div class="row">
                            <div class="headline text-center" >
                            <h4>Grab Your Ticket</h4>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                            <div class="col-8 table ">
                                <table class="table">                        
                                    <tbody>
                                      <tr>                            
                                        <td class="text-center"><strong>Coustomer Id : </strong></td>
                                        <td>abcd1234</td>                            
                                      </tr>
                                      <tr>                            
                                        <td class="text-center"><strong>Bus Register No : </strong></td>
                                        <td>NC WE 1234</td>                            
                                      </tr>
                                      <tr>                            
                                        <td class="text-center"><strong>Departure Date : </strong></td>
                                        <td>12.12.2023</td>                            
                                      </tr>
                                      <tr>                            
                                        <td class="text-center"><strong>Departure Place : </strong></td>
                                        <td>Badulla</td>                            
                                      </tr>                            
                                      <tr>
            
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                            <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="text-center">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=testticket12345" alt="" class="qrImage">                        
                                </div>                    
                                <label class="text-center mt-2">Scan this QR to varify</label>
                                <br>
                                <label class="text-center"><strong>Ticked ID : testticket12345</strong></label>
                            </div>
                            <div class="row">
                                <br>
                                <div class="col text-center">
                                <button type="button"
                                class="btn btn-success">
                                    Download PDF<ion-icon name="document-outline"></ion-icon>
                                </button>
                                </div>
                            </div>
            
                            
            
                            </div>
                        </div>
                        <!--Ticket Generation Body End-->
                      </div>          
                    </div>
                  </div>
                </div>
                <!--Ticket Generation POPUP End-->
              </body></td>
          </tr>
          <tr>
            <td>2</td>
            <td>B5</td>
            <td>2023-07-21</td>
            <td>18:30</td>
            <td>Jane Smith</td>
            <td class="text-center"><!--Ticket Generation POPUP Start-->
                <!-- Button trigger modal -->
                <button
                  type="button"
                  class="btn btn-outline-warning ticketGenerationBTN"
                  data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop"
                >
                  Generate Ticket
                </button>
            
                <!-- Modal -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!--Ticket Generation Body Start-->
                            <div class="row">
                            <div class="headline text-center" >
                            <h4>Grab Your Ticket</h4>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                            <div class="col-8 table ">
                                <table class="table">                        
                                    <tbody>
                                      <tr>                            
                                        <td class="text-center"><strong>Coustomer Id : </strong></td>
                                        <td>abcd1234</td>                            
                                      </tr>
                                      <tr>                            
                                        <td class="text-center"><strong>Bus Register No : </strong></td>
                                        <td>NC WE 1234</td>                            
                                      </tr>
                                      <tr>                            
                                        <td class="text-center"><strong>Departure Date : </strong></td>
                                        <td>12.12.2023</td>                            
                                      </tr>
                                      <tr>                            
                                        <td class="text-center"><strong>Departure Place : </strong></td>
                                        <td>Badulla</td>                            
                                      </tr>                            
                                      <tr>
            
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                            <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="text-center">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=testticket12345" alt="" class="qrImage">                        
                                </div>                    
                                <label class="text-center mt-2">Scan this QR to varify</label>
                                <br>
                                <label class="text-center"><strong>Ticked ID : testticket12345</strong></label>
                            </div>
                            <div class="row">
                                <br>
                                <div class="col text-center">
                                <button type="button"
                                class="btn btn-success">
                                    Download PDF<ion-icon name="document-outline"></ion-icon>
                                </button>
                                </div>
                            </div>
            
                            
            
                            </div>
                        </div>
                        <!--Ticket Generation Body End-->
                      </div>          
                    </div>
                  </div>
                </div>
                <!--Ticket Generation POPUP End-->
              </body></td>
          </tr>
          <!-- Add more rows for additional booked seats -->
        </tbody>
      </table>
    </main>
  </body>
</html>

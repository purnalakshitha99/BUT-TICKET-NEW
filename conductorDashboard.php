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
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>A1</td>
            <td>2023-07-20</td>
            <td>15:00</td>
            <td>John Doe</td>
          </tr>
          <tr>
            <td>2</td>
            <td>B5</td>
            <td>2023-07-21</td>
            <td>18:30</td>
            <td>Jane Smith</td>
          </tr>
          <!-- Add more rows for additional booked seats -->
        </tbody>
      </table>
    </main>
  </body>
</html>

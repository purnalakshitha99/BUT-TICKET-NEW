<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Conductor Location Update</title>
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
      form {
        display: flex;
        flex-direction: column;
        max-width: 300px;
        margin: 0 auto;
      }
      label {
        margin-bottom: 5px;
      }
      input[type="text"] {
        padding: 8px;
        margin-bottom: 10px;
      }
      input[type="submit"] {
        background-color: #333;
        color: #fff;
        padding: 10px;
        cursor: pointer;
        border: none;
      }
      input[type="submit"]:hover {
        background-color: #444;
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
    <div class="row text-center mt-2">
      <div class="col">
        <h2>Location and Situation Update</h2>
      </div>
    </div>
    <hr />
    <main>
      <form id="locationForm">
        <label for="conductorID">Time:</label>
        <input type="text" id="conductorID" name="conductorID" required />

        <label for="latitude">Current Position:</label>
        <input type="text" id="latitude" name="latitude" required />

        <label for="longitude">Special Notice:</label>
        <input type="text" id="longitude" name="longitude" required />

        <a href="Situation Update 2.html"
          ><input type="submit" value="Update Location"
        /></a>
      </form>
    </main>
  </body>
</html>

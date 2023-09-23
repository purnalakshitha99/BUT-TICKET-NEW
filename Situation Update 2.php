<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conductor Location</title>
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
        p {
            margin-bottom: 5px;
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
    <header>
        <h1>Conductor Location</h1>
    </header>
    <main>
        <p><strong>Time:</strong> <span id="conductorID"></span></p>
        <p><strong>Last Updated Location:</strong> <span id="location"></span></p>
        <p><strong>Special Notice:</strong> <span id="#"></span></p>
    </main>
    <footer>
        <p>&copy; 2023 Conductor Location. All rights reserved.</p>
    </footer>

    <script>
        const socket = new WebSocket('ws://your-backend-server-address');

        socket.onmessage = (event) => {
            const data = JSON.parse(event.data);
            document.getElementById('conductorID').textContent = data.conductorID;
            document.getElementById('location').textContent = `${data.latitude}, ${data.longitude}`;
        };
    </script>
</body>
</html>

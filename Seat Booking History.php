<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Booking History</title>
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
        th, td {
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
    <header>
        <h1>Seat Booking History</h1>
    </header>
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
                <!-- Add more rows for additional booking history -->
            </tbody>
        </table>
    </main>
    <footer>
        <p>&copy; 2023 Seat Booking History. All rights reserved.</p>
    </footer>
</body>
</html>

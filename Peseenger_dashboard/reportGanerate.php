<?php
// Include the database connection file
require_once('./includes/DbConnector_n.php');

// Retrieve data from the database (Assuming 'table1', 'table2', and 'table3' are your table names)
$sqlTable1 = "SELECT * FROM user";
$resultTable1 = $db->query($sqlTable1);
$table1Data = $resultTable1->fetch_all(MYSQLI_ASSOC);

$sqlTable2 = "SELECT * FROM route";
$resultTable2 = $db->query($sqlTable2);
$table2Data = $resultTable2->fetch_all(MYSQLI_ASSOC);

$sqlTable3 = "SELECT * FROM feedback";
$resultTable3 = $db->query($sqlTable3);
$table3Data = $resultTable3->fetch_all(MYSQLI_ASSOC);

// Perform calculations
$calculationResult1 = 0;
foreach ($table1Data as $row) {
    $calculationResult1 += $row['column_to_calculate']; // Replace 'column_to_calculate' with the actual column name
}

// Generate the PDF
require_once('tcpdf/tcpdf.php');

$pdf = new TCPDF();
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();

// Add tables and calculation results to the PDF
// Customize the layout and content as needed

$pdf->MultiCell(0, 10, 'Table 1 Data:', 0, 'L');
foreach ($table1Data as $row) {
    // Output each row of data as needed
    // ...
}

$pdf->MultiCell(0, 10, 'Table 2 Data:', 0, 'L');
foreach ($table2Data as $row) {
    // Output each row of data as needed
    // ...
}

$pdf->MultiCell(0, 10, 'Table 3 Data:', 0, 'L');
foreach ($table3Data as $row) {
    // Output each row of data as needed
    // ...
}

$pdf->MultiCell(0, 10, 'Calculation Results:', 0, 'L');
$pdf->MultiCell(0, 10, "Result 1: $calculationResult1", 0, 'L');

// Output the PDF for download
$pdf->Output('report.pdf', 'D');

// Close the database connection (not required, as it will be closed when the script ends)
// $db->close();
?>



<!DOCTYPE html>
<html>

<head>
    <title>PDF Report Generator</title>
    <style>
        /* Add your CSS styles here for page layout and elements */
    </style>
</head>

<body>
    <h1>PDF Report Generator</h1>

    <!-- Add any other input fields or elements needed for user input -->
    <!-- For simplicity, let's assume no user input is required in this example -->

    <button type="button" onclick="generatePDF()">Generate PDF</button>

    <script>
        function generatePDF() {
            // You can add JavaScript here if you need to perform any client-side actions before generating the PDF.

            // Trigger the server-side PHP script to generate the PDF
            fetch('generate_pdf.php', {
                    method: 'POST',
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.blob();
                })
                .then(blob => {
                    // Create a download link for the generated PDF
                    var url = window.URL.createObjectURL(blob);
                    var a = document.createElement('a');
                    a.href = url;
                    a.download = 'report.pdf';
                    document.body.appendChild(a);
                    a.click();
                    window.URL.revokeObjectURL(url);
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }
    </script>
</body>

</html>
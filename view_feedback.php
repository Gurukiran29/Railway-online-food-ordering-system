<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto; /* Center the table on the page */
        }

        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Feedback Details</h1>

    <?php
    // Establish a database connection
    $conn = new mysqli('localhost', 'root', '', 'customer_details');
    
    // Check the connection
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    // Fetch data from the feedback table
    $sql = "SELECT * FROM feedback";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr><th>User ID</th><th>Comment</th><th>Date</th></tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['user_id'] . '</td>';
            echo '<td>' . $row['comment'] . '</td>';
            echo '<td>' . $row['date'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No feedback data found.';
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>

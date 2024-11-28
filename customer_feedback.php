<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: white;
        }

        h1 {
            font-size: 30px;
            text-align: center;
            color: #3498db; /* Change the text color to a nice blue */
            margin-top: 100px; /* Add some top margin for spacing */
        }

        .container {
            text-align: center;
            margin-top: 20px; /* Adjust the margin as needed */
        }

        .confirmation-message {
            font-size: 18px;
            background-color: #f2f2f2; /* Light gray background color */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            margin-top: 20px;
        }

        .back-button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            margin-top: 20px;
            display: inline-block;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #2980b9; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <?php
    $user_id = $_GET["user_id"];
    $comments = $_GET["comment"];
    $conn = new mysqli('localhost', 'root', '', 'customer_details');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO feedback(user_id, comment) VALUES (?, ?)");
        $stmt->bind_param("is", $user_id, $comments);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
    ?>
    <div class="container">
        <h1>Your Feedback Is Stored</h1>
        <div class="confirmation-message">
            Thank you for your feedback. We appreciate your input.
        </div>
        <a href="index.php" class="back-button">Back to Previous Page</a>
    </div>
</body>
</html>

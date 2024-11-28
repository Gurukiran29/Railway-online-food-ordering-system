<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 30px;
            text-align: center;
            margin-top: 50px;
            color: #eeaeab;  
        }

        form {
            text-align: center;
            margin: 0 auto;
            width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff; /* Change to blue */
            color: #fff;
            border: none;
            font-size: 20px;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>

<body>
    <?php
    $name = $_GET["user_id"];
    $trainname = $_GET["trainno"];
    $coach = $_GET["coach"];
    $seatnum = $_GET["seat"];
    $food_name = $_GET["fooditems"];
    $quantity = $_GET["quantity"];
    $waterbottle = $_GET["waterbottle"];
    $conn = new mysqli('localhost', 'root', '', 'customer_details');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO registration_1 (user_id, trainno, coach, seat, food_name, quantity, waterbottle) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("issisii", $name, $trainname, $coach, $seatnum, $food_name, $quantity, $waterbottle);
        $stmt->execute();
        echo "<h1>ORDER IS PLACED</h1>";
        $stmt->close();
        $conn->close();
    }
    ?>

    <form action="customer_feedback.php" method="GET">
        <label for="user_id">Enter your User_id:</label>
        <input type="number" name="user_id"><br>
        <label for="comment">Enter your feedback:</label>
        <textarea name="comment" rows="5" cols="40"></textarea><br>
        <input type="submit" value="Submit Feedback">
    </form>
</body>

</html>

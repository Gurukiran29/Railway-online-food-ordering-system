<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-image: url("packaged.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
            font-family: Century, sans-serif;
            font-weight: bold;
            margin: 50px 0 20px 0;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin: 0 auto;
            background-color:#ababab;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #cccccc;
            color: black;
        }

        .delete {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete:hover {
            background-color: #ff3333;
        }

        .logout-button {
            margin: 20px 50px 0 650px;
            font-size: 20px;
            border-radius: 15px;
            background-color: red;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
        }

        .logout-button:hover {
            background-color: #ff3333;
        }
    </style>
</head>

<body>
    <?php
    $trainname = $_GET["trainname"];
    $conn = mysqli_connect('localhost', 'root', '', 'customer_details');
    $query = "SELECT * FROM registration_1 r, customer_account c WHERE trainno = '$trainname' AND c.user_id = r.user_id";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if ($total != 0) {
    ?>
        <h1>ALL ORDERS</h1>
        <table>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Number</th>
                <th>Train Name</th>
                <th>Coach Name</th>
                <th>Seat</th>
                <th>Food</th>
                <th>Quantity</th>
                <th>Water Bottle</th>
                <th>Order Date</th>
                <th>Delivered</th>
                <th>Deliver</th>
            </tr>
            <?php
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<tr>
                 <td>" . $result["user_id"] . "</td>
                 <td>" . $result["name"] . "</td>
                 <td>" . $result["Number"] . "</td>
                 <td>" . $result["trainno"] . "</td>
                 <td>" . $result["coach"] . "</td>
                 <td>" . $result["seat"] . "</td>
                 <td>" . $result["food_name"] . "</td>
                 <td>" . $result["quantity"] . "</td>
                 <td>" . $result["waterbottle"] . "</td>
                 <td>" . $result["ord_date"] . "</td>
                 <td>" . $result["delivered"] . "</td>
                 <td><a href='delete_if_delivered.php?name=$result[user_id]'>
                 <button class='delete'>Yes</button></a></td>
                 </tr> ";
            }
            } else {
                echo "<h1>No Orders Found</h1>";
            }
            ?>
        </table><br>
        <a href="logout.php" class="logout-button">Logout</a>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: #cccdef;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: black;
            font-family: Century, sans-serif;
            font-weight: bold;
            margin: 20px 0 0 0;
            text-align: center;
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        .table {
            background-color: #f0f0f0;
            color: black;
            margin: 20px auto;
            width: 90%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 2px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .table th {
            background-color: #cccccc;
            font-weight: bold;
        }

        .table tr:nth-child(even) {
            background-color: #e0e0e0;
        }

        .table tr:nth-child(odd) {
            background-color: #f0f0f0;
        }

        .delete {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .delete:hover {
            background-color: #ff0000;
        }

        .logout-button {
            background-color: red;
            color: white;
            border: none;
            font-size: 20px;
            border-radius: 15px;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            margin: 20px 50px 0 650px;
        }

        .logout-button:hover {
            background-color: #ff0000;
        }
    </style>
</head>

<body>
    <h1>ALL DELIVERY PERSONS</h1>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'customer_details');
    $query = "select * from seller_information_1";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if ($total != 0) {
    ?>
        <table class="table">
            <tr>
                <th width="2%">Delivery Person ID</th>
                <th width="10%">Name</th>
                <th width="10%">Number</th>
                <th width="15%">Email</th>
            </tr>
            <?php
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<tr>
                <td>" . $result["delivery_person_id"] . "</td>
                <td>" . $result["name"] . "</td>
                <td>" . $result["Number"] . "</td>
                <td>" . $result["Email"] . "</td>
                </tr>";
            }
            ?>
        </table>
    <?php
    } else {
        echo "<h1>No Delivery Persons Found</h1>";
    }
    ?>
    <a href="logout1.php" class="logout-button">Logout</a>
</body>

</html>

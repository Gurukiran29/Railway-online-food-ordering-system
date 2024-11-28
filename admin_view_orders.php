<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            text-align: center;
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 30px;
            background-color: #333;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
        }

        .dashboard-links {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .dashboard-button {
            background-color: #ddeeff;
            color: #333;
            border: 2px solid green;
            font-size: 20px;
            border-radius: 5px;
            padding: 10px 20px;
            margin: 10px 0;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .dashboard-button:hover {
            background-color: #ddbbaa;
        }
    </style>
</head>

<body>
    <h1>Admin Dashboard</h1>
    <div class="dashboard-links">
        <a href="total_orders.php" class="dashboard-button">View Orders</a>
        <a href="total_deliveryperson.php" class="dashboard-button">View Delivery Persons</a>
        <a href="new_admin.php" class="dashboard-button">Create New Admin</a>
        <a href="newaccount.php" class="dashboard-button">Create New Delivery Person's Account</a>
        <a href="view_feedback.php" class="dashboard-button">view feedback</a>
    </div>
</body>

</html>

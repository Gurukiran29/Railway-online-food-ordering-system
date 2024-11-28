<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 35px;
            background-color: #ccaacc;
            font-family: Century, sans-serif;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        form {
            text-align: center;
            margin: 0 auto;
            width: 50%;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        input[type="number"],
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #aabbcc;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ddeeff;
        }
    </style>
</head>

<body>
    <h1>CREATE YOUR NEW ACCOUNT</h1>
    <form action="admin_new_account.php" method="GET" autocomplete="off">
        <label for="admin_id">Create your admin_id:</label>
        <input type="number" name="admin_id" id="admin_id" placeholder="Only numbers" pattern="[0-9]{10}" required><br>

        <label for="name">Enter your Name:</label>
        <input type="text" name="name" id="name" placeholder="Name" required><br>

        <label for="number">Enter your Number:</label>
        <input type="text" name="number" id="number" placeholder="Number" pattern="[0-9]{10}" required><br>

        <label for="address">Enter your Address:</label>
        <input type="text" name="address" id="address" placeholder="Address" required><br>

        <label for="email">Enter your Email:</label>
        <input type="email" name="email" id="email" placeholder="Valid Email" required><br>

        <label for="password">Create Your Password:</label>
        <input type="password" name="password" id="password" placeholder="Password" required><br>

        <input type="submit" value="CREATE ACCOUNT">
    </form>
</body>

</html>
s
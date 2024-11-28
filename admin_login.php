<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: #abcdef;
            color: black;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: white;
            font-size: 30px;
            background-color: black;
            font-family: Century, sans-serif;
            text-align: center;
            padding: 10px 0;
        }

        p {
            text-align: center;
            color: black;
        }

        form {
            text-align: center;
            margin: 0 auto;
            width: 50%;
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        input[type="number"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            font-size: 20px;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>RAILWAY ONLINE FOOD ORDERING</h1>
    <p title="Admin login page"><strong>DBMS MINI PROJECT BY ABHISHEK AND GURUKIRAN.M</strong></p>
    <form action="adminlogindetails.php" method="GET">
        <label for="admin_id">Enter your Admin ID:</label>
        <input type="number" name="admin_id" placeholder="Admin ID"><br>
        <label for="email">Enter your E-MAIL:</label>
        <input type="email" name="email" placeholder="E-mail"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" value="LOG IN">
    </form>
</body>

</html>

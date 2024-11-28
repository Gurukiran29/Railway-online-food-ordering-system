<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: #dddddd;
            background-image: url("th (6).jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
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
            color: white;
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
    <p title="deliver person login page" style="color: white;"><strong>DBMS MINI PROJECT BY ABHISHEK AND GURUKIRAN.M</strong></p>
    <p>TO DELIVER THE FOOD, LOG IN</p>
    <form action="logindetails.php" method="GET">
        <label for="email">Enter your E-MAIL:</label>
        <input type="email" name="email" placeholder="E-mail" style="margin: 10px 0;"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password" style="margin: 10px 0;"><br>
        <input type="submit" value="LOG IN">
    </form>
</body>

</html>

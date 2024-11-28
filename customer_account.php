<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-color: white;
            background-image: url("th (7).jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: right top;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 35px;
            background-color: #ccaacc;
            font-family: Century, sans-serif;
            text-align: center;
            padding: 10px 0;
        }

        form {
            text-align: center;
            font-weight: bold;
            margin: 0 auto;
            width: 90%; /* Adjust width for smaller screens */
            max-width: 500px; /* Set a maximum width to prevent it from stretching too much */
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        input[type="number"],
        input[type="text"],
        input[type="email"] {
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

        /* Add media query for screens smaller than 600px */
        @media (max-width: 600px) {
            h1 {
                font-size: 28px;
            }
            form {
                width: 100%;
                padding: 10px;
            }
            input[type="submit"] {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>
    <h1>ENTER YOUR DETAILS</h1>
    <form action="customer_new_account.php" method="GET" autocomplete="off">
        <label for="user_id">Create your User_id:</label>
        <input type="number" name="user_id" placeholder="Only Numbers" pattern="[0-9]{10}" required><br>
        <label for="name">Enter your Name:</label>
        <input type="text" name="name" placeholder="Name" required><br>
        <label for="number">Enter your Number:</label>
        <input type="text" name="number" placeholder="Number" pattern="[0-9]{10}" required><br>
        <label for="email">Enter your Email:</label>
        <input type="email" name="email" required placeholder="Valid Email"><br>
        <input type="submit" value="CREATE ACCOUNT">
    </form>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: #bbbbcc;
            background-image: url("th (9).jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        form {
            text-align: center;
            font-weight: bold;
            font-size: 30px;
            font-family: Century, sans-serif;
            text-align: center;
            padding: 20px;
        }

        select {
            font-size: 20px;
            padding: 10px;
            border-radius: 5px;
            border: 2px solid #777;
            background-color: #ddeeff;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            font-size: 30px;
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
    <form action="data_fetch.php" method="GET">
        <p>Enter your train Name:
            <select name="trainname">
                <option value="">Select your train</option>
                <option value="Tirupati Express">Tirupati Express</option>
                <option value="Karnataka Express">Karnataka Express</option>
                <option value="Panchaganga Express">Panchaganga Express</option>
                <option value="Manglore Express">Manglore Express</option>
                <option value="Banglore Express">Banglore Express</option>
                <option value="Delhi Express">Delhi Express</option>
            </select>
        </p><br>
        <input type="submit" value="OK">
    </form>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-image: url("th (1).jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: black;
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
            font-weight: bold;
            margin: 0 auto;
            width: 50%;
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        input[type="number"],
        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            background-color: white;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            font-size: 20px;
            border-radius: 50px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        address {
            color: white;
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>RAILWAY ONLINE FOOD ORDERING</h1>
    <p title="dbms project"><strong>DBMS MINI PROJECT BY ABHISHEK AND GURUKIRAN.M</strong></p>
    <p>TO ORDER YOUR FOOD, PLEASE ENTER THE BELOW DETAILS</p>
    <form action="details.php" method="GET" autocomplete="off">
        <label for="user_id">Enter Your User_id:</label>
        <input type="number" name="user_id" placeholder="Enter User_id"><br>
        <label for="trainno">Enter your Train Name:</label>
        <select name="trainno">
            <option value="">Select your train</option>
            <option value="Tirupati Express">Tirupati Express</option>
            <option value="Karnataka Express">Karnataka Express</option>
            <option value="Karnataka Express">Karnataka Express</option>
            <option value="Panchaganga Express">Panchaganga Express</option>
            <option value="Manglore Express">Manglore Express</option>
            <option value="banglore Express">banglore Express</option>
            <option value="delhi Express">delhi Express</option>
 
        </select><br>
        <label for="coach">Coach Name:</label>
        <select name="coach">
            <option value="">Select your coach</option>
            <option value="SLR Sitting AND Luggage">SLR Sitting AND Luggage</option>
            <option value="UR General Compartment">UR General Compartment</option>
<option value="H1-First Class AC">H1-First Class AC</option>
<option value="A1-AC2-Tier">A1-AC2-Tier</option>
<option value="B1-AC3-Tier">B1-AC3-Tier</option>
<option value="B2-AC3-Tier">B2-AC3-Tier</option>
<option value="S1-Sleeper">S1-Sleeper</option>
<option value="S2-Sleeper">S2-Sleeper</option>
<option value="S3-Sleeper">S3-Sleeper</option>
<option value="S4-Sleeper">S4-Sleeper</option>
<option value="S5-Sleeper">S5-Sleeper</option>
        </select><br>
        <label for="seat">Your Seat Number:</label>
        <input type="text" name="seat" required placeholder="Seat Number"><br>

        <h1 style="color:white;">PLEASE SELECT YOUR FOOD</h1>
        <form action="foodorders.php" method="get">
            <label for="fooditems">Select Your Food:</label>
            <select name="fooditems">
                <option value="">Select your food</option>
                <option value="Lemon Rice">Lemon Rice</option>
                <option value="IDLI">IDLI</option>
<option value="VEG BIRYANI">VEG BIRYANI</option>
<option value="BIRYANI">BIRYANI</option>
<option value="RICE BATH">RICE BATH</option>
<option value="EGG BIRYANI">EGG BIRYANI</option>
<option value="CHAPATHI">CHAPATHI</option>
<option value="DOSA">DOSA</option>
            </select><br>
            <label for="quantity">Quantity:</label>
            <select name="quantity">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
            </select><br>
            <label for="waterbottle">Water Bottle:</label>
            <select name="waterbottle">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
            </select><br>
            <input type="submit" value="Submit Order">
        </form>
        <address>
            Code written by<br>
            Abhishek and Gurukiran<br>
            To contact us, use <br>
            <a href="mailto:hpabhishek833@gmail.com" target="_self">Email</a><br>
        </address>
    </form>
</body>

</html>

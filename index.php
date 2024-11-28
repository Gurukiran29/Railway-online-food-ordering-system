<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-image: url("new train.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        .login-links {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .login-button {
            background-color: #ffa500; /* Orange background color */
            border: 2px solid #ffa500; /* Orange border */
            font-size: 20px;
            border-radius: 5px;
            padding: 10px 20px;
            margin: 10px 0;
            text-decoration: none;
            color: black; /* White text color */
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #ff7f00; /* Darker orange on hover */
        }

        h1 {
            font-size: 40px;
            color: black;
            margin-bottom: 30px;
        }

        p {
            font-size: 20px;
            color: black;
        }

        .project-info {
            position: absolute;
            bottom: 10px;
            left: 10px;
            font-size: 14px;
            color: #fff;
        }

        /* Add media query for screens smaller than 600px */
        @media (max-width: 600px) {
            h1 {
                font-size: 30px;
            }
            p {
                font-size: 16px;
            }
            .login-button {
                font-size: 16px;
                padding: 8px 16px;
            }
        }
    </style>
</head>

<body>
    <div class="login-links">
        <h1>RAILWAY ONLINE FOOD ORDERING</h1>
        <p>To access your account, please select the appropriate login option:</p>
        <a href="customer_account.php" class="login-button">Customer Login</a>
        <a href="delivery_Person_login.php" class="login-button">Delivery Person Login</a>
        <a href="admin_login.php" class="login-button">Admin Login</a>
    </div>
    <div class="project-info">
        DBMS MINI PROJECT BY ABHISHEK AND GURUKIRAN
    </div>
</body>

</html>

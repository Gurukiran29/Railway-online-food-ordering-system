<?php
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        /* Center-align and style the messages */
        .message-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .message {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>

<?php
// Check if the user_id parameter is present in the URL
if(isset($_GET['name'])) {
    $user_id = $_GET['name'];

    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($conn, "DELETE FROM registration_1 WHERE user_id =?");
    
    if($stmt) {
        // Bind the parameter
        mysqli_stmt_bind_param($stmt, "s", $user_id);
        
        // Execute the statement
        if(mysqli_stmt_execute($stmt)) {
            if(mysqli_stmt_affected_rows($stmt) > 0) {
                echo '<div class="message-container"><div class="message">Order Delivered</div></div>';
            } else {
                echo '<div class="message-container"><div class="message">Order not found for deletion.</div></div>';
            }
        } else {
            echo '<div class="message-container"><div class="message">Error executing the DELETE query: ' . mysqli_error($conn) . '</div></div>';
        }
        
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo '<div class="message-container"><div class="message">Error in prepared statement: ' . mysqli_error($conn) . '</div></div>';
    }
} else {
    echo '<div class="message-container"><div class="message">Missing user_id parameter.</div></div>';
}

// Close the database connection
mysqli_close($conn);
?>

</body>
</html>

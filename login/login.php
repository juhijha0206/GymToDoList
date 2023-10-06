<?php
session_start();
require_once("../database/config.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

  
    $conn = new mysqli(host, user, password, db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query if the user exists
    $query = "SELECT * FROM registereduser WHERE username = ?";

    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();

        // Geting result
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // User exists, fetching the stored password
            $row = $result->fetch_assoc();
            $stored_password = $row["password"];

            if (password_verify($password, $stored_password)) {
                // Password is correct, user is authenticated
                $_SESSION["username"] = $username;
                echo '<script>
                alert("Welcome, ' . $username .' we hope you enjoy your fitness journey "  );
                setTimeout(function() {
                    window.location.href = "../mainPage/main.php";
                }, 1000);
            </script>';
            exit();
            } else {
                echo'<script>';
                echo 'alert("password incorrect.")';
                echo'</script>'; 
                      
            }
            
          
            $stmt->close();
        } else {
            echo'<script>';
            echo 'alert("User not found. Please register.")';
            echo'</script>';  
        }
    } 
    
    else {
        echo "Error: " . $conn->error;
    }

  
    $conn->close();
}
?>

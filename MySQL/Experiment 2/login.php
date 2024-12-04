<?php

session_start();


$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "student_db";     


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$student_id = $password_input = "";
$error_message = "";


if (isset($_SESSION['student_id'])) {
    echo "<h2>Welcome, " . $_SESSION['student_id'] . "!</h2>";
    echo "<p>You have successfully logged in.</p>";

    exit();  
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_id = $_POST['student_id'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM login WHERE student_id = '$student_id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        $row = $result->fetch_assoc();
        

        if (password_verify($password, $row['password'])) {

            $_SESSION['student_id'] = $student_id;
            header("Location: " . $_SERVER['PHP_SELF']);  
            exit();
        } else {
            $error_message = "Incorrect password.";
        }
    } else {
        $error_message = "Username not found.";
    }
}


$conn->close();
?>

<h2>Login</h2>

<?php

if ($error_message != "") {
    echo "<p style='color: red;'>$error_message</p>";
}
?>


<form method="POST" action="">
    Student ID: <input type="text" name="student_id" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>

<?php
session_start();
require 'config.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clean_input($_POST['name']);
    $dept = $_POST['dept'];
    $email = clean_input($_POST['email']);
    $mobile = $_POST['mobile'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $dob = clean_input($_POST['dob']);

    if (empty($name)) $errors[] = "Name is required";
    if (empty($dept)) $errors[] = "Departmnt is required";
    if (empty($email)) $errors[] = "Email is required";
    if (empty($mobile)) $errors[] = "Mobile is required";
    if (empty($_POST['password'])) $errors[] = "Password is required";
    if (empty($dob)) $errors[] = "Date of Birth is required";

    $check_email = mysqli_query($conn, "SELECT * FROM students WHERE email='$email'");
    if (mysqli_num_rows($check_email) > 0) {
        $errors[] = "Email already exists";
    }

    if (empty($errors)) {
        $query = "INSERT INTO students (name, dept, email, mobile, password, dob) 
                  VALUES ('$name','$dept', '$email', '$mobile', '$password', '$dob')";
        
        if (mysqli_query($conn, $query)) {
            header("Location: login.php");
            exit();
        } else {
            $errors[] = "Registration failed";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<center>
    <h2>Student Registration</h2>
    <?php 
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
    ?>
    <form method="POST">
        <input type="text" name="name" placeholder="Full Name" required><br><br>
        <input type="date" name="dob" placeholder="Date of Birth" required><br><br>
        <input type="text" name="dept" placeholder="Department" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="text" name="mobile" placeholder="Mobile No" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
</body>
</html>

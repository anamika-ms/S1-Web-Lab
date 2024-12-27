<?php

$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "student_db";     


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $age = $course = $email = "";


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_student'])) {

    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $class = $_POST['class'];


    $sql = "INSERT INTO students (student_id,name, age, class ) VALUES ('$student_id','$name', '$age', '$class')";

    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully.<br><br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$sql = "SELECT * FROM students";
$result = $conn->query($sql);

?>
<center>
<h2>Add New Student</h2>
<form method="POST" action="">
    Student ID: <input type="number" name="student_id" required><br><br>
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="text" name="age" required><br><br>
    Class: <input type="text" name="class" required><br><br>
    <input type="submit" name="add_student" value="Add Student">
</form>

<h3>Students Details</h3>

<?php

if ($result->num_rows > 0) {

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Class</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["student_id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["age"] . "</td>";
        echo "<td>" . $row["class"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No students found.";
}


$conn->close();
?>

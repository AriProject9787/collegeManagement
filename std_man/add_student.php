
    <!-- PHP Code: add_student.php -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = new mysqli("localhost", "root", "", "student_db");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $name = $_POST['name'];
        $age = $_POST['age'];
        $department = $_POST['department'];
        $regno=$_POST['regno'];
        echo "$regno";
        $sql = "INSERT INTO students (Reg_no,name, age, department) VALUES ('$regno','$name', '$age', '$department')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Student added successfully!$regno'); window.location.href = 'index.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    ?>

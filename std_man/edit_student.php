<!-- edit_student.php -->
<?php
$conn = new mysqli("localhost", "root", "", "student_db");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM students WHERE id=$id");
    $row = $result->fetch_assoc();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $roll_no = $_POST['Reg_no'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $department = $_POST['department'];
        $sql = "UPDATE students SET Reg_no='$roll_no', name='$name', age='$age', department='$department' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    echo "
    <form method='post'>
        <input type='text' name='Reg_no' value='{$row['Reg_no']}' required>
        <input type='text' name='name' value='{$row['name']}' required>
        <input type='number' name='age' value='{$row['age']}' required>
        <input type='text' name='department' value='{$row['department']}' required>
        <button type='submit' class='btn btn-success'>Update</button>
    </form>
    ";
}
$conn->close();
?>
<!-- display_students.php -->
<?php
$conn = new mysqli("localhost", "root", "", "student_db");
$result = $conn->query("SELECT * FROM students");
if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'><thead><tr><th>Reg_No</th><th>Name</th><th>Age</th><th>Department</th><th>Actions</th></tr></thead><tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['Reg_no']}</td>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            <td>{$row['department']}</td>
            <td>
                <a href='edit_student.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                <a href='delete_student.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm('Are you sure?')'>Delete</a>
            </td>
        </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<p>No students found.</p>";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details Maintenance</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Student Details Maintenance</h2>

        <!-- Add Student Form -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Add New Student</h5>
                <form action="add_student.php" method="post">
                    <div class="mb-3">
                        <label for="regno" class="form-label">Register No</label>
                        <input type="text" class="form-control" id="regno" name="regno" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" required>
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <input type="text" class="form-control" id="department" name="department" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Student</button>
                </form>
            </div>
        </div>

        <!-- Display Students -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Student List</h5>
                <?php include 'display_students.php'; ?>
            </div>
        </div>
    </div>
</body>

</html>
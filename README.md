# collegeManagement
Installation steps:
1)install xampp
2)launch xampp and start service apache and mysql
3)copy and paste a project on C:\xampp\htdocs (xampp installed location)
4)Setup mysql:
    open php myadmin link http://localhost/phpmyadmin/
    Execute a following query:
        create database coll_man;
        CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) UNIQUE NOT NULL,
            password_hash VARCHAR(255) NOT NULL,
            role ENUM('student', 'staff') NOT NULL
        );
        INSERT INTO users (email, password_hash, role) VALUES ('john.doe@example.com', 'mypassword123', 'student');

4)open link for login http://localhost/std_man/login/index.html
5)open link for register for admin page http://localhost/std_man/login/register.html

<?php

session_start();

if (isset($_POST['submitStudentLogin'])) {
    require_once '..\includes\connect.php';

    $usn = $conn->real_escape_string($_POST['usn']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "select * from student where usn = '$usn';";
    $result = $conn->query($sql);

    if ($result->num_rows !== 1) {
        echo "no result found";
        header("Location: ../student/login.php?login=invalid_login");
        exit();
    }

    if ($row = $result->fetch_assoc()) 
    {
        //hashing the password
        $hashedPassword = md5($password);
        //verify password
        if ($hashedPassword !== $row['password1']) {
            echo "invalid";
            header("Location: ../student/login.php?login=invalid_login");
            exit();
        }

        $_SESSION['usn'] = $row['usn'];
        header("Location: ../student/dashboard.php?login=success");
        exit();
    }
} else {
    echo "wtf";
    header('Location: ..\student\login.php');
    exit();
}

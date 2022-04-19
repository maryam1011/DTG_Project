<?php
session_start();

$error = array();

include_once('./includes/dbh.inc.php');

if (isset($_POST['log_in'])) {

    $username = mysqli_real_escape_string($conn, strip_tags($_POST['username']));
    $password = mysqli_real_escape_string($conn, strip_tags($_POST['password']));


    if (empty($username)) {

        array_push($error, "Username is Required");
    }

    if (empty($password)) {
        array_push($error, "Password is required");
    }

    if (count($error) == 0) {



        $query = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
        $results = mysqli_query($conn, $query);
        $resultCheck = mysqli_num_rows($results);

        if ($resultCheck == 1) {
            $row = mysqli_fetch_assoc($results);
            $userType = $row['type'];

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "تم تسجيل الدخول بنجاح";

            if ($userType == 'teacher') {
                $_SESSION['success'] = "تم تسجيل الدخول بنجاح";
                header("Location: T_Service.php");
            } else if ($userType == 'student') {
                $_SESSION['success'] = "تم تسجيل الدخول بنجاح";
                header("Location: S_Service.php");
            } else {
                echo '<h1>Error</h1>';
            }
        } else {


            array_push($error, "اسم المستخدم او كلمة المرور خاطئة");
        }
    }
}
    
    

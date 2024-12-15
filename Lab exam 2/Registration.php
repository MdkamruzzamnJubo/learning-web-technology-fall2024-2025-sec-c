<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $cpassword = trim($_POST['cpassword']);
    $id = trim($_POST['id']);

    if (empty($username) || empty($password) || empty($cpassword) || empty($id) || empty($role)) {
        echo "<h2>Registration Successful!</h2>";
        echo "<p><a href='Login.html'>Go to Login Page</a></p>";
    } 
    else if ($password !== $cpassword) {
        echo "Passwords do not match.";
    } 
    else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $user_data = "$username,$hashed_password,$role\n";
        file_put_contents("users.txt", $user_data, FILE_APPEND);

        header('Location: Login.php');
        exit;
    }
} else {

    header('Location: Registration.html');
    exit;
}
?>
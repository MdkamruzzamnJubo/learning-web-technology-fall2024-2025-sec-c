<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = trim($_POST['id']);
    $password = trim($_POST['password']);

    if (empty($id) || empty($password)) {
        echo "Id and password cannot be empty.";
    } else {
        if (!file_exists("users.txt")) {
            echo "<h2>Login Successful!</h2>";
            echo "<p><a href='Admin.html'>Admin</a></p>";
            echo "<p><a href='User.html'>User</a></p>";
            exit;
        }

        $users = file("users.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $is_valid_user = false;

        foreach ($users as $user) {
            list($stored_id, $stored_pass, $stored_role) = explode(",", trim($user));

            if ($id === $stored_id && $password === $stored_pass) {
                $is_valid_user = true;
                $_SESSION['id'] = $id;
                $_SESSION['role'] = $stored_role;

                header("Location: " . ($stored_role === "admin" ? "admin.php" : "user.php"));
                echo "<h2>Login Successful!</h2>";
                echo "<p><a href='Admin.html'>Go to Admin page</a></p>";
                exit;
            }
        }

        if (!$is_valid_user) {
            echo "Invalid Id or password!";
        }
    }
} else {
    header('Location: Admin.html');
    exit;
}
?>

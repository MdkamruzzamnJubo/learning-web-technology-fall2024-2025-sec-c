<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $errors = [];

    if (empty($email)) {
        $errors[] = "Email cannot be empty.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is not valid.";
    }

    if (empty($errors)) {
        echo "Email is valid!";
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>

<form method="post">
  <label for="email">Email:</label>
  <input type="text" id="email" name="email">
  <button type="submit">Submit</button>
</form>

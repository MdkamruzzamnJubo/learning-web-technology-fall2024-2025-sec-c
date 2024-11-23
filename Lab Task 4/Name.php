<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name cannot be empty.";
    }
    if (str_word_count($name) < 2) {
        $errors[] = "Name must contain at least two words.";
    }
    if (!preg_match("/^[a-zA-Z]/", $name)) {
        $errors[] = "Name must start with a letter.";
    }
    if (!preg_match("/^[a-zA-Z .-]+$/", $name)) {
        $errors[] = "Name can contain only letters, periods, or dashes.";
    }

    if (empty($errors)) {
        echo "Name is valid!";
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>
<html>
<head>
    <title>Home</title>
</head>
<form method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">
  <button type="submit">Submit</button>
</form>

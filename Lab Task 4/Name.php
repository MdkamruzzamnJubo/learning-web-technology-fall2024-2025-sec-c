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
        echo "<h2>Welcome, ".($name) . "!</h2>";
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>
<html>
<head>
    <title>NAME</title>
</head>
<form method="POST">
    <fieldset>
        <legend>Login</legend>
            <table>
                <tr>
                    <td>
                        Name : 
                    </td>
                    <td>
                        <input type="text" placeholder="" name="name"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" placeholder="submit" value="Login"/>
                        <input type="reset" placeholder="reset" name=""/> 
                    </td>
                </tr>
            </table>
    </fieldset>
</form>

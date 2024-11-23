<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['date'];
    $errors = [];

    if (empty($date)) {
        $errors[] = "Date cannot be empty.";
    }
    if (!preg_match("/^(0?[1-9]|[12][0-9]|3[01])-(0?[1-9]|1[0-2])-(195[3-9]|19[6-9][0-8])$/", $date)) {
        $errors[] = "Date must be in the format dd-mm-yyyy with valid values.";
    }

    if (empty($errors)) {
        echo "Date is valid!";
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}

?>

<form method="post">
  <label for="date">Date (dd-mm-yyyy):</label>
  <input type="text" id="date" name="date">
  <button type="submit">Submit</button>
</form>

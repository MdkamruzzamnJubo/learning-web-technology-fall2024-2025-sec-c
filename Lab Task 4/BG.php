<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['dropdown'])) {
        echo "<p>Please select an option from the dropdown.</p>";
    } else {
        echo "Selected option: " . $_POST['dropdown'];
    }
}

?>
<form method="post">
  <select name="dropdown">
    <option value="">Select an option</option>
    <option value="Option1">A+</option>
    <option value="Option2">B+</option>
    <option value="Option2">AB+</option>
    <option value="Option2">O+</option>
  </select>
  <button type="submit">Submit</button>
</form>

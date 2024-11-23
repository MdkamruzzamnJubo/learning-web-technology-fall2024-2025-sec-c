<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['option'])) {
        echo "<p>Please select at least one option.</p>";
    } else {
        echo "Option selected: " . $_POST['option'];
    }
}
?>
<form method="post">
  <label><input type="radio" name="option" value="Option1"> MAle</label>
  <label><input type="radio" name="option" value="Option2"> Female</label>
  <label><input type="radio" name="option" value="Option2"> Other</label>

  <button type="submit">Submit</button>
</form>

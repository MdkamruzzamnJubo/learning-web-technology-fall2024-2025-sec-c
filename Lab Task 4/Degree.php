<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['choices']) || count($_POST['choices']) < 2) {
        echo "<p>Please select at least two choices.</p>";
    } else {
        echo "Choices selected: " . implode(", ", $_POST['choices']);
    }
}

?>
<form method="post">
  <label><input type="checkbox" name="choices[]" value="Choice1"> SSC</label>
  <label><input type="checkbox" name="choices[]" value="Choice2"> HSC</label>
  <label><input type="checkbox" name="choices[]" value="Choice3"> BSc</label>
  <label><input type="checkbox" name="choices[]" value="Choice3"> MSc</label>

  <button type="submit">Submit</button>
</form>

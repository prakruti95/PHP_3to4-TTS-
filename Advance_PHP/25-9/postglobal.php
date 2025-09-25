<form method="post">
  Name: <input type="text" name="name">
  <input type="submit">
</form>

<?php

    echo "Hello, " . $_POST["name"];

?>

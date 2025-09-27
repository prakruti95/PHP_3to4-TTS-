<?php
// To delete a cookie, set its expiration to the past
setcookie("user", "", time() - 3600, "/");
setcookie("visit_time", "", time() - 3600, "/");

echo "Cookies deleted.";
?>

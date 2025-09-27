<?php
date_default_timezone_set("Asia/Kolkata");
setcookie("user", "topstech", time() + (86400 * 7), "/"); // Expires in 7 days
setcookie("visit_time", date("Y-m-d H:i:s"), time() + (86400 * 7), "/");

echo "Cookie has been set.";
?>

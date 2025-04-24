<?php
session_start();
session_destroy();
header("Location: loginpageforadmin.php");
exit();
?>

<?php

require"connection1.php";

?>

<?php
session_start();
session_destroy();
header("location:index.php?msg=2");
?>
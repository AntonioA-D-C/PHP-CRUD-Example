<?php
session_start();
session_unset();
session_destroy();
header('Location:/phpExample/index.php');
?>


<?php
session_start();
unset($_SESSION["names"]);
unset($_SESSION["emails"]);
unset($_SESSION["password"]);

header("location: login.php");

?>
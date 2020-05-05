<?php
session_start();
unset($_SESSION["uname"]);
// unset($_SESSION["boll"]);
header("Location: login.html");
?>

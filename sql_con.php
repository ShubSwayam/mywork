<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// if (session_status() == PHP_SESSION_NONE) {
// session_start();
// }

$link = mysqli_connect("localhost", "ss", "ss", "the_royal_palace") or die(mysqli_connect_error());

<?php 

$server = "localhost";
$admin = "root";
$pword = "";
$data = "case study";

$conn = mysqli_connect($server, $admin, $pword, $data);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
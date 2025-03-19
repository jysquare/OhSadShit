<?php
// Change this to your own configuration
$link = new mysqli('120.26.115.188','root','200467','kano');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
$ranking = "kano_rank";

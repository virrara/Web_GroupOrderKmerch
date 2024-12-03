<?php
$conn = new mysqli('localhost', 'root', '', 'db_go');
if( $conn->connect_error) {
    die('error : ('. $conn->connect_errno .')'.$conn->connect_error);
}
?>
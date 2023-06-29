<?php

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'loksewa_db';

$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
if($conn->connect_error){
    die('Connection Failed');
}

?>
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="submit_feedback"; // Database name
$tbl_name="feedback"; // Table name
// Connect to server and select database
$connection=mysqli_connect("$host", "$username", "$password")or die("cannot
connect");
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
  } else {
    echo "Connected to MySQL database successfully!";
  }
  
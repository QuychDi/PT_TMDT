<?php
$mysqli = new mysqli("localhost","root","","dochoitreem");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Khong the ket noi database" . $mysqli -> connect_error;
  exit();
}
?>
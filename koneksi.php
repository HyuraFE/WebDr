<?php

$conn = mysqli_connect("localhost","root","","astral");

if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
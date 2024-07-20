<?php
$conn = mysqli_connect("localhost","root","","astral");

if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

function query($query) {
    global $conn;
    $result =mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $user_name = htmlspecialchars($data["user_name"]);
    $password = htmlspecialchars($data["password"]);

    $query = "INSERT INTO tb_user VALUES('','$nama','$user_name','$password')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubahdata($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["user_name"]);
    $password = htmlspecialchars($data["password"]);

    $query = "UPDATE tb_user SET
        nama = '$nama',
        user_name = '$username',
        password = '$password'

    WHERE id = $id
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusdata($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_user  WHERE id = $id");
    return mysqli_affected_rows($conn);
}
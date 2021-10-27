<?php
$conn = mysqli_connect("localhost", "root", "", "data_bintang");
function tambah($query)
{
    global $conn;
    $nama = htmlspecialchars($query["nama"]);
    $nis = htmlspecialchars($query["nis"]);
    $alamat = htmlspecialchars($query["alamat"]);
    $email = htmlspecialchars($query["email"]);
    $pendidikan = htmlspecialchars($query["pendidikan"]);
    $jurusan = htmlspecialchars($query["jurusan"]);
    $gambar = htmlspecialchars($query["gambar"]);
    $query = "INSERT INTO data_teman VALUES(
        '','$nama','$nis','$alamat','$email','$pendidikan','$jurusan','$gambar'
    )";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM data_teman WHERE id = $id");
    return mysqli_affected_rows($conn);
}
<?php
$conn = mysqli_connect("localhost", "root", "", "irul1412220066");
function query()
{
    global $conn;
    $select = mysqli_query($conn, "SELECT * from mhs");
    return mysqli_fetch_all($select, MYSQLI_ASSOC);
}
function menampilkan1data($get)
{
    global $conn;
    $id = $get['id'];
    $select = mysqli_query($conn, "SELECT * from mhs where id=$id");
    return mysqli_fetch_assoc($select);
}
function cari($post){
    global $conn;
    $select = mysqli_query($conn, "SELECT * from mhs where npm like '%$post%' or nama like '%$post%' or angkatan like '%$post%' or kelas like '%$post%'");
    return mysqli_fetch_all($select, MYSQLI_ASSOC);
}
function ubah($get, $post)
{
    global $conn;
    $id = $get['id'];
    $npm = htmlspecialchars($post['npm']);
    $nama = htmlspecialchars($post['nama']);
    $angkatan = htmlspecialchars($post['angkatan']);
    $kelas = htmlspecialchars($post['kelas']);
    return mysqli_query($conn, "UPDATE mhs set npm='$npm',nama='$nama',angkatan='$angkatan',kelas='$kelas' where id=$id");
}
function hapus($get)
{
    global $conn;
    $id = $get['id'];
    return mysqli_query($conn, "DELETE from mhs where id=$id");
}
function tambah($post)
{
    global $conn;
    $npm = htmlspecialchars($post['npm']);
    $nama = htmlspecialchars($post['nama']);
    $angkatan = htmlspecialchars($post['angkatan']);
    $kelas = htmlspecialchars($post['kelas']);
    return mysqli_query($conn, "INSERT into mhs values('','$npm','$nama','$angkatan','$kelas')");
}

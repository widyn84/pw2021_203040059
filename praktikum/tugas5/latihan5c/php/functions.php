<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040059");

    return $conn;
}

// function untuk melakukan query dan memasukkannya kedalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);
    $jenkel = htmlspecialchars($data['jenkel']);

    $query = "INSERT INTO fashion
                    VALUES
                    ('', '$gambar', '$deskripsi', '$harga', '$kategori', '$jenkel')";
                    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function hapus
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM fashion WHERE id = $id");

    return mysqli_affected_rows($conn);
}
?>


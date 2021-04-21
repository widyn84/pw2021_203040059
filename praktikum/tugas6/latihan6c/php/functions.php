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


// function ubah
function ubah($data)
{
    $conn = koneksi();
    $id = ($data['id']);
    $gambar = htmlspecialchars($data['gambar']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);
    $jenkel = htmlspecialchars($data['jenkel']);

    $query = "UPDATE fashion SET
                gambar = '$gambar',
                deskripsi = '$deskripsi',
                harga = '$harga',
                kategori = '$kategori',
                jenis_kelamin = '$jenkel'
                WHERE id = '$id'
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// functions cari

function cari($keyword) {
    $query = "SELECT * FROM fashion
                WHERE
                deskripsi LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%' OR
                jenis_kelamin LIKE '%$keyword%'
                ";
    return query($query);
}

function registrasi($data)
{
   $conn = koneksi();
   $username = strtolower(stripcslashes($data["username"]));
   $password = mysqli_real_escape_string($conn, $data["password"]);

    //  cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah digunakan');
            </script>";
            return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}


?>


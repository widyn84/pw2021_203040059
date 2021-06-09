<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "pw20059", "#Akun#203040059#") or die ("koneksi ke DB Gagal");
    mysqli_select_db($conn, "pw20059_tubes_203040059") or die ("Database Salah!");

    return $conn;
}

// function untuk melakukan query dan memasukkannya kedalam array
function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    // jika hasilnya hanya 1 data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }


    $rows = [];
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
                    (NULL, '$gambar', '$deskripsi', '$harga', '$kategori', '$jenkel')";
                    
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
   $password1 = mysqli_real_escape_string($conn, $data['password1']);
   $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // jika username / password kosong
    if(empty($username) || empty($password2) || empty($password2)) {
        echo "<script>
                alert('username / password tidak boleh kosong!');
                document.location.href = 'registrasi.php';
              </script>";
        return false;
    }   

    //  cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah digunakan');
            </script>";
            return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
                alert('Password Tidak Sesuai!');
                document.location.href = 'registrasi.php';
              </script>";
        return false;          
    }

    // jika password < 5 digit
    if(strlen($password1) < 5) {
        echo "<script>
                alert('Password Terlalu Pendek!');
                document.location.href = 'registrasi.php';
              </script>";
        return false;         
    }
    

    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);

    // tambah user baru
    $query = "INSERT INTO user
               VALUES
              (null, '$username', '$password_baru')
              ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}


?>


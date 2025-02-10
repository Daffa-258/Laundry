<?php
    require('../koneksi.php');

    function tampil($query) {
        global $conn;

        $result = mysqli_query($conn, $query);

        $rows = [];

        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }
 
    function tambah($data) {
        global $conn;
        
        $id = $data["id"];
        $username = htmlspecialchars($data["username"]);
        $password = htmlspecialchars($data["password"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        mysqli_query($conn, "INSERT INTO user (`id`, `username`, `password`, `nama`, `email`) VALUES ('$id','$username','$password','$nama','$email')");
        

        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        global $conn;

        $id = $data["id"];
        $username = htmlspecialchars($data["username"]);
        $password = htmlspecialchars($data["password"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);


        mysqli_query($conn, "UPDATE user SET username = '$username', password = '$password', nama = '$nama', email = '$email' WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function hapus($id) {
        global $conn;
        
        mysqli_query($conn, "DELETE FROM user WHERE user.id = $id");

        return mysqli_affected_rows($conn);
    }
?>
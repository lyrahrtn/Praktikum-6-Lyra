<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" href="styledata.css">
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <table>
            <tr>
                <td id="d">NIS</td>
                <td><input type="text" name="nis" /></td>
            </tr>
            <tr>
                <td id="d">Nama</td>
                <td><input type="text" name="nama" size=40 /></td>
            </tr>
            <tr>
                <td id="d">Alamat</td>
                <td><input type="text" name="alamat" /></td>
            </tr>
            <tr>
                <td id="d">Password</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="s"/></td>
            </tr>
        </table>
        </form>
    </body>
</html>
<!--PHP Script Begin -->
<?php 
    require_once "./connect.php";

    //jika field nis dan nama diisi lalu disubmit
    if(isset($_POST['nis']) && isset($_POST['nama'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];

    //Tambahkan data baru ke tabel
    $sql = "INSERT INTO tb_siswa VALUES ('" .$nis. "', '" .$nama. "', '" .$alamat. "', '" .$password. "')";
    $result = mysqli_query($connect, $sql);
    if($result){
        echo "Data Berhasil Ditambahkan";
    }
    else{
        echo "Gagal Menambahkan Data <br />";
        echo mysqli_error($connect);
    }
    }
    echo '<hr />';
    //memanggil file record.php untuk menampilkan hasil
    require_once"./record.php";
?>
<!-- PHP script end-->
<?php
session_start();

include 'connect.php';

$nis = $_POST['nis'];
$password = $_POST['password'];

if($nis == "" || $password == "")
{
    header("location: index2.php");
}
else
{
    $query = "SELECT * FROM tb_siswa WHERE nis = '$nis' AND password = '$password'";
    $result = mysqli_query($connect, $query);

    $num = mysqli_num_rows($result);

    if($num == 1)
    {
        echo "<script> alert('Berhasil login'); window.location='add_data.php'</script>";
        $_SESSION['tb_siswa'] = $nis;
    }
    else
    {   
        echo "<script> alert('gagal login'); </script>";
        include("index2.php");
    }
}

?>
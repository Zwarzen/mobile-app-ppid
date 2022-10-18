<?php
session_start();
$con = mysqli_connect("localhost","root","","ppid_db");

if(isset($_POST['save_select']))
{
    $penerima = $_POST['penerima_permohonan'];

    $query = "INSERT INTO product (penerima_permohonan) VALUES ('$penerima')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Penerima Telah Dipilih!";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Penerima belum dipilih!";
        header("Location: index.php");
    }
}
?>
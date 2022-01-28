<?php
// PROSES INSERT DATA
if (isset($_POST['save'])) {
    $nama       = $_POST['nama'];
    $jabatan    = $_POST['jabatan'];
    $telepon    = $_POST['telepon'];
    $alamat     = $_POST['alamat'];
    $username   = $_POST['username'];
    $password   = $_POST['pasword'];

    // Proses enskripsi Pasword
$options = [
    'cost' => 12,
];
$password_enkript = password_hash($password, PASSWORD_BCRYPT, $options);
// /////////////////////////

    $query_insert = mysqli_query($konek,"INSERT INTO petugas 
    VALUES('','$nama','$jabatan','$telepon','$alamat','$username','$password_enkript')");

if($query_insert)
{
    ?>
       <script>
        alert('DATA BERHASIL DITAMBAH')
        window.location.href='dashboard.php?page=petugas'
       </script>
    <?php

}
else
{
    ?>
        <div class="alert alert-danger">
            Data GAGAL Disimpan !!!!!!!!!
        </div>
    <?php
}
}
//// End of proses insert /////////////////////////////////////////////////////////
?>
}
?>
<!-- Proses Update -->
<?php
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $tlp = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['pasword'];
   

    $query_update = mysqli_query($konek,"UPDATE petugas SET nama = '$nama', 
                                                            jabatan = '$jabatan',
                                                            telepon = '$tlp',
                                                            alamat = '$alamat', 
                                                            username = '$username', 
                                                            pasword = '$password' 
                                                            
                                                            WHERE id_petugas = '$id'");

if($query_update)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Diupdate !!!
            </div>
        <?php
        header('refresh:2; URL=http://localhost/perpustakaan/dashboard.php?page=petugas');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Diupdate !!!!!!!!!
            </div>
        <?php
    }

////End of proses delete data/////////////////////////////////////////////////////////////////////////

?>
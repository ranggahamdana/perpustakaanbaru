<?php
    if ($_SESSION['jabatan']=='petugas') {
?>
<center><h1 class="mt-4 mb-3">Data Petugas</h1></center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-1" data-bs-toggle="modal" data-bs-target="#tambahpetugas">
  Tambah Data
</button>
<table  class="table table-striped table-hover">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Ussername</th>
        <th>Password</th>
        <th>--Action--</th>
    </tr>
    <?php
         $query = mysqli_query($konek,"SELECT * FROM petugas");
         $no = 1;
         foreach ($query as $row) {
    ?>
        <tr style="font-size: 11px; table-layout: fixed">
        <td align="center" valign="middle"><?php echo $no; ?></td>
        <td valign="middle"><?php echo $row['nama']; ?></td>
        <td valign="middle"><?php echo $row['jabatan']; ?></td>
        <td valign="middle"><?php echo $row['telepon']; ?></td>
        <td valign="middle"><?php echo $row['alamat']; ?></td>
        <td valign="middle"><?php echo $row['username']; ?></td>
        <td valign="middle"><?php echo $row['pasword']; ?></td>
        <td valign="middle">
            <a href="?page=petugas-delete&delete=&id=<?php echo $row['id_petugas'];?>">
                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </a>
            <a href="?page=petugas-edit&edit=&id=<?php echo $row['id_petugas'];?>">
                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
            </a>
        </td>
    </tr>
      <?php
    $no++;
         }
      ?>
</table>

<!-- Modal -->
<div class="modal fade" id="tambahpetugas" tabindex="-1" aria-labelledby="tambahpetugasLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="tambahpetugasLabel">Form Tambah Petugas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="?page=petugas-insert" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="jabatan" placeholder="Jabatan" required>
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="telepon" placeholder="Nomor Telepon" required>
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="alamat" placeholder="Alamat" required>
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="username" placeholder="Ussername" required>
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="pasword" placeholder="Password" required>
                </div>  
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="save" class="btn btn-primary">Save changes</button>
            </form>
        </div>
        </div>
    </div>
</div>

<?php
}
?>
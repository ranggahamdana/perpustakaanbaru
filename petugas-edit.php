<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <center><h2>Form Edit Data petugas</h2></center>
        <!-- Proses query untuk menampilkan data yang mau di edit -->
        <?php
            $id = $_GET['id'];
            $query = mysqli_query($konek,"SELECT * FROM petugas WHERE id_petugas = '$id'");
            foreach ($query as $row) {
        ?>
        <!-- -------------------------------------------------- -->
        <form action="?page=petugas-edit-proses" method="POST">
            <!-- tambahkan input hidden untuk menyisipkan id anggota yg mau diedit, dibutuhkan pada saat edit proses query -->
            <input value="<?php echo $row['id_petugas'] ?>" class="form-control" type="hidden" name="id">
            <!-- --------------------------------------------------------------------------------------------------------- -->
            <div class="form-group">
                <label for="">nama</label>
                <input value="<?php echo $row['nama'] ?>" class="form-control" type="text" name="nama" placeholder="nama petugas" required>
            </div>
            <div class="form-group mt-2">
            <label for="">jabatan</label>
                <input value="<?php echo $row['jabatan'] ?>" class="form-control" type="text" name="jabatan" placeholder="jabatan petugas" required>
            </div>
           
            <div class="form-group mt-2">
                <label for="">Tlp</label>
                <input value="<?php echo $row['telepon'] ?>" class="form-control" type="text" name="telepon" placeholder="tlp petugas">
            </div>
            <div class="form-group mt-2">
                <label for="">alamat</label>
                <input value="<?php echo $row['alamat'] ?>" class="form-control" type="text" name="alamat">
            </div>
           
           
                        
            <div class="form-group mt-2">
                <label for="">username</label>
                <input value="<?php echo $row["username"]?>" class="form-control" type="text" name="username" placeholder="username petugas">
            </div>
            <div class="form-group mt-2">
                <label for="">password</label>
                <textarea name="pasword" class="form-control" placeholder="password petugas"><?php echo $row["pasword"]?></textarea>
            </div>
            <br>
            <center>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="save" class="btn btn-primary">Save changes</button>
            </center>
            <br>
        </form>
        <?php
        }
        ?>
    </div>
    <div class="col-3"></div>
</div>
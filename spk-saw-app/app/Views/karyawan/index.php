<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content'); ?>



<div class="container">
    <h1>Halaman data karyawan</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
        Tambah Data Karyawan Baru
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambah" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <input type="hidden" name="id" value="">
                    <div class="modal-body">
                    <form action="<?php echo base_url('karyawan/add') ?>" method="post" >
                            <div class="form-group">
                                <label>Nip</label>
                                <input type="text" class="form-control form-control-sm" name="nip" placeholder="Nomor Induk Pegawai" required>
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control form-control-sm" name="nama" placeholder="Nama Lengkap">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-select form-select-sm" name="jekel" required>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="text" class="form-control form-control-sm" name="telepon" placeholder="Nomor Telepon" >
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control form-control-sm" name="alamat" placeholder="Alamat Lengkap" style="resize: none;" ?></textarea>
                            </div>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">Simpan</button>
                            </div>
                    </form>
            </div>
        </div>
    </div>
   
    <br><br>
    <div class="row">
        <div class="col">
            <table id="karyawan" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 0;
                        foreach ($karyawan as $key) {
                        $no++;
                        
                    ?>  
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $key['nip']; ?></td>
                        <td><?= $key['nama']; ?></td>
                        <td><?= $key['jns_kel']; ?></td>
                        <td><?= $key['no_hp']; ?></td>
                        <td><?= $key['alamat']; ?></td>
                        <td>
                        <span class="material-icons md-24">delete</span>
                        <span class="material-icons">settings</span>

                        </td>
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>    
</div>
<script>
        $(document).ready(function() {
            $('#karyawan').DataTable();
        });
    </script>  
<?= $this->endSection(); ?>
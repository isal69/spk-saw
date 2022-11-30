<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content'); ?>



<div class="container">
    <h1>Halaman data karyawan</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data Karyawan Baru
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="<?php echo base_url('karyawan/ubah') ?>">
                    <input type="hidden" name="id" value="">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nip</label>
                            <input type="text" class="form-control form-control-sm" name="nip" placeholder="Nomor Induk Pegawai">
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
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
            </div>
        </div>
    </div>
    <a href="<?= base_url('karyawan/add') ?>" class="btn btn-primary">Tambah Data Karyawan Baru</a>
    <br><br>
    <div class="row">
        <div class="col">
            <table id="karyawan" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009-01-12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012-03-29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008-11-28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>$372,000</td>
                    </tr>
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
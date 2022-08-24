<?= $this->extend('admin/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Page Heading -->
<?php
// echo"<pre>";
// print_r($data_biodata);
// echo"</pre>";
 ?>
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">DATA PRIBADI PELAMAR</h1>

    <form action="<?php echo site_url('/update-form'); ?>" method="post">
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">User ID</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="userid" id="userid" placeholder="<?php echo $data_biodata['userid']; ?>" value="<?php echo $data_biodata['userid']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">1. POSISI YANG DILAMAR</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="posisi" id="posisi" value="<?php echo $data_biodata['posisi']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">2. NAMA</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data_biodata['nama']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">3. NO. KTP</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="noktp" value="<?php echo $data_biodata['ktp']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">4. TEMPAT, TANGGAL LAHIR</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="tempat" value="<?php echo $data_biodata['tempatlahir']; ?>">
            </div>
            <div class="col-sm-6">
                <input type="date" class="form-control" name="tgllahir" value="<?php echo $data_biodata['tgllahir']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">5. JENIS KELAMIN</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="jk" value="<?php echo $data_biodata['jk']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">6. AGAMA</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="agama" value="<?php echo $data_biodata['agama']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">7. GOLONGAN DARAH</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="goldarah" value="<?php echo $data_biodata['goldarah']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">8. STATUS</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="status" value="<?php echo $data_biodata['status']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">9. ALAMAT KTP</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="alamat" value="<?php echo $data_biodata['alamat']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">10. ALAMAT TINGGAL</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="domisili" value="<?php echo $data_biodata['domisili']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">11. EMAIL</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="email_user" readonly id="email_user" placeholder="<?php echo $data_biodata['email']; ?>" value="<?php echo $data_biodata['email']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">12. NO. TELP</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="notelp" value="<?php echo $data_biodata['notelp']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">13. ORANG TERDEKAT YANG DAPAT DIHUBUNGI</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="orgterdekat" value="<?php echo $data_biodata['orgterdekat']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-5 col-form-label">14. PENDIDIKAN TERAKHIR</label>
            <div>
                <table class="table">
                <thead>
                    <tr>
                        <th>Jenjang Pendidikan Terakhir</th>
                        <th>Nama Institusi Akademik</th>
                        <th>Jurusan</th>
                        <th>Tahun Lulus</th>
                        <th>IPK</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody id="dynamic_field14">
                <form method="post" name="add_name14" id="add_name14">  
                    <?php 
                    if ($data_pendidikan) {
                        foreach ($data_pendidikan as $row) {
                            echo '
                                <tr>
                                <td>' . $row['jenjang'] . '</td>
                                <td>' . $row['institusi'] . '</td>
                                <td>' . $row['jurusan'] . '</td>
                                <td>' . $row['tahunlulus'] . '</td>
                                <td>' . $row['ipk'] . '</td>
                                <td>
                                    <!--<a href="'.base_url('delete-pendidikan/'.$row['userid'].'/'.$row['jenjang']).'" class="btn btn-danger btn-sm btn-circle"><i class="fas fa-trash"></i></a>
                                    <a href="'.base_url('edit-view-pendidikan/'.$row['userid'].'/'.$row['jenjang']).'" class="btn btn-danger btn-sm btn-circle"><i class="fas fa-pen"></i></a>-->
                                </td>
                            </tr>
                                ';
                        }
                    }
                    ?>
                </form>
                </tbody>
                </table>
            </div>
        </div></br>

        <div class="form-group row">
            <label for="input" class="col-sm-5 col-form-label">15. RIWAYAT PELATIHAN</label>
            <div>
                <table class="table">
                <thead>
                    <tr>
                        <th>Nama Kursus/ Seminar</th>
                        <th>Sertifikat (ada/tidak)</th>
                        <th>Tahun</th>
                    </tr>
                </thead>
                <tbody id="dynamic_field15">
                <form method="post" name="add_name15" id="add_name15">  
                <?php 
                    foreach ($data_pelatihan as $row) {
                        echo '
                            <tr>
                            <td>' . $row['kursus'] . '</td>
                            <td>' . $row['sertifikat'] . '</td>
                            <td>' . $row['tahun_sertifikat'] . '</td>
                        </tr>
                            ';
                    }
                ?>
                </form>
                </tbody>
                </table>
            </div>
        </div></br>

        <div class="form-group row">
            <label for="input" class="col-sm-5 col-form-label">16. RIWAYAT PEKERJAAN</label>
            <div>
                <table class="table">
                <thead>
                    <tr>
                        <th>Nama Perusahaan</th>
                        <th>Posisi Terakhir</th>
                        <th>Pendapatan Terakhir</th>
                        <th>Tahun</th>
                    </tr>
                </thead>
                <tbody id="dynamic_field16">
                <form method="post" name="add_name16" id="add_name16">  
                <?php 
                    foreach ($data_pekerjaan as $row) {
                        echo '
                            <tr>
                            <td>' . $row['namaperusahaan'] . '</td>
                            <td>' . $row['posisi_perusahaan'] . '</td>
                            <td>' . $row['pendapatan'] . '</td>
                            <td>' . $row['tahun_perusahaan'] . '</td>
                        </tr>
                            ';
                    }
                ?> 
                </form>
                </tbody>
                </table>
            </div>
        </div></br>

        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">17. SKILL</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="skill" value="<?php echo $data_biodata['skill']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">18. BERSEDIA DITEMPATKAN DI SELURUH KANTOR PERUSAHAAN</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="lokasitugas" value="<?php echo $data_biodata['lokasitugas']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">19. PENGHASILAN YANG DIHARAPKAN</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="penghasilan" value="<?php echo $data_biodata['penghasilan']; ?>">
            </div>
        </div></br>
        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2" > Simpan</button>
</div>
<?= $this->endSection(); ?>
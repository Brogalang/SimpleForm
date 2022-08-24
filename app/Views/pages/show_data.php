<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Page Heading -->
<?php
// echo"<pre>";
// print_r($data_user);
// echo"</pre>";
 ?>
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">DATA PRIBADI PELAMAR</h1>

    <form action="<?php echo site_url('/submit-form'); ?>" method="post">
        <div class="form-group row" hidden>
            <label for="input" class="col-sm-2 col-form-label">User ID</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="userid" id="userid" placeholder="<?php echo $data_user['userid']; ?>" value="<?php echo $data_user['userid']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">1. POSISI YANG DILAMAR</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="posisi" readonly id="posisi" value="<?php echo $data_user['posisi']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">2. NAMA</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nama" id="nama" readonly value="<?php echo $data_user['nama']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">3. NO. KTP</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="noktp" readonly value="<?php echo $data_user['ktp']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">4. TEMPAT, TANGGAL LAHIR</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="tempat" readonly value="<?php echo $data_user['tempatlahir']; ?>">
            </div>
            <div class="col-sm-6">
                <input type="date" class="form-control" name="tgllahir" readonly value="<?php echo $data_user['tgllahir']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">5. JENIS KELAMIN</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="jk" readonly value="<?php echo $data_user['jk']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">6. AGAMA</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="agama" readonly value="<?php echo $data_user['agama']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">7. GOLONGAN DARAH</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="goldarah" readonly value="<?php echo $data_user['goldarah']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">8. STATUS</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="status" readonly value="<?php echo $data_user['status']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">9. ALAMAT KTP</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="alamat" readonly value="<?php echo $data_user['alamat']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">10. ALAMAT TINGGAL</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="domisili" readonly value="<?php echo $data_user['domisili']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">11. EMAIL</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="email_user" id="email_user" readonly placeholder="<?php echo $data_user['email']; ?>" value="<?php echo $data_user['email']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">12. NO. TELP</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="notelp" readonly value="<?php echo $data_user['notelp']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">13. ORANG TERDEKAT YANG DAPAT DIHUBUNGI</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="orgterdekat" readonly value="<?php echo $data_user['orgterdekat']; ?>">
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
                    </tr>
                </thead>
                <tbody id="dynamic_field14">
                <form method="post" name="add_name14" id="add_name14">  
                    <?php 
                    foreach ($data_pendidikan as $row) {
                        echo '
                            <tr>
                            <td>' . $row['jenjang'] . '</td>
                            <td>' . $row['institusi'] . '</td>
                            <td>' . $row['jurusan'] . '</td>
                            <td>' . $row['tahunlulus'] . '</td>
                            <td>' . $row['ipk'] . '</td>
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
                <input type="text" class="form-control" name="skill" readonly value="<?php echo $data_user['skill']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">18. BERSEDIA DITEMPATKAN DI SELURUH KANTOR PERUSAHAAN</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="lokasitugas" readonly value="<?php echo $data_user['lokasitugas']; ?>">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">19. PENGHASILAN YANG DIHARAPKAN</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="penghasilan" readonly value="<?php echo $data_user['penghasilan']; ?>">
            </div>
        </div></br>
</div>
<?= $this->endSection(); ?>
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
                <input type="text" class="form-control" name="posisi" id="posisi" placeholder="">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">2. NAMA</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">3. NO. KTP</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="noktp" placeholder="">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">4. TEMPAT, TANGGAL LAHIR</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="tempat" placeholder="">
            </div>
            <div class="col-sm-6">
                <input type="date" class="form-control" name="tgllahir" placeholder="">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">5. JENIS KELAMIN</label>
            <div class="col-sm-9">
                <select type="text" class="form-control" name="jk">
                    <option value='LAKI-LAKI'>LAKI-LAKI</option>
                    <option value='PEREMPUAN'>PEREMPUAN</option>
                </select>
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">6. AGAMA</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="agama" placeholder="">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">7. GOLONGAN DARAH</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="goldarah" placeholder="">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">8. STATUS</label>
            <div class="col-sm-9">
                <select type="text" class="form-control" name="status">
                    <option value='Belum Menikah'>BELUM MENIKAH</option>
                    <option value='Menikah'>MENIKAH</option>
                    <option value='Duda'>DUDA</option>
                    <option value='Janda'>JANDA</option>
                </select>
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">9. ALAMAT KTP</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="alamat" placeholder="">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">10. ALAMAT TINGGAL</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="domisili" placeholder="">
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
                <input type="number" class="form-control" name="notelp" placeholder="" value="">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">13. ORANG TERDEKAT YANG DAPAT DIHUBUNGI</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="orgterdekat" placeholder="" value="">
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
                    <tr>  
                        <td><input type="text" style="width:200px" name="jenjang[]" class="form-control" placeholder=""/></td>  
                        <td><input type="text" style="width:200px" name="institusi[]" class="form-control" placeholder=""/></td>  
                        <td><input type="text" style="width:200px" name="jurusan[]" class="form-control" placeholder=""/></td>  
                        <td><input type="number" style="width:200px" name="tahunlulus[]" class="form-control" placeholder=""/></td>  
                        <td><input type="number" style="width:200px" name="ipk[]" step="any" class="form-control" placeholder=""/></td>  
                        <td><button type="button" name="add14" id="add14" class="btn btn-success">+</button></td>  
                    </tr>  
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
                    <tr>  
                        <td><input type="text" style="width:200px" name="kursus[]" class="form-control" placeholder=""/></td>  
                        <td><input type="text" style="width:200px" name="sertifikat[]" class="form-control" placeholder=""/></td>  
                        <td><input type="text" style="width:200px" name="tahun_sertifikat[]" class="form-control" placeholder=""/></td>  
                        <td><button type="button" name="add15" id="add15" class="btn btn-success">+</button></td>  
                    </tr>  
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
                    <tr id="dynamic_field16">  
                        <td><input type="text" style="width:200px" name="namaperusahaan[]" class="form-control" placeholder=""/></td>  
                        <td><input type="text" style="width:200px" name="posisi_perusahaan[]" class="form-control" placeholder=""/></td>  
                        <td><input type="text" style="width:200px" name="pendapatan[]" class="form-control" placeholder=""/></td>  
                        <td><input type="text" style="width:200px" name="tahun_perusahaan[]" class="form-control" placeholder=""/></td>  
                        <td><button type="button" name="add16" id="add16" class="btn btn-success">+</button></td>  
                    </tr>  
                </form>
                </tbody>
                </table>
            </div>
        </div></br>

        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">17. SKILL</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="skill" placeholder="">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">18. BERSEDIA DITEMPATKAN DI SELURUH KANTOR PERUSAHAAN</label>
            <div class="col-sm-9">
            <select type="text" class="form-control" name="lokasitugas">
                    <option value='YA'>YA</option>
                    <option value='TIDAK'>TIDAK</option>
                </select>
            </div>
        </div></br>
        <div class="form-group row">
            <label for="input" class="col-sm-2 col-form-label">19. PENGHASILAN YANG DIHARAPKAN</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="penghasilan" placeholder="">
            </div>
        </div></br>
        <!-- <a class="d-none d-sm-inline-block btn btn-sm shadow-sm mb-2" href="<?= site_url('pages/data_sales'); ?>"> Batal</a> -->
        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2" > Simpan</button>
</div>
<script>  
$(document).ready(function(){  
     var i14=1;  
     $('#add14').click(function(){  
        i14++;  
          $('#dynamic_field14').append('<tr id="row14'+i14+'"><td><input style="width:200px" type="text" name="jenjang[]" class="form-control" placeholder=""/></td><td><input style="width:200px" type="text" name="institusi[]" class="form-control" placeholder=""/></td><td><input style="width:200px" type="text" name="jurusan[]" class="form-control" placeholder=""/></td><td><input style="width:200px" type="text" name="tahunlulus[]" class="form-control" placeholder=""/></td><td><input style="width:200px" type="text" name="ipk[]" class="form-control" placeholder=""/></td><td><button type="button" name="remove" id="'+i14+'" class="btn btn-danger btn_remove14">X</button></td></tr>');  
     });  
     $(document).on('click', '.btn_remove14', function(){  
          var button_id14 = $(this).attr("id");   
          $('#row14'+button_id14+'').remove();  
     });  

     var i15=1;  
     $('#add15').click(function(){  
        i15++;  
          $('#dynamic_field15').append('<tr id="row15'+i15+'"><td><input style="width:200px" type="text" name="kursus[]" class="form-control" placeholder=""/></td><td><input style="width:200px" type="text" name="sertifikat[]" class="form-control" placeholder=""/></td><td><input style="width:200px" type="text" name="tahun_sertifikat[]" class="form-control" placeholder=""/></td><td><button type="button" name="remove" id="'+i15+'" class="btn btn-danger btn_remove15">X</button></td></tr>');  
     });  
     $(document).on('click', '.btn_remove15', function(){  
          var button_id15 = $(this).attr("id");   
          $('#row15'+button_id15+'').remove();  
     });  
     
     var i16=1;  
     $('#add16').click(function(){  
        i16++;  
          $('#dynamic_field16').append('<tr id="row16'+i16+'"><td><input style="width:200px" type="text" name="namaperusahaan[]" class="form-control" placeholder=""/></td><td><input style="width:200px" type="text" name="posisi_perusahaan[]" class="form-control" placeholder=""/></td><td><input style="width:200px" type="text" name="pendapatan[]" class="form-control" placeholder=""/></td><td><input style="width:200px" type="text" name="tahun_perusahaan[]" class="form-control" placeholder=""/></td><td><button type="button" name="remove" id="'+i16+'" class="btn btn-danger btn_remove16">X</button></td></tr>');  
     });  
     $(document).on('click', '.btn_remove16', function(){  
          var button_id16 = $(this).attr("id");   
          $('#row16'+button_id16+'').remove();  
     });  
    //  $('#submit').click(function(){            
    //       $.ajax({  
    //            url:"name.php",  
    //            method:"POST",  
    //            data:$('#add_name14').serialize(),  
    //            success:function(data)  
    //            {  
    //                 alert(data);  
    //                 $('#add_name')[0].reset();  
    //            }  
    //       });  
    //  });  
});  
</script>
<?= $this->endSection(); ?>
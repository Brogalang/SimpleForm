<?= $this->extend('admin/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Page Heading -->
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Biodata User
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Posisi</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                    <th>Penghasilan Diharapkan</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($data_biodata as $row) {
                        echo '
                            <tr>
                            <td>' . $row['nama'] . '</td>
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['posisi'] . '</td>
                            <td>' . $row['tgllahir'] . '</td>
                            <td>' . $row['jk'] . '</td>
                            <td>' . $row['status'] . '</td>
                            <td>' . $row['penghasilan'] . '</td>
                            <td>
                                <a href="'.base_url('delete/'.$row['userid']).'" class="btn btn-danger btn-sm btn-circle"><i class="fas fa-trash"></i></a>
                                <a href="'.base_url('edit-view/'.$row['userid']).'" class="btn btn-danger btn-sm btn-circle"><i class="fas fa-pen"></i></a>
                            </td>
                        </tr>
                            ';
                    }
                ?> 
                
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Mahasiswa</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1;  ?>
            <?php foreach ($mahasiswa as $item): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $item['nama_mahasiswa'] ?></td>
                <td><?= $item['nama_prodi'] ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>

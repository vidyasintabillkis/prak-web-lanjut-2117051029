<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
    <div class="container">
        <figure>
            <h1>List Kelas</h1>
            <blockquote class="blockquote">
                <p>Kelas di Ilmu Komputer</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Kelas, <cite title="Source Title">banyak circlenya</cite>
            </figcaption>
        </figure>
        <a href="<?= base_url('/kelas/create') ?>" class="btn btn-success btn-sm">Tambah Data</a>

        <div class="table-responsive"><br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>No</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1; 
                    foreach($kelas as $kelas) { 
                ?>
                <tr> 
                <td><?= $i++ ?></td>
                <td><?= $kelas['nama_kelas']?></td>
                <td class="d-flex justify-content">
                    <a href="<?= base_url('/kelas/' . $kelas['id'] . '/edit') ?>" type="button" class="btn btn-warning btn-sm">
                        Edit
                    </a>
                    <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
            </table>
            </div>
    </div>
<?= $this->endSection() ?> 
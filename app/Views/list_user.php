<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
    <div class="container">
        <figure>
            <h1>List Mahasiswa</h1>
            <blockquote class="blockquote">
                <p>Mahasiswa Ilmu Komputer</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Mahasiswa, <cite title="Source Title">cita-citanya jadi sukses tapi sukanya rebahan</cite>
            </figcaption>
        </figure>
        <a href="<?= base_url('/user/create') ?>" class="btn btn-success btn-sm">Tambah Data</a>

        <div class="table-responsive"><br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1; 
                    foreach($users as $user) { 
                ?>
                <tr> 
                <td><?= $i++ ?></td>
                <td><?= $user['nama']?></td>
                <td><?= $user['npm']?></td>
                <td><?= $user['nama_kelas']?></td>
                <td class="d-flex justify-content">
                    <a href="<?= base_url('user/' . $user['id']) ?>" type="button" class="btn btn-light btn-sm">
                        Detail
                    </a>
                    <a href="<?= base_url('/user/' . $user['id'] . '/edit') ?>" type="button" class="btn btn-warning btn-sm">
                        Edit
                    </a>
                    <form action="<?= base_url('user/' . $user['id']) ?>" method="POST">
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
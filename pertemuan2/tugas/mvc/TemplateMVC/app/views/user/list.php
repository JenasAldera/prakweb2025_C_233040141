<div class="container">
    <h1><?= $data['judul']; ?></h1>
    <a href="<?= BASEURL; ?>/user/tambah" class="btn btn-primary">Tambah User</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($data['user'] as $user) : ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['nama']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= $user['alamat']; ?></td>
            <td>
                <a href="<?= BASEURL; ?>/user/detail/<?= $user['id']; ?>">Detail</a> |
                <a href="<?= BASEURL; ?>/user/edit/<?= $user['id']; ?>">Edit</a> |
                <a href="<?= BASEURL; ?>/user/hapus/<?= $user['id']; ?>" onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

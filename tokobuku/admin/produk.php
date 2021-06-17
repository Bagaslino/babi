<h2>Selamat datang</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>no</th>
            <th>judul</th>
            <th>penerbit</th>
            <th>kategori</th>
            <th>harga</th>
            <th>foto</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT*FROM buku"); ?>
        <?php while($pecah=$ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $nomor?></td>
            <td><?php echo $pecah['judul_buku'];?></td>
            <td><?php echo $pecah['penerbit'];?></td>
            <td><?php echo $pecah['kategori_buku'];?></td>
            <td><?php echo $pecah['harga_buku'];?></td>
            <td><img src="./foto/<?php echo $pecah['foto_buku']; ?>" width="100"></td>
            <td>
                <a href="index.php?halaman=hapus&id=<?php echo $pecah['id_buku'];?>" class="btn-danger btn">Hapus</a>
                <a href="" class="btn-warning btn">Edit</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>
<a href="index.php?halaman=tambah" class="btn btn-primary">Tambah data</a>
<h2>Selamat datang</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Email</th>

        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT*FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan"); ?>
        <?php while($pecah=$ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $nomor?></td>
            <td><?php echo $pecah['nama_pelanggan'];?></td>
            <td><?php echo $pecah['email_pelanggan'];?></td>
            <td>
                <a href="" class="btn-danger btn">Hapus</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>
<H2>Detail Pembelian</h2>
<?php
$ambil= $koneksi->query("SELECT * FROM pembelian JOIN pelanggan 
                        on pembelian.id_pelanggan=pelanggan.id_pelanggan 
                        WHERE pembelian.id_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>


<strong><?php echo $detail['nama_pelanggan'];?></strong><br>
<p>
   Email: <?php echo $detail['email_pelanggan'];?><br>
</p>
<p>
    Tanggal :<?php echo $detail['tgl_pembelian'];?><br>
    Total :<?php echo $detail['total_pembelian'];?>
</p>

<table class="table table-bordered">
    <thead>  
      <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
    <?php $nomor=1;?>
    <?php $ambil=$koneksi->query("SELECT*FROM pembelian_produk JOIN buku on pembelian_produk.id_buku=buku.id_buku
                            WHERE pembelian_produk.id_pembelian='$_GET[id]'"); ?>
    <?php $pecah=$ambil->fetch_assoc();?>
        <tr>
            <td><?php echo $nomor;?></td>
            <td><?php echo $pecah['judul_buku'];?>></td>
            <td><?php echo $pecah['harga_buku'];?></td>
            <td><?php echo $pecah['jumlah'];?></td>
            <td><?php echo $pecah['harga_buku']*$pecah['jumlah'];?></td>
        </tr>
    </tbody>
</table>
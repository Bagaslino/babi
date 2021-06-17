<?php
$ambil=$koneksi->query("SELECT * FROM buku WHERE id_buku='$_GET=[id]'");
$pecah=$ambil->fetch_assoc();
$foto =$pecah['foto_buku'];
if (file_exists("../foto/$foto")){
    unlink("../foto/$foto");
}

$koneksi->query("DELETE FROM buku WHERE id_buku='$_GET=[id]'");

echo "<script>alert('produk terhapus');</script>";
echo "<script>location='index.php?halaman=produk';</script>";
?>
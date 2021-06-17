<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Penerbit</label>
        <input type="text" class="form-control" name="penerbit">
    </div>
    <div class="form-group">
        <label>Kategori</label>
            <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example" name="kategori">
                <option selected>Pilih Kategori</option>
                <option value="Fiksi">Fiksi</option>
                <option value="Cerpen">Cerpen</option>
                <option value="Pendidikan">Pendidikan</option>
                <option value="Teknologi">Teknologi</option>
            </select>
    </div>
    <div class="form-group">
        <label>Harga(Rp)</label>
        <input type="text" class="form-control" name="harga">
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <button class="btn btn-primary" name="save">Simpan</button>
</form> 

<?php
if (isset($_POST['save']))
{
    $nama=$_FILES['foto']['name'];
    $lokasi=$_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi,"./foto/".$nama);
    $koneksi->query("INSERT INTO buku(judul_buku,penerbit,kategori_buku,harga_buku,foto_buku) 
                        VALUES ('$_POST[nama]','$_POST[penerbit]','$_POST[kategori]','$_POST[harga]','$nama')");
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
}   
?>


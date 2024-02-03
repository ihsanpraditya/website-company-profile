<?php 

include("inc_header.php");

$judul       = "";
$kutipan     = "";
$isi         = "";
$success_msg = "";
$error_msg   = "";

if(isset($_POST['submit'])) {
    $judul   = $_POST['judul'];
    $kutipan = $_POST['kutipan'];
    $isi     = $_POST['isi'];

    if($judul == "" or $isi == "") {
	$error_msg = "Silakan memasukkan data yang benar";
    } else {
	$submit_query  = "INSERT INTO halaman(judul,kutipan,isi) VALUES ('$judul','$kutipan','$isi')";
	$sql_request = mysqli_query($koneksi,$submit_query);

	if ($sql_request) {
	    $success_msg = "Data berhasil dimasukkan";
	    $judul       = "";
	    $kutipan     = "";
	    $isi         = "";
	} else {
	    $error_msg = "Data gagal dimasukkan!";
	}
    }
}

?>
<h1>Halaman Admin Input Data</h1>
<a href="halaman.php">
    <button class="btn btn-dark mb-3">&lt;&lt; Kembali ke beranda</button>
</a>
<?php
if($success_msg) {
    echo '<div class="alert alert-secondary" role="alert">' . $success_msg . '</div>';
} 
if($error_msg){
    echo '<div class="alert alert-danger" role="alert">' . $error_msg . '</div>';
}
?>
<form action="halaman_input.php" method="POST">
    <div class="mb-3 row">
    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
	<div class="col-sm-10">	 
	<input type="text" class="form-control" id="judul" name="judul" value="<?= $judul?>">
	</div>
    </div>
    <div class="mb-3 row">
	<label for="kutipan" class="col-sm-2 col-form-label">Kutipan</label>
	<div class="col-sm-10">	 
	<input type="text" class="form-control" id="kutipan" name="kutipan" value="<?= $kutipan ?>">
	</div>
    </div>
    <div class="mb-3 row">
	<label for="isi" class="col-sm-2 col-form-label">Isi</label>
	<div class="col-sm-10">	 
	<textarea id="summernote" name="isi" class="form-control"><?= $isi ?></textarea>
	</div>
    </div>
    <div class="mb-3 row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
	<button type="submit" class="btn btn-primary" name="submit">Simpan Data</button>
    </div>
    </div>
</form>
<?php include("inc_footer.php") ?>


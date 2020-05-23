<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Sistem Informasi Pendataan Covid-19</title>
<link href='icon.png' rel='shortcut icon'>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href="bootstrap.min.css" rel="stylesheet">
<link href="aos.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
</head>

<?php

$error_nama = "";	
$error_jeniskel= "";
$error_telp = "";
$error_temlahir = "";
$error_tgllahir = "";
$error_usia = "";
$error_kwn = "";
$error_status = "";
$error_kawin = "";
$error_tempat = "";
$error_alamat = "";
$error_penyakit = "";
$error_penyakitayah = "";
$error_penyakitibu = "";
$error_check = "";
	
$nama = "";	
$jeniskel= "";
$telp = "";
$temlahir = "";
$tgllahir = "";
$usia = "";
$kwn = "";
$negara = "";
$status = "";
$kawin = "";
$tempat = "";
$alamat = "";
$penyakit = "";
$penyakitayah = "";
$penyakitibu = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST["nama"])){
			$error_nama = "Nama tidak boleh kosong";
		} else{
			$nama = cek_input($_POST["nama"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$nama)){
				$error_nama = "Input Hanya boleh huruf dan spasi";
				$nama = "";
			}else $nama = cek_input($_POST["nama"]);
		}
	
	if(empty($_POST["radio"])){
			$error_jeniskel = "Pilih salah satu jenis kelamin";
		} else{
			$jeniskel = cek_input($_POST["radio"]);
			}
	
	if(empty($_POST["telp"])){
			$error_telp = "Telp tidak boleh kosong";
		} else{ 
			$telp = cek_input($_POST["telp"]);
			if (!is_numeric($telp)){
				$error_telp = "Nomor HP hanya boleh angka";
			}
		}
	
	if(empty($_POST["temlahir"])){
			$error_temlahir = "Tempat lahir tidak boleh kosong";
		} else{
			$temlahir = cek_input($_POST["temlahir"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$temlahir)){
				$error_temlahir = "Input Hanya boleh huruf dan spasi";
			}
		}
	
	if(empty($_POST["tgllahir"])){
			$error_tgllahir = "Tanggal lahir tidak boleh kosong";
		} else{
			$tgllahir = cek_input($_POST["tgllahir"]);
		}
	
	if(empty($_POST["usia"])){
			$error_usia = "Usia tidak boleh kosong";
		} else{ 
			$usia = cek_input($_POST["usia"]);
			if (!is_numeric($usia)){
				$error_usia = "Usia hanya boleh angka";
			}
		}
	
	if(empty($_POST["radiokwn"])){
			$error_kwn = "Pilih salah satu";
		} else{
			$kwn = cek_input($_POST["radiokwn"]);
			$negara = cek_input($_POST["negara"]);
			}
	
	if(empty($_POST["status"])){
			$error_status = "Pilih salah satu";
		} else if($_POST["status"]=="nonestatus"){
			$error_status = "Pilih salah satu";
		} else{
			$status = cek_input($_POST["status"]);
		}
	
	if(empty($_POST["kawin"])){
			$error_kawin = "Pilih salah satu";
		} else{
			$kawin = cek_input($_POST["kawin"]);
			}
	
	if(empty($_POST["tempat"])){
			$error_tempat = "Pilih salah satu";
		} else if($_POST["tempat"]=="nonetempat"){
			$error_tempat = "Pilih salah satu";
		} else{
			$tempat = cek_input($_POST["tempat"]);
		}
	
	if(empty($_POST["alamat"])){
			$error_alamat = "Alamat tidak boleh kosong";
		} else{ 
			$alamat = cek_input($_POST["alamat"]);
		}
	
	if(empty($_POST["kronis"])){
			$error_penyakit = "Pilih salah satu";
		} else if($_POST["kronis"]=="nonepenyakit"){
			$error_penyakit = "Pilih salah satu";
		} else{
			$penyakit = cek_input($_POST["kronis"]);
		}
	
	if(empty($_POST["ayah"])){
			$error_penyakitayah = "Pilih salah satu";
		} else if($_POST["ayah"]=="noneayah"){
			$error_penyakitayah = "Pilih salah satu";
		} else{
			$penyakitayah = cek_input($_POST["ayah"]);
		}
	
	if(empty($_POST["ibu"])){
			$error_penyakitibu = "Pilih salah satu";
		} else if($_POST["ibu"]=="noneibu"){
			$error_penyakitibu = "Pilih salah satu";
		} else{
			$penyakitibu = cek_input($_POST["ibu"]);
		}
	
	
	if(empty($nama && $jeniskel && $telp && $temlahir && $tgllahir && $usia && $kwn && $status && $kawin && $tempat && $alamat && $penyakit && $penyakitayah && $penyakitibu)){
				$error_check = "Pastikan semua data terisi!";
			} else {
			include "insertdata.php";
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://sipid-19.000webhostapp.com/">';
			}
}

function cek_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	} 


?>
<script>
	function tanya3(){
		var tanya3 = alert ("Kemungkinan anda terpapar Covid-19 >60% \nSeluruh menu dinonaktifkan, silahkan mengisi form berikut.");
	}
</script>

<body onLoad=tanya3()>
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="#"><img src="sipid.png" height="30px"></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="#">Beranda</a></li>
          <li class="active"><a href="#">Cek Kesehatan</a></li>
          <li><a href="#">Peduli Covid-19</a></li>
        </ul>
      </nav>

    </div>

	  <div class="alert alert-warning alert-dismissible fade show">
	<strong>Kemungkinan positif > 60%! Jangan panik.</strong> Lengkapi form berikut untuk membantu anda.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
  </header>

  <main id="main">
	  
	  <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tanggap covid</h2>
          <p>Cek Kesehatan Mandiri</p>
        </div>
		  
        <div class="row d-flex align-items-center">

          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="php-email-form">
				
			<div class="form-group row">
				<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
					<div class="col-sm-6">
					<input type="text" name="nama" class="form-control rounded <?php echo ($error_nama !="" ? "is-invalid" : "");?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>">
						<span class="warning"><?php echo $error_nama;?></span>
				</div>
			</div>
				
			<div class="form-group row">
				<label for="jeniskel" class="col-sm-3 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-8">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="laki" name="radio" class="custom-control-input" value="Laki - Laki">
  						<label class="custom-control-label" for="laki">Laki -Laki </label>
					</div> 
					<div class="custom-control custom-radio custom-control-inline">
  						<input type="radio" id="perempuan" name="radio" class="custom-control-input" value="Perempuan"> 
  						<label class="custom-control-label" for="perempuan">Perempuan</label>
					</div>
						<?php echo ($error_jeniskel !="" ? "" : "");?>
						<span class="warning"><?php echo $error_jeniskel;?></span>
					</div>
			</div>
			
			<div class="form-group row">
				<label for="telp" class="col-sm-3 col-form-label">No. Telpon</label>
				<div class="col-sm-5">
					<input type="text" name="telp" class="form-control rounded <?php echo($error_telp !="" ? "is-invalid" : ""); ?>" id="telp" placeholder="Telpon" value="<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp; ?></span>
				</div>
			</div>
				
			<div class="form-group row">
				<label for="temlahir" class="col-sm-3 col-form-label">Kota Lahir</label>
				<div class="col-sm-4">
					<input type="text" name="temlahir" class="form-control rounded <?php echo($error_temlahir !="" ? "is-invalid" : ""); ?>" id="temlahir" placeholder="Kota Lahir" value="<?php echo $temlahir; ?>"><span class="warning"><?php echo $error_temlahir; ?></span>
				</div>
			</div>
					
			<div class="form-group row">
				<label for="temlahir" class="col-sm-3 col-form-label">Tanggal Lahir / Usia</label>
				<div class="col-sm">
					<div class="row">
						<div class="col-sm-4">
							<input type="date" name="tgllahir" class="form-control rounded<?php echo($error_tgllahir !="" ? "is-invalid" : ""); ?>" id="tgllahir" placeholder="Tanggal lahir" value="<?php echo $tgllahir; ?>">
						</div>
						<div class="col-sm-2">
							<input type="text" name="usia" class="form-control <?php echo($error_usia !="" ? "is-invalid" : ""); ?>" id="usia" placeholder="Usia" value="<?php echo $usia; ?>">
						</div></div>
					<span class="warning"><?php echo $error_tgllahir."<br>"; echo $error_usia ; ?></span>
					</div>
			</div>				
				
			<div class="form-group row">
				<label for="kwn" class="col-sm-3 col-form-label">Kewarganegaraan</label>
					<div class="col-sm">
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="wni" name="radiokwn" class="custom-control-input" value="WNI">
  							<label class="custom-control-label" for="wni">WNI</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="wna" name="radiokwn" class="custom-control-input" value="WNA">
  							<label class="custom-control-label" for="wna">WNA</label>
						</div>
						<div class="col-sm-4 custom-control-inline">
							<input type="text" name="negara" class="form-control rounded" id="negara" placeholder="Negara Asal">
				</div>
							<?php echo ($error_kwn !="" ? "" : "");?>
							<span class="warning"><?php echo $error_kwn;?></span>
				</div>
			</div>
				
			<div class="form-group row">
			  <label for="status" class="col-sm-3 col-form-label">Status</label>
				<div class="col-sm-4"><select name="status" class="form-control <?php echo($error_status !="" ? "is-invalid" : ""); ?>" id="status" value="<?php echo $status; ?>" >
				  <option value="nonestatus">Pilih salah satu...</option>
				  <option value="Turis"> Turis</option>
					<option value="mhs"> Mahasiswa</option>
					<option value="pekerja"> pekerja</option>
					<option value="pelajar"> pelajar</option>
					<option value="IRT"> IRT</option>
					<option value="TKI"> TKI/TKW</option>
                </select><span class="warning"><?php echo $error_status; ?></span>
				</div>
			</div>
				
            <div class="form-group row">
				<label for="kawin" class="col-sm-3 col-form-label">Status perkawinan</label>
					<div class="col-sm">
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="menikah" name="kawin" class="custom-control-input" value="Menikah">
  							<label class="custom-control-label" for="menikah">Menikah</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="belum" name="kawin" class="custom-control-input" value="Belum menikah">
  							<label class="custom-control-label" for="belum">Belum menikah</label>
						</div>
							<?php echo ($error_kawin !="" ? "" : "");?>
							<span class="warning"><?php echo $error_kawin;?></span>
				</div>
			</div>
				
			<div class="form-group row">
			  <label for="tempat" class="col-sm-3 col-form-label">Tempat tinggal</label>
				<div class="col-sm-4"><select name="tempat" class="form-control <?php echo($error_tempat !="" ? "is-invalid" : ""); ?>" id="tempat" value="<?php echo $tempat; ?>" >
				  <option value="nonetempat">Pilih salah satu...</option>
				  <option value="Rumah"> Rumah pribadi</option>
				  <option value="kontrak"> Kontrakan</option>
				  <option value="rusun"> Rusunawa</option>
				  <option value="kos"> Kos</option>
				  <option value="apart"> Apartement</option>
				  <option value="hotel"> Hotel</option>
                </select><span class="warning"><?php echo $error_tempat; ?></span>
				</div>
			</div>
				
			<div class="form-group row">
				<label for="alamat" class="col-sm-3 col-form-label">Alamat lengkap</label>
				<div class="col-sm-7">
					<textarea name="alamat" class="form-control rounded <?php echo($error_alamat !="" ? "is-invalid" : ""); ?>"><?php echo $alamat; ?></textarea><span class="warning" ><?php echo $error_alamat; ?></span>
				</div>
			</div>
				
			<div class="form-group row">
			  <label for="kronis" class="col-sm-3 col-form-label">Riwayat penyakit <br> berat/kronis</label>
				<div class="col-sm-4"><select name="kronis" class="form-control <?php echo($error_penyakit !="" ? "is-invalid" : ""); ?>" id="kronis" value="<?php echo $penyakit; ?>" >
				  <option value="nonepenyakit">Pilih salah satu...</option>
				  <option value="Tidak Ada">Tidak Ada</option>
				  <option value="Jantung">Jantung</option>
				  <option value="Bronkitis">Bronkitis</option>
				  <option value="Liver">Liver</option>
				  <option value="Diabetes">Diabetes</option>
				  <option value="Hipertensi">Hipertensi</option>
				  <option value="Hepatitis">Hepatitis</option>
				  <option value="Lainnya">Lainnya...</option>
                </select><span class="warning"><?php echo $error_penyakit; ?></span>
				</div>
			</div>
				
			<div class="form-group row">
			  <label for="ayah" class="col-sm-3 col-form-label">Riwayat penyakit <br> ayah</label>
				<div class="col-sm-4"><select name="ayah" class="form-control <?php echo($error_penyakitayah !="" ? "is-invalid" : ""); ?>" id="ayah" value="<?php echo $penyakitayah; ?>" >
				  <option value="noneayah">Pilih salah satu...</option>
				  <option value="Tidak Ada">Tidak Ada</option>
				  <option value="Jantung">Jantung</option>
				  <option value="Bronkitis">Bronkitis</option>
				  <option value="Liver">Liver</option>
				  <option value="Diabetes">Diabetes</option>
				  <option value="Hipertensi">Hipertensi</option>
				  <option value="Hepatitis">Hepatitis</option>
				  <option value="Lainnya">Lainnya...</option>
                </select><span class="warning"><?php echo $error_penyakitayah; ?></span>
				</div>
			</div>
			
			<div class="form-group row">
			  <label for="ibu" class="col-sm-3 col-form-label">Riwayat penyakit <br> ibu</label>
				<div class="col-sm-4"><select name="ibu" class="form-control <?php echo($error_penyakitibu !="" ? "is-invalid" : ""); ?>" id="ibu" value="<?php echo $penyakitibu; ?>" >
				  <option value="noneibu">Pilih salah satu...</option>
				  <option value="Tidak Ada">Tidak Ada</option>
				  <option value="Jantung">Jantung</option>
				  <option value="Bronkitis">Bronkitis</option>
				  <option value="Liver">Liver</option>
				  <option value="Diabetes">Diabetes</option>
				  <option value="Hipertensi">Hipertensi</option>
				  <option value="Hepatitis">Hepatitis</option>
				  <option value="Lainnya">Lainnya...</option>
                </select><span class="warning"><?php echo $error_penyakitibu; ?></span>
				</div>
			</div>
				
			<script>function tanya4(){
		var tanya4 = alert ("Data anda akan disimpan untuk pendataan \n Jangan panik, tetap jaga kesehatan & #StayAtHome");
	}
				</script>
				<div class="text-center"><button type="submit" name="Simpan" value="Simpan" onClick=tanya4()>Simpan</button></div>
				<div class="form-group col-sm text-center">
				<span class="warning"><?php echo $error_check ;  ?></span>
				</div>
              
            </form>
          

        </div>

      </div>
    </section>

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
		  <div class="row">
			  
         	 <div class="col-sm-3" data-aos="fade-up" data-aos-delay="100">
            	<p><strong>Information System</strong><br>UPN "Veteran" Jatim, Surabaya</p>
			</div>
			<div class="col-sm-3" data-aos="fade-up" data-aos-delay="200">
				<p><strong>Arrandi Muhamad R. </strong><i>  (18082010005)</i><br>
            	<strong>Zabrina Tuzzahra </strong><i>  (180820100030)</i><br></p>
			</div>
          
	        <div class="col-sm-6" align="right" data-aos="fade-up" data-aos-delay="300">
            <img src="sipid.png" height="40px">
          </div>
			
        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span><i>SiPid-19</span></strong>. 2020</i>
      </div>
    </div>
  </footer><!-- Footer -->

  <script src="jquery.min.js"></script>
  <script src="owl.carousel.min.js"></script>
<script src="aos.js"></script>
  <script src="main.js"></script>

</body>

</html>
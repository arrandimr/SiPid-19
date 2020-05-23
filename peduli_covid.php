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

<body>
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><img src="sipid.png" height="30px"></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="cek_kesehatan.php">Cek Kesehatan</a></li>
          <li class="active"><a href="peduli_covid.php">SiPid-19 Peduli</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
		  <?php
		  include "koneksi.php";
		  $sql = mysqli_query($conn,'select sum(nominal) as nominal from peduli');
				while($baris = mysqli_fetch_array($sql)){
					$jmlnominal=number_format($baris['nominal'],0,",",".");
			}
		  ?>
		 
    <div class="col-md-2"></div>
        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="sipid_peduli.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h4 data-aos="fade-up" data-aos-delay="100">
              Mari ulurkan bantuan</h4> <p data-aos="fade-up" data-aos-delay="200">untuk membantu tenaga medis kita dalam menangani covid-19...</p>
            
            <div class="row">
              <div class="col-md-7" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-receipt"></i>
                <h4>Akumulasi bantuan sementara</h4>
                <p><strong>Rp. <?php echo $jmlnominal;?>,-</strong></p>
			</div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
	  
	  <?php
$error_nama = "";
$error_email = "";
$error_sex = "";
$error_prop = "";
$error_Nominal = "";
$error_Rekening = "";
$error_telp = "";
$error_check = "";

$nama = "";
$email = "";
$sex = "";
$prop = "";
$Nominal = "";
$Rekening = ""; 
$telp = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	//nama	
if(empty($_POST["nama"])){
	$error_nama = "Nama tidak boleh kosong !";
} else{
	if (!preg_match("/^[a-zA-Z]*$/",$_POST["nama"])) 
	{
		$error_nama = "nama hanya boleh huruf dan spasi";
	} else {
		$nama = cek_input($_POST["nama"]);
	}
}

//email
if (empty($_POST["email"])){
	$error_email = "Email tidak boleh kosong";
} else {
	$email = cek_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		$error_email = "Format email Invalid";
	}
}

//sex
if (!isset($_POST["sex"])) {
	$error_sex = "Isilah terlebih dahulu, Tidak boleh kosong!";
} else {
	$sex = cek_input($_POST["sex"]);	
}
	
//telp
if(empty($_POST["telp"])){
			$error_telp = "Telp tidak boleh kosong";
		} else{ 
			$telp = cek_input($_POST["telp"]);
			if (!is_numeric($telp)){
				$error_telp = "Nomor HP hanya boleh angka";
			}
		}

//prop 
		if(empty($_POST["prop"])){
			$error_prop = "Pilih salah satu";
		} else if($_POST["prop"]=="nonestatus"){
			$error_prop = "Pilih salah satu";
		} else{
			$prop = cek_input($_POST["prop"]);
		}

//nominal
if (empty($_POST["nominal"])) 
{
	$error_Nominal = "Nominal wajib diisi";
} else {
	if (!is_numeric($_POST["nominal"]))
	{
		$error_Nominal = 'Nominal hanya boleh angka';
	} else{
		$Nominal = cek_input($_POST["nominal"]);
	}
}

//rekening

if (empty($_POST["rekening"])) 
{
	$error_Rekening = "No rekening wajib diisi";
} else {
	if (!is_numeric($_POST["rekening"]))
	{
		$error_Rekening = 'No Rekening hanya boleh angka';
	} else{
		$Rekening = cek_input($_POST["rekening"]);
	}
}

	if(empty($nama && $email && $sex && $prop && $Nominal && $Rekening && $telp)){
				$error_check = "Pastikan semua data terisi!";
			} else {
			include "insertsumbangan.php";
			header ("location:peduli_covid.php");
		$nama = "";
$email = "";
$sex = "";
$prop = "";
$Nominal = "";
$Rekening = ""; 
$telp = "";
			}
}

function cek_input($data){
	$data = trim($data);
	$data	= stripslashes($data);
	$data	=htmlspecialchars(	$data);
	return $data	;	
}
?>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p><img src="sipid.png" height="30px"> Peduli</p>
        </div>
		  <h4 class="title" align="center" data-aos="fade-up" data-aos-delay="100">Lengkapi form berikut untuk menyalurkan bantuan anda...</h4>

        <div class="col-sm">
			
      <section id="contact" class="contact">
      <div class="container">
		  
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
				<label for="email" class="col-sm-3 col-form-label">Email</label>
					<div class="col-sm-6">
					<input type="text" name="email" class="form-control rounded <?php echo ($error_email !="" ? "is-invalid" : "");?>" id="email" placeholder="Email" value="<?php echo $email; ?>">
						<span class="warning"><?php echo $error_email;?></span>
				</div>
			</div>
				
			<div class="form-group row">
				<label for="sex" class="col-sm-3 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-8">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="laki" name="sex" class="custom-control-input" value="L">
  						<label class="custom-control-label" for="laki">Laki -Laki </label>
					</div> 
					<div class="custom-control custom-radio custom-control-inline">
  						<input type="radio" id="perempuan" name="sex" class="custom-control-input" value="P"> 
  						<label class="custom-control-label" for="perempuan">Perempuan</label>
					</div>
						<?php echo ($error_sex !="" ? "" : "");?>
						<span class="warning"><?php echo $error_sex;?></span>
					</div>
			</div>
			
			<div class="form-group row">
				<label for="telp" class="col-sm-3 col-form-label">No. Telpon</label>
				<div class="col-sm-5">
					<input type="text" name="telp" class="form-control rounded <?php echo($error_telp !="" ? "is-invalid" : ""); ?>" id="telp" placeholder="Telpon" value="<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp; ?></span>
				</div>
			</div>
				
			<div class="form-group row">
			  <label for="prop" class="col-sm-3 col-form-label">Provinsi</label>
				<div class="col-sm-4"><select name="prop" class="form-control <?php echo($error_prop !="" ? "is-invalid" : ""); ?>" id="prop" value="<?php echo $prop; ?>" >
				  <option value="nonestatus">Pilih salah satu...</option>
				  <option value="1"> Aceh</option>
					<option value="2"> Bengkulu</option>
					<option value="3"> Jambi</option>
					<option value="4"> k.Bangka Belitung</option>
					<option value="5"> k.Riau</option>
					<option value="6"> Lampung</option>
					<option value="7"> Riau</option>
					<option value="8"> Sumatra Barat</option>
					<option value="9"> Sumatra Selatan</option>
					<option value="10"> Sumatra Utara</option>
					<option value="11"> Banten</option>
					<option value="12"> Gorontalo</option>
					<option value="13"> Jakarta</option>
					<option value="14"> Jawa Barat</option>
					<option value="15"> Jawa Timur</option>
					<option value="16"> Jawa Tengah</option>
					<option value="17"> Kalimantan Barat</option>
					<option value="18"> Kalimantan Selatan</option>
					<option value="19"> Kalimantan Tengah</option>
					<option value="20"> Kalimantan Timur</option>
					<option value="21"> Kalimantan Utara</option>
					<option value="22"> Maluku</option>
					<option value="23"> Maluku Utara</option>
					<option value="24"> Bali</option>
					<option value="25"> NTB</option>
					<option value="26"> NTT</option>
					<option value="27"> Papua</option>
					<option value="28"> Papua Barat </option>
					<option value="29"> Sulawesi Barat</option>
					<option value="30"> Sulawesi Selatan</option>
					<option value="31"> Sulawesi Tengah</option>
					<option value="31"> Sulawesi Tenggara</option>
					<option value="32"> Sulawesi Utara</option>
					<option value="33"> Yogyakarta</option>
                </select><span class="warning"><?php echo $error_prop; ?></span>
				</div>
			</div>
							
			<div class="form-group row">
				<label for="nominal" class="col-sm-3 col-form-label">Nominal</label>
				<div class="col-sm-5">
					<input type="text" name="nominal" class="form-control rounded <?php echo($error_Nominal !="" ? "is-invalid" : ""); ?>" id="nominal" placeholder="Nominal" value="<?php echo $Nominal; ?>"><span class="warning"><?php echo $error_Nominal; ?></span>
				</div>
			</div>
				
			<div class="form-group row">
				<label for="rekening" class="col-sm-3 col-form-label">No. Rekening</label>
				<div class="col-sm-5">
					<input type="text" name="rekening" class="form-control rounded <?php echo($error_Rekening !="" ? "is-invalid" : ""); ?>" id="rekening" placeholder="No. Rekening" value="<?php echo $Rekening; ?>"><span class="warning"><?php echo $error_Rekening; ?></span>
				</div>
			</div>
			
			<div class="text-center"><button type="submit" name="Simpan" value="Simpan">Simpan</button></div>
				<div class="form-group col-sm text-center">
				<span class="warning"><?php echo $error_check ;  ?></span>
				</div>
              
            </form>
        </div>
      </div>
    </section>
        </div>
      </div>
    </section><!-- End Services Section -->

   
  </main><!-- End #main -->

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
            <a href="index.php"><img src="sipid.png" height="40px"></a>
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
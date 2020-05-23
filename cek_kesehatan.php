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

<script>

	function tanya2(){
		alert ("Silahkan cek kesehatan anda. \nIngin menyalurkan bantuan? Silahkan klik menu SiPid-19 Peduli.");
	}


</script>
<body onLoad=tanya2()>
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><img src="sipid.png" height="30px"></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li class="active"><a href="cek_kesehatan.php">Cek Kesehatan</a></li>
          <li><a href="peduli_covid.php">SiPid-19 Peduli</a></li>
        </ul>
      </nav>

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
            <form action="kuisioner.php" method="post" class="php-email-form">
				
              <div class="form-row">
				  <label for="bepergian" class="col-sm-7 col-form-label">1. Apakah anda berpergian ke luar negeri/daerah yang merupakan zona merah?</label>
				  <div class="col-sm-5" align="right">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="ya" name="jawaban1" class="custom-control-input" value="Y"/>  
  					<label class="custom-control-label" for="ya">Ya </label>
				</div> 
				<div class="custom-control custom-radio custom-control-inline">
  					<input type="radio" id="tidak" name="jawaban1" class="custom-control-input" value="T"/>
  					<label class="custom-control-label" for="tidak">Tidak</label>
				</div>
				  </div>			  
			</div>	  
				
				<div class="form-row">
				  <label for="bepergian" class="col-sm-7 col-form-label">2. Apakah anda berinteraksi dengan orang/kerabat yang terinfeksi covid-19?</label>
				  <div class="col-sm-5" align="right">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="ya2" name="jawaban2" class="custom-control-input" value="Y">
  					<label class="custom-control-label" for="ya2">Ya </label>
				</div> 
				<div class="custom-control custom-radio custom-control-inline">
  					<input type="radio" id="tidak2" name="jawaban2" class="custom-control-input" value="T"> 
  					<label class="custom-control-label" for="tidak2">Tidak</label>
				</div>
				  </div>			  
			</div>	  
				
				<div class="form-row">
				  <label for="bepergian" class="col-sm-7 col-form-label">3. Apakah anda mengalami gejala panas tinggi?</label>
				  <div class="col-sm-5" align="right">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="ya3" name="jawaban3" class="custom-control-input" value="Y">
  					<label class="custom-control-label" for="ya3">Ya </label>
				</div> 
				<div class="custom-control custom-radio custom-control-inline">
  					<input type="radio" id="tidak3" name="jawaban3" class="custom-control-input" value="T"> 
  					<label class="custom-control-label" for="tidak3">Tidak</label>
				</div>
				  </div>			  
			</div>
				
				<div class="form-row">
				  <label for="bepergian" class="col-sm-7 col-form-label">4. Apakah anda mengalami gejala Badan Lemas?</label>
				  <div class="col-sm-5" align="right">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="ya4" name="jawaban4" class="custom-control-input" value="Y">
  					<label class="custom-control-label" for="ya4">Ya </label>
				</div> 
				<div class="custom-control custom-radio custom-control-inline">
  					<input type="radio" id="tidak4" name="jawaban4" class="custom-control-input" value="T"> 
  					<label class="custom-control-label" for="tidak4">Tidak</label>
				</div>
				  </div>			  
			</div>
				
				<div class="form-row">
				  <label for="bepergian" class="col-sm-7 col-form-label">5. Apakah anda mengalami gejala Sesak Nafas?</label>
				  <div class="col-sm-5" align="right">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="ya5" name="jawaban5" class="custom-control-input" value="Y">
  					<label class="custom-control-label" for="ya5">Ya </label>
				</div> 
				<div class="custom-control custom-radio custom-control-inline">
  					<input type="radio" id="tidak5" name="jawaban5" class="custom-control-input" value="T"> 
  					<label class="custom-control-label" for="tidak5">Tidak</label>
				</div>
				  </div>			  
			</div>
				
				<div class="form-row">
				  <label for="bepergian" class="col-sm-7 col-form-label">6. Apakah anda mengalami gejala Batuk Kering/berdahak?</label>
				  <div class="col-sm-5" align="right">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="ya6" name="jawaban6" class="custom-control-input" value="Y">
  					<label class="custom-control-label" for="ya6">Ya </label>
				</div> 
				<div class="custom-control custom-radio custom-control-inline">
  					<input type="radio" id="tidak6" name="jawaban6" class="custom-control-input" value="T"> 
  					<label class="custom-control-label" for="tidak6">Tidak</label>
				</div>
				  </div>			  
			</div>
				
				<div class="form-row">
				  <label for="bepergian" class="col-sm-7 col-form-label">7. Apakah anda memiliki riwayat penyakit dalam/turunan?</label>
				  <div class="col-sm-5" align="right">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="ya7" name="jawaban7" class="custom-control-input" value="Y">
  					<label class="custom-control-label" for="ya7">Ya </label>
				</div> 
				<div class="custom-control custom-radio custom-control-inline">
  					<input type="radio" id="tidak7" name="jawaban7" class="custom-control-input" value="T"> 
  					<label class="custom-control-label" for="tidak7">Tidak</label>
				</div>
				  </div>			  
			</div><br><br>
				
              <div class="text-center"><button type="submit" name="Jawab" value="Jawab">Cek Kesehatan</button></div>
            </form>
          

        </div>
		  </div>
      </div>
			
			
    </section>
		 
		 <section id="contact" class="contact">
		 <?php
		  
		  $error_kabupaten = "";
		  $kabupaten = "";
			 
		  function cek_cari($data){
			$data = trim($data);
			$data	= stripslashes($data);
			$data	=htmlspecialchars(	$data);
			return $data	;	
		  }
		  
		  if ($_SERVER["REQUEST_METHOD"] == "GET") {
		  
		  if(empty($_GET["kabupaten"])){
			$error_kabupaten = "Silahkan masukkan Kabupaten/Kota anda";
		  	} else{
				if (!preg_match("/^[a-zA-Z]*$/",$_GET["kabupaten"])) 
				{
				$error_kabupaten = "Kabupaten hanya boleh huruf dan spasi";
			} else {
				$kabupaten = cek_cari($_GET["kabupaten"]);
			}
		  }}
			
					
		  
		  ?> 
		  
		  <div class="section-title align-items-center" data-aos="fade-up">
          <p>Rumah Sakit Rujukan</p>
			  <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">   
				  <div class="form-group row">
					  <div class="col-sm-4"></div>
				 	 <div class="input-group col-sm">
  						<input type="text" class="form-control <?php echo ($error_kabupaten !="" ? "is-invalid" : "");?>" id="kabupaten" value="<?php echo $kabupaten; ?>" placeholder="Masukkan Kabupaten" name="kabupaten">
  						<div class="input-group-append">
   							<button class="btn btn-secondary" type="submit" id="submit1">Cari</button>
 				 		</div>
		  			</div> 
					  
				  <div class="col-sm-4"></div>
				  </div>
				  <center><span class="warning eror"><?php echo $error_kabupaten;?></span></center>
			  </form>	
			  <p></p>
        </div>
			 
			 <div class="container">
			 <div class="row d-flex align-items-center">
				 <div class="col-sm-12" data-aos="fade-up" data-aos-delay="100">
				<table width="100%" border="0px" class="table table-striped">
					<thead class="thead-dark" align="center">
    					<tr>
							<th scope="col">No.</th>
      						<th scope="col">Kabupaten/Kota</th>
      						<th scope="col">Rumah Sakit</th>
      						<th scope="col">Alamat</th>
							<th scope="col">No. Telepon</th>
   						 </tr>
  					</thead>
					<?php
			  if(empty($kabupaten)){
				$error_kabupaten = "Masukkan nama Kabupaten/Kota dengan benar";
			} else {
				include "koneksi.php";
				$sql = mysqli_query($conn,"select * from rujukan where kota='".$kabupaten."'");
				$i = 1;
				while($row = mysqli_fetch_array($sql)){
				$kota = $row['kota'];
				$rs = $row['RumahSakit'];
				$alamat = $row['alamat'];
				$telepon = $row['telepon'];
					echo '<tbody><tr>
							<td>'.$i.'</td>
							<td>'.$kota.'</td>
      						<td>'.$rs.'</td>
      						<td>'.$alamat.'</td>
							<td>'.$telepon.'</td>
    						</tr>';
					$i++;
						}}
					?>
					
    				</tbody>				 
				 </table></div>
				</div>
			</div>
		 
		 </section>
		 

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Radar Covid-19</h2>
          <p>Jawa Timur</p>
        </div>

		   <div class="col-sm justify-content-center">
			   <h4 align="center" data-aos="fade-up">Cek daerah sekitar anda dengan peta dibawah...</h4><br>
  				<div class="col-sm" align="center" data-aos="fade-up" data-aos-delay="100">
      				<div class="embed-responsive embed-responsive-16by9 rounded-lg 	">
        			<iframe class="embed-responsive-item" src="https://radarcovid19.jatimprov.go.id/"></iframe>
      				</div>
					
					<p data-aos="zoom-in" align="center">Sumber : <a href="https://radarcovid19.jatimprov.go.id/">https://radarcovid19.jatimprov.go.id/</a></p>
   		 	</div>
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

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script src="jquery.min.js"></script>
  <script src="owl.carousel.min.js"></script>
  <script src="aos.js"></script>

  <script src="main.js"></script>

</body>

</html>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Sistem Informasi Pendataan Covid-19</title>
<link href='icon.png' rel='shortcut icon'>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href="bootstrap.min.css" rel="stylesheet">
<link href="aos.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<script type="text/javascript" src="Chart.js"></script>
</head>

<?php 
include('koneksi.php');
$sql = mysqli_query($conn,'select max(positif) as positif, max(positif_dirawat) as positif_dirawat from total_kasus');
	while($baris = mysqli_fetch_array($sql)){
		$positif = $baris['positif'];
		$positif_dirawat = $baris['positif_dirawat'];
	}
?>

<script>

	function tanya(){
		alert ("Selamat datang di SiPid-19 \nUntuk melakukan cek kesehatan silahkan klik menu Cek Kesehatan");
	}
	
	$('#myModal').modal('show');


</script>

<body onLoad=tanya()>
	
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><img src="sipid.png" height="30px"></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Beranda</a></li>
          <li><a href="cek_kesehatan.php">Cek Kesehatan</a></li>
          <li><a href="peduli_covid.php">SiPid-19 Peduli</a></li>
        </ul>
      </nav>

    </div>
  </header>
	
	<section id="hero" class="d-flex align-items-center">
	<div class="container">
		<div class="row">
        	<div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1" >
          		<h1 data-aos="fade-up">Apa itu virus <br>SARS-CoV-2 / Covid-19 ?</h1>
         		<h2 data-aos="fade-up">Virus yang menyerang sistem pernapasan. Virus ini <br> dapat menyebabkan gangguan ringan pada <br>sistem pernapasan, infeksi paru-paru <br>yang berat,  hingga kematian.</h2>
          		<div><a href="https://covid19.go.id/" class="btn-get-started scrollto">Pelajari lebih lanjut</a></div>
        	</div>
        	<div class="col-lg-5 order-1 order-lg-2 hero-img">
          		<img src="graphic1.png" class="img-fluid animated" alt="">
        	</div>
      	</div>
	</div>
	</section>

  <main id="main">

    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="sipid.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Sistem Pendataan Covid-19</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              Merupakan sebuah website yang menyediakan layanan untuk melakukan cek kesahatan secara mandiri, pendaftaran gejala, dan menyampaikan info terkini 
				mengenai covid-19 di Jawa Timur
            </p>
            <div class="row">
              <div class="col-md-5" data-aos="fade-up" data-aos-delay="100" align="right">
                <h4>Kasus positif di Jatim</h4>
                <h3><?php echo $positif; ?></h3>
              </div>
              <div class="col-md-5" data-aos="fade-up" data-aos-delay="200" align="right">
                <h4>Kasus Positif dirawat</h4>
                <h3><?php echo $positif_dirawat; ?></h3>
              </div>
            </div>
          </div>
        </div>

      </div>
		</section>
	  
<section id="about" class="about">
	<div class="container">
		<div class="section-title" data-aos="fade-up">
          <h2>Pencegahan</h2>
          <h3>Cara mencegah penyebaran Covid-19</h3>
			<p></p>
        </div>
		
<div class="container" align="center" data-aos="fade-up" data-aos-delay="100">
			<!--Carousel Wrapper-->
			<div id="carousel-example-2" class="carousel slide" data-ride="carousel">
  				<!--Indicators-->
  				<ol class="carousel-indicators">
    				<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    				<li data-target="#carousel-example-2" data-slide-to="1"></li>
   					<li data-target="#carousel-example-2" data-slide-to="2"></li>
  				</ol>
  				<!--/.Indicators-->
  				<!--Slides-->
  				<div class="carousel-inner" role="listbox">
					
					<!--/.Item 1-->
    				<div class="carousel-item active">
      					<div class="view">
        					<img class="d-block" width="80%" src="item1.png" alt="First slide">
        					<div class="mask rgba-black-light"></div>
      					</div>
    				</div>
					
					<!--/.Item 2-->
    				<div class="carousel-item">
        				<div class="view">
        					<img class="d-block" width="80%" src="item2.png" alt="Second slide">
        					<div class="mask rgba-black-strong"></div>
      					</div>
    				</div>
					
					<!--/.Item 3-->
    				<div class="carousel-item">
      					<div class="view">
        					<img class="d-block" width="80%" src="item3.png" alt="Third slide">
        					<div class="mask rgba-black-slight"></div>
      					</div>
    				</div>
  				</div>
  				<!--/.Slides-->
				
  				<!--Controls-->
  				<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  				</a>
  				<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="sr-only">Next</span>
  				</a>
  				<!--/.Controls-->
			</div>
			<!--/.Carousel Wrapper-->
		</div>
</div>
    </section>
	  
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Grafik</h2>
          <p>Total kasus covid-19 di Jawa Timur</p>
        </div>
		  
		 <div class="row">
		  <div class="col-sm container">
					<div style="width:100%; height:70%" data-aos="zoom-in" data-aos-delay="100">
						<canvas id="myChart"></canvas>
					</div>
				</div>
		  </div>
		  <?php 
		  $query = mysqli_query($conn,"select * from total_kasus");
		  	while($row = mysqli_fetch_array($query)){
				$tanggal_kasus[] = $row['tanggal'];
				$positif_baru[]= $row['positif_baru'];
				$odp[] = $row['odp'];
				$odp_dipantau[] = $row['odp_dipantau'];
				$pdp[] = $row['pdp'];
				$pdp_diawasi[] = $row['pdp_diawasi'];
				$positifa[] = $row['positif'];
				$positif_dirawata[] = $row['positif_dirawat'];
				$sembuh[] = $row['sembuh'];
				$meninggal[] = $row['meninggal'];
	
}
		  ?>
		  <script>
		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: <?php echo json_encode($tanggal_kasus) ?>,
				datasets: [{ 
        			data: <?php echo json_encode($positif_baru); ?>,
					label: 'Positif baru',
        			borderColor: 'rgba(222, 184, 135)',
					fill: false	
				
				},{
					data: <?php echo json_encode($odp); ?>,
					label: 'ODP',
        			borderColor: 'rgba(255, 99, 132, 1)',
					fill: false
				},{
					data: <?php echo json_encode($odp_dipantau); ?>,
					label: 'ODP dipantau',
        			borderColor: 'rgba(54, 162, 235, 1)',
					fill: false
				},{
					data: <?php echo json_encode($pdp); ?>,
					label: 'PDP',
        			borderColor: 'rgba(255, 206, 86, 1)',
					fill: false
				},{
					data: <?php echo json_encode($pdp_diawasi); ?>,
					label: 'PDP diawasi',
        			borderColor: 'rgba(127, 255, 212, 1)',
					fill: false
				},{
					data: <?php echo json_encode($positifa); ?>,
					label: 'Positif',
        			borderColor: 'rgba(139, 5, 0, 1)',
					fill: false
				},{
					data: <?php echo json_encode($positif_dirawata); ?>,
					label: 'Positif dirawat',
        			borderColor: 'rgba(220, 20, 60, 1)',
					fill: false
				},{
					data: <?php echo json_encode($sembuh); ?>,
					label: 'Sembuh',
        			borderColor: 'rgba(43, 191, 254, 1)',
					fill: false
				},{
					data: <?php echo json_encode($meninggal); ?>,
					label: 'Meninggal',
        			borderColor: 'rgba(105, 105, 105, 1)',
					fill: false
				}
			]
			},
			options: {
    title: {
      display: true,
      text: 'Jenis kasus'
    }
  }
});
	</script>

        <div class="row">
			<div class="col-sm" align="center">
			<p class="description" data-aos="zoom-in">Sumber : <a href="http://news.detik.com/">http://news.detik.com/</a></p>
			</div>
		  </div>
        </div>

    </section>

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
				<p><strong>Arrandi Muhamad R. </strong><i>  .18082010005</i><br>
            	<strong>Zabrina Tuzzahra </strong><i>  .180820100030</i><br></p>
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
<script src="bootstrap.min.js" crossorigin="anonymous"></script>

</body>

</html>
<?php
require "functions.php";
$id = $_GET["id"];
$pemilu = query("SELECT * FROM pemilu WHERE id = $id")[0];
$pileg = query("SELECT * FROM pileg WHERE id = $id")[0];
$konflik = query("SELECT * FROM dadakan WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Vendor CSS Files -->
    <!-- <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" /> -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <!-- <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" /> -->
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <title>Document</title>
    <meta name="description" content="chart created using amCharts live editor" />
		
		<!-- amCharts javascript sources -->
		<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
		<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
		<script type="text/javascript" src="https://www.amcharts.com/lib/3/themes/patterns.js"></script>
        <script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>

        <script type="text/javascript">
			AmCharts.makeChart("chartdivpie",
				{
					"type": "pie",
					"angle": 12,
					"balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
					"depth3D": 15,
					"titleField": "category",
					"valueField": "column-1",
					"allLabels": [],
					"balloon": {},
					"legend": {
						"enabled": true,
						"align": "center",
						"markerType": "circle"
					},
					"titles": [],
					"dataProvider": [
						{
							"category": "Joko Widodo - Ma'ruf Amin",
							"column-1": <?php echo $pemilu["jumlah_suara1"]; ?>
						},
						{
							"category": "Prabowo Subianto - Sandiaga Uno",
							"column-1": <?php echo $pemilu["jumlah_suara2"]; ?>
						}
					]
				}
			);
		</script>
		

		<!-- amCharts javascript code -->
		<script type="text/javascript">
			AmCharts.makeChart("chartdiv",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1.5,
					"categoryAxis": {
						"gridPosition": "start"
					},
					"trendLines": [],
					"graphs": [
						{
							"fillAlphas": 1,
							"id": "AmGraph-1",
							"title": "graph 1",
                            "colorField": "color",
                            "lineColorField": "color",
							"type": "column",
							"valueField": "graph 1"
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"logarithmic": true,
							"title": "Perolehan Suara"
						}
					],
					"allLabels": [],
					"balloon": {},
					"titles": [
						{
							"id": "Title-1",
							"size": 15,
							"text": "HASIL HITUNG SUARA LEGISLATIF DPR RI 2019 WILAYAH <?= $pileg["wilayah"]; ?>"
						}
					],
					"dataProvider": [
						{
							"category": "PKB",
							"graph 1": <?php echo $pileg["PKB"]; ?>,
							"color": "#006980"
						},
						{
							"category": "Gerindra",
							"graph 1": <?php echo $pileg["Gerindra"]; ?>,
							"color": "#006980"
						},
						{
							"category": "PDIP",
							"graph 1": <?php echo $pileg["PDIP"]; ?>,
							"color": "#006980"
						},
						{
							"category": "Golkar",
							"graph 1": <?php echo $pileg["Golkar"]; ?>,
							"color": "#006980"
						},
						{
							"category": "NasDem",
							"graph 1": <?php echo $pileg["NasDem"]; ?>,
							"color": "#006980"
						},
						{
							"category": "Garuda",
							"graph 1": <?php echo $pileg["Garuda"]; ?>,
							"color": "#006980"
						},
						{
							"category": "Berkarya",
							"graph 1": <?php echo $pileg["Berkarya"]; ?>,
							"color": "#006980"
						},
						{
							"category": "PKS",
							"graph 1": <?php echo $pileg["PKS"]; ?>,
							"color": "#006980"
						},
                        {
							"category": "Perindo",
							"graph 1": <?php echo $pileg["Perindo"]; ?>,
							"color": "#006980"
						},
						{
							"category": "PPP",
							"graph 1": <?php echo $pileg["PPP"]; ?>,
							"color": "#006980"
						},
						{
							"category": "PSI",
							"graph 1": <?php echo $pileg["PSI"]; ?>,
							"color": "#006980"
						},
						{
							"category": "PAN",
							"graph 1": <?php echo $pileg["PAN"]; ?>,
							"color": "#006980"
						},
						{
							"category": "Hanura",
							"graph 1": <?php echo $pileg["Hanura"]; ?>,
							"color": "#006980"
						},
						{
							"category": "Demokrat",
							"graph 1": <?php echo $pileg["Demokrat"]; ?>,
							"color": "#006980"
						},
						{
							"category": "PBB",
							"graph 1": <?php echo $pileg["PBB"]; ?>,
							"color": "#006980"
						},
						{
							"category": "PKPI",
							"graph 1": <?php echo $pileg["PKPI"]; ?>,
							"color": "#006980"
						}
					]
				}
			);
		</script>

    <!-- konflik -->
		<script type="text/javascript">
			AmCharts.makeChart("chartdivfinal",
				{
					"type": "serial",
					"categoryField": "category",
					"rotate": true,
					"startDuration": 1,
					"categoryAxis": {
						"gridPosition": "start"
					},
					"trendLines": [],
					"graphs": [
						{
							"fillAlphas": 1,
							"id": "AmGraph-1",
							"title": "graph 1",
							"type": "column",
							"valueField": "graph 1",
                            "colorField": "color"
						}
					],
					"guides": [
						{
							"above": true,
							"dashLength": 5,
							"id": "Guide-1",
							"inside": true,
							"label": "max allowed value",
							"labelRotation": 90,
							"lineAlpha": 1,
							"lineColor": "#ff0000",
							"value": 10
						}
					],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"title": "Jumlah Titik Rawan Konflik"
						}
					],
					"allLabels": [],
					"balloon": {},
					"titles": [
						{
							"id": "Title-1",
							"size": 15,
							"text": "Titik Rawan Konflik"
						}
					],
					"dataProvider": [
						{
							"category": "TAWURAN",
							"graph 1": <?php echo $konflik["tawuran"]; ?>
						},
						{
							"category": "PREMANISME",
							"graph 1": <?php echo $konflik["premanisme"]; ?>
						},
						{
							"category": "KONFLIK ETNIS/SARA",
							"graph 1": <?php echo $konflik["sara"]; ?>
						},
						{
							"category": "KONFLIK LAINNYA",
							"graph 1": <?php echo $konflik["lainnya"]; ?>
						},
					]
				}
			);
		</script>
</head>
<body>
     <!-- ======= Header ======= -->
     <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">
        <a href="home.html" class="logo"
          ><img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Coat_of_arms_of_Jakarta.svg/1200px-Coat_of_arms_of_Jakarta.svg.png"
            alt=""
            class="img-fluid"
        /></a>

        <h1 class="logo ms-2 fs-6">
          <a href="home.html" class="text-decoration-none"
            >Badan Kesatuan Bangsa dan Politik <br />
            Pemerintah Provinsi DKI Jakarta</a
          >
        </h1>
        <!-- .navbar -->
        <nav id="navbar" class="navbar ms-auto">
          <ul class="text-center">
            <li><a href="home.html">Home</a></li>
            <li class="dropdown">
              <a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="profil/visimisi.html">Visi & Misi</a></li>
                <li><a href="profil/struktur.html">Sturktur Organisasi</a></li>
                <li class="dropdown">
                  <a href="#"><span>Sekretariat & Bidang</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="profil/sekretariat.html">Sekretariat</a></li>
                    <li><a href="profil/idewasbang.html">Bidang Ideologi dan Wawasan Bangsa</a></li>
                    <li><a href="profil/kewaspadaan.html">Bidang Kewaspadaan</a></li>
                    <li><a href="profil/poldem.html">Bidang Politik dan Demokrasi </a></li>
                    <li><a href="profil/kesbak.html">Bidang KESBAK</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#"><span>Ormas</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="ormas/skt-baru.html">SKT Baru</a></li>
                <li><a href="ormas/skt-perpanjangan.html">SKT Perpanjangan</a></li>
                <li><a href="ormas/skt-database.html">Database SKT</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="Galeri/foto.html">Foto</a></li>
                <li><a href="Galeri/video.html">Video</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#"><span> Berita</span><i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="berita/berita.html">Berita Kesbangpol</a></li>
                <li><a href="berita/artikel.html">Artikel</a></li>
              </ul>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- End Navbar -->
      </div>
    </header>
    <!-- ======= End Header ======= -->
    <a href="home.php">back</a>
    <p>Kota: <?php echo $pemilu["kota"]; ?></p>
    <p>Kecamatan: <?php echo $pemilu["wilayah"]; ?></p>
    <p>Jumlah suara Joko Widodo - Ma'ruf Amin:<?php echo $pemilu["jumlah_suara1"]; ?></p>
    <p>Jumlah suara Prabowo Subianto - Sandiaga Uno:<?php echo $pemilu["jumlah_suara2"]; ?></p>
    <div id="chartdivpie" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
    <div id="chartdiv" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
	<div id="chartdivfinal" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
    <p></p>

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row mx-auto">
            <div class="col-lg-4 col-md-6 mx-auto">
              <div class="footer-info">
                <h3>
                  Badan Kesatuan Bangsa dan <br />
                  Politik Provinsi DKI Jakarta
                </h3>
                <p>
                  Jl. Medan Merdeka Selatan No.8-9 Jakarta Pusat.
                  <br />
                  <br />
                  <strong>Telp:</strong>
                  021-3800590
                  <br />
                  <strong>FAX:</strong>
                  021-3454451
                  <br /><br />
                </p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 footer-links mx-auto">
              <h3>Media</h3>
              <p>
                <br />
                <a class="bi bi-instagram text-decoration-none" href="https://www.instagram.com/bakesbangpoldki.jakarta/">
                  @bakesbangpoldki.jakarta</a
                >
                <br />
                <a class="bi bi-youtube text-decoration-none" href="https://www.youtube.com/channel/UCrCaScMTI-fBNuXaFPGG21A/videos">
                  Bakesbangpol Provinsi DKI Jakarta</a
                >
                <br />
                <i class="bi bi-envelope-fill"></i>
                bakesbangpol.dkijakarta@gmail.com
              </p>
            </div>

            <div class="col-lg-4 col-md-6 footer-links mx-auto">
              <h3>Maps</h3>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.615148064189!2d106.82618481529484!3d-6.182234162298325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f42dc40f2ccf%3A0x39f30350bff6392e!2sKantor%20Kes%20Bang%20Pol%20DKI%20Jakarta!5e0!3m2!1sen!2sid!4v1645061221714!5m2!1sen!2sid"
                width="300"
                height="300"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ======= End Footer ======= -->
</body>
</html>
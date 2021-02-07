<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>constelle</title>

	<?php
		include 'links.php';
	?>

	<style> 
		.constelle {
			position:relative;
			text-align:center;
			color:black;
			}
		.nn{
			background-color:#99cccc;
			color:#336699;
			}
			.d{
				padding-top: 0.7rem;
				padding-bottom: 0.7rem;
			}
			ol.b {
				list-style-type: disc;
			}
				</style>
</head>
<body>
	<?php
		include 'nav.php';
	?>
		<h1 class="nn d" style="background-color: #069;color: white"><b><center>ConStellE</center></b></h1>
				<br>
				<div class="container constelle">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="card-block">
								<div class="top-left"><h3 class="card-title" style="color: #006699"><b>ABOUT</b></h3>
									<p class="card-text" style="text-align: justify;">
									A student association created by the cse department to gather and share students innovative ideas and knowledge with people which is operated by the students at the university whose membership typically consists only of students or alumni.Aims may involve practice and propagation of a certain professional hobby or to promote professional development or philanthropic causes.</p>
									<p style="text-align: justify;">The purpose of these organizations is to represent students both within the institution and externally, including on local and national issues. Students' unions are also responsible for providing a variety of services to students.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="card-block">
								<div class="top-left"><h3 class="card-title" style="color:#006699"><b>EVENTS</b></h3>
										<ol class="b">
										   <li style="text-align: justify;"> Workshop On PHP nad MYSQL to CSI Members on 13th Dec 2014.</li>
										   <br>
											<li style="text-align: justify;"> One Day Workshop On Edtechtools In Teaching And Learning On 5th Oct 2019.</li>
											<br>
											<li style="text-align: justify;"> Careers In Artificial Intelligence On 2nd Jun 2020.</li>
											<br>
											<li style="text-align: justify;"> Global Webinar Design On Cyber Security On 26th June 2020.</li>
											<br>
											<li style="text-align: justify;"> One Week Online Workshop On Blended E-Learning On 6-10th July 2020.</li>
										</ol>
								</div>
							</div>
						</div>
					</div>
				<div>
								<br>
								<h3 style="color:#006699"><center><b>EVENT GALLERY</b></center></h3>
								<br>
				</div>
				<div class="container">
					<div id="carouselslides" class="carousel slide" data-ride="carousel" data-interval="2000">
						<ol class="carousel-indicators">
										<li data-target="#carouselslides" data-slide-to="0" class="active"></li>
										<li data-target="#carouselslides" data-slide-to="1"></li>
										<li data-target="#carouselslides" data-slide-to="2"></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class="d-block w-100" src="assets/img/c1.jpeg" alt="First slide" height="500" >
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/img/c2.jpeg" alt="Second slide">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="assets/img/c3.jpeg" alt="Third slide">
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselslides" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselslides" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
				</div>
		</div>
	</div>
		<?php
			include 'footer.php';
		?>
	</body>
</html>

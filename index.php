<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="JNTUK, University, UCEV, CSE, department portal">
	<meta name="description" content="JNTUK UCEV CSE department portal, activities of CSE department">
	<title>JNTUK UCEV CSE :: Home page</title>
	<?php 
	include 'links.php';
	?>
<link rel="stylesheet" type="text/css" href="assets/css/home.css">
    <style type="text/css">
		p{
			text-align: justify;
		}
	</style>
</head>
<body>
	<?php
	include 'nav.php';
	?>
	<div class="container-fluid">
		<div id="carouselslides" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
          <li data-target="#carouselslides" data-slide-to="0" class="active"></li>
          <li data-target="#carouselslides" data-slide-to="1"></li>
          <li data-target="#carouselslides" data-slide-to="2"></li>
          <li data-target="#carouselslides" data-slide-to="3"></li>
<!--           <li data-target="#carouselslides" data-slide-to="4"></li>
 -->
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/3.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/4.jpg" alt="Third slide">
          </div>
<!--           <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/img5.jpg" alt="Third slide">
          </div>
 -->          

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
	<div class="container">
		<div class="row py-5">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 center">
				<img class="img-responsive profileImg" src="assets/img/sd.jpg" alt="ASN Chakravarthy HOD">
					<center class="py-2">
						<h4>Dr.A.S.N. Chakravarthy</h4><h5>Head of the Department</h5>
					</center>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<p>
				Greetings!. <br>
				 I welcome you all to the Department of Computer Science and Engineering (CSE). I believe the CSE discipline has been widely recognized as an essential source and technique for the advancements in all spheres of human endeavour now and in future. 
				</p>
				<p>
					The Departments have the proud privilege of having exceptionally qualified, dedicated and scholastic Faculty. Our faculty members works with a tremendous team-spirit to create the best technocrats for the industry and accept the global challenges. The strength of the department is highly motivated students who understand the dynamics of the industry and upgrade their skills accordingly. 
				</p>
				<p>
					I look forward for preparing my students to face the challenges; the technology and engineering sector would offer in the future and succeed in offering technological solutions for the betterment of the society and our nation. I wish all our students to have brilliant and bright future
				</p>
			</div>
		</div>
		<div class="row">


			<div class=" col-sm-12 col-xs-12 col-md-6 col-lg-4">
				<div class="card">
				<div class="card-header"><h4>OUR VISION</h4></div>
				<div class="card-body"><p>To achieve high quality Computer Science Engineers with effective communication skills and technical knowledge to address current and future challenges of the industry.To achieve academic excellence in Computer Science and Engineering by imparting comprehensive knowledge to the students, promoting research activities and professional ethics to outfit the ever changing industrial demands and societal needs.</p>
				</div>
				</div>
			</div>


			<div class="col-md-4 col-lg-4 missionDp">
				<img class="img-fluid" src="https://imgur.com/2cQzPEN.png" alt="OUR VISION IMAGE">
			</div>


			<div class="col-sm-12 col-xs-12 col-md-6 col-lg-4 mobmargin">
				<div class="card">
					<div class="card-header"><h4>OUR MISSION</h4></div>
					<div class="card-body">
						 <p> To educate students with the fundamental principles of modern Computer Science and Engineering through innovative teaching.To improve the technical skills with well established Computer Science and Engineering Laboratories.To train graduates by conducting Skill Development Programs to bridge the gap between academic and industry.To inculcate work ethics and commitment in students for their future endeavors to serve the society.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	include 'footer.php';
	?>
	
</body>
</html>
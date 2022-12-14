
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ViReal - Platform to manage virtual event which had using 360 degrees Virtual Reality Technology.">
    <meta name="author" content="ViReal - SVCC Squad 3-1">
    <meta name="generator" content="">
    <title>ViReal by SVCC</title>

    <link rel="icon" href="/assets/image/logo.png" type="image/png" sizes="16x16">

    <script src="/assets/js/scrollreveal.min.js"></script>

    <!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<meta name="theme-color" content="#7952b3">

	<!-- Start Bubble Chat -->
	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="059fea4c-a685-4e32-a1d0-d35204865bc0";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
	<!-- End Bubble Chat -->
    <!-- font import-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
    *{
        font-family: 'Inter', sans-serif;
    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
	  .mobile{
		  width:100%	
	  }
	  .rev{
		  visibility:hidden;
	  }
	  .mobile-card{
		  width:100%;
		  margin-top:10px!important;	
	  }
	  .h-mobile{
		  height:fit-content;
	  }
	  .btn-glow:hover{
	      box-shadow: 0px 0px 12px #416FF0,
	                 inset 0px 0px 12px #416FF0;
	      color:#416FF0!important;
	  }
	.glass-card {
		backdrop-filter: blur(10px) saturate(180%);
		-webkit-backdrop-filter: blur(10px) saturate(180%);
		background-color: rgba(17, 25, 40, 0.75);
		border-radius: 12px;
		border: 1px solid rgba(255, 255, 255, 0.125);
	}

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
		.mobile{
			width:50%!important;
		}
		.mobile-card{
			width:45%!important;	
	  	}
	  	.h-mobile{
			  height :105%;
		  }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/assets/css/cover.css" rel="stylesheet">
  </head>
  <body class="h-100" style="background-color:#161c2c">
    <div class="container-fluid h-100 text-white text-center" style="background-image:url('/assets/image/hero14.png');background-repeat:no-repeat;background-size:cover">
		<div class="container d-flex h-100 w-100 p-3 mx-auto flex-column"  style="background-color:rgba(0,0,0,0)">
		<!-- <div class="cover-container d-flex p-3 mx-auto flex-column"  style="background-color:rgba(0,0,0,0.5);"> -->
		<header class="mb-auto">
			<div>
			<img class="float-md-start mb-0 py-2" width="100" height="40" style="object-fit: cover;" src="/assets/image/logo.png">
			<!-- <img class="float-md-start mb-0" width="100" src="/assets/image/vireal-logo.png"> -->
			<nav class="nav nav-masthead justify-content-center float-md-end">
				<a class="nav-link active" aria-current="page" href="/">Home</a>
				<a onclick = "comingsoon()" class="nav-link" href="#">Profile</a>
				<a onclick = "comingsoon()" class="nav-link" href="#">Product</a>
				<a class="nav-link" href="order">Order ViReal</a>
			</nav>
			</div>
		</header>

		<main class="px-0 py-5">
			<h1 class="title" style="text-align:left">ViReal</h1>
			<p class="py-5 px-0 mobile" style="text-align:left">ViReal is a platform to manage virtual event which had using 360 degrees Virtual Reality Technology.</p>
			<div class="py-5 px-5 mobile" style="text-align:left">
	  		<h3 class="t-1"></h3>
			  <!-- <p class="t-2">SVCC adalah platform manajemen event secara virtual mulai dari konferensi, webinar hingga pameran virtual. Melalui kolaborasi, kami ingin menjadi jembatan bagi para perusahaan hingga institusi untuk membuat acara virtual lebih cerdas dan efisien.</p> -->
			</div>
			<p class="lead" style="text-align:left">
			<a href="#" class="btn btn-lg btn-glow fw-bold text-white border-white" onclick="comingsoon()">Learn more</a>
			<p style="text-align:left">Your Next Level Experience.</p>
			</p>
		</main>
		</div>
	</div>

	<!-- about -->
	<div class="container-fluid my-5 py-5 ">
		<div class="container-fluid w-75 mx-auto d-flex flex-row-reverse flex-wrap justify-content-between">
			<div id="about" class="py-2 mobile rev">
			  <h1 class="title float ms-5 ps-5">About us</h1><br></br>
	  		<!-- <h3 class="t-1">We Are Professionals</h3>
			  <p class="t-2">SVCC adalah platform manajemen event secara virtual mulai dari konferensi, webinar hingga pameran virtual. Melalui kolaborasi, kami ingin menjadi jembatan bagi para perusahaan hingga institusi untuk membuat acara virtual lebih cerdas dan efisien.</p> -->
		</div>
	  	<div id="abt-content" class="py-2 mobile ps-2 rev">
		  <h3 class="t-1">We Are Professionals</h3>
			  <p class="t-2">SVCC adalah platform manajemen event secara virtual mulai dari konferensi, webinar hingga pameran virtual. Melalui kolaborasi, kami ingin menjadi jembatan bagi para perusahaan hingga institusi untuk membuat acara virtual lebih cerdas dan efisien.</p>
		</div>
			
	  </div>
	</div>

	<!-- services -->
    <div class="container-fluid text-white text-center h-mobile py-5" style="background-image:url('/assets/image/vrbg3.png');background-repeat:no-repeat;background-size:cover">
		<h1 class="py-2 mobile title mb-5">Services</h1>
		<div class="container-fluid d-flex w-75 my-auto flex-wrap justify-content-between">
			<div id="webinar" class="glass-card mobile-card p-3 rev">
				<img width="75" src="/assets/image/desktop-solid.png" alt="webinar">
				<h4 class="mt-4">Webinar</h4>
				<p class="text-secondary">Hadirkan Webinar dengan jangkauan lebih dari 6000+ pengunjung yang dilengkapi berbagai fitur interaktif dan gamifikasi.</p>
			</div>
			<div id="expo" class="glass-card mobile-card p-3 rev">
				<img width="100" src="/assets/image/vr-cardboard-solid.png" alt="webinar">
				<h4 class="mt-4">Virtual Expo</h4>
				<p class="text-secondary">Berikan pengalaman imersif pada pengunjung acara dengan desain 3D beresolusi hingga 4K, latar musik dan terintegrasi dengan media sosial.</p>
			</div>
			<!-- <div class="glass-card mobile-card p-3">
				<img width="100" src="/assets/image/vr-cardboard-solid.png" alt="webinar">
				<h4 class="mt-4">Virtual Expo</h4>
				<p class="text-secondary">Berikan pengalaman imersif pada pengunjung acara dengan desain 3D beresolusi hingga 4K, latar musik dan terintegrasi dengan media sosial.</p>
			</div>
			<div class="glass-card mobile-card p-3">
				<img width="100" src="/assets/image/vr-cardboard-solid.png" alt="webinar">
				<h4 class="mt-4">Virtual Expo</h4>
				<p class="text-secondary">Berikan pengalaman imersif pada pengunjung acara dengan desain 3D beresolusi hingga 4K, latar musik dan terintegrasi dengan media sosial.</p>
			</div> -->
		</div>
	</div>

	<!-- logo partner -->
	<div id="partners" class="container-fluid d-flex justify-content-center flex-wrap rev">
		<img class="img-fluid m-4" src="/assets/image/itdri.png" alt="partner1">
		<img class="img-fluid m-5" src="/assets/image/fina-official.png" alt="partner2">
		<img class="img-fluid m-4" src="/assets/image/athon-official.png" alt="partner1">
	</div>

	<!-- contact -->
	<div class="container-fluid text-center py-5 my-5" style="background-color:rgba(0,0,0,0.3)">
	<h1 class="title" style="text-align:center text-secondary">Contact Us</h1>
	<footer class="footer-distributed">

			<div class="footer-left">
          <!-- <img src="https://www.blogger.com/img/blogger-logotype-color-black-1x.png"> -->
				<h3 class="t-2">About <span>Vireal</span></h3>

				<p class="footer-links" style="color: #ffffff">
					<a style="color: #ffffff" href="https://www.instagram.com/virealbysvcc/">Instagram</a>
					|
					<a style="color: #ffffff" href="https://www.linkedin.com/company/virealbysvcc">LinkedIn</a>
					|
					<a style="color: #ffffff" href="https://twitter.com/virealbysvcc">Twitter</a>
				</p>

				<p class="t-2 footer-company-name">© 2022 ViReal by SVCC Telkom Indonesia</p>
			</div>

			<div class="t-2 footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>Jl. Japati No.1, Sadang Serang, Kecamatan Coblong, Kota Bandung, Jawa Barat - 40133</p>
				</div>

			</div>

		</footer>
	</div>

    <script src="/assets/js/main.js"></script>
  </body>
</html>

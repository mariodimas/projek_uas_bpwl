<html lang="en">
  <head>
  	<title>Input</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="css1/style.css">
    <link rel="icon" type="png" href="images1/logo3.png"/>
	<link rel="stylesheet" href="Edit/css/style.css">

	<style>
    body {
      background-image: url('../assetss/images/login-new.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
  </style>

	</head>
	<body>
	<body>
  <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-dark">>
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images1/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images1/aaa.jpeg);"></div>
	  				<h3>M-A-W</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
		<li class="active">
            <a href="tampil.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="indexgrafik.php"><span class="fa fa-support mr-3"></span> Grafik Data</a>
          </li>
          <li>
          <li>
            <a href="input.php"><span class="fa fa-support mr-3"></span> Input Data</a>
          </li>
          <li>
            <a href="../login/logout"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>
    	</nav>
      <div id="content" class="p-4 p-md-5 pt-5">

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
                    <h1>HALAMAN INPUT</h1>
					<h2 class="heading-section">Jadwal Keberangkatan Pesawat</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4 py-5">
									<h3 class="mb-4">Silahkan Isi Data Pesawat Yang Akan Diberangkatkan</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
                              <form action="../controller/proses.php?aksi=tambah" method="post">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="book_id" id="book_id" placeholder="Booking ID">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="text" class="form-control" name="maskapai" id="maskapai" placeholder="Maskapai">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="kode_pesawat" id="kode_pesawat" placeholder="Kode Pesawat">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="jam_keber" id="jam_keber" placeholder="Jam Keberangkatan">
												</div>
											</div>
                                            <div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="tujuan" id="tujuan" placeholder="Tujuan">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="status" id="status" placeholder="Status">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="gate" id="gate" placeholder="Gate">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Save Data" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>

<div class="col-md-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-md-5 p-4 py-5 img">
									<h3>Contact information</h3>
									<p class="mb-4">Jakarta International Soekarno-Hatta Airport</p>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Address:</span> Jakarta International Soekarno-Hatta Airport Building 601, PO.BOX 1245 BUSH, Jakarta, 19101, Kab. Tangerang, Banten, -</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Phone:</span> <a href="tel://1234567920">+62 21 550 6823</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Email:</span> <a href="mailto:info@yoursite.com">webmaster@angkasapura2.co.id</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Category: </span> <a href="#">International Airport</a></p>
					          </div>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>
		</div>
	<script src="js1/jquery.min.js"></script>
    <script src="js1/popper.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/main.js"></script>
	<script src="Edit/js/jquery.min.js"></script>
  <script src="Edit/js/popper.js"></script>
  <script src="Edit/js/bootstrap.min.js"></script>
  <script src="Edit/js/jquery.validate.min.js"></script>
  <script src="Edit/js/main.js"></script>

	</body>
</html>
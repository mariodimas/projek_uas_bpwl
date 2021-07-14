<?php
include '../model/database.php';
$db = new database();
?>
<html lang="en">
<head>
  	<title>Table Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="css1/style.css">
    <link rel="icon" type="png" href="images1/logo3.png"/>

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
            <a href="indexgrafik.php"><span class="fa fa-support mr-3"></span>Grafik Data</a>
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
        <h1>SOEKARNO HATTA INTERNATIONAL AIRPORT</h1>
					<h2 class="heading-section">Jadwal Keberangkatan Pesawat</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-dark">
    <tr>
        <th>No</th>
        <th>Booking ID</th>
        <th>Maskapai</th>
        <th>Kode Pesawat</th>
        <th>Jam Keberangkatan</th>
        <th>Tujuan</th>
        <th>Status</th>
        <th>Gate</th>
        <th>Opsi</th>
    </tr>
    </thead>
						  <tbody>
    <?php
    $no = 1;
    foreach($db->tampil_data() as $x){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['book_id'];?></td>
        <td><?php echo $x['maskapai'];?></td>
        <td><?php echo $x['kode_pesawat'];?></td>
        <td><?php echo $x['jam_keber'];?></td>
        <td><?php echo $x['tujuan'];?></td>
        <td><?php echo $x['status'];?></td>
        <td><?php echo $x['gate'];?></td>
        <td>
            <a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit" type="button" class="btn btn-dark">Edit</a>
            <a href="../controller/proses.php?id=<?php echo $x['id'];?>&aksi=hapus" type="button" class="btn btn-dark">Hapus</a>
        </td>
    </tr>
    <?php
    }
    ?>
    
    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>
  </div>
  </div>
		</div>
          </div>
		</div>


	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
    <script src="js1/jquery.min.js"></script>
    <script src="js1/popper.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/main.js"></script>

	</body>
</html>
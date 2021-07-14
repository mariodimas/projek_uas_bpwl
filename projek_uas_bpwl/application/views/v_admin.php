<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="png" href="../assetss/images/logo3.png">
<head>
<style>
         body {
            background-color: #a79aff;
         }
      </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat login dengan codeigniter www.malasngoding.com</title>
</head>
<body>
    <h1>Login berhasil !</h1>
    <h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
    <a href="<?php echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>
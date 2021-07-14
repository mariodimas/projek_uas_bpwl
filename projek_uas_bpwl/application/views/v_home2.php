<!doctype html>
<html lang="en">

<head>
  <title>Lupa1 | Tailwind Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assetss/styles.css">
  <link rel="icon" type="png" href="../assetss/images/logo3.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <style>
  .login{
    background: url('assetss/images/login-new.jpeg')
  }
  </style>  
</head>

<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
  <div class="w-full max-w-lg">
    <div class="leading-loose">
      <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" id="forgot_password" method="POST">
        <p class="text-gray-800 font-medium text-center text-lg font-bold">Login berhasil !</p>
        <p class="text-gray-800 font-medium text-center text-lg font-bold">Hai, <?php echo $this->session->userdata("nama"); ?></p>
        <br>
        <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="view/tampil2.php">
          Menu
        </a>
        <br>
      </form>

    </div>
  </div>
</div>
</body>
</html>
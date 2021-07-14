

<!doctype html>
<html lang="en">

<head>
  <title>Lupa1 | Tailwind Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../assetss/styles.css">
  <link rel="icon" type="png" href="../assetss/images/logo3.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <style>
  .login{
    background: url('../assetss/images/login-new.jpeg')
  }
  </style>  
</head>

<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
  <div class="w-full max-w-lg">
    <div class="leading-loose">
      <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" id="forgot_password" method="POST">
        <p class="text-gray-1000 font-medium text-center text-lg font-bold">Forgot Password</p>
        <p class="text-gray-800 font-medium text-center text-lg font-bold">Input your new password</p>
        <div class="">
          <label class="block text-sm text-gray-00" for="password">Password</label>
          <input type="hidden" class="form-control" name='username' value="<?= $username ?>">
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="text" required="" placeholder="Password" aria-label="password">
        </div>
        <div class="mt-4 items-center justify-between">
          <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" name="submit-step-two" type="submit">Reset</button>
          <br>
        </div>
        <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="<?php echo base_url('login/register'); ?>">
          Not registered ?
        </a>
      </form>

    </div>
  </div>
</div>
</body>

</html>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Vireal | Register</title>

    <link rel="icon" href="/assets/image/logo.png" type="image/png" sizes="16x16">


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
    <!-- Favicons -->
<meta name="theme-color" content="#7952b3">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" action="/register/check">

    <img class="mb-4" src="/assets/image/vireal-logo.png" style="width: 300px;object-fit: fill;" alt="">
    <h1 class="h3 mb-3 fw-normal">Account Register</h1>
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
    <?php endif; ?>
    <div class="form-floating">
      <input type="text" name="username" class="form-control mb-2" id="floatingInput" placeholder="Username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="text" name="name" class="form-control mb-2" placeholder="Nama">
      <label for="floatingInput">Nama</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control mb-2" placeholder="email@example.com">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control mb-2" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password_conf" class="form-control mb-2" id="floatingPassword" placeholder="Password Confirmation">
      <label for="floatingPassword">Confirm Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Register</button>
    <span>Already have an account? </span><a href="/signin">Login here</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2022 Vireal by SVCC</p>
  </form>
</main>


    
  </body>
</html>

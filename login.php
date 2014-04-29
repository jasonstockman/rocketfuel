<?php 
include('inc/auth.php');
if (isset($_POST['email'])&&isset($_POST['password'])) {
  $_SESSION['auth'] = 'true';
  header('Location: /dashboard.php');
}
?>
<?php include('inc/header.php'); ?>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php include('inc/nav.php'); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container text-center">
    <h1>Log in to Rocket Fuel.</h1>
    <p class="lead">Need an account? <a href="/register.php" class="btn btn-primary">Register</a>.</p>
  </div>
</div>

<div class="container">
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <form class="form well" action="" method="POST">
      <label for="email">Email:</label>
      <input id="email" type="email" name="email" class="form-control">
      <label for="password">Password:</label>
      <input id="password" type="password" name="password" class="form-control">
      <br>
      <p class="text-right">
        <a href="/reset-password.php" class="pull-left">Forgot Password?</a>
        <button type="submit" name="submit" class="btn btn-primary">Log in</button>
      </p>
    </form>
  </div>
</div>
</div>

<hr>

<?php include('inc/footer.php'); ?>

</body>
</html>

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
    <h1>Reset Your Password</h1>
    <p class="lead">Know your password? <a href="/login.php" class="btn btn-primary">Log in</a>.</p>
  </div>
</div>

<div class="container">
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <form class="form well">
      <label for="email">Email:</label>
      <input id="email" type="email" name="email" class="form-control">
      <p class="help-block">Enter the email you used to register your account and we'll send you instructions to reset your password.</p>
      <br>
      <p class="text-right">
        <button type="submit" name="submit" class="btn btn-primary">Reset Password</button>
      </p>
    </form>
  </div>
</div>
</div>

<hr>

<?php include('inc/footer.php'); ?>

</body>
</html>

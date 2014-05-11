<?php 
// include('inc/debug.php');
if (isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['confirm_password'])) {
  $error = '';
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $error = 'Invalid email.';
  }
  if ($error=='') { 
    include('inc/auth.php');
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    if ($hashed_password===false) {
      $error = 'Registration failed. Unable to hash password.';
    }
    $data = array(
        'Email' => $_POST['email'],
        'Hash' => $hashed_password,
        'DisplayName' => 'Jason'
    );
    $id = $db->insert('Users', $data);
    if($id) {
      $_SESSION['auth'] = 'true';
      $_SESSION['new_account'] = 'true';
      header('Location: /dashboard.php');
    }
    else {
      $error = 'Registration failed. Unable to save new user.';
    }
  }
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
    <h1>Register for Rocket Fuel.</h1>
    <p class="lead">Already have an account? <a href="/login.php" class="btn btn-primary">Log in</a>.</p>
  </div>
</div>

<div class="container">
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <form class="form well" action="" method="post">
      <?php if (isset($error)&&$error!='') echo "<div class='alert alert-danger'>".$error."</div>"; ?>
      <label for="email">Email:</label>
      <input id="email" type="email" name="email" class="form-control">
      <label for="password">Password:</label>
      <input id="password" type="password" name="password" class="form-control">
      <label for="confirm_password">Confirm Password:</label>
      <input id="confirm_password" type="password" name="confirm_password" class="form-control">
      <br>
      <p class="text-right">
        <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
      </p>
    </form>
  </div>
</div>
</div>

<hr>

<?php include('inc/footer.php'); ?>

</body>
</html>

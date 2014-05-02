<?php 
include('inc/auth.php');
if ($_SESSION['auth'] != 'true') {
  header('Location: /login.php');
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
    <h1><i class="fa fa-plus"></i> Start New Project.</h1>
    <p class="lead">Change your mind? <a href="/dashboard.php" class="btn btn-primary">Return to Dashboard</a>.</p>
  </div>
</div>

<div class="container">
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-6 col-md-offset-3">

    <ol class="breadcrumb">
      <li class="active">Project Details</li>
      <li>Payment Info</li>
      <li>Review &amp; Finish</li>
    </ol>

    <form class="form well" action="" method="POST">
      <h2>Project Details</h2>
      <label for="description">Project Description:</label>
      <textarea id="description" class="form-control" rows="6"></textarea>
      <br>
      <div class="alert alert-info"><i class="fa fa-picture-o fa-2x"></i> File Upload goes here.</div>
      <br>
      <p class="text-right">
        <span class="pull-left"><em>Pricing Info Updates Here</em></span>
        <button type="submit" name="submit" class="btn btn-primary" onclick="alert('Thats all for now.');return false;">Save &amp; Continue</button>
      </p>
    </form>
  </div>
</div>
</div>

<hr>

<?php include('inc/footer.php'); ?>

</body>
</html>

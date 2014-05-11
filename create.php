<?php 
include('inc/auth.php');
if ($_SESSION['auth'] != 'true') {
  header('Location: /login.php');
}
// include('inc/debug.php');
if (isset($_POST['name'])&&isset($_POST['description'])) {
  $error = '';
  if (strlen($_POST['name'])<1) {
    $error = 'Choose project name.';
  }
  else if (strlen($_POST['description'])<1) {
    $error = 'Project description required.';
  }
  if ($error=='') { 
    include('inc/auth.php');
    $data = array(
        'UserID' => $_SESSION['UserID'],
        'Title' => $_POST['name'],
        'Description' => $_POST['description']
    );
    $id = $db->insert('Projects', $data);
    if($id) {
      header('Location: /dashboard.php');
    }
    else {
      $error = 'Error. Unable to create new project.';
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

    <h2>Project Details</h2>
    <form class="form well" action="" method="POST">
      <?php if (isset($error)&&$error!='') echo "<div class='alert alert-danger'>".$error."</div>"; ?>    
      <label for="name">Project Name:</label>
      <input type="text" id="name" name="name" class="form-control">
      <label for="description">Project Description:</label>
      <textarea id="description" name="description" class="form-control" rows="6"></textarea>
      <br>
      <a href="#" id="fileUpload" class="alert alert-info"><i class="fa fa-picture-o fa-2x"></i> Upload Files.</a>
      <br>
      <p class="text-right">
        <span class="pull-left"><em>Pricing Info Updates Here</em></span>
        <button type="submit" name="submit" class="btn btn-primary">Save &amp; Continue</button>
      </p>
    </form>
  </div>
</div>
</div>

<hr>

<?php include('inc/footer.php'); ?>
<script type="text/javascript" src="//api.filepicker.io/v1/filepicker.js"></script>
<script type="text/javascript">
  filepicker.setKey('AijESHBiuRFq6lIomnKYrz');
  $( function() {
    $('#fileUpload').on('click', function() {
      filepicker.pickAndStore({},{},function(InkBlobs){
         console.log(JSON.stringify(InkBlobs));
      });
    });
  });
</script>
</body>
</html>

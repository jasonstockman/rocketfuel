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
    <h1><i class="fa fa-tachometer"></i> Project Dashboard.</h1>
    <p class="lead">Manage existing projects or <a href="/create.php" class="btn btn-primary btn-lg"><i class='fa fa-plus'></i> Start New Project</a>.</p>
  </div>
</div>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Project Name</th>
      <th>Assigned Vendor</th>
      <th>Status</th>
      <th class="text-right">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Marina HS Logo</td>
      <td>Mark S.</td>
      <td><span class="label label-default">Payment Pending</span></td>
      <td class="text-right">
        <a href="#" class="btn btn-default btn-xs">View</a>
        <a href="#" class="btn btn-default btn-xs">Edit</a>
        <a href="#" class="btn btn-default btn-xs">Cancel</a>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Star Market Grocery</td>
      <td>Ross K.</td>
      <td><span class="label label-danger">Cancelled</span></td>
      <td class="text-right">
        <a href="#" class="btn btn-default btn-xs">View</a>
        <a href="#" class="btn btn-default btn-xs">Edit</a>
        <a href="#" class="btn btn-default btn-xs">Cancel</a>
      </td>
    </tr>    
    <tr>
      <td>3</td>
      <td>Patriots Caps</td>
      <td>Jacob V.</td>
      <td><span class="label label-primary">In Progress</span></td>
      <td class="text-right">
        <a href="#" class="btn btn-default btn-xs">View</a>
        <a href="#" class="btn btn-default btn-xs">Edit</a>
        <a href="#" class="btn btn-default btn-xs">Cancel</a>
      </td>
    </tr>
    <tr>
      <td>4</td>
      <td>Larry Bird Sketch</td>
      <td>Jason R.</td>
      <td><span class="label label-success">Completed</span></td>
      <td class="text-right">
        <a href="#" class="btn btn-default btn-xs">View</a>
        <a href="#" class="btn btn-default btn-xs">Edit</a>
        <a href="#" class="btn btn-default btn-xs">Cancel</a>
      </td>
    </tr>
  </tbody>
</table>
</div>

<hr>

<?php include('inc/footer.php'); ?>

</body>
</html>

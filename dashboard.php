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
    <?php 
    if(isset($_SESSION['new_account'])) {
      unset($_SESSION['new_account']);
      echo "<div class='alert alert-success'>Account Created. Welcome!</div>";
    }
    ?>
    <h1><i class="fa fa-tachometer"></i> Project Dashboard.</h1>
    <p class="lead">Manage existing projects or <a href="/create.php" class="btn btn-primary btn-lg"><i class='fa fa-plus'></i> Start New Project</a>.</p>
  </div>
</div>

<div class="container">

<?php
$db->where ("UserID", $_SESSION['UserID']);
$projects = $db->get("Projects");
if (count($projects)>0) :
// var_dump($projects);
?>
<table class="table">
  <thead>
    <tr>
      <th>Project Name</th>
      <th>Assigned Vendor</th>
      <th>Status</th>
      <th class="text-right">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  foreach ($projects as $project) { 
  $db->where ("ID", $project['VendorID']);
  $vendor = $db->getOne("Vendors");
  if ($vendor===NULL) $vendor['DisplayName'] = 'Unassigned';
  ?>
    <tr>
      <td><a href="/project.php?id=<?php echo $project['ID']; ?>"><?php echo $project['Title']; ?></a></td>
      <td><?php echo $vendor['DisplayName']; ?></td>
      <td><span class="label label-default">Payment Pending</span></td>
      <td class="text-right">
        <a href="#" class="btn btn-default btn-xs">View</a>
        <a href="#" class="btn btn-default btn-xs">Edit</a>
        <a href="#" class="btn btn-default btn-xs">Cancel</a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
<?php else: ?>
<h3>No projects yet.</h3>
<?php endif; ?>
</div>

<hr>

<?php include('inc/footer.php'); ?>

</body>
</html>

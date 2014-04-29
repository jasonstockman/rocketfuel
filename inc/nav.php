<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="fa fa-rocket"></span> Rocket Fuel</a>
    </div> 
    <div class="navbar-collapse collapse">
	    <?php if ($_SESSION['auth']=='true') : ?>
		<ul class="nav navbar-nav navbar-right">
		<li><a href="/create.php"><i class="fa fa-plus"></i> New Project</a></li> 
		<li><a href="/dashboard.php"><i class="fa fa-tachometer"></i> Dashboard</a></li>
		<li><a href="#">Support</a></li>
		<li><a href="/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
		</ul>
		<?php else: ?>
		<ul class="nav navbar-nav navbar-right">
		<li><a href="#">Tour</a></li>
		<li><a href="#">Support</a></li>
		<li><a href="/login.php"><i class="fa fa-power-off"></i> Login</a></li>
		</ul>
		<?php endif;?>
    </div><!--/.navbar-collapse -->
  </div>
</div>
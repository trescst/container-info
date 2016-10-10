<!doctype html>
<html>
<head>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
<!-- jidenticon JS -->
<script src="./jdenticon.min.js" async></script>
<title>Container Info</title>
</head>
<body>
<?php
  error_log("[ERROR]: testing...", 0);
//  die();
?>
<div class="container">
<div class="row">
<div class="col s2">&nbsp;</div>
<div class="col s8">
<div class="card red">
<div class="card-content white-text">
<div class="card-title">Container Info</div>
</div>
<div class="card-content white">
<table class="bordered">
  <tbody>
	<tr>
	  <td>Hostname</td>
	  <td><?php echo gethostname(); ?></td>
	</tr>
	<tr>
	  <td>IP</td>
	  <td><?php echo $_SERVER['SERVER_ADDR']; ?></td>
	</tr>
	<tr>
          <canvas width="150" height="150" data-jdenticon-hash="<?php echo hash('sha256', gethostname()); ?>"></canvas> 
	</tr>
  </tbody>
</table>
</div>
</div>
<div class="col s2">&nbsp;</div>
</div>
</div>
</html>

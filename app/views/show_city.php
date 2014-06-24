<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<style>
body {
  padding-top: 50px;
}
.starter-template {
  padding: 40px 15px;
  text-align: center;
}
</style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Project name</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="container">
<form role="form" method="POST" action="/edit/edit">
  <input type="hidden" class="form-control" name="city_id" id="city_id" value="<?php echo $city->id; ?>">
  <div class="form-group">
    <label for="city">City</label>
    <input type="city" disabled class="form-control" id="city_name" value="<?php echo $city->title; ?>">
  </div>
  <div class="form-group">
    <label for="region">Region</label>
    <select id="region_id" name="region_id" class="form-control">
        <option value="-1" selected>Выберите регион</option>
        <?php foreach ($regions as $region): ?>
          <option value="<?php echo $region->id; ?>"><?php echo $region->title; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo $errors->first('region_id'); ?>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</body>
</html>

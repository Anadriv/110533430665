<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title> Administrator -BlueNight- </title>
<!-- <link type="text/css" rel="stylesheet" href="index.css"> -->
<!-- <link type="text/css" rel="stylesheet" href="index.css"> -->


<!-- BOOTSRAP -->
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<nav class="navbar navbar-inverse" role="navigation">
<!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Brand</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li><a href="#">Separated link</a></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
		<li><a href="?blue=logout">Logout</a></li>
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
<?php
ini_set('display_errors', 1);
define('_VALID',1);

//include file eksternal
require_once('./auth.php');

init_login();
validate();
?>
<h2>BlueNight Admin Page</h2> 


<div class="div2">
<hr>

<div class="div4">
<p>


<div class="jumbotron">
  <div class="container">
    <h1>Welcome !</h1>
    <p> User menus are here...</p>
    <!--<p><a class="btn btn-primary btn-lg">Learn more</a></p>-->
  </div>
  
</div>

<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="image2.jpg" alt="Image01	">
	    <div class="caption">
        <h3>Image01</h3>
        <p>...</p>
        <!--<<p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a></p>-->
      </div>
	  
	  
    </div>
  </div>
</div>



</div>
</div>
</body>
</html>
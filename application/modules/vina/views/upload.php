<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sutrixmedia</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link href="/assets/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
}
.sidebar-nav {
	padding: 9px 0;
}
</style>
<link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="/assets/css/prettify.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="/assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="javascript:void(0)">Sutrixmedia <span>Admin Panel</span></a>
      <div class="btn-group pull-right"> <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"> <i class="icon-user icon-white"></i> Username <span class="caret"></span> </a>
        <ul class="dropdown-menu">
          <li><a href="javascript:void(0)">Profile</a></li>
          <li class="divider"></li>
          <li><a href="javascript:void(0)">Sign Out</a></li>
        </ul>
      </div>
      <ul class="nav pull-right">
        <li><a href="javascipt:void(0)">Link</a></li>
        <li class="divider-vertical"></li>
        <li class="dropdown"> <a href="javascipt:void(0)" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascipt:void(0)">Action</a></li>
            <li><a href="javascipt:void(0)">Another action</a></li>
            <li><a href="javascipt:void(0)">Something else here</a></li>
            <li class="divider"></li>
            <li class="nav-header">Nav header</li>
            <li><a href="javascipt:void(0)">Separated link</a></li>
            <li><a href="javascipt:void(0)">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <div class="nav-collapse">
        <ul class="nav">
          <li class="active"><a href="javascript:void(0)">Homepage</a></li>
          <li><a href="javascript:void(0)">Link</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
      <form class="navbar-search pull-left" action="#">
        <input type="text" class="search-query span2" placeholder="Search">
      </form>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="span12">
      <h1>Dashboard<small> Upload</small></h1>
      <hr/>
      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      </div>


    </div>
  </div>
  <h2>User Details</h2>
  <form class="form-horizontal well" action="/vina/csv/upload/" enctype="multipart/form-data" method="post">
    <fieldset>
      <div class="control-group">
        <label class="control-label">Full Name</label>
        <div class="controls">
          <input name="myname" class="span3" type="text" placeholder="Enter your name here">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="fileInput">File input</label>
        <div class="controls">
          <input name="balances" class="input-file" id="fileInput" type="file">
        </div>
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button class="btn">Cancel</button>
      </div>
    </fieldset>
  </form>
  <hr/>
  <footer>
    <p>&copy; SutrixMedia 2012</p>
  </footer>
</div>
<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/prettify.js"></script>
</body>
</html>

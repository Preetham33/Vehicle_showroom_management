<?php
$conn=mysqli_connect("localhost",'root','','vsms') or die(mysqli_error($con));
$sql = "SELECT * FROM vehicle";
   $res= mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>

<head>
<title>Vehicle Sales Management System</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css"/>
<script rel="stylesheet" src="js/main.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<header>
<nav class="navbar navbar-inverse navbar-fixed">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
	</div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	  <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
	  <li><a href="#">View Sold</a></li>
	  <li><a href="#">About us</a></li>
		<li><a href="#">Contacts</a></li>

      </ul>
	  <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Client Login</a></li>
        <li><a href="login/index.php"><span class="glyphicon glyphicon-log-in"></span>Admin Login</a></li>
      </ul>
        </div>
      </form>

    </div><!-- /.navbar-collapse -->
</nav>
</header>
<!------slider------>

<div class="slider">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/7.jpg" alt="Car">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/8.jpg" alt="Car">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/9.jpg" alt="Car">
      <div class="carousel-caption">
        ...
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!---------end of slider----->



<!-----service area---->
<div class="well" style=" margin-top:10px; margin-left:40px; margin-right:40px; margin-bottom:40px;">
<div class="container-fluid">
<div class="page-header text-center">
<h1 class="text-uppercase"> Feel the Speed!!<h1>
<h3> <i>Latest Models</i></h3>
</div>
<div class="row">
<div class="col-md-3">
  <div class="thumbnail">
<a href="view.php"><img src= "images/18.jpg" alt= "business" class="img-responsive img-circle" /></a>
  <div class=" caption">
  <h4>Lamborghini Avendator<h4>
  <div class="price1" style="height: 20px;">
  <span class="actual"><h5><i><strong>Starting MRP $237,250-$237,250</strong></i></h5></span>
</div>
</div>
<a href="view.php" class="btn btn-info"> View details</a>

</div>
</div>


<?php
		while ($Row = mysqli_fetch_assoc($res)) { ?>
<div class="col-md-3">
  <div class="thumbnail">

<a href="view.php"><img src="login/uploads/<?php $path=explode("*",$Row['image']); echo $path[0]; ?>" class="img-responsive img-circle" ></a>
  <div class=" caption">
  <h4><?php echo $Row['model_name']; ?> <h4>
  <div class="price1" style="height: 20px;">
  <span class="actual"><h5><i><strong>Starting MRP $<?php echo $Row['s_price']; ?></strong></i></h5></span>
</div>
</div>
<a href="view.php" class="btn btn-info"> View details</a>

</div>
</div>
<?php } ?>


</div>
</div>
</div>



</body>
</html>

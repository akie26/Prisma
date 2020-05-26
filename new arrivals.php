<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include("cdn.php");
	  include("header.php");
	  include("signBox.php");
?>

<section>
<div class="bodyFiller nonExist" style="height: 80px;"></div>
<div class="navBtn">
	<div class="navSect">
	<a href="index.php"><span class="clicked"><i class="fa fa-arrow-left" style="color: #7F8C8D;"></i>&nbsp;BACK</span></a>
	<a href="index.php"><span class="clicked">HOME&nbsp;/</span></a>
	<a class="availMore"><span>MEN&nbsp;/</span></a>
	<a class="availMore"><span>NEW ARRIVALS</span></a>
	</div>
	<div class="sectTitle">
	<h1>NEW ARRIVALS THIS MONTH</h1>
</div>
</div>

<?php include('nav.php');?>
<?php include('page1.php');?>
<div class="pageChanger">
	<div><button>PREVIOUS</button></div>
	<div style="display: grid;grid-template-columns: repeat(2,1fr);">
		<div>PAGE</div>
		<button disabled="true">1&nbsp;<i class="fa fa-angle-down"></i></button>

	</div>
	<div><button>NEXT</button></div>
</section>

<?php include('footer.php');?>



</body>
</html>
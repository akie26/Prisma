<?php
	include('db.php');
	$s1=$_REQUEST["n"];
	$search_query="SELECT * FROM item_tag WHERE item_name LIKE '%".$s1."%' ";
	$my_query=mysqli_query($conn, $search_query) or die (mysqli_error($conn));
	$s="";
	while($row=mysqli_fetch_array($my_query)){
		$s=$s."
			<a><div class='result'>
						<div class='part-one'>
						<img src='image/".$row['item_image']."' width='75px' height='75px';>
						</div>
						<div class='part-two'>
						<span class='result-tag'>".$row['item_brand']."</span>
						<span class='result-name'>".$row['item_name']."</span>
						<span class='result-price'>".$row['item_price']."</span>
						</div>
					</div>
					</a> 
					"  ;
	}
	echo $s;
?>
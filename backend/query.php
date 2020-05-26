<?php
			include("db.php");
			if(isset($_POST)){
				$item_name=$_POST['item_name'];
				$item_brand=$_POST['item_brand'];
				$item_price=$_POST['item_price'];
				$item_image=$_FILES['item_image']['name'];
				$tmp=$_FILES['item_image']['tmp_name'];
				$color=$_POST['color'];
				$size=$_POST['size'];
				if($item_image){
					move_uploaded_file($tmp, "image/$item_image");
				}
			}
				$sql = mysqli_query($conn,"INSERT INTO item_tag (item_name,item_brand,item_price,item_image,color,size) VALUES ('$item_name','$item_brand','$item_price','$item_image','$color','$size') ");
				if ($sql) {
					header("location:insert.php");
				}
		?>
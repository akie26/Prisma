<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*, *::after, *::before{
			box-sizing: border-box;
		}

		body{
			margin:none;
			padding: none;
			font-family: montserrat,Bahnschrift;
		}

		input, span, select{
			margin: 5px;
			font-family: montserrat,Bahnschrift;
		}

		input{
			padding: 2px;
			text-transform: uppercase;
			font-size: 14px;
			width: 200px;
			height: 30px;
			letter-spacing: 1px;
		}

		select{
			height: 30px;
		}

		button{
			background: #FDFEFE;
			outline: none;
			font-family: montserrat,Bahnschrift;
			width: 100px;
			height: 30px;
			border: 2px solid #000000;
			margin: 5px;
		}

		button:hover{
			color: #FDFEFE;
			background : #000000;
		}



		form{
			font-family: montserrat,Bahnschrift;
			margin-top: 5px;
			position: fixed;
			left: 25%;
			width: 50%;
		}

	</style>
</head>
<body>
		<div style="width: 100%;border: 1px solid #D6DBDF;height: 60px;text-align: center;">
			<h1 style="font-size: 23px;padding:3px;">INSTOCK MANAGEMENT</h1>
		</div>

		<form method="POST" action="query.php" enctype="multipart/form-data">
			<input type="hidden" name="uid" value="">
			<br>
			<span>PRODUCT'S NAME</span><br>
			<input type="text" name="item_name" required=""><br><br>
			<span>BRAND</span><br>
			<select class="form-control" name="item_brand" required="">
     		<option></option>
      		<option>HM</option>
     		<option>ADIDAS</option>
    		<option>ZARA</option>
      		<option>PULL&BEAR</option>
    		<option>NIKE</option>
    		<option>UNIQLO</option>
    		<option>BERSHKA</option>
    		<option>VANS</option>
    		</select><br><br>
    		<span>PRODUCT'S PRICE</span><br>
    		<input type="text" name="item_price" required=""><br><br>
    		<span>PRODUCT'S PHOTO</span><br>
    		<input type="file" name="item_image" style="letter-spacing: normal;font-size:15px;text-transform: uppercase;"><br><br>
    		<span>COLORS</span><br>
    		<input type="text" name="color" required=""><br><br>
    		<span>SIZES</span><br>
    		<select class="form-control" name="size" required="">
     		<option></option>
      		<option>XXL</option>
     		<option>XL</option>
    		<option>M</option>
      		<option>S</option>
    		<option>XS</option>
    		<option>34</option>
    		<option>35</option>
    		<option>36</option>
    		<option>37</option>
    		<option>38</option>
    		<option>39</option>
    		<option>40</option>
    		<option>41</option>
    		<option>42</option>
    		<option>43</option>
    		<option>44</option>
    		<option>45</option>
    		</select><br><br>
    		<button type="submit">ADD</button>
		</form>



</body>
</html>
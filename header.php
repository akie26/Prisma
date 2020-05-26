<script type="text/javascript">
			function fx(str){
				var s1=document.getElementById('searchInput').value;
				var xmlhttp;
			if(str.trim(length)==0){
				document.getElementById("searchResult").innerHTML = "";
				return;
			}
			if(window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById("searchResult").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","backend/ajax_search.php?n="+s1, true);
			xmlhttp.send();
			}

</script>
<header>
<div class="parentHead" style="">
	<div class="announceText">
<span>WE ARE TAKING ALL MEASURES TO SERVE OUR CUSTOMERS. ORDERS MAY EXPERIENCE LONGER DELIVERY WINDOWS. <a href="#" style="border-bottom: 1px solid #FDFEFE;color: #FDFEFE">Read More</a></span>
	</div>
		<div class="eternalHeader">
				<!-- LOGO -->
<div class="headLogo"><a href="index.php"><?php if($conn) {echo "PRISMA"; }else{echo "ERROR";}?></a>
		</div>	
				<!-- LOGO!=  -->
				<!-- MENU    -->
		<div class="headSect">
		<div class="sectB" style="">
		<div class="tm" style=""><a href="#" class="menuSect menSect">MEN</a></div>
		<div class="twm" style=""><a href="#" class="womenuSect womenSect">WOMEN</a></div>
		<div class="kidsSect" style=""><a href="#"  class="kidsuSect  availMore">KIDS</a></div>
		<div class="sectFillB"></div>
		</div>
		</div>		
				<!-- MENU!=  -->
		<div class="headSearch">
			<div class="lowerAddOn">
			<div class="srcBox"> 
		<form id="searchForm">
			<input id=searchInput onkeyup="fx(this.value)" type="text" name="search" placeholder="SEARCH" autocomplete="off" tabindex="1">
			<button> <i class="fa fa-search"></i> </button>
		</form>
				<div id="searchResult"></div>
			</div>
			<div></div>
			<div class="pluginBox">
				<button data-modal-target="#modal"><i class="fa fa-shopping-bag"></i></button>
			</div>
			</div>
		</div>
	</div>





		<!-- GRID-WRAP!= -->
			</div>
			<div class="showMen">
				<div class="menuA">
					<ul>
						<li><button id="na-btn">New Arrivals</button></li>
						<li><button>Best Sellers</button></li>
						<li><button>Seasonals</button></li>
						<li><button class="notAvail" disabled="">Exclusives</button></li>
						<li><button class="notAvail" disabled="">On Trends</button></li>
						<li><button class="notAvail" disabled="">Loungewear</button></li>
						<li><button class="exeItem"><li>Sale</button></li>
					</ul>

				</div>
				<div class="menuB">
					<ul>
						<li style="font-weight: 500;font-size: 18px;width: 200px; border-bottom: 2px solid #333;text-align: left;"><button disabled="" class="avail">Shoes</button></li>
						<li><button class="notAvail" disabled="">Lifestyle</button></li>
						<li><button>Sneakers</button></li>
						<li><button>Classics</button></li>
						<li><button class="notAvail" disabled="">Training + Gym</button></li>
						<li><button class="notAvail" disabled="">Running</button></li>
						<li><button><li>Scandals + Slides</button></li>
					</ul>
				</div>
				<div class="menuC">
					<ul>
						<li style="font-weight: 500;font-size: 18px;width: 200px; border-bottom: 2px solid #333;text-align: left;"><button disabled="" class="avail">Clothing</button></li>
						<li><button class="notAvail" disabled="">Essentials</button></li>
						<li><button>Sweatshirts + Hoodies</button></li>
						<li><button>T-Shirts + Tops</button></li>
						<li><button class="notAvail" disabled="">Tracksuits</button></li>
						<li><button>Shorts + Pants</button></li>
						<li><button><li>Jackets</button></li>
					</ul>
				</div>
				<div class="menuD">
					<ul>
						<li style="font-weight: 500;font-size: 18px;width: 200px; border-bottom: 2px solid #333;text-align: left;"><button disabled="" class="avail">Accessories</button></li>
						<li><button>Socks</button></li>
						<li><button>Bags + Backpacks</button></li>
						<li><button  class="notAvail" disabled="">Watches</button></li>
						<li><button>Sunglasses</button></li>
						<li><button>Perfumes</button></li>
					</ul>
				</div>
			</div>

			<div class="showWomen">
				<div class="menuA">
					<ul>
						<li><button>New Arrivals</button></li>
						<li><button class="notAvail" disabled="">Best Sellers</button></li>
						<li><button class="notAvail" disabled="">Seasonals</button></li>
						<li><button class="notAvail" disabled="">Exclusives</button></li>
						<li><button class="notAvail" disabled="">On Trends</button></li>
						<li><button class="notAvail" disabled="">Loungewear</button></li>
						<li><button class="exeItem"><li>Sale</button></li>
					</ul>

				</div>
				<div class="menuB">
					<ul>
						<li style="font-weight: 500;font-size: 18px;width: 200px; border-bottom: 2px solid #333;text-align: left;"><button disabled="" class="avail">Shoes</button></li>
						<li><button class="notAvail" disabled="">Lifestyle</button></li>
						<li><button>Sneakers</button></li>
						<li><button>Classics</button></li>
						<li><button class="notAvail" disabled="">Training + Gym</button></li>
						<li><button class="notAvail" disabled="">Running</button></li>
						<li><button><li>Scandals + Slides</button></li>
					</ul>
				</div>
				<div class="menuC">
					<ul>
						<li style="font-weight: 500;font-size: 18px;width: 200px; border-bottom: 2px solid #333;text-align: left;"><button disabled="" class="avail">Clothing</button></li>
						<li><button class="notAvail" disabled="">Essentials</button></li>
						<li><button>Sweatshirts + Hoodies</button></li>
						<li><button>T-Shirts + Tops</button></li>
						<li><button class="notAvail" disabled="">Leggings</button></li>
						<li><button class="notAvail" disabled="">Tracksuits</button></li>
						<li><button class="notAvail" disabled="">Dresses + Skirts</button></li>
						<li><button class="notAvail" disabled="">Shorts + Pants</button></li>
					</ul>
				</div>
				<div class="menuD">
					<ul>
						<li style="font-weight: 500;font-size: 18px;width: 200px; border-bottom: 2px solid #333;text-align: left;"><button disabled="" class="avail">Accessories</button></li>
						<li><button>Socks</button></li>
						<li><button>Bags + Backpacks</button></li>
						<li><button  class="notAvail" disabled="">Watches</button></li>
						<li><button>Sunglasses</button></li>
						<li><button>Perfumes</button></li>
					</ul>
				</div>
			</div>

				<!-- <div class="showKids">
				<div class="menuA">
					<ul>
						<li><button>New Arrivals</button></li>
						<li><button >Best Sellers</button></li>
						<li><button class="notAvail" disabled="">Seasonals</button></li>
						<li><button class="notAvail" disabled="">Exclusives</button></li>
						<li><button class="notAvail" disabled="">On Trends</button></li>
						<li><button class="notAvail" disabled="">Loungewear</button></li>
						<li><button class="exeItem"><li>Sale</button></li>
					</ul>

				</div>
				<div class="kidsB">
					<ul>
						<a href="#"><li style="font-weight: 500;font-size: 18px;width: 200px; border-bottom: 2px solid #333;text-align: left;">Boys</li></a>
						<a href="#"><li>Shoes</li></a>
						<a href="#"><li>Clothing</li></a>
						<a href="#"><li>Accessories</li></a>
					</ul>
					<ul>
						<a href="#"><li style="font-weight: 500;font-size: 18px;width: 200px; border-bottom: 2px solid #333;text-align: left;">Shop By Age</li></a>
						<a href="#"><li>Boys 0-4 Years</li></a>
						<a href="#"><li>Boyss 4-8 Years</li></a>
						<a href="#"><li>Boy 8-14 Years</li></a>
					</ul>
				</div>
				<div class="kidsC">
					<ul>
						<a href="#"><li style="font-weight: 500;font-size: 18px;width: 200px; border-bottom: 2px solid #333;text-align: left;">Girls</li></a>
						<a href="#"><li>Shoes</li></a>
						<a href="#"><li>Clothing</li></a>
						<a href="#"><li>Accessories</li></a>
					</ul>
					<ul>
						<a href="#"><li style="font-weight: 500;font-size: 18px;width: 200px; border-bottom: 2px solid #333;text-align: left;">Shop By Age</li></a>
						<a href="#"><li>Girls 0-4 Years</li></a>
						<a href="#"><li>Girls 4-8 Years</li></a>
						<a href="#"><li>Girls 8-14 Years</li></a>
					</ul>
				</div>
				<div class="kidsD">
				</div>
			</div> -->
</div>

		</header>
					<!-- ADDITIONAL MENU -->
			
			<!-- ADDITIONAL MENU!= -->
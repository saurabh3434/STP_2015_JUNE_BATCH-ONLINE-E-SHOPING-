<html>
<head><title></title></head>
<style>
	body{
		background-image: url("TX1004.jpg");
		font-family: 'Shift', sans-serif;
		}
	.nav
	   {
		height:300px;
		width:275px;
		float:left;
		border: 2px solid black;
		border-radius: 55px;
		}
	.spc{
		float:right;
		border: 2px;
		border-radius:55px;
		width: 200px;
		height:40px;
		background-image: url("033.jpg");
		}
	a{
		text-decoration:none;
		}
</style>
<body>
   <form method="POST">
			<?php
			session_start();
			if(isset($_SESSION["name"]))
			{
			//echo"welcome,".$_SESSION['name'];
			}
			else
			{
			echo"please login";
				header("Location:Signup_form.php");
			}
			?>
<table align="center" width="100%" border="0">
	<tr align="center" height="5%">
			<td width="10%"align="center"style="border-radius:15px"><a href="Home_form.php"><img src="house180.png" height="30px"><font color='black'>HOME</font></img></a>
			</td>
			<td width="20%"align="center"style="border-radius:15px"><a href="" ><font color='black'>CONTACT US</font><img src="telephone30.png" height="30px"></a>
			</td>
			<td align="center"width="20%"style="border-radius:15px"><a href=""><font color='black'>ABOUT</font></a>
			</td>
			<td align="center"width="20%"style="border-radius:15px">FOLLOW US ON <a href=""><font color='black'><img src="googleplus.png" height="30px"></font></a><a href=""><font color='black'><img src="linkedin.png" height="30px"></font></a><a href=""><font color='black'><img src="twitter.png" height="30px"></font></a>
			</td>
			<td align="center"width="20%"style="border-radius:15px">
	            <a href=""><font color='black'><img src="user7.png" height="30px">
						<?php echo"Welcome ";echo $_SESSION['name']; ?>
						<?php
						echo"<input type='submit' name='sub_btn' value='logout'>";
						if(isset($_POST["sub_btn"]))
						{
						session_destroy();
						header("Location:Signup_form.php");
						session_start();
						if(isset($_SESSION['name']))
						{
						//echo"welcome,".$_SESSION['name'];
						}
						else
						{
						echo"please login";
						header("Location:Signup_form.php");
						}
						}
						?></font>
						</a>
			</td>
    </tr>
</table>
<table align="center" width="100%" border="0">
	<tr align="center"  height="5%">
			<td width="20%"style="border-radius:25px"><img src="beh.jpg" height="35px"><font size="15px" color="black" face="algerian">-SHOP</font>
			</td> 
			<td width="60%" style="border-radius:25px">
					<input type="search" results=5 autosave="http://www.onlinekart.com/"  placeholder="Search Products" value="" name="search" style="width:600px; height:40px; border-color:green;border-radius:30px;" />&nbsp;&nbsp;
					<input type="submit" name="search_btn" value="Search" style="border-radius:10px; height:40px;width:100px;background-color:green;"><br>
			<td width="10%"style="border-radius:25px"><font size="3px" color="white"></font>
			</td>
			<td width='10%'><a href="Cart_Form.php"><img src="shopping cart7.png" height="35px">CART</a></td>
	</tr>
</table>
<table align="center" width="96%" border="0">
	<tr align="center" bgcolor="peru" height="7%">
			<td align="center" width="12%" style="border-radius:15px"><a href="Home_form.php?cat=ELECTRONICS"><font size="4px" color="white"face="ELEPHANT">ELECTRONICS</font></a>
			</td>
			<td align="center" width="12%" style="border-radius:15px"><a href="Home_form.php?cat=MEN"><font size="4px" color="white"face="ELEPHANT">MEN</font></a>
			</td>
			<td align="center" width="12%" style="border-radius:15px"><a href="Home_form.php?cat=WOMEN"><font size="4px" color="white"face="ELEPHANT">WOMEN</font></a>
			</td>
			<td align="center" width="12%" style="border-radius:15px"><a href="Home_form.php?cat=BABYKIDS"><font size="4px" color="white"face="ELEPHANT">BABY KIDS</font></a>
			</td>
			<td align="center" width="12%" style="border-radius:15px"><a href="Home_form.php?cat=HOMEFURNITURE"><font size="4px" color="white"face="ELEPHANT">HOME USE</font></a>
			</td>
			<td align="center" width="12%" style="border-radius:15px"><a href="Home_form.php?cat=BOOKSMEDIA"><font size="4px" color="white"face="ELEPHANT">BOOKS</font>
			</td>
			<td align="center" width="12%" style="border-radius:15px"><a href="Home_form.php?cat=MORESTORE"><font size="4px" color="white" face="ELEPHANT">MORE STORE</font></a>
			</td>      
    </tr>
</table>
<table  width='100%' border="0">
	<tr>
			<td width='25%' height='25%'>
			  <br>
				<?php
				if(isset($_GET["cat"])){
				$electronics=array("MOBILES","TABLETS","LAPTOPS","TELEVISIONS","CAMARES");
				$men=array("FOOTWEARS","CLOTHING","WATCHES","WALLETS","SUNGLASSES");
				$women=array("JEWELLERY","CLOTHING");
				$babykids=array("FOOTWEARS","CLOTHING","TOYS","GAMES","BOOKS");
				$homefurniture=array("KITCHEN_DINING","BED_LIVING","WALL_DECOR","COOKWARE");
				$bookmedia=array("LEARING","MUSIC","MOVIES_SHOW","GAMING","EXAM_SUPPLIES");
				$moreStore=array("SPORTS","FITNESS","POSTERS");
				//$men=array("FOOTWEARS","CLOTHING","WATCHES","WALLETS","SUNGLASSES");
				if($_GET["cat"]=="ELECTRONICS")
				{
				echo '<div class="nav"><center><h2> ELECTRONICS:</h2></center><ul>';
				foreach($electronics as $arr)
				{
				$cat=$_GET["cat"];
				echo"<li><a href='Home_form.php?cat=$cat&subcat=$arr'>$arr</a></li><br>";
				}
				echo"</ul>";
				}
				if($_GET["cat"]=="MEN")
				{
				echo '<div class="nav"><center> <h2>MEN ACCESSARIES:</h2></center> <ul>';
				foreach($men as $arr)
				{
				$cat=$_GET["cat"];
				echo"<li><a href='Home_form.php?cat=$cat&subcat=$arr'>$arr</a></li><br>";
				}
				echo"</ul>";
				}
				if($_GET["cat"]=="WOMEN")
				{
				echo "<br>WOMEN ACCESSARIES:<ul>";
				foreach($women as $arr)
				{
				$cat=$_GET["cat"];
				echo"<li><a href='Home_form.php?cat=$cat&subcat=$arr'>$arr</a></li><br>";
				}
				echo"</ul>";
				}
				if($_GET["cat"]=="BABYKIDS")
				{
				echo "<br>BABY & KIDS:<ul>";
				foreach($babykids as $arr)
				{
				$cat=$_GET["cat"];
				echo"<li><a href='Home_form.php?cat=$cat&subcat=$arr'>$arr</a></li><br>";
				}
				echo"</ul>";
				}
				if($_GET["cat"]=="HOMEFURNITURE")
				{
				echo "<br>HOME USES:<ul>";
				foreach($homefurniture as $arr)
				{
				$cat=$_GET["cat"];
				echo"<li><a href='Home_form.php?cat=$cat&subcat=$arr'>$arr</a></li><br>";
				}
				echo"</ul>";
				}
				if($_GET["cat"]=="BOOKSMEDIA")
				{
				echo "<br>BOOKS & MEDIA:<ul>";
				foreach($bookmedia as $arr)
				{
				$cat=$_GET["cat"];
				echo"<li><a href='Home_form.php?cat=$cat&subcat=$arr'>$arr</a></li><br>";
				}
				echo"</ul>";
				}
				if($_GET["cat"]=="MORESTORE")
				{
				echo "<br>MORE STORE:<ul>";
				foreach($moreStore as $arr)
				{
				$cat=$_GET["cat"];
				echo"<li><a href='Home_form.php?cat=$cat&subcat=$arr'>$arr</a></li><br>";
				}
				echo"</ul>";
				}

				/*if(isset($_POST["btn_men"]))
					{
					echo "<br>MEN ACCESSARIES<ul>";
					foreach($men as $arr1){
					echo"<li><a href=''>$arr1</a></li><br>";
					}
					echo"</ul>";
					}*/
					echo "</div>";
					}
					echo"</td><td>";
?>
<?php
if((isset($_GET["cat"]))&&isset($_GET["subcat"])){
echo"<td><table width='100%' height='100%' border='2'>";
$cat=$_GET["cat"];
$subcat=$_GET["subcat"];
$pid=$_GET["pid"];
$link=mysql_connect("localhost","root","");
mysql_select_db("online_shoping");
$q="select * from product where product_cat='$cat' and product_subcat='$subcat' and product_id='$pid'";
$rec=mysql_query($q);
$r=mysql_fetch_row($rec);
echo"<tr><td width='25%'>";
$image1=$r[0]."1.jpeg";
$image2=$r[0]."2.jpeg";
					//echo $image1;
					//echo "<br>".$image2;
					echo '<img src="'.$image1.'" height="200px"> <br>&nbsp;<img src="'.$image2.'" height="200px"><br>';
echo"</td>";
echo"<td width='25%'>";
echo "$cat<br>";
echo "$subcat<br>";
$s= getcwd();
//echo $s;
fopen('specification.txt','r');
$str=file_get_contents('specification.txt');
echo $str;
echo"</td>";
echo"<td width='25%'>";
echo"<br><br><br><a href='Cart_Form.php?productId=$r[0]&mode=BUY'><center>WANT TO BUY</center></a><br><br><br>";
echo"<a href='Wishlist_Form.php?proid=PRODUCT_ID&mode=WISH'><center>MOVE TO WISHLIST</center></a><br><br><br>";
echo "<center>Rating And Review</center><br><br><br>";
echo"</td></tr></table>";


}
?>
</tr>
</table>


</form>
</body>
</html>
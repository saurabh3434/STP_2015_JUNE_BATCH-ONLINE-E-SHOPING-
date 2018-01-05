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
			if(isset($_SESSION['name']))
			{
				header("Location:Home_form.php");
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
						<?php 
						if(isset($_SESSION["name"])){
						echo"Welcome ";
						echo $_SESSION['name'];
						echo"<input type='submit' name='sub_btn' value='logout'>";
						}
						else
							echo"Please Login";
						if(isset($_POST["sub_btn"]))
						{
						session_destroy();
						//header("Location:Signup_form.php");
						session_start();
						if(isset($_SESSION['name']))
						{
						echo"welcome,".$_SESSION['name'];
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
<table  width='100%' border="2px">
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
				/*include('connection.php');
					echo "<div class='nav2'>";
					for($i=1;$i<=3;$i++)
					{
					$qry="SELECT * FROM products WHERE Sr_no= $i";
					$res=mysql_query($qry);
					if(mysql_num_rows($res) > 0)
					{
					$member=mysql_fetch_assoc($res);
					echo '<td><center><img src="'.$member['Image'].'" style="height:200px"></img><br>';
					print $member['Product_name'];
					echo "<br>".$member['Price'];
					echo "</center><br></td>";
					}
					}*/
                   ?>

<?php
	if(isset($_POST["sub_cap"])){
		$rand=rand(10000000,99999999);
		}
	?>

			</td>
			<td width="75%">
				<table width="100%" border="0">
		         <tr>
			     <th><h1><font color="green"><u>REGISTER NOW</u></font></h1></th>
			       <th><h1><font color="green"><u>LOGIN HERE</u></font></h1></th>
		       </tr><tr>
		<td>
		    <table align="center" width="100%"border="0">
			<tr><td align="right">First Name <font color="red">* </font></td>
				<td align="left"><input type="text" name="txt_fname_up" placeholder="Enter First Name"></td>
			</tr>
			<tr>
				<td align="right">Last Name <font color="red">* </font></td>
				<td><input type="text" name="txt_lname_up" placeholder="Enter Last Name"></td>
			</tr>
			<tr>
				<td align="right">Mobile No. <font color="red">* </font></td>
				<td><input type="text" name="txt_mob_up" placeholder="Enter Mobile No."></td>
			</tr>
			<tr>
				<td align="right">Email <font color="red">* </font></td>
				<td><input type="text" name="txt_mail_up" placeholder="Enter Mail"></td>
			</tr>
			<tr>
				<td align="right">ReType Email <font color="red">* </font></td>
				<td><input type="text" name="txt_remail_up" placeholder="ReType Mail"></td>
			</tr>
			<tr>
				<td align="right">Password <font color="red">* </font></td>
				<td><input type="password" name="txt_pwd_up" placeholder="Enter Password"></td>
			</tr>
			<tr>
				<td align="right">ReType Password <font color="red">* </font></td>
				<td align="left"><input type="password" name="txt_repwd_up" placeholder="ReType Password"></td>
			</tr>
			<tr>
				<td align="right">Gender <font color="red">* </font></td>
				<td>Male<input type="radio" name="rad_gen_up" value="M">
                    Female <input type="radio" name="rad_gen_up" value="F"></td>
			</tr>
			<tr>
				<td align="right">Your D.O.B. <font color="red">* </font></td>
				<td><input type="date" name="sel_age_up"></td>
			</tr>
			<?php
			/*<tr>
				<td align="right"><input type="submit" name="sub_cap"value=" CLICK AND TRY "></td>
				<td align="left"><?php
						global $rand;
						$ra=$rand;
						echo"<b><font color='green'>".$rand."</font></b>";
						?></td>
			</tr><tr>
				<td align="right">Enter digits </td>
				<td><input type="text" name="txt_cap_up" placeholder="Green Digits"><td>
			</tr>
			*/
			?>
			<tr>
				<td colspan="2"align="center"><input type="submit"name="sub_up" value="SIGN UP >>"></td>
			</tr>
		</table>
		</td>
		<td><table align="up" width="100%" height="100%" border="0">
			<tr>
				<td align="right">Email</td>
				<td><input type="text" name="txt_mail_in" placeholder="Enter Mail"></td>
			</tr><tr>
				<td align="right">User Id</td>
				<td><input type="text" name="txt_uid_in" placeholder="Enter User Id"></td>
			</tr><tr>
				<td align="right">Mobile No.</td>
				<td><input type="text" name="txt_mob_in" placeholder="Enter Mobile No."></td>
			</tr><tr>
				<td align="right">Password</td>
				<td><input type="password" name="txt_pwd_in" placeholder="Enter Password"></td>
			</tr><tr>
				<td colspan="2"align="center"><input type="submit"name="sub_in" value="LOGIN >>">   OR </td>
			</tr><tr>
				<td colspan="2"align="center"><a href="Forgot_Password_Form.php">Forgot Password?</a></td>
			</tr></select></td>
			</tr></table>
		</td></tr></table>
<?php
if(isset($_POST["sub_up"])){
	/*$v=$_POST["txt_cap_up"];
	global $ra;
	echo $v."<br>";
	echo $ra;
	//if(strcmp($v,$ra)==0)
		//echo"captcha match";

	}*/
	$fname=$_POST["txt_fname_up"];
	$lname=$_POST["txt_lname_up"];
	$mob=$_POST["txt_mob_up"];
	$mail=$_POST["txt_mail_up"];
	$rmail=$_POST["txt_remail_up"];
	$pwd=$_POST["txt_pwd_up"];
	$rpwd=$_POST["txt_repwd_up"];
	//$addr=$_POST["txt_add_up"];
	$gen=@$_POST["rad_gen_up"];
	$age=$_POST["sel_age_up"];
	//$cap=$_POST["txt_cap_up"];
	if(strcmp($pwd,$rpwd)==0){
		echo"Password Match<br>";
		require_once("Function.php");
		if(ckMob($mob)){
			//echo "correct mob<br>";
			if(strcmp($mail,$rmail)==0){
				//echo"mail match<br>";
				if(ckMail($mail)){
					//echo"correct mail<br>";
					//require_once("Connect_To_Database.php");
					$uid="$fname"."_"."$mob";
					$link=mysql_connect("localhost","root","");
					mysql_select_db("online_shoping");
					//echo"$uid";
					$q1="insert into user (f_name,l_name,pwd,gen,mob_no,u_id,age,mail) values ('$fname','$lname','$pwd','$gen','$mob','$uid','$age','$mail')";
					mysql_query($q1);
					if(mysql_affected_rows($link)>0)
						echo"<table align='center'><tr><th><font align='center' color='green'><h2>Thank you $fname Now you can login<br>Your U.Id is : $uid</h2><br></font></th><table>";
				}
				else
					echo"<table align='center'><tr><th><font align='center' color='red'><h2>Incorrect Mail</h2></font></th><table>";
			}
			else
				echo"<table align='center'><tr><th><font align='center' color='red'><h2>Mail Does Not Match</h2></font></th><table>";
		}
		else
			echo"<table align='center'><tr><th><font align='center' color='red'><h2>Incorrect Mobile Number</h2></font></th><table>";
	
	}
	else
		echo"<table align='center'><tr><th><font align='center' color='red'><h2>Password Does Not Match</h2></font></th><table>";
}
?>	
<?php
if(isset($_POST["sub_in"])){
	if((strcmp($_POST["txt_mail_in"],"")!=0)&&(strcmp($_POST["txt_uid_in"],"")!=0)&&(strcmp($_POST["txt_pwd_in"],"")!=0)){
	$mail=$_POST["txt_mail_in"];
	$uid=$_POST["txt_uid_in"];
	$mob=$_POST["txt_mob_in"];
	$pwd=$_POST["txt_pwd_in"];
	//require_once("Connect_To_Database.php");
	$link=mysql_connect("localhost","root","");
	mysql_select_db("online_shoping");
	$q2="select pwd ,f_name , l_name from user where u_id='$uid' and mail='$mail'and mob_no='$mob'";
	$rec1=mysql_query($q2);
	$ar=mysql_fetch_row($rec1);
	if(strcmp($ar[0],$pwd)==0){
		echo"<table align='center'><tr><th><font align='center' color='green'><h2>Thank you you </font><font align='center' color='blue'>$uid</font><font align='center' color='green'> are successfully login</font></th><table>";
		$n=$ar[1]." ".$ar[2];
		$_SESSION["name"]=$n;
	}
	else
		echo"<table align='center'><tr><th><font align='center' color='red'><h2>$uid user does not exists Or<br>Incorrect Password or User Name</h2></font></th><table>";
	if(isset($_SESSION['name']))
			{
				header("Location:Home_form.php");
			}
	
}
}
?>
</td>
</tr>
</table>		
</form>

</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>online movie ticket booking</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-aller.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js">
function book()
{
 	document.getElementById('abc').src='images/userpic.gif';
}
</script>
</head>
<body>
<div class="main"></div>
  <div class="header"></div>
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.php">Online Movie<span>Ticket Booking</span> </a></h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.php"><span>Home Page</span></a></li>
          <li><a href="upcoming.php"><span>Upcoming Movie</span></a></li>
          <li><a href="oldmovie.php"><span>Old Movie</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
	 
      <div class="clr"></div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="slider">  
		<form name="frm" method="get"> 
		<?php
		echo '<p style="color:#000000"><b>Number of Person	</b>	';
		echo '<select name=s1 class=per>';
		for($p=1;$p<=10;$p++)
		  echo '<option>'.$p.'</option>';
		echo '</select>';
		/*if(isset($_GET["user"]))
		  {
		 	 echo '<input type=image src=images/userpic.gif value=Submit/>';
		  }	*/
		?> 
		<h3 align="center" style="color:#FF3300"><b>GOLD RS.300/-</b></h3>
		<table border="0" bgcolor="#FFCCFF" height="50" width="200" bordercolor="#0033CC" align="center">
		<tr align="left">
  		<?php
		//document.location.href='/images/userpic.gif'
		// $im="<img src=images/userpic.gif>";
			for($i=1;$i<=15;$i++)
			
			echo "<td><input type=image name=seat src=images/1_4.gif value=Submit/>";
			 if(isset($_GET['seat_x']) && isset($_GET['seat_y']))
		 	 {
			 	//$h='<input type=image name=seat src=images/1_4.gif value=Submit/>';
			$os=isset($_GET['seat_x']) && isset($_GET['seat_y']);
			$ns='<input type=image name=seat src=images/userpic.gif value=Submit/>';
			//$os=$ns;
			echo $ns;
			$oi='images/1_4.gif';
			$ni='images/userpic.gif';
			//imagegif('images/1_4.gif','images/userpic.gif');
			//imagedestroy('images/1_4.gif');
			/*imagecopymerge($oi, $ni, 0, 0, 0, 0, 50, 50, 100);
			imagegif($oi, 'images/userpic.gif');
			imagegif($oi);*/
			//$oi->compositeImage($ni,$ni->getImageCompose(),5,5);
			//echo $oi;
			//echo '<input type=image name=seat src=images/userpic.gif value=Submit/>';
			 }
			
		?>
		</table>
		<h3 align="center" style="color:#FF3300"><b>PRIME RS.200/-</b></h3>
		<table border="0" bgcolor="#C7EFF3" height="50" width="200" bordercolor="#0033CC" align="center">
		<tr>
  		<?php
		for($i=1;$i<=15;$i++)
		{
			echo "<td><input type=image name=seat src=images/1_4.gif value=Submit/></td>";
		}
			/* if(isset($_POST['seat_x']) && isset($_POST['seat_y']))
		 	 {
				echo '<input type=image name=seat src=images/userpic.gif value=Submit/>';
			 }*/
		?>
		<tr>
		<?php
		for($i=1;$i<=15;$i++)
			echo "<td><input type=image name=seat src=images/1_4.gif value=Submit/>";
		?>		
		</table>
		<h3 align="center" style="color:#FF3300"><b>NORMAL RS.150/-</b></h3>
		<table border="0" bgcolor="#D7D7D7" height="50" width="200" bordercolor="#0033CC" align="center">
		<tr>
  		<?php
		for($i=1;$i<=15;$i++)
			echo "<td><input type=image name=seat src=images/1_4.gif value=Submit/>";
		?>
		<tr>
		<?php
		for($i=1;$i<=15;$i++)
			echo "<td><input type=image name=seat src=images/1_4.gif value=Submit/>";
		?>
		<tr>
		<?php
		for($i=1;$i<=15;$i++)
			echo "<td><input type=image name=seat src=images/1_4.gif value=Submit/>";
		?>
		<tr>
		<?php
		for($i=1;$i<=15;$i++)
			echo "<td><input type=image name=seat src=images/1_4.gif value=Submit/>";
		?>
		</table>
		<br />
		<table align="center">
		 <tr><td colspan="2"><input type="submit" class="button" name="b1" value="Payment"/>
		 </table>
		</form>
		 <?php
		 if(isset($_GET['b1']))
		 header("Location:/movie_ticket_booking/online_payment.php");
		/* if(isset($_POST['seat_x']) && isset($_POST['seat_y']))
		  {
		  // header("Location:/movie_ticket_booking/online_payment.php");
		  	//echo "<img src=images/userpic.gif />";
			$os=isset($_POST['seat_x']) && isset($_POST['seat_y']);
			$ns='<input type=image name=seat src=images/userpic.gif value=Submit/>';
			$os=$ns;
			echo $os;
		  }	*/
		 /*if(is_readable($_POST["images/1_4.gif"]))
		  {
		  	echo "seat";
		  }	*/ 
		  /*$con = mysql_connect("localhost","root");
		  mysql_select_db("movie_book",$con);
		  $seat=mysql_query("select * from seat_arrange",$con);
		    while($row=mysql_fetch_array($seat,MYSQL_ASSOC))
			{
				$t_seat=$row['total_seat_row'];
				$s_type=$row['seat_type'];
				echo "<br>".$s_type;
				/*$i=0;
				$cnt=0;
		 		 for($i=$cnt;$i<=$t_seat;$i++)
				 {
				  while($i<=10){
					echo "	<img src=images/1_4.gif>	";
					$i++;}				
				 }
				echo "<br>";
				$cnt=$t_seat-$cnt;
					echo "<br>reamaing seat =".$cnt;
				$i=0;
				$cnt=0;
				//echo "<table border=1>";
				//echo "<tr>";
			  for($i=$cnt;$i<=$t_seat;$i++)
				 {
				 	$j=0;
				   while($j<=10)
				   {
					//echo "	<img src=images/1_4.gif>	";
					$j++;
					echo " if j	".$j;
					}
					//$cnt=$t_seat-$j;
					//echo "	cnt	".$cnt;
				 }
				 $cnt=$t_seat-$j;
					echo "	cnt	".$cnt;
				 //echo "</table>";
			}*/
		 ?>
     </form>
      </div>
          <div class="clr"></div>
</div>
        <div class="clr"></div>
        <div class="article">
         
          <div class="clr"></div>
        </div>
        <div class="article">
      <div class="sidebar">
                <div class="gadget">
                   <div class="clr"></div>
         
        </div>
        <div class="gadget">
          <div class="clr"></div>
</div>
<div class="clr"></div>
          </div>
      </div>
</div>
</div>
</div>
</div>
          </body>
</html>

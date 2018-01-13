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
<script type="text/javascript" src="js/coin-slider.min.js"></script>
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
		<table align="right">
		<tr>
		<?php
		   $d=date('d');
		   $tmp=$d+5;
		   while($d<=$tmp)
			{
			echo '<td class=date style="color:#000000" align="center" height="50" width=50">'.$d.'</td>';
			$d++;
			}
		?>
		</tr>
		</table>
		<br /><br /><br /><br />
		<table border="0">
		<?php 
		 $con = mysql_connect("localhost","root");
		  mysql_select_db("movie_book",$con);
		 //echo "Date ::".$d;
		  //echo "<br>Time ::".$t;
		  //print_r(getdate());
		  $a=mysql_query("select * from old_movie",$con);
		  $time=mysql_query("select * from movie_time",$con);
		  while($row=mysql_fetch_array($a,MYSQL_ASSOC))
			{
				//echo "<br>ID :: {$row['id']}<br>";
				//$d_date=$row['m_date'];
		// $d=date('d');
				//if($d<$d_date)
				//{
					//echo "<br>upcoming Date ::{$row['c_date']}<br>";
					//$dd=$row['c_date'];
			//$x=date('d', strtotime($row['m_date']));
			//$tmp=$d+5;
					//echo "tmp ::".$tmp;
					//echo "<a href=\"date('d', strtotime($row['c_date']))"\"> ". $row['c_date'] ." </a>";
			//echo '<tr>';
				     //echo '<td class=date style="color:#000000" align="center" height="20" width="30"></td>';
				//echo '<pre class=date style="color:#000000" align="center" height="20" width="5">';
			//while($d<=$tmp)
				//{
			//echo '<td class=date style="color:#000000" align="center" height="20" width="30">'.$d.'</td>';
					//echo '<pre class=date style="color:#000000" align="center" height="20" width="5">'.$d. '</pre>';
			//$d++;
					//}
				//$d=0;
					//$tmp=0;
				//echo '</tr>';
					$movie=$row['o_name'];
					echo '<tr>';
				echo '<tr><td style="color:#000000"><b>'.$movie.'</b></td>';
				//echo '<tr><td style="color:#000000"><b>'.$movie.'</b></td>';
					//echo date('F d, Y h:mA', strtotime($row['c_date']));
				//}
				//else
					//echo "<br>old Date ::{$row['c_date']}<br>";
			if($t_row=mysql_fetch_array($time,MYSQL_ASSOC))
			{
				$th=date('g');
				$c_time=$t_row['time'];
				//$i=$th;
				//if($i<=$c_time)
				//{
				echo '<td><a href="seat.php">9:00 AM</a></td>';
				echo '<td><a href="seat.php">1:00 PM</a></td>';
				echo '<td><a href="seat.php">4:00 PM</a></td>';
				echo '<td><a href="seat.php">7:00 PM</a></td>';
				echo '<td><a href="seat.php">10:00 PM</a></td>';
				echo '<tr>';
				//$i++;
				//}
				//$y=date('g', strtotime($row['time']));
				//echo "<br> current time ::".$t;
				//if($t<$c_time)
					//{
						//for($i=$t;$i<=$c_time;$i++)
						//echo '<tr><td><a href="">  '.$c_time;'</a>';
					//}
			}
			}
		?>
		</table>
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
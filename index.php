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
	   <a href="">Login For Admin</a>
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
		 <div id="coin-slider">  
		 <?php
		    $con = mysql_connect("localhost","root");
		  mysql_select_db("movie_book",$con);
		   $d_dmy=mysql_query("select * from movie",$con);
		  while($row=mysql_fetch_array($d_dmy,MYSQL_ASSOC))
			{
					$imagebytes = $row['m_path'];
				
				//echo "<br>".$imagebytes;
				 //echo '<img src='.$imagebytes;." width="660" height="360" alt="" /><span><big>Talvar</big><br /></span> ';
				echo '<img src="'.$row['m_path'].'"width="200" height="168"></a>';
				//header("Location:".$imagebytes."");
				
			}
		 ?>
		 	
	      </div>
	    </div>
		
          <div class="clr"></div>
</div>
        <div class="clr"></div>
        <div class="article">
         
          <div class="clr"></div>
        </div>
		
        <div class="article"></div>
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

    <span class="content_resize"></span>
	<br />
	<form name="frm" method="get">
    <input type="submit" class="button" name="b1" value="Book Now"/>
	</form>
  </div>
</div>
</div>
</div>
  <?php
   $con = mysql_connect("localhost","root");
		  mysql_select_db("movie_book",$con);
		  $c_dmy=date('Y-m-d');
		 // echo $c_dmy;
		  $d_dmy=mysql_query("select * from movie",$con);
		  $m_image=mysql_query("select m_path from movie",$con);
		  while($row=mysql_fetch_array($d_dmy,MYSQL_ASSOC))
			{
				//echo "<br>ID :: {$row['id']}<br>";
				$d_date=$row['m_date'];
				if($c_dmy<=$d_date)
				{
					//echo "<br>".$d_date=$row['m_date'];
				}
			}
		  if(isset($_GET["b1"]))
		  {
		   header("Location:/movie_ticket_booking/date.php");
		   //require( dirname( __FILE__ ) . '/date.php');
		 // require_once('/date.php');		 
		   //sprintf('<a href="date.php"></a>');
		  }
		   
   ?>
</body>
</html>

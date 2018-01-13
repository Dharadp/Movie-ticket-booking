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
        <h1><a href="index.html">Online Movie<span>Ticket Booking</span> </a></h1>
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
 <div id="coin-slider">   
		
		 <?php
		    $con = mysql_connect("localhost","root");
		  mysql_select_db("movie_book",$con);
		   $d_dmy=mysql_query("select * from old_movie",$con);
		  while($row=mysql_fetch_array($d_dmy,MYSQL_ASSOC))
			{
					$imagebytes = $row['o_m_path'];
				
				//echo "<br>".$imagebytes;
				 //echo '<img src='.$imagebytes;." width="660" height="360" alt="" /><span><big>Talvar</big><br /></span> ';
				echo '<img src="'.$row['o_m_path'].'"width="200" height="168"></a>';
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
	     <span class="content_resize"></span>
		 <br />
	  <form name="frm" method="get">
    <input type="submit" class="button" name="b1" value="Book Now"/>
	</form>
</div>
</div>
</div>
</div>
          </body>
		  <?php
		   if(isset($_GET["b1"]))
		  {
		   header("Location:/movie_ticket_booking/old_date.php");
		  }
		  ?>
</html>
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
		<form name="frm" method="get">  
			<img src="images/Panthom2.jpg" alt="" width="664" height="300" /><br />
		  <input type="submit" class="button" name="b4" value="Book" />
		  <br />  
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
  <?php
   $con = mysql_connect("localhost","root");
		  mysql_select_db("movie_book",$con);
		  //$image = stripslashes($_REQUEST[imname]);
		  $c_dmy = date('Y-m-d');
		  //$d_dmy=("select m_date from movie where m_date='".$c_dmy."'",$con);
		  $d_dmy=mysql_query("select * from movie",$con);
		  //$rs = mysql_query("select * from movie where m_path=\"".addslashes($d_dmy).".jpg\"");
  			//$image=("select m_path from movie where m_date=".$c_dmy."",$con);
			//$image=("select m_path from movie",$con);
			while($row=mysql_fetch_array($d_dmy,MYSQL_ASSOC))
			{	
			//$row=mysql_fetch_array($d_dmy);
				$imagebytes = $row['m_path'];
				//readfile($d_dmy);
				echo "<br>echo".$imagebytes;
				 if(isset($_GET["b4"]))
		  		{
				header("Location:".$imagebytes."");
				//header("Location:".$rs=$row['m_path']."");
				//header("Location: image/jpg",$d_dmy);
				//header("Content-type: image/jpg",$d_dmy);
				//header("Location:/movie_ticket_booking/date.php");
				//print "<br>print".$imagebytes;
				}
			}
	?>
          </body>
</html>

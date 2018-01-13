<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Movie Ticket Booking</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-aller.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script type="text/javascript">
function n1()
{
name=document.frm.t1.value;
accno=document.frm.t2.value;
ac=parseInt(accno);
	if(name=="")
			{
				alert("Please Enter  Name.");
				document.frm.t1.focus();
			}
	else if(accno=="")
			{
				alert("Please Enter Account Number.");
				document.frm.t2.focus();
				//if(ac==)
			}
}
</script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">Online Movie Ticket Booking</a></h1>
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
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Payment</span></h2>
          <div class="clr"></div>
         
        </div>
        <div class="article">

          <div class="clr"></div>
          <form name=frm method=get>		  
            <ol>
              <li>
                <label for="name" style="color:#000000"><b>Name</b> </label>
                <input name="t1" class="text" style="border-color:#FF6600"/>
              </li>
              <li>
                <label for="email" style="color:#000000"><b>Account No</b></label>
                <input name="t2" class="text" style="border-color:#FF6600" />
              </li>
              <li>
			  <br />
			  <table align="center">
                <tr><td><input type="submit" class="button" name="b1" value="Make Payment"  align="center"  onclick="n1()"/>
				 </table>
                <div class="clr"></div>
              </li>
            </ol>
			</form>
  </div>
  </div>
  
<div class="sidebar">
                <div class="gadget">
                   <div class="clr"></div>
         
        </div>
        <div class="gadget">
          
          <div class="clr"></div>
          </div>
      </div>
      <div class="clr"></div>
        </div>
      </div>
        
</body>
</html>

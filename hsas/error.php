<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <title>HSAS: Login Error</title>
  </head>

  <body>

    <div id="container">

	<div id="logo"><img src="images/hsas_logo.png" /></div>

	<img src="images/background_image.png" id="bg" alt="">
	
	<h2>the fourth annual <span class="red_harvard">harvard</span> student art show</h2>


    <div id="nav">
    
        <ul id="tabs">
            <li id="home"><a href="index.html">home</a></li>
            <li><a href="about.html" id="about">about</a></li>
            <li id="testimonials"><a href="testimonials.html">testimonials</a></li>
            <li id="gallery"><a href="gallery.html">gallery</a></li>
            <li id="contact"><a href="contact.html" id="contact">contact</a></li>
            
        </ul>
                
    </div>
        
    <div id="main_content">
    
        <div class="box">
            <p>Error!</p>
            <p><?php echo $message; ?></p>
            <div class="clear"></div>
        </div>
    

	    <div align="center" style="margin: 20px;">
	      <a href="javascript:history.go(-1);">Click Here to Go Back</a>
	    </div>
    
	    <div class="clear"></div>
    </div>
  </div>  

  </body>

</html>

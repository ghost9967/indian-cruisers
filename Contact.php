<!DOCTYPE html>
<html lang="en" >
<center><a href="Main.html"><img src="3.png" width=auto height=auto alt=""/></a></center>
<head>
  <meta charset="UTF-8">
  <title>Contact Us - Indian Cruisers</title>
 
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
  

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<form action="contact.php" method="post" class="contact-form">
	
	<span>Contact Us!</span>

	<ul>
		<li>
			<i class="fa fa-user form-icon"></i>
		  <input type="text" placeholder="Name" name="name" />
		</li>
		<li>
			<i class="fa fa-at form-icon"></i>
		  <input type="text" placeholder="Email" name="email" />
		</li>
		<li>
			<i class="fa fa-university form-icon"></i>
		  <input type="text" placeholder="Organization/Academic Institution" name="comp" />
		</li>
		<li>
			<i class="fa fa-phone form-icon"></i>
			<input type="text" placeholder="Phone" name="phone" required="required"/>
		</li>
		<li>
			<i class="fa fa-paper-plane form-icon"></i>
			<input type="text" placeholder="Subject" name="sub" />
		</li>
		<li><em class="fa fa-envelope form-icon"></em>
		  <textarea placeholder="Message" name="mes" rows="2"></textarea>
		</li>
		<li>
			<input type="submit" placeholder="Submit" required="required" title="Thank You for Contacting Us!" />
		</li>
	</ul>
</form>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

 <center> <a href="Main.html"></a></center>
<center></center>
	<?php
        try{
      if(isset($_POST["name"])){
            $dbase = new PDO('mysql:host=mysql.hostinger.com;port=3306;dbname=u279604430_comp',"u279604430_root","Bitchiambatman@2936");

            $dbase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbase->prepare("insert into comp values(\"".$_POST["name"]."\",\"".$_POST["email"]."\",\"".$_POST["phone"]."\",\"".$_POST["cname"]."\",\"".$_POST["subject"]."\",\"".$_POST["message"]."\")")->execute();
            $dbase = null;
            $_POST = null;
	    unset($_POST);
            
      }
        }
            catch (PDOException $e){
               print "Error : ".$e->getMessage()."<br>";
                die();
            }
        ?>
</body>

</html>

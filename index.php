<?php include 'database.php'; ?>
<?php
$q="select * from chat";
$chat=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
<head>
	<title>ChatBox</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="container" >
	<h1>ChatBox Welcome</h1>
	<div id="shouts" >
	<ul>
	    <?php while($row=mysqli_fetch_array($chat)) :?>
         <li class="shout"><span><?php echo $row['time'];?></span> - <?php echo $row['user'];?>:<?php echo $row['message'];?></li>
	<?php  endwhile; ?>
		<li class="shout"><span>10:15PM</span> - Brad:Hey what are you guys upto?</li>
		
	</ul>
    </div>
     <div id="input" >
     <?php 
      if(isset($_GET['error'])) :?>
      <div class="error"><?php echo $_GET['error'];?></div>
       <?php endif;?>
     <form method="post" action="process.php">
	       <input type="text" name="name" placeholder="enter your name" />
	       <input type="text" name="message" placeholder="enter your text" />
	       <br>
		   <input class="chat-btn" type="submit" name="submit" value="ChatBox out" />
     </form>
     </div>
</div>
</body>
</html>
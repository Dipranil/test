<?php

require"connection.php";

?>
<link href='css/style1.css' rel='stylesheet'>
<body>
<!-- header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_left">
				<ul>
				
					<li class="top_link"><a href="login.php">LOGIN | REGISTER</a></li>					
				</ul>
				<div class="social">
					<ul>
						<li><a href="facebook.com"><i class="facebook"></i></a></li>
						<li><a href="twitter.com"><i class="twitter"></i></a></li>
						<li><a href="google.com"><i class="google"></i></a></li>										
					</ul>
				</div>
				
					<?php
			if($_SESSION[id])
			{
				$sql="select * from `register` where `id`='$_SESSION[id]'";
				$query=mysql_query($sql);
				while($row=mysql_fetch_array($query))
				{
					echo "<h1 id='welcome_text'>welcome,".$row[name]."</h1>";
					echo "<a id='logout' href='logout.php'><img src='images/logout.jpg' height='65' width='85'></a>";
				}
			}
			
			
			
			?>
				
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header_top">
	 <div class="container">
		 <div class="logo">
		 	<a href="index.php"><img src="images/logo1.png" alt=""/></a>			 
		 </div>
		 <div class="header_right">	
			 <div class="cart box_1">
					
				
				<div class="clearfix"> </div>
			 </div>				 
		 </div>
		  <div class="clearfix"></div>	
	 </div>
</div>
<!--cart-->
	 
<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		 <ul class="megamenu skyblue">
			 <li class="active grid"><a class="color1" href="index.php">Home</a></li>
			 <li class="grid"><a class="color2" href="#">products</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>plants</h4>
								<ul>
									<li><a href="flower.php">flower plants</a></li>
									<li><a href="fruit.php">fruit plants</a></li>
									<li><a href="decorative.php">Decorative Plants</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>seeds</h4>
								<ul>
									<li><a href="flowerseed.php">flower seeds</a></li>
									<li><a href="fruitseed.php">fruit seeds</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>accessories</h4>
								<ul>
									<li><a href="gloves.php">gloves</a></li>
									<li><a href="wintools.php">winter tools</a></li>
									<li><a href="products.php">pressure sprayers</a></li>
									<li><a href="products.php">digging tools</a></li>
								</ul>	
							</div>												
						</div>
						
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
							
				<li><a class="color5" href="contact.php">contact us</a>
				
				</li>
				<li><a class="color6" href="#">help</a>
				</li>
                <li><a class="color7" href="aboutus.php">about us</a>
				</li>				
			   </ul> 
			   
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
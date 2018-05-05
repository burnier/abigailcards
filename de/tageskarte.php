<?php include 'header.php'; ?>
  
	<!-------------------------------------------------------------------------- Database Connection -----------------------------------------------------------------------------> 
	  <?php
		
		$servername = "localhost";
		$username = "abigailc_user";
		$password = "bolinha10";
		$dbname = "abigailc_cards";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		// Attribute correct charset
		$conn->set_charset("utf8");
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		// Finds random number
		$randomNumber = rand(0,35);
		
		$sql = "SELECT file, caption, description FROM `DAYCARD_DE` WHERE id=" . strval($randomNumber);
		
		$result = $conn->query($sql);
		
		$row = $result->fetch_assoc();
		
	?>
  
 	<!-------------------------------------------------------------------------------------------- Script ----------------------------------------------------------------------------------------------> 
  	<script>
		 function randomCard() {
			
			document.getElementById("myImage").src = "<?php echo "Card Images/" .$row['file'];?>"
			
			// Figcaption	
			var x = document.createElement("FIGCAPTION");
			var y = document.createTextNode("<?php echo $row['caption']; ?>");
			x.appendChild(y);
			var z = document.getElementById("myFigure");
			z.appendChild(x);
			
			//gets myCardInfo
			document.getElementById("myText").innerHTML = "<?php echo $row['description']; ?>";		
		 }
	</script>		
    
 
  
  </head>
  
  <body>
	

	<!--------------------------------------------------------------------------------------- Navigation Bar ----------------------------------------------------------------------------------------->
	<div class="navbar navbar-custom" role="navigation"> 
		<div class="container"> 
			<div class="navbar-header"> 
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
             <!--   <a class="navbar-brand" rel="home" href="kontakt.php" title="AbigailCards">Abigail Cards</a> -->
			</div>	
			<div class="navbar-collapse collapse"> 
				<ul class="nav navbar-nav">
						<li><a href='index.php'>Hauptseite</a></li>
						<li><a href='geschichte.php'>Geschichte</a></li>
						<li><a href='bedeutung-der-karten.php'>Bedeutung der Karten</a></li>
						<li class="active" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href='#'>Legebeispiele<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="beispiel-1-karte.php">Legung mit 1 Karte</a></li>
								<li><a href="beispiel-3-karten.php">Legung mit 3 Karten</a></li>
								<li><a href="beispiel-mehrere-karten.php">Legung mit mehreren Karten</a></li>
								<li><a href="tageskarte.php">Deine Tageskarte (Interaktiv!)</a></li>
							</ul>
						</li>
						<li class="menu_spread"><a href='personalisiert.php'>Personalisierte Legung!</a></li>
                        <li><a href='ueber_mich.php'>Über mich</a></li>
                        <li><a href='../blog_de'>BLOG</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	
	
	
	<!--------------------------------------------------------------------------------------- Body ----------------------------------------------------------------------------------------->
	<div class="container">
		<h1>Deine Tageskarte!</h1><br/>
        
        <div class="body-text">
  			<p class="lead"> Klicke auf die Kartenrückseiten unten um deine heutige Tageskarte zu enthüllen! <br/><strong>Nicht schummeln, es gilt der erste Versuch!</strong></p>
           
  			<br/>
  		</div>

        <div class="row pointer_cursor">
    		<div class="col-lg-8 col-lg-offset-2">
            	<figure style="border:none">
                	<img src="Other Images/back5.png" width="700px" height="500px" onclick="randomCard(); this.onclick=null;" alt=""/> 
                </figure>
        	</div>
        </div>
        <div class="row">
        	<div class="col-sm-3 col-md-3 col-lg-offset-3 col-lg-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-1 col-xs-4">
	          <figure id="myFigure" style="border:none"> 
    	            <img id="myImage" src="" alt="" />
              </figure>
            </div>
            
            <div class="col-lg-4 col-md-5 col-sm-5 col-xs-6">
                <div id="myText" class="lead dayCard">
                </div>
	        </div>   
        </div>
	</div>     
    <!--------------------------------------------------------------------------------------- Body ----------------------------------------------------------------------------------------->
    
	<?php $conn->close(); ?>
	
<?php include 'footer.php'; ?>

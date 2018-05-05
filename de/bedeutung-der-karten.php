<?php include 'header.php'; ?>

<!------------------------------------------------------------------------------ Navigation Bar --------------------------------------------------------------------------------->
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
						<li class="active"><a href='bedeutung-der-karten.php'>Bedeutung der Karten</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href='#'>Legebeispiele<span class="caret"></span></a>
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
<!------------------------------------------------------------------------------ Navigation Bar ---------------------------------------------------------------------------------> 

	<div class="container">
  		<h1>Bedeutung der Karten</h1><br/>
  		
  		<div class="body-text">
  			<p class="lead"> Bewege den Kursor über die Kartenbilder (oder klicke darauf) um ihre Bedeutungen zu sehen! </p>
  			<br/>
  		</div>

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

	$sql = "SELECT file, caption, description FROM `DESCRIPTION_DE`";
	
	$result = $conn->query($sql);
?>
  
  
  <!------------------------------------------------------------------------------ Cards Table --------------------------------------------------------------------------------->
  	<div class="pointer_cursor">	
  		<div class="row-fluid">
    		<?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            	<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive"> 
	        		<figcaption><?php echo $row['caption']; ?></figcaption>
	      		</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
      			<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>"  data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
			        <figcaption><?php echo $row['caption']; ?></figcaption>
		      	</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
           		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>"  data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
  				<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>"  data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
		      	</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            	<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            	<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
        </div>
        
        <div class="row-fluid">
    		<?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            	<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            	<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            	<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            	<figure>
	                <img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
    	            <figcaption><?php echo $row['caption']; ?></figcaption>
                </figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            	<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
            	<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
        </div>

    	<div class="row-fluid">
    		<?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
    		<?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>    
    	</div>
   
		<div class="row-fluid">
    		<?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
    		<?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>    
    	</div>   
    
     	<div class="row-fluid">
    		<?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
    		<?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>    
    	</div>
   
		<div class="row-fluid">
    		<?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
    		<?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>
            <?php $row = $result->fetch_assoc();?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        		<figure> 
                	<img src="<?php echo "Card Images/" .$row['file'];?>" data-toggle="tooltip" title="<?php echo $row['description']; ?>" class="img-responsive">
        			<figcaption><?php echo $row['caption']; ?></figcaption>
      			</figure>
            </div>    
    	</div> 
    </div>
<!------------------------------------------------------------------------------ Database Close --------------------------------------------------------------------------------->    

	<?php $conn->close(); ?>


    </div>


	<!-- JS for Tooltip -->
	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip({placement: "bottom", animation: true});
		});
	</script>


<?php include 'footer.php'; ?>

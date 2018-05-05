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
<!------------------------------------------------------------------------------ Navigation Bar --------------------------------------------------------------------------------->
	
	<div class="container">
	
		<h1>Legung mit 1 Karte</h1><br/>
		
		<div class="body-text">
            <p class="lead">
                <b><u>Legung mit 1 Karte</u>: </b>Für Ja/Nein Fragen geeignet<br/><br/>
                                
                <i>Ich bin 23 Jahre alt und habe eine Affäre mit einem älteren verheirateten Mann. Ich bin in ihn verliebt, 
                aber weiß nicht, ob unsere Beziehung eine Zukunft hat, ob er mich liebt und wegen mir seine Frau verlassen wird.</i><br/><br/>
                
                <b>Frage:</b> <i>Liebt er mich?</i><br/><br/>
                
                <b>Antwort</b><br/>
            
                <i>Die Karte unten (Falschheit) zeigt die Antwort Deiner Frage:</i><br/><br/>
            </p>
		</div>

    	<div class="row">
    		<div class="col-xs-6 col-lg-2 col-lg-offset-3"> 
				<figure>
					<img src="Card Images\falschheit.jpg" alt="" class="img-responsive" >
					<figcaption>Falschheit</figcaption>
				</figure>
    		</div>
    	
        	<div class="body-text col-xs-6 col-lg-4"> 
        		<p class="lead text-left">Leider sagt die Karte, dass seine Gefühle nicht ernst sind und dass er seine Frau wegen Dir nicht verlassen wird.</p>
	        </div>  
  		</div>

    </div>

<?php include 'footer.php'; ?>

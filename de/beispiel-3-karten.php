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
    
    	<h1>Legung mit 3 Karten</h1><br/>
	
		<div class="body-text">
        
            <p class="lead">
                <b><u>Legung mit 3 Karten</u>: </b>Einfache Legung für konkrete Fragen.<br/><br/>
                
                <i>Ich suche seit über einem Jahr ohne Erfolg einen Job. Ich verfüge über eine Ausbildung im Bereich Human Resources und kann mehrere Sprachen.</i><br/><br/>
                
                <b>Frage:</b> <i>Ich möchte wissen, ob ich in den nächsten Monaten eine Arbeit finden werde oder noch länger darauf warten muss?</i><br/><br/>
                
                <b>Antwort</b><br/>
            
                <i>Folgende Karten zeigen die Antwort Ihrer Frage: <b>Reise</b>, <b>Unverhoffte Freude</b> und <b>Heirat</b>.</i><br/><br/>
                
            </p>	
		</div>

    
        <div class="row">
            <div class="col-xs-4 col-lg-2 col-lg-offset-3"> 
                <figure>
                    <img src="Card Images\reise.jpg" alt="" class="img-responsive">
                    <figcaption>Reise</figcaption>
                </figure>
            </div>
            <div class="col-xs-4 col-lg-2"> 
                <figure>
                    <img src="Card Images\unverhoffte freude.jpg" alt="" class="img-responsive">
                    <figcaption>Unverhoffte Freude</figcaption>
                </figure>
            </div>
            <div class="col-xs-4 col-lg-2"> 
                <figure>
                    <img src="Card Images\heirat.jpg" alt="" class="img-responsive">
                    <figcaption>Heirat</figcaption>
                </figure>
            </div>
        
        </div>
    
    
	
        <br/><br/>
        
        <div class="body-text">
            <p class="lead">
                <i>Die Karten zeigen deutlich, dass in den nächsten Monaten Veränderungen in Deinem Leben ausgelöst werden und Du wirst diese schwierige Situation überstehen. 
                Du wirst eine fixe und Deinen Qualifikationen entsprechende Stelle finden, in der Du Dich weiterentwickeln werden kannst.</i>

            </p>
        </div>
	
  </div>
  
<?php include 'footer.php'; ?>

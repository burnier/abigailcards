<?php include 'header.php'; ?>
  
<!-------------------------------------------------------- FACEBOOK Box ------------------------------------------------------------------->		
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.8&appId=1770325796565044";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href='#'>Legebeispiele<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="beispiel-1-karte.php">Legung mit 1 Karte</a></li>
								<li><a href="beispiel-3-karten.php">Legung mit 3 Karten</a></li>
								<li><a href="beispiel-mehrere-karten.php">Legung mit mehreren Karten</a></li>
								<li><a href="tageskarte.php">Deine Tageskarte (Interaktiv!)</a></li>
							</ul>
						</li>
						<li class="menu_spread"><a href='personalisiert.php'>Personalisierte Legung!</a></li>
                        <li class="active"><a href='ueber_mich.php'>Über mich</a></li>
                        <li><a href='../blog_de'>BLOG</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--------------------------------------------------------------------------------------- Navigation Bar ----------------------------------------------------------------------------------------->
	
	<div class="container">
		<h1>Über mich</h1><br/>

  		<div class="body-text">
            
            <p class="lead">
            	Ich heiße Abigail und verfüge über mehrjährige Erfahrung mit Kartenlegen und biete kompetente Lebensberatung. Schreibe Deine Frage einfach 
                <a href="personalisiert.php"><strong>>>>HIER<<<</strong></a> und bekomme von mir eine personalisierte Antwort - ich werde mich baldmöglichst 
                bei Dir melden! <br/><br/>
            
            	Ich beantworte Fragen für alle Lebensbereiche  wie Familie & Kinder , Beziehungen und Liebe , Beruf und  benutze mehrere Legemethode. 
                Das einzige Tabuthema ist die Gesundheit. Das gehört in die Hände eines Arztes. Da am häufigsten nach der Liebe gefragt wird, habe ich mich auf dieses 
                Thema spezialisiert.</p>  
            
            </p>
  		</div>
 
 <!-------------------------------------------------------- FACEBOOK & INSTAGRAM Boxes ------------------------------------------------------------------->	
	<div class="row">	<!-- add class for font style/color!!! -->
        <div class="col-md-6">
        	<div class="well well-sm">
                <p class="text-center">Besuche unsere Facebook-Seite und entdecken Sie die Geheimnisse der Zigeunerkarten!</p>
                    <div class="fb-page" 
                        data-href="https://www.facebook.com/Zigeunerkarten-1114402131982173"
                        data-width="380" 
                        data-hide-cover="false"
                        data-show-facepile="false" 
                        data-show-posts="false">
                    </div>
            </div>
        </div>
        <div class="col-md-6">
        	<div class="well well-sm">
                <p class="text-center">Besuche auch unsere Instagram-Seite um Legebeispiele und andere interessanten Bilder zum Thema Zigeunerkarten zu sehen!</p>
    			<div class="text-center">
                	<a href="https://www.instagram.com/abigailcards/?hl=de"><img src="Other Images\banner-instagram.jpg" align="middle" class="img-responsive"></a>
                </div>
        	</div>
    	</div>
	</div>
 
 

 </div>
 
 <br/><br/><br/><br/>
 
<?php include 'footer.php'; ?>
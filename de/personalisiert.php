<?php include 'header.php'; ?>

<!-- Bootstrap Form Validator -->
<script src="validator.js"></script>
<!-- JS Form -->
<script src="contact.js"></script>

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
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href='#'>Legebeispiele<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="beispiel-1-karte.php">Legung mit 1 Karte</a></li>
								<li><a href="beispiel-3-karten.php">Legung mit 3 Karten</a></li>
								<li><a href="beispiel-mehrere-karten.php">Legung mit mehreren Karten</a></li>
								<li><a href="tageskarte.php">Deine Tageskarte (Interaktiv!)</a></li>
							</ul>
						</li>
						<li class="active menu_spread"><a href='personalisiert.php'>Personalisierte Legung!</a></li>
                        <li><a href='ueber_mich.php'>Über mich</a></li>
                        <li><a href='../blog_de'>BLOG</a></li>
				</ul>
			</div>
		</div>
	</div>
<!------------------------------------------------------------------------------ Navigation Bar --------------------------------------------------------------------------------->

	<div class="container">
		          
          <h1 class="text-center">Weisst Du nicht mehr wie es weitergeht?</h1><br/>
                
                 <div class="row body-text"> 
                	<h2 class="text-center">
                		Liebeskummer? Lebenskrisen? Sorgen beruflich oder privat? Du bist aus Deinem Gleichgewicht gekommen und weisst nicht, wie es weitergehen soll? Möchtest du wissen, 
                		wie sich Deine Situation verändert und ob Du endlich wieder glücklich wirst?<br/><br/>
                
               			Fülle das untere Formular aus und bekomme <strong><u>gratis</u></strong> per E-Mail eine <strong><u>personalisierte</u></strong> Antwort auf Deine Frage! 
                		Es geht nicht um eine automatische Antwort, sondern meine spezifische Antwort auf <strong><u>DEINE</u></strong> Frage mit einer <strong><u>Foto</u></strong> der Legung. 
                		Dafür werde ich die Legung mit drei Karten verwenden - siehe <a onClick="window.open('beispiel-3-karten.php','Exemplo','width=460,height=960')">HIER</a> ein Beispiel. 
                	</h2> <br/>
            	</div>
            
 			<!-------------------------------------------------------- CONTACT FORM ------------------------------------------------------------------->	

 
         	 <div class="well well-sm">
                 <form id="contact-form" method="post" action="contact.php" role="form">
                
                    <div class="messages"></div>
                
                    <div class="controls">
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Name *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Schreibe Deine Name *" required="required" data-error="Bitte schreibe Deine Name!">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">E-Mail-Adresse *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Schreibe Deine E-Mail-Adresse *" required="required" data-error="Ungültige E-Mail-Adresse">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        
                     
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Frage *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Schreibe eine klare und konkrete Frage *" rows="4" required data-error="Bitte schreibe Deine Frage"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary btn-send" value="Frage Senden">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p><strong>*</strong>Diese Felder sind Pflichtangaben.</p>
                            </div>
                        </div>
                    </div>
                
                </form>
 			</div>
 	</div>      
 
<?php include 'footer.php'; ?>




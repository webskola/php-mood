<?php global $APP ?>

<!DOCTYPE html>
<html lang="lv">

  <head>
    <meta charset="utf-8">
    <title>Webskola - HTML/CSS web lapa (E. Brass)</title>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/latest/normalize.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic,latin-ext" rel="stylesheet">  
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>

      <?php include '../views/header.view.php'; ?>

      <?php include '../views/slider.view.php'; ?>

			<?php include '../views/services.view.php'; ?>

   <!-- mūsu darbi daļa -->
    <div id="works">
    	<div class="our-works bg-image-green content overlay-green">
	      <div class="wrapper">

	        <h2 class="section-title">Mūsu darbi</h2>

	       	<div class="our-works-list">
		        <p class="text">
		        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
		        ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.
		        Nam nec tellus a odio tincidunt auctor a ornare odio.
		        </p>       		
	       	</div>

	        <div class="section-buttons">
	        	<button class="active">viss</button>
	        	<button>Identitāte</button>
	        	<button>WEB dizains</button>
	        	<button>Aplikāciju dizains</button>
	        	<button>Fotogrāfija</button>
	        </div>

			<div class="slide-buttons">
				<button class="active"></button>
				<button></button>
				<button></button>
			</div>

	      </div>
	    </div>

    <!-- portfolio daļa -->
	    <div class="portfolio content">
	    	<div class="portfolio-list clearfix">
		        <div class="block">
		          <img src="images/photo-02.png" alt="Bilde 1" class="big">
		          <div class="text">
		            <img src="images/rinkisi.png" alt="Riņķīši">
		            <div class="name">Proin gravida nibh vel velit</div>
		            <div class="category">Fotogrāfija</div>
		          </div>
		        </div>
		        <div class="block">
		          <img src="images/photo-03.png" alt="Bilde 2" class="big">
		          <div class="text">
		            <img src="images/rinkisi.png" alt="Riņķīši">
		            <div class="name">Proin gravida nibh vel velit</div>
		            <div class="category">Fotogrāfija</div>
		          </div>
		        </div>
		        <div class="block">
		          <img src="images/photo-04.png" alt="Bilde 3" class="big">
		          <div class="text">
		            <img src="images/rinkisi.png" alt="Riņķīši">
		            <div class="name">Proin gravida nibh vel velit</div>
		            <div class="category">Fotogrāfija</div>
		          </div>
		        </div>
		        <div class="block">
		          <img src="images/photo-05.png" alt="Bilde 4" class="big">
		          <div class="text">
		            <img src="images/rinkisi.png" alt="Riņķīši">
		            <div class="name">Proin gravida nibh vel velit</div>
		            <div class="category">Fotogrāfija</div>
		          </div>
		        </div>
		        <div class="block">
		          <img src="images/photo-06.png" alt="Bilde 5" class="big">
		          <div class="text">
		            <img src="images/rinkisi.png" alt="Riņķīši">
		            <div class="name">Proin gravida nibh vel velit</div>
		            <div class="category">Fotogrāfija</div>
		          </div>
		        </div>
		        <div class="block">
		          <img src="images/photo-01.png" alt="Bilde 6" class="big">
		          <div class="text">
		            <img src="images/rinkisi.png" alt="Riņķīši">
		            <div class="name">Proin gravida nibh vel velit</div>
		            <div class="category">Fotogrāfija</div>
		          </div>
		        </div>
		        <div class="block">
		          <img src="images/photo-07.png" alt="Bilde 7" class="big">
		          <div class="text">
		            <img src="images/rinkisi.png" alt="Riņķīši">
		            <div class="name">Proin gravida nibh vel velit</div>
		            <div class="category">Fotogrāfija</div>
		          </div>
		        </div>
		        <div class="block">
		          <img src="images/photo-08.png" alt="Bilde 8" class="big">
		          <div class="text">
		            <img src="images/rinkisi.png" alt="Riņķīši">
		            <div class="name">Proin gravida nibh vel velit</div>
		            <div class="category">Fotogrāfija</div>
		          </div>
		        </div>    		
	    	</div>

	    </div>
    </div>

   <!-- cenas daļa -->
	<div id="costs">
		<div class="costs content bg-image-green">
		  <div class="wrapper">

		    <h2 class="section-title">Cenrādis</h2>
		    <div class="section-buttons">
		    	<button class="active">Identitāte</button>
		    	<button>WEB dizains</button>
		    	<button>Aplikāciju dizains</button>
		    	<button class="last">Fotogrāfija</button>
		    </div>

		  </div>
		</div>

	    <!-- plan daļa -->
	    <div class="plan content">
	      <div class="wrapper">

	      	<table class="plans-table">
	      		<thead>
	      			<tr class="row1">
	      				<td>Start</td><td>Basic</td><td class="sticky">Pro</td><td>Super</td>
	      			</tr>
	      		</thead>
	      		<tbody>
		      		<tr>
		      			<td>5 users</td><td>10 users</td><td class="sticky">100 users</td><td>Unlimited users</td>
		      		</tr>
		      		<tr>
		      			<td>10 projects</td><td>50 projects</td><td class="sticky">Unlimited projects</td><td>Unlimited projects</td>
		      		</tr>
		      		<tr>
		      			<td>10GB amount of space</td><td>50GB amount of space</td><td class="sticky">1TB amount of space</td><td>Unlimited amount of space</td>
		      		</tr>
		      		<tr>
		      			<td>5 e-mail accounts</td><td>10 e-mail accounts</td><td class="sticky">100 e-mail accounts</td><td>Unlimited e-mail accounts</td>
		      		</tr>
		      	</tbody>
	      		<tfoot>
		      		<tr class="cost">
		      			<td>19 €</td><td>29 €</td><td class="sticky">49 €</td><td>99 €</td>
		      		</tr>
		      		<tr class="last">
		      			<td><button>Sign up</button></td><td><button>Sign up</button></td><td class="sticky"><button>Sign up</button></td><td><button>Sign up</button></td>
		      		</tr>      			
	      		</tfoot>
	      	</table>

	      </div>
	    </div>
	</div>

   <!-- team daļa -->
    <div id="team" class="team content">
      <div class="wrapper">

        <h2 class="section-title">Komanda</h2>
        <div class="team-content">
	        <p class="text">
	        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
	        ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.
	        Nam nec tellus a odio tincidunt auctor a ornare odio. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
	        ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.
	        Nam nec tellus a odio tincidunt auctor a ornare odio.
	        </p>
        </div>

		<div class="slide-buttons">
			<button class="active"></button>
			<button></button>
			<button></button>
		</div>

		<div class="team-list clearfix">
	        <div class="block">
	        	<div class="green-hover">
					<img src="images/01.png" alt="Bilde 8" class="big">
					<div class="text">
						<div class="name">Proin gravida nibh vel velit auctor aliquet</div>
						<p class="about">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit</p>
						<div class="social">
							<a href="" target="_blank"><img src="./images/twitter.png" alt="Twitter"></a>
							<a href="" target="_blank"><img src="./images/facebook.png" alt="Facebook"></a>
							<a href="" target="_blank"><img src="./images/dribbble.png" alt="Dribbble"></a>
						</div>
					</div>
	          	</div>
				<div class="name">Jānis Pirmais</div>
				<div class="profession">Izpilddirektors</div>
	        </div>
	         <div class="block">
	         	<div class="green-hover">
					<img src="images/02.png" alt="Bilde 8" class="big">
					<div class="text">
						<div class="name">Proin gravida nibh vel velit auctor aliquet</div>
						<p class="about">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit</p>
						<div class="social">
							<a href="" target="_blank"><img src="./images/twitter.png" alt="Twitter"></a>
							<a href="" target="_blank"><img src="./images/facebook.png" alt="Facebook"></a>
							<a href="" target="_blank"><img src="./images/dribbble.png" alt="Dribbble"></a>
						</div>
					</div>
				</div>
				<div class="name">Annija Otrā</div>
				<div class="profession">Grafiskā dizainere</div>
	        </div>
	        <div class="block">
				<div class="green-hover">
					<img src="images/03.png" alt="Bilde 8" class="big">
					<div class="text">
						<div class="name">Proin gravida nibh vel velit auctor aliquet</div>
						<p class="about">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit</p>
						<div class="social">
							<a href="" target="_blank"><img src="./images/twitter.png" alt="Twitter"></a>
							<a href="" target="_blank"><img src="./images/facebook.png" alt="Facebook"></a>
							<a href="" target="_blank"><img src="./images/dribbble.png" alt="Dribbble"></a>
						</div>
					</div>
				</div>
				<div class="name">Kristaps Trešais</div>
				<div class="profession">Front-end izstrādātājs</div>
	        </div>
	        <div class="block last">
	        	<div class="green-hover">
					<img src="images/04.png" alt="Bilde 8" class="big">
					<div class="text">
						<div class="name">Proin gravida nibh vel velit auctor aliquet</div>
						<p class="about">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit</p>
						<div class="social">
							<a href="" target="_blank"><img src="./images/twitter.png" alt="Twitter"></a>
							<a href="" target="_blank"><img src="./images/facebook.png" alt="Facebook"></a>
							<a href="" target="_blank"><img src="./images/dribbble.png" alt="Dribbble"></a>
						</div>
					</div>
				</div>
				<div class="name">Ketija Ceturtā</div>
				<div class="profession">UI/UX dizainere</div>
	        </div>
        </div>

      </div>
    </div>

   <!-- contacts daļa -->
    <div id="contacts" class="bg-image-blue content overlay-blue">
      <div class="wrapper">

        <h2 class="section-title">Sazināties</h2>

				<?php if(isset($APP['FORM_ERROR'])) : ?>
					<div class="alert alert-danger">
						<?= $APP['FORM_ERROR']; ?> 
					</div>
				<?php endif ?>

        <form action="#" method="POST">
        	<div class="contact-content">
	        	<div class="form-row">
		        	<input type="text" class="field" name="name" placeholder="Vārds, Uzvārds">
		        </div>
		        <div class="form-row">
		        	<input type="text" name="email" class="field" placeholder="E-pasts">
		        </div>
		        <div class="form-row">
		        	<textarea name="message" class="field textarea" placeholder="Tavs jautājums"></textarea>
		        </div>
		        <div class="form-row">
		        	<input type="submit" class="field submit" value="SŪTĪT ZIŅU"> 
		        </div>   
        	</div>  	
        </form>
        <p class="info">Rīga, Visskaistākā iela 1 // mob: (+371) 26 27 96 07 // hello@moodcreations.eu</p>

      </div>
    </div>

    <!-- map daļa -->
    <div class="map content">
    	<img src="images/karte.png" alt="Karte">
    </div>

    <!-- footer daļa -->
    <div class="footer content">
        <div class="copy">&copy; Copyrights tekstam ir jābūt šeit, 2015</div>
    </div>

  </body>
</html>
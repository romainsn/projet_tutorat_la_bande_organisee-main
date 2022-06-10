<?php
	//  Permet d'utiliser le typage fort. !! Laisser en première ligne !!
	declare(strict_types=1);
	//  Pour avoir la configuration et les informations de connexion dans $infoBdd
	require_once '../config/appConfig.php';
	//  Pour utiliser les fonctions
	require_once '../src/FonctionsUtiles.php';
	$db = connectBdd($infoBdd);
	if (!is_null($db)) {
    	$repo = new Repositories\ProfilRepository($db);
    	$lesProfil = $repo->getAll();
	}
	else {
    	$lesProfil = null;
	}
?>
<!DOCTYPE html>
<HTML>
	<HEAD> 
		<TITLE> Projet | Liste des profils </TITLE>
                <meta charset="UTF-8">
		<link rel="stylesheet" media="screen"type="text/css" href="../assets/css/main.css">
		<!-- Logo de la page -->
    <link rel="shortcut icon" href="../PROJET/assets/img/LOGO O.png" />
	</HEAD>
	<BODY>
		<div id="particles-js">
			<div class="header">
				<?php
	            include_once 'inc/header.php';
    	        include_once 'inc/menu.php';
        		?>
				<section id="corps">
            	<h1>LISTE DES PROFILS</h1>
    	        	<p>Un petit extrait des profils issus notre base de données </p>
        	  		<?php
				    	if (!is_null($lesProfil)):
					?>
	    		    <table id='table3'>
    					<thead>
        	        		<tr><th>iD</th><th>Nom de l'étudiant</th>
    					</thead>
    					<tbody>
				    		<?php
			    				foreach ($lesProfil as $profil):
							?>
							<tr>
					    		<td><?= $profil->getId_Pro(); ?></td>
					    		<td><?= $profil->getLib_Pro(); ?></td>
							</tr>
				    		<?php endforeach;?>
						</tbody>
    			    </table>
			    	<?php else: ?>
    			    <p>Oups... Il semble y avoir eu une erreur!</p>
			    	<?php endif; ?>
	        	</section>
			</div>
		</div>
		<!-- Logo -->
		<div id="blocORT">
      		<div class="ORTlogo">
        		<img src="../assets/img//ort.jpg" alt="" id="transform">
      		</div>
    	</div>
		<!-- Footer -->
		<footer class="footer">
      		<p>&copy; Copyright,  2022 La bande Organisée</p>
    	</footer>
		<?php
    	include_once 'inc/footer.php';
		?>
		<!-- Import JS: Particles Theme -->
		<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    	<!-- Import JS: Sweet Scroll -->
    	<script src="../assets/js/sweet-scroll.min.js"></script>
    	<!-- Import JS: Main Script -->
    	<script src="../assets/js/main.js"></script>
    </body>
</html>



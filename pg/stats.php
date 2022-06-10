
<?php
	/* Database connection settings */
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'projet_tutorat_bo';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

	$Not_Ent_Bil = '';
        $Not_Ora_Bil ='';
        $Not_Dos_Bil ='';
	$Note_Ora_Fin_Bil = '';
        $Note_Dos_Fin_Bil = '';

	//query to get data from the table
	$sql = "SELECT * FROM `bilan` ";
    $result = mysqli_query($mysqli, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$Not_Ent_Bil = $Not_Ent_Bil . '"'. $row['Not_Ent_Bil'].'",';
                $Not_Ora_Bil =  $Not_Ora_Bil . '"'. $row['Not_Ora_Bil'].'",';
                $Not_Dos_Bil = $Not_Dos_Bil . '"'. $row['Not_Dos_Bil'].'",';
		$Note_Ora_Fin_Bil = $Note_Ora_Fin_Bil . '"'. $row['Note_Ora_Fin_Bil'] .'",';
                $Note_Dos_Fin_Bil = $Note_Dos_Fin_Bil . '"'. $row['Note_Dos_Fin_Bil'] .'",';
	}

	$Not_Ent_Bil = trim($Not_Ent_Bil,",");
        $Not_Ora_Bil = trim($Not_Ora_Bil,",");
        $Not_Dos_Bil = trim($Not_Dos_Bil,",");
	$Note_Ora_Fin_Bil = trim($Note_Ora_Fin_Bil,",");
        $Note_Dos_Fin_Bil = trim($Note_Dos_Fin_Bil,",");
?>

<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
		<title>Statistiques</title>

		<style type="text/css">			
			body{
				font-family: Arial;
			    margin: 80px 100px 10px 100px;
			    padding: 0;
			    color: white;
			    text-align: center;
			    background: #555652;
			}

			.container {
				color: #E8E9EB;
				background: #222;
				border: #555652 1px solid;
				padding: 10px;
			}
		</style>

	</head>

	<body>
	//Boutons pour aller sur les pages du site		
    <div id="buttonpara">
        <a href="accueil-admin.php">Accueil</a>
        <a href="date.php">Date</a> -
        <a href="stats.php">Statistiques</a> -
        <a href="tuteur.php">Tuteurs</a> -
        <a href="specialité.php">Specialités</a>
        <a href="classe.php">Classes</a> -
        <a href="compte.php">Compte</a>
    </div>
	    <div class="container">	
	    <h1>STATISTIQUE DES ETUDIANTS</h1>       
			<canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>

			<script>
				var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'line',
		        data: {
		            labels: [1,2,3],
		            datasets: 
		            [{
		                label: 'Note entretien bil',
		                data: [<?php echo $Not_Ent_Bil; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(0,99,132)',
		                borderWidth: 3
		            },
                                    
		            {
		                label: 'Note Oral bil',
		                data: [<?php echo $Not_Ora_Bil; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            },
                            {
		                label: 'Note Dossier bil',
		                data: [<?php echo $Not_Dos_Bil; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(120,50,132)',
		                borderWidth: 3
		            },
                                    
		            {
		            	label: 'Note Oral Fin',
		                data: [<?php echo $Note_Ora_Fin_Bil; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(0,155,255)',
		                borderWidth: 3	
		            },
                            
                            {
		            	label: 'Note Dossier Fin',
		                data: [<?php echo $Note_Dos_Fin_Bil; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(0,255,255)',
		                borderWidth: 3	
		            }]
		        },
		     
		        options: {
		            scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
		        }
		    });
			</script>
	    </div>
	    
	</body>
</html>


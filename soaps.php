<!DOCTYPE HTML>


<!-- Ian Cullinane template file work in progress -->



<html>

<head>
	<!-- y'know, basic stuff -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- CODE FOR BEING RESPONSIVE -->
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

	<!-- link for favi -->
	<link href='../images/favicon.png' rel="shortcut icon" />
	

	<!-- *******************************************  -->
	<!-- *******************title*******************  -->
	<title></title>





	<!-- <link rel="stylesheet" media="all" href="css/reset.css" /> -->
	<link rel="stylesheet" media="all" href="css/responsive.gs.12col.css" />
	
	<link rel="stylesheet" media="all" href="css/style.css" />
	
	<!-- imports for javascript -->
	<script src="scripts/respond.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>

	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
	<script src="scripts/effects.js"></script>
	<script src="scripts/functions.js"></script>
	<script src="scripts/custom.js"></script>
	<!-- <script src="scripts/responsiveslides.min.js"></script> -->


	<!-- ANGULAR IMPORT -->
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.22/angular.min.js"></script>

	<!-- <link rel="stylesheet" media="all" href="css/reset.css" /> -->
	<link rel="stylesheet" media="all" href="css/responsive.gs.12col.css" />
	
	<link rel="stylesheet" media="all" href="css/style.css" />
	
	<!-- somethinge something something -->
	<script src="scripts/respond.min.js"></script>
	
</head>
<!-- *************end header******************************* -->





<!-- HTML BODY BEGINS HERE -->
<!-- ********************* -->
<body>

	<!-- Load the header -->
	<?php include("templates/header.php") ?>

	<!-- sets width of container -->
	<div class="container">
		
		<div class="clr"></div>

		<main role="main" class="wrapper">

			<div class="soaps">
				<?php

				$username = "eignh";
				$password = "#mountain08";


				try {
					$conn = new PDO('mysql:host=localhost;dbname=dirtysoap', $username, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					$data = $conn->query('SELECT * FROM soaps');

					foreach($data as $row) {
						/*print_r($row); */

						echo '<div class="soap">';
						echo '<img src=' . $row["imagepath"] . '>';
						echo '</div>';
					}
				} catch(PDOException $e) {
					echo 'ERROR: ' . $e->getMessage();
				}

				?>
			</div>

			<!-- <script>
			$(".soap").css("width", "10%");
			$(".soap").css("border", "1px solid black");

			</script> -->

		</main>



	</div> <!-- end container -->
	
	<div class="clr"></div>

	<!-- ******************************************************************** -->
	<!-- *******************************begin footer************************* -->
	
	<?php include("templates/footer.php") ?>



</div><!-- end container -->

	<script src="scripts/effects.js"></script>
	<script src="scripts/functions.js"></script>
	<script src="scripts/custom.js"></script>


</body>

</html>
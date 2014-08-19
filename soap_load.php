<!DOCTYPE HTML>


<!-- Ian Cullinane template file work in progress -->



<html>

<head>

	<?php include 'templates/head_template.html'; ?>

	<link rel="stylesheet" media="all" href="css/upload_style.css" />

</head>
<!-- *************end header******************************* -->





<!-- HTML BODY BEGINS HERE -->
<!-- ********************* -->
<body>

	<!-- Load the header -->
	<?php include("templates/header.html") ?>

	<!-- sets width of container -->
	<div class="container">
		<!-- BEGIN HEADER AREA -->
		<!-- ***************** -->
		
		<div class="clr"></div>




		<!-- BEGIN MAIN CONTENT AREA -->
		<!-- *********************** -->

		<main role="main" class="wrapper">

			<div class="soaps">

				<div class="upload_form">
					<form>

						<label>Name</label>
						<label>Description</label>
						<label>Price</label>
						<label>Size</label>


					</form>

					<form  method="POST" action="uploaded.php" enctype="multipart/form-data">
					<fieldset>
						<legend>Billing Affress</legend>

						<label for="soapImg">Soap Name</label></br>
						<input type="file" id="soapImg" name="soapImg" /></br>

						<label for="soapName">Soap Name</label></br>
						<input type="text" id="soapName" name="soapName" /></br>

						<label for="description">Description</label></br>
						<textarea rows="4" id="description" name="description"></textarea></br>
						
						<label for="price">Price</label></br>
						<input type="text" id="price" name="price" /></br>
						
						<label for="size" >Size</label></br>
						<input type="text" id="size" name="size" /></br>

						<input type="submit" name="submit" value="Submit" />
					</fieldset>
					</form>

				</div>
			</div>






		</main>



	</div> <!-- end container -->
	
	<div class="clr"></div>

	<!-- ******************************************************************** -->
	<!-- *******************************begin footer************************* -->
	
	<?php include("templates/footer.php") ?>

	<script src="scripts/effects.js"></script>
	<script src="scripts/functions.js"></script>
	<script src="scripts/custom.js"></script>



</div><!-- end container -->

</body>

</html>
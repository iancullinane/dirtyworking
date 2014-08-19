<!DOCTYPE HTML>


<!-- Ian Cullinane template file work in progress -->



<html>

<head>

<?php include 'templates/head_template.html'; ?>

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
		<!-- site header, row class is used to define full width section -->
		<header role="banner" class="row wrapper">
			<!-- <div class="col span_12 header">
				<h6 class="announce">Yea, this is soap</h6>
			</div> -->


		</header>

		

		<div class="clr"></div>


		<!-- <li><img src="images/header/header1.jpg"></li>
		<li><img src="images/header/header2.jpg"></li>
		<li><img src="images/header/header3.jpg"></li>
		<li><img src="images/header/header4.jpg"></li> -->

		<div id="slider">
			
			<ul class="rslides">
			<li>
				<div class="slide_container">
					<img src="images/header/header1.jpg" alt="">
				</div>
			</li>

			<li>
				<div class="slide_container">
					<img src="images/header/header2.jpg" alt="">
				</div>
			</li>

			<li>
				<div class="slide_container">
					<img src="images/header/header3.jpg" alt="">
				</div>
			</li>
			</ul>
		</div>

		

		<button id="demo" onclick="collReturn()">whatever</button>
		<div id="test"></div>

		<div class="clr"></div>

		
		
		
		<!-- <img height="200" name="slide" src="images/header/header1.jpg" width="400" /> -->

		<div class="clr"></div>




		<!-- BEGIN MAIN CONTENT AREA -->
		<!-- *********************** -->

		<main role="main" class="wrapper" id="down">

			<div class="row">
				<div class="shout span_12">
					<a href="https://www.indiegogo.com/projects/dirty-soap--2" target="_blank" class="link">Let's. Get. Dirty. IndieGoGo now live. Click here. Get Dirty.</a>
				</div>
			</div>


			<div class="row gutters">
				<div class="intro">
					<div class="intro_img col span_3"><img class="post_img" src="./images/bathtubround.png" height="400px"></div>
					
					<div class="intro_right col span_9">
						<div class="intro_header">All Natural, handmade soaps. Made with organic oils, fragrances &amp; ingredients. </div>

						<div class="intro_content">Dirt Soap are your favorite shapes, colors, fragrances, and just right for your unique skin care needs. They are happy and fun and always bring smiles. Dirty Soap is made from organic vegetable oils, essential oils and fragrances, and fun additives (all natural stuff from the DIRT!). Bakery inspired &amp; hand crafted. If you want to get clean get dirty...
							
						</div>
						
					</div>

				</div>


			</div>

			<div class="row gutters">
				<!-- ***************************************************************** -->	
				<article class="col span_8">

					<div class="post">
						<div class="col span_4"><img class="post_img" src="./images/Indiegogo_logo.png" ></div>

						<div class="post_right col span_8">
							<h3 class="post_title"><a class="link" href="https://www.indiegogo.com/projects/dirty-soap--2" target="_blank">indiegogo now live!</a></h3>
							<p class="post_content">Dirty Soap Indie GoGo is official. <a class="indielink" href="https://www.indiegogo.com/projects/dirty-soap--2">head on over and donate, check it out, hear the story!</a> Check back often to see how far we have come. This is only the beginning! More soaps! More gifts! A blog! What else can happen!?!? </p>
						</div>
					</div>

					<div class="showcase">soap!!!</div>

					<div class="post">
						<div class="col span_4"><img class="post_img" src="./images/soaps/ice_cream_sammy2.jpg" ></div>

						<div class="post_right col span_8">
							<h3 class="post_title">Ice Cream Sammy</h3>
							<p class="post_content">These adorable soaps are on the larger side and mix and match scents for a fun addition to your bathroom. Kids and anyone with a sweet tooth will adore these!</p>
						</div>
					</div>

					<div class="post">
						<div class="col span_4"><img class="post_img" src="./images/soaps/neapolitan2.jpg" ></div>

						<div class="post_right col span_8">
							<h3 class="post_title">Neapolitan</h3>
							<p class="post_content">A truly unique birthday gift! Vanilla and chocolate cake scented with a sugary "whip" on top. Enjoy! Custom orders available.</p>
						</div>
					</div>


				</article>




				<!-- ***************************************************************** -->	
				<div class="col span_4">

					<div class="right_content">
						<div class="col span_12 shop">
							<a class="link" href="https://www.etsy.com/shop/letsgetdirty" target="_blank">SHOP NOW</a>
						</div>

					</div>

					<div class="right_content">
						<div class="col span_12 like">

							<div class="row">
								<div class="col span_4"><a href="https://www.facebook.com/dirtysoapla" target="_blank"><img class="like_img" src="./images/links/facebook.png"></a></div>
								<div class="col span_8"><a href="https://www.facebook.com/dirtysoapla" target="_blank"><img class="like_img" src="./images/links/findus.png"></a></div>
							</div>
						</div>

					</div>

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
	



</div><!-- end container -->

</body>

</html>
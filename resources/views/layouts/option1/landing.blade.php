<!DOCTYPE html>
<html dir="ltr" lang="en-US">


@include('layouts.option1.head')


<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="no-sticky transparent-header full-header page-section ">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= --
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/TPC.png"><img src="images/TPC.png" alt="TPC Industrial"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/TPC.png"><img src="images/TPC.png" alt="TPC Industrial"></a>
					</div><!-- #logo end -->


					@include('layouts.option1.navbar')


				</div>

			</div>

		</header><!-- #header end -->


		@include('layouts.option1.splash')

		@include('layouts.option1.slogan')



		<!-- Page Sub Menu
		============================================= -->
		<div id="page-menu" class="dots-menu">

			<div id="page-menu-wrap">

				<div class="container clearfix">

					<div class="menu-title">Explore <span>CANVAS</span></div>

					<nav class="one-page-menu no-offset">
						<ul>
							<li><a href="#" data-href="#header"><div>Home</div></a></li>
							<li><a href="#" data-href="#section-about"><div>About</div></a></li>
							<li><a href="#" data-href="#section-anywhere"><div>Any Part, Anywhere</div></a></li>
							<li><a href="#" data-href="#section-parts"><div>Parts</div></a></li>
							<li><a href="#" data-href="#section-clients"><div>Customers</div></a></li>
							<li><a href="#" data-href="#section-testimonial"><div>Testimonial</div></a></li>
							<li><a href="#" data-href="#section-contact"><div>Contact</div></a></li>
						</ul>
					</nav>

				</div>

			</div>

		</div><!-- #page-menu end -->

		<!-- Content
		============================================= -->






		<section id="content">

			<div class="content-wrap nopadding">


				@include('layouts.option1.iconlist')

				@include('layouts.option1.slider')

				@include('layouts.option1.parts')

				@include('layouts.option1.clientList')

				@include('layouts.option1.testimony')


			</div>

		</section><!-- #content end -->

		@include('layouts.option1.footer')

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
	<script src="js/jquery.gmap.js"></script>


</body>
</html>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">


@include('layouts.option3.head')


<body class="stretched side-header">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="no-sticky">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					@include('layouts.option3.navbarBlack')

				</div>

			</div>

		</header><!-- #header end -->

		<div class="clear"></div>


		<!-- Content
		============================================= -->




		<div class="content-wrap nopadding">

			@include('layouts.option1.staffList')

		</div>


		@include('layouts.option1.footer')

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="/js/jquery.js"></script>
	<script src="/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="/js/functions.js"></script>

	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
	<script src="/js/jquery.gmap.js"></script>


</body>
</html>
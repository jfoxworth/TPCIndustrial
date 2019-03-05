<!DOCTYPE html>
<html dir="ltr" lang="en-US">


@include('layouts.option5.head')


<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					@include('layouts.option5.navbar')

				</div>

			</div>

		</header><!-- #header end -->

		<div class="clear"></div>



		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nopadding">

				@include('layouts.option5.productContent')

			</div>

		</section>


		@include('layouts.option5.footer')

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



</body>
</html>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">


@include('layouts.option5.head')


<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">


		@include('layouts.option5.slider')



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

			<div class="content-wrap">


				@include('layouts.option5.about')

				@include('layouts.option5.splitSlogan')

				@include('layouts.option5.iconlist')

				@include('layouts.option5.sideFlags')

				@include('layouts.option5.parts')

				@include('layouts.option5.clientlist')


			</div>

		</section><!-- #content end -->

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

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="/js/jquery.themepunch.tools.min.js"></script>
	<script src="/js/jquery.themepunch.revolution.min.js"></script>

	<script src="/js/extensions/revolution.extension.video.min.js"></script>
	<script src="/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="/js/extensions/revolution.extension.parallax.min.js"></script>

	<script>

		var tpj=jQuery;
		tpj.noConflict();

		tpj(document).ready(function() {

			var apiRevoSlider = tpj('#rev_slider_irestaurant').show().revolution(
			{
				sliderType:"standard",
				jsFileLocation:"/js/",
				dottedOverlay:"none",
				sliderLayout:"fullscreen",
				delay:16000,
				gridwidth:1140,
				gridheight:720,
				hideThumbs:200,

				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:5,

				navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    thumbnails: {
                        style: "hesperiden",
                        enable: true,
                        width: 100,
                        height: 50,
                        min_width: 100,
                        wrapper_padding: 5,
                        wrapper_color: "#ffffff",
                        wrapper_opacity: "0.5",
                        tmp: '<span class="tp-thumb-image"></span><span class="tp-thumb-title">\{\{title\}\}</span>',
                        visibleAmount: 5,
                        hide_onmobile: false,
                        hide_onleave: false,
                        direction: "horizontal",
                        span: false,
                        position: "inner",
                        space: 5,
                        h_align: "right",
                        v_align: "bottom",
                        h_offset: 20,
                        v_offset: 50
                    }
                },

				touchenabled:"on",
				onHoverStop:"on",

				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,
				parallaxBgFreeze:"on",
				parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

				keyboardNavigation:"off",

				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:20,

				soloArrowLeftHalign:"left",
				soloArrowLeftValign:"center",
				soloArrowLeftHOffset:20,
				soloArrowLeftVOffset:0,

				soloArrowRightHalign:"right",
				soloArrowRightValign:"center",
				soloArrowRightHOffset:20,
				soloArrowRightVOffset:0,

				shadow:0,
				fullWidth:"off",
				fullScreen:"on",

				spinner:"spinner4",

				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",

				autoHeight:"off",
				forceFullWidth:"off",



				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,

				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
			});

		});

	</script><!-- END REVOLUTION SLIDER -->


	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
	<script src="/js/jquery.gmap.js"></script>

	<script>

		jQuery('#google-map').gMap({

			address: 'Melbourne, Australia',
			maptype: 'ROADMAP',
			zoom: 14,
			markers: [
				{
					address: "Melbourne, Australia",
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [32,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}

		});
	</script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>HiHi</title>
</head>
<style type="text/css">
	html, body{ background-color:#1a948d; }	

body
{ 
	background-repeat: no-repeat;
	background-position: top center;
	width:100%;
	background-size:cover;
	height:100%;
	min-height:1000px;
	overflow:hidden;
	font-family: 'quicksandlight', Helvetica, Arial;
	color:#FFFFFF;
	text-shadow: -1px -1px 4px rgba(0, 0, 0, .35);
    filter: dropshadow(color=#000000, offx=1, offy=1);
}

header
{
	
	margin-top:30px;
	position:absolute;
	z-index:5;
	width:420px;
	padding-top:10px;
	padding-bottom:10px;

}

a
{
	color:rgba( 255, 255, 255, .65 );
	text-decoration: none;
}

a:hover
{
	color:rgba( 255, 255, 255, 1 );
}

/* hardware accelatator class */	
	.trans3d
	{
		-webkit-transform-style: preserve-3d;
		-webkit-transform: translate3d(0, 0, 0);
		-moz-transform-style: preserve-3d;
		-moz-transform: translate3d(0, 0, 0);
		-ms-transform-style:preserve-3d;
		-ms-transform: translate3d(0, 0, 0);
		transform-style:preserve-3d;
		transform: translate3d(0, 0, 0);

		/*-webkit-backface-visibility: hidden;
		-moz-backface-visibility: hidden;
		-ms-backface-visibility:hidden;
		backface-visibility:hidden;*/
	}
	
	#contentContainer
	{
		position:absolute;
		margin-left:-500px;
		margin-top:-500px;
		left:50%;
		top:50%;
		width:1000px;
		height:1000px;
	}
	
	#carouselContainer
	{
		position:absolute;
		margin-left:-500px;
		margin-top:-500px;
		left:50%;
		top:50%;
		width:1000px;
		height:1000px;
	}
	
	.carouselItem
	{
		width:320px;
		height:340px;
		position:absolute;
		left:50%;
		top:40%;
		margin-left:-160px;
		margin-top:-90px;
		visibility:hidden;
	}
	
	.carouselItemInner
	{
		width:320px;
		height:130px;
		position:absolute;
		background-color:rgba(255, 255, 255, .75);
		border:10px solid rgba(255, 255, 255, .5);
		color:aqua;
		font-size:72px;
		left:50%;
		top:50%;
		margin-left:-160px;
		margin-top:-90px;
		text-align:center;
		padding-top:50px;
		
	}
	img{

	width: 300px;
	height: 340px;
	position: absolute;
	top: 0;
	left: 0;

	}
</style>
<body>
	<div id="contentContainer" class="trans3d"> 
	<section id="carouselContainer" class="trans3d">
		<figure id="item1" class="carouselItem trans3d"><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/56331102_1198326843653364_714626203788509184_n.jpg?_nc_cat=111&_nc_eui2=AeGZvH58PwQu1kiaPcxLU7f6iN49-mqYTiZkqRtsweQeM6p1iL2fPxEwScoz7QfT6QBVrgyNETWujgxwkBika0RoPcnc0I9LuExGVSuv6T7Ffg&_nc_oc=AQn3zfvdnNUkEIdbUiwnP7g__VTZVlg5-QfgquiaWn9aSp-IOD-2EsCJU_uIG9y6Qb5KdVXZR96qoDT_civRMcXW&_nc_ht=scontent.fdad2-1.fna&oh=a389a272160b5f91430b1ac7d532d391&oe=5DA69144"></figure>
		<figure id="item2" class="carouselItem trans3d"><img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.0-9/62520613_1249601795192535_4792213655770890240_n.jpg?_nc_cat=105&_nc_eui2=AeH6Tcg1DuhlzGlBT71mHR9wePREceHXTkT-ZLNGhr2zhpMKHwNeoRwBT-CE1uvcudogIj7uIfuYX5EG4b1d8txyhdjL9cqRJ5kUumHXVQRDwQ&_nc_oc=AQnRRwnPVbmfg0rE4357JXk1pSy_nDexP80qPJgVICArR_gbrv2jO3AzaJWry9MNoyI3C2orFrN_K1Ze-H6U_XQl&_nc_ht=scontent.fdad1-1.fna&oh=c563d528f3f84542ccc791b3152fa765&oe=5DB9585C"></figure>
		<figure id="item3" class="carouselItem trans3d"><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/64483895_1249601811859200_239193815410278400_n.jpg?_nc_cat=107&_nc_eui2=AeHh2Dq6muJs9kIVP9hnNraWdXazjYcbszGQhvYuFqngHh1WLXNudmEAta-X5s5s1PVf0Z0LoPRjVxNLaZINdZBvNIbZ7EPQC0JdYPClhUNXAQ&_nc_oc=AQnEJ4WFOBfFewTMqvwKiU7hV-htx70f7tWtl4eNSpQ9ofbYxcJtLik-jYJlDCda1poZoHf17GOCpIc_IM3xJkB5&_nc_ht=scontent.fdad2-1.fna&oh=b80136d48c90afad6f20a2b74c53bb2a&oe=5DAD2725"></figure>
		<figure id="item4" class="carouselItem trans3d"><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/55935578_1198326833653365_1965704332632391680_n.jpg?_nc_cat=110&_nc_eui2=AeF3ettn_TiMzijETAHWA0i-inIiPIjWv3Twq-AZ3vkvu7R3OfYpUnACl3a6tWSBlV9q7cmsrVw2-LywYEge2jNmmhrA9hHbmFfgUbODNCEAyA&_nc_oc=AQmYeVGDc66B5WeZMO8R9u2qviVGgYnebSffBfohp4rUe7GByfEu6dseZehjstTh12o9DgkdQ8jEJB8E9awkzupK&_nc_ht=scontent.fdad2-1.fna&oh=a5d385f173ae801e7caa03bc909e00d9&oe=5DC4D5B9"></figure>
		<figure id="item5" class="carouselItem trans3d"><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/62321050_1248089985343716_449282656090193920_n.jpg?_nc_cat=108&_nc_eui2=AeEztoNL4L5OHeQ__tPBMo0vzbtqvlmIspL21odLho-huj8rrpxtJ17iNGAnthvFyaRozq6d8izrCFMLiMFsI-N9H9p4yFIRQMxBjb14y495DQ&_nc_oc=AQmLFcNpcuw81YWc1JL8yGyP7bN-tN2Btwd1zGFSSJ40DulVNSIpd5VtHQnEwEgxL3bXLJ0C96h9JsQJfsCBJvyR&_nc_ht=scontent.fdad2-1.fna&oh=38a41e1e63d1d099480d42f45cb8df69&oe=5DB903C1"></figure>
		<figure id="item6" class="carouselItem trans3d"><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/59938217_1225467567605958_5335979214346649600_n.jpg?_nc_cat=110&_nc_eui2=AeE4GXXBY1X09ifJHvBDdIOdIu187ConnZ45ySENHrmBSt_Etc1zvURkNTqYsu9-qn2dQdfxje2Lar9dEXtEjj1dq4qD6qw7_I__2Nseiqhnpw&_nc_oc=AQlZdYBlg2-2YQid__nTuz9ByG_XW47OigIZtqICe7hr7VUDS3YoQ2D6P4g0ssRwlkrPRP6B623vYFWxDObI1C7_&_nc_ht=scontent.fdad2-1.fna&oh=6413f610dffdf0446cf5f3ea2688c754&oe=5DAF1FA0"></figure>
		<figure id="item7" class="carouselItem trans3d"><img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.0-9/62258321_1248089382010443_7747756071497760768_n.jpg?_nc_cat=105&_nc_eui2=AeHuSj9M5U1ouq3nvDwhGnVwIgT1OAdPxdCvNTm8uivAXn9SDLHoAxq61Sn805DTZM8z592TYmsecOldojVvGTtwkTBLkXZZHGNBMlDFovVbcA&_nc_oc=AQmZmlRgpNEIXeABLrAgo_k4BS8wfZxSW53Jd7B3l9wY4Ut7lHmRKJhovpj618782RMjtWBDehO7_iFW0hbzIOyE&_nc_ht=scontent.fdad1-1.fna&oh=0ab1af7af6ba64949f7d0859b3dd34e7&oe=5D7D779C"></figure>
		<figure id="item8" class="carouselItem trans3d"><img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.0-9/62102060_1248089148677133_7372059025665425408_n.jpg?_nc_cat=102&_nc_eui2=AeGWdZx1nC6lGx0tVtI62gXnIuD9VUUrWoldLluhtJ_ab0564-0Cd1HK95mfi3QP98ZZVjJjyoA9sfUQ45xsKc0jMdrqPkQZvTAR1O5glRiNcA&_nc_oc=AQmmaJKCWt1s9dYaJKpByE1zvf8xALsjrHXgA-H2meqPJOitL_sbCuZEnJBOSfzeBFaHqv7dROzGa9x_YOYXZpxj&_nc_ht=scontent.fdad1-1.fna&oh=f21ee74d0b626c0e27a83a67596b7a42&oe=5DB4C2E7"></figure>
		<figure id="item9" class="carouselItem trans3d"><img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.0-9/62517525_1248090132010368_2458827467964547072_n.jpg?_nc_cat=100&_nc_eui2=AeE86XMOSM0cKlviZ5mTvKBWdVXyNgXmY2N2AFSkzGJAF42Q6LpJADwS19NeqGk1edoIEt3CjxQ_CboyToEEp0e6zTu2rkscIY6xQjX1atDPbQ&_nc_oc=AQm98-qfpzomRSY2k-gO7lp6oJSRYJxVK-B7o81Kb0hGEn2KRRy4ocIUNAApWjUIfFfaY_TdOPwCspIJi_iTIbbv&_nc_ht=scontent.fdad1-1.fna&oh=cee5c88298bf3cf6e009fca7bb2f3310&oe=5DBB2673"></figure>
		<figure id="item10" class="carouselItem trans3d"><img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.0-9/62511503_1248089842010397_7471570896767942656_n.jpg?_nc_cat=103&_nc_eui2=AeFhpADVeabP7z5PrGJkjYpr6po4O1GB1d07rmHlbiKe4lLFTYby9Anuxz0GCXhSrrNn6uSJ3s6us4ZgF6BWpNnbW2zuQ0ic6pW32GA9hgcXiQ&_nc_oc=AQl4NBeipfzefJq5_JeKYkQqpAU2IxEAW6DYamXIyYGxMxwUxe9bbUBDXUvGVX8CC8gymn5d2QrlfKkmi6IBQE75&_nc_ht=scontent.fdad1-1.fna&oh=0a79567865fc043a526a883cc854af7f&oe=5DA9BDAA"></figure>
		<figure id="item11" class="carouselItem trans3d"><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/55548558_1195894800563235_7943619069960257536_n.jpg?_nc_cat=108&_nc_oc=AQmzS6DTx9SPpM4473LtN8oDoRrCMOiS3SMVhyK3MZ9fQUJZBbt-PyIsElzMfi_BmoOGrSjBOxdIZkIRGtir_aL0&_nc_ht=scontent.fdad2-1.fna&oh=00d593092750e39818830dda16aca96e&oe=5DA5C9F4"></figure>
		<figure id="item12" class="carouselItem trans3d"><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/56189927_1198326813653367_1900132126326521856_n.jpg?_nc_cat=111&_nc_oc=AQn3almmKLj2Gyr7A4NDPURd4DrInYgG7CRhJ6klGBKyklgll-tGsMDBlenY2hIVagW1HWbl5ZQUPqzUiEz6S04o&_nc_ht=scontent.fdad2-1.fna&oh=9c35b4ccf1a34f09b6d8e0b765100b67&oe=5DB40F22"></figure>	
	</section>
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
	// set and cache variables
		var w, container, carousel, item, radius, itemLength, rY, ticker, fps; 
		var mouseX = 0;
		var mouseY = 0;
		var mouseZ = 0;
		var addX = 0;
		
		
		// fps counter created by: https://gist.github.com/sharkbrainguy/1156092,
		// no need to create my own :)
		var fps_counter = {
			
			tick: function () 
			{
				// this has to clone the array every tick so that
				// separate instances won't share state 
				this.times = this.times.concat(+new Date());
				var seconds, times = this.times;
        
				if (times.length > this.span + 1) 
				{
					times.shift(); // ditch the oldest time
					seconds = (times[times.length - 1] - times[0]) / 1000;
					return Math.round(this.span / seconds);
				} 
				else return null;
			},
 
			times: [],
			span: 20
		};
		var counter = Object.create(fps_counter);
		
		
		
		$(document).ready( init )
		
		function init()
		{
			w = $(window);
			container = $( '#contentContainer' );
			carousel = $( '#carouselContainer' );
			item = $( '.carouselItem' );
			itemLength = $( '.carouselItem' ).length;
			fps = $('#fps');
			rY = 360 / itemLength;
			radius = Math.round( (250) / Math.tan( Math.PI / itemLength ) );
			
			// set container 3d props
			TweenMax.set(container, {perspective:600})
			TweenMax.set(carousel, {z:-(radius)})
			
			// create carousel item props
			
			for ( var i = 0; i < itemLength; i++ )
			{
				var $item = item.eq(i);
				var $block = $item.find('.carouselItemInner');
				
        //thanks @chrisgannon!        
        TweenMax.set($item, {rotationY:rY * i, z:radius, transformOrigin:"50% 50% " + -radius + "px"});
				
				animateIn( $item, $block )						
			}
			
			// set mouse x and y props and looper ticker
			window.addEventListener( "mousemove", onMouseMove, false );
			ticker = setInterval( looper, 1000/60 );			
		}
		
		function animateIn( $item, $block )
		{
			var $nrX = 360 * getRandomInt(2);
			var $nrY = 360 * getRandomInt(2);
				
			var $nx = -(2000) + getRandomInt( 4000 )
			var $ny = -(2000) + getRandomInt( 4000 )
			var $nz = -4000 +  getRandomInt( 4000 )
				
			var $s = 1.5 + (getRandomInt( 10 ) * .1)
			var $d = 1 - (getRandomInt( 8 ) * .1)
			
			TweenMax.set( $item, { autoAlpha:1, delay:$d } )	
			TweenMax.set( $block, { z:$nz, rotationY:$nrY, rotationX:$nrX, x:$nx, y:$ny, autoAlpha:0} )
			TweenMax.to( $block, $s, { delay:$d, rotationY:0, rotationX:0, z:0,  ease:Expo.easeInOut} )
			TweenMax.to( $block, $s-.5, { delay:$d, x:0, y:0, autoAlpha:1, ease:Expo.easeInOut} )
		}
		
		function onMouseMove(event)
		{
			mouseX = -(-(window.innerWidth * .5) + event.pageX) * .0009;
			mouseY = -(-(window.innerHeight * .5) + event.pageY ) * .01;
			mouseZ = -(radius) - (Math.abs(-(window.innerHeight * .5) + event.pageY ) - 200);
		}
		
		// loops and sets the carousel 3d properties
		function looper()
		{
			addX += mouseX
			TweenMax.to( carousel, 1, { rotationY:addX, rotationX:mouseY, ease:Quint.easeOut } )
			TweenMax.set( carousel, {z:mouseZ } )
			fps.text( 'Framerate: ' + counter.tick() + '/60 FPS' )	
		}
		
		function getRandomInt( $n )
		{
			return Math.floor((Math.random()*$n)+1);	
		}
</script>
</html>

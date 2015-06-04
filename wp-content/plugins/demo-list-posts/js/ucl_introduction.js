$(document).ready(function() {
	$( window ).load(function() {
		
		var footer=$( "#footerContainer");
		
		//In order to not make it fulls creen on the other pages
		$( "#mainContainer" ).removeClass( "container" );
		$( "#mainContainer" ).addClass( "container-fluid full-width" );
		
		$( "footer").hide();
		
		var home=false;
			/*
			* Plugin intialization
			*/
			if ($( "#pagepiling" ).length){
				console.log("home")
				home=true;
			}
			else{
				console.log("boh")
			}
				
			if(home==true){
			$('#pagepiling').pagepiling({
				verticalCentered:false,
				css3:false,
				sectionsColor: ['#000000', '#000000', '#000000', '#F7F7F7'],
				onLeave: function(index, nextIndex, direction){

					//fading out the txt of the leaving section
					$('.section').eq(index -1).find('h1, p').fadeOut(700, 'easeInQuart');

					//fading in the text of the destination (in case it was fadedOut)
					$('.section').eq(nextIndex -1).find('h1, p').fadeIn(700, 'easeInQuart');


					//reaching our last section? The one with our normal site?
					if(nextIndex == 4){
						$('#arrow').hide();

						//fading out navigation bullets
						$('#pp-nav').fadeOut();

						$('#section4').find('.content').animate({
							top: '0%'
						}, 700, 'easeInQuart');
						
						$( "#wrapper #footerContainer").remove();						
						$('#section4 .page').append(footer);
						$("#section4 .page #footerContainer").show();
					}

					//leaving our last section? The one with our normal site?
					if(index == 4){
						$('#arrow').show();

						//fadding in navigation bullets
						$('#pp-nav').fadeIn();

						$('#section4 .content').animate({
							top: '100%'
						}, 700, 'easeInQuart');
						
						
						$("#pageContainer #footerContainer").remove();						
						$('#wrapper').append(footer);
						
						$("#wrapper #footerContainer").hide();
					}
				},
			});

			$('#arrow').click(function(){
				$.fn.pagepiling.moveSectionDown();
			});
			
			$(".boxes .content").each(function(index) {
				$(this).on( "mouseover", function() {
				   $(this).css({"background-color": "black","color":"white"})
				});
				
				$(this).on( "mouseout", function() {
				   $(this).css({"background-color": "white","color":"black"})
				});
				
			});
			
			
		};
		
		});
		
	});
var mobile = false;

function setNavigationBar(){
	//Roolover dropdown
	
	if(!mobile){
		$('.dropdown > a').dropdown();
	
	    $('.dropdown .sub-menu').addClass('dropdown-menu');
	    
	    $("#menu-primary").children().each(function( index ) {
		   $(this).css({"background-color":"transparent","color": "black"});
		});
	    
	    $('.menu-item').on( "mouseover", function() {
		  TweenLite.to( $('#navigationBar #blackReactangle'), 0.5, { left:$(this).position().left+15, width: $(this).width()-30});
		  //console.log("ciao "+ $(this).parent().find("li").size() );
	    });
	    
	}
	
	

}
$(document).ready(function() {
	
    
     setNavigationBar();
     
     if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		   console.log("smartPhone");
		   mobile=true;
		}
		else{
		   console.log("PC");
		   mobile=true;
		}
     
});
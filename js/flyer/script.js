 $(document).ready(function() {
      $('ul#myRoundabout').roundabout({
          
           minScale: 0.8 // tiny!
      });
      $('.slide_area').css("display", "block");
   });
   
   
   
//Modal dialog increase the default animation speed to exaggerate the effect
	$.fx.speeds._default = 500;
$(document).ready(function(){
		$( "#dialog" ).dialog({
			autoOpen: false,
			show: "fade",
			hide: "fade"
		});

		$( "#opener" ).click(function() {
			$( "#dialog" ).dialog( "open" );
			return false;
		});
	});
        
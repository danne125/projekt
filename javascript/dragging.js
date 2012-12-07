$(document).ready(function(){
	

				
		$(".drag").draggable({
			helper: "clone",
			revert: function (event, ui) {
          
            
              revert: true
           
            //return boolean
            return !event;
       		 }
			
			
			
			 });
		

		$(".pitch").droppable(
			{
				
				
				accept:".drag", 
				drop: function(event, ui) {
					var item = $(ui.draggable).clone(); 
					var toppos = ui.position.top; 
					var leftpos = ui.position.left;
					$(this).append(item);
					$(this).children().addClass("inpitch");
					$(this).children().removeClass("drag");
					
						
				
					$(item).css({
	    					position: "absolute",
	    					top: toppos,
	    					left: leftpos,
	    					color: "#CCC"
					});
					
									
					
					
						$(".inpitch").draggable();
					
					
					
					

					
								
					var x = $(this).children().length;
					console.log(x);
					if(x>3) {
						$(".drag").draggable('disable');
						
						//$(".inpitch", item).remove();
						//$(".drag", item).remove();
					}
				}	
				
				
				
				
			}
			
		 
	
	);
	
	
	
	
	/*
			$(".spelarlista").droppable(
					{
						accept:".inpitch", 
						drop: function(ev, ui) {
							var item1 = $(ui.draggable); 
							$(this).append(item1);
						}
					
					});
	*/
	
	
	

	
/*

	$(".inpitch").droppable(
		{
			accept:".drag", 
			drop: function(ev, ui) {
		$(this).remove();		
	}
	
	}
	);

*/

	
/* slidetoggla inloggning */ 	
	
$("#form1").css("display", "none");
	$("nav ul li:nth-child(2)").click(function() {
		$("#form1").slideToggle();
	});


/* ta bort värdet i inloggningsformulär */ 	
	
	//var inputvalue = $(".varde").val(); 
	var anvnamn = $("#namn").val();
	var losen = $("#losen").val();
	
	$("#namn").focus(function() {
		if ($(this).val() == anvnamn) {
			$(this).val("");								 
		}
	});
	
	$("#namn").blur(function() {
		if ($(this).val() == "") {
			$(this).val(anvnamn);
		}
	});
	
	
	$("#losen").focus(function() {
		if ($(this).val() == losen) {
			$(this).val("");								 
		}
	});
	
	$("#losen").blur(function() {
		if ($(this).val() == "") {
			$(this).val(losen);
		}
	});
	
	



});
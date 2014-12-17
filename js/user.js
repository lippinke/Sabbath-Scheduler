
var getAllLocation = function(){
	// some php script, such as event_api.php or possibly a new php script, should
	// retrieve the functionToCall variable to determine which php function to call.
	// the functionToCall variable just contains a string of desired function to call
	var functionToCall = "getAllLocations"; 
	$.get("/scripts/viewevent.php", functionToCall, function(data){
		$.each(data, function(){
			var newLocation = '<a href="" class="btnlink"><div class="button userbtn">' + data[0].name + '</div></a>';
			$(newLocation).click(function(){
				// something to get to location's next sabbath page
			});
			$("#locations").append(toAppend);
		});
	})		
}
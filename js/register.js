$(document).ready(function(){

	$("#registration").submit(function(event){
		event.preventDefault();

	$('#save').before('<div id="success"><img src="images/receipt.jpg" alt="receipt" height="300" width="400">;</div>');

	// $('#success').delay(3000).fadeOut();

	$('#success').delay(3000).queue(function(){

  		$("#success").remove();
  	});

	// $("#success").delay(3000).queue(function(){

 //  		  $('#success').remove();
 //  	});

	

  	$("#history").delay(3000).queue(function(){

  		$("#history").append('<img src="images/receipt.jpg" alt="receipt" height="200" width="150">' );
  	});

  		

	});
    
});


6
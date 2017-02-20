$(document).ready(function(){

	$("code").each(function() {
	    var html = $(this).html().split(" ");
	    var newhtml = [];
	    
	    for(var i=0; i< html.length; i++) {
	        
	        if(i>0 && (i%16) == 0)
	            newhtml.push("<br />");
	        
	        newhtml.push(html[i]);
	    }
	    
	    $(this).html(newhtml.join(" "));
	});

	// $("#print-btn").click(function(){
		// function printPDF("print.pdf"){
	 //    var w = window.open("about:blank");
	 //    w.document.write(htmlPage);
	 //    if (navigator.appName == 'Microsoft Internet Explorer') window.print();
	 //    else w.print();
	// }
		// window.print();

		// $(".script-text").printElement();


	// });



	
		


});




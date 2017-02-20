$(document).ready(function(){



// function get_text(el) {
//     ret = "";
//     var length = el.childNodes.length;
//     for(var i = 0; i < length; i++) {
//         var node = el.childNodes[i];
//         if(node.nodeType != 8) {
//             ret += node.nodeType != 1 ? node.nodeValue : get_text(node);
//         }
//     }
//     return ret;
// }
// var words = get_text($("#code1").text());
// var count = words.split(' ').length;

// $("#count1").text(count);




// I changed the name of function, in order to be more meaningfull.
// function countWords(){
  
//     // Select all the p elements in the page.
//     var paragraphs = $("#code1").text();
  
//     // The counter.
//     var count = 0;
  
//     for(var i = 0; i < paragraphs.length; i++)
//     {
//         // Split the innerHtml of the current paragraph to count the words.
//         count += paragraphs[i].innerHTML.split(" ").length;
//     }
   
//     $("#count1").text("Number of words: "+count);
// }

// countWords();

	$("#email1").click(function(){

		$("#email1").attr("placeholder","");
	});

	$("#email2").click(function(){

		$("#email2").attr("placeholder","");
	});

	$("input#email3").click(function(){

		$("input#email3").attr("placeholder","");
	});


	// $("#welcome").fadeOut(3000);

});



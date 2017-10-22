$(document).ready(function() {
	// Fetch the elements
	var $content = $('#content'),
		//$menu = $('#menu'),
		$content = $('#content'),
		$menu = $('.menu_container');
		$frame = $('#frame');
		$current = $('#current');
	
	$content.empty();
	
	// If Home
	var loc = $(location).attr('href');
	if (loc.indexOf("#") == -1) {
		doMenu('/album3');
		//$.History.go('/album2');
		$content.load('album3.php', function() {});
	}
	
	// Fetch our original document title
	var document_title = document.title;
	
	// Define our update menu function
	var updateMenu = function(state){
		doMenu(state);
	};
	
	// Bind a handler for ALL hash/state changes
	$.History.bind(function(state){
		// If Home
		var loc = $(location).attr('href');
		if (loc.indexOf("#") == -1) {
			doMenu('/album3');
			$content.load('album3.php', function() {});
		}
		//$current.text('Our current state is: ['+state+']');
		//document.title = document_title + ' ' + state;

		$('#audio').empty();
		$content.empty();
		updateMenu(state);
		$content.load('.'+state+'.php', function() {
		 // callback
		});
	});
	
});

function doMenu(url)
{
		var i=0; //reset
        while (i<=8)
        {
		  $('#menu'+i+' a').removeClass("active");
		  $('#submenu'+i+' a').removeClass("active"); // collapse submenus
		  $('#submenu'+i).css('display','none'); // collapse submenus
          i++;
        }
		switch (url) {
			case "": $("#menu1 a").addClass("active"); break;
			
			case "/album3": $("#menu1 a").addClass("active"); break;
			case "/album2": $("#menu2 a").addClass("active"); break;
			case "/album1": $("#menu3 a").addClass("active"); break;
	        case "/bio": $("#menu4 a").addClass("active"); break;
			case "/news": $("#menu5 a").addClass("active"); break;
			case "/buy": $("#menu6 a").addClass("active"); break;
		}
}
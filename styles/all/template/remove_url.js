;(function($, document)
{
	'use strict';
	
	$(document).ready(function ()
	{
		$('a').on('click.myDisable', function(e)
		{
			e.preventDefault();
			alert(cookieLinks);
 			return true;
		});

		// Disable back button
		history.pushState(null, null, location.href);
		window.onpopstate = function ()
		{
			history.go(1);
		};
	});

})(jQuery, document);

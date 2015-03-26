$('body').on('#s', function() {
	var keyword = $(this).val();

	jQuery.post(
	    ajaxurl,
	    {
	        'action': 'search',
	        'keyword': keyword
	    },
	    function(response){
	    	$('#recherche').html(response);
	    }
	);
});
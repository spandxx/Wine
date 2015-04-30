
// ALERT BOUTONS PAYS
function alertEnglish(){
	alert('Bientôt disponible');
}

//SCROLL HEADER
$(window).scroll(function() {
		    if ($(this).scrollTop() > 0) {
		        $('.jshide').css({
		            'display': 'none'
		        });
		    }else{
		    	$('.jshide').css({
		            'display': 'block'
		        });
		    }
	});

// AFFICHER NOUVEAUX MOTS
jQuery('.test').click(function(){
	if (jQuery('.tohide').css('display', 'block')){
		jQuery('.tohide').css('display', 'none');
		jQuery('.toshow').css('display', 'block');
	}else{
		jQuery('.tohide').css('display', 'block');
		jQuery('.toshow').css('display', 'none');
	};
});



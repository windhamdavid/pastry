jQuery(document).ready(function(){
	jQuery('#clips a').on('click', function(e){
		e.preventDefault();
		var link = jQuery(this).attr('href');
		jQuery('#content_video').html('<div class="loading"><p>&nbsp;</p></div>');
		jQuery('#content_video').load(link+' .contentInner');
	});
});

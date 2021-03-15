jQuery(document).ready(function(){
	jQuery('#access a').on('click', function(e){
		e.preventDefault();
		var link = jQuery(this).attr('href');
		jQuery('#sidebar_home').html('<div class="sidebar_loading"><p>Loading...</p></div>');
		jQuery('#sidebar_home').load(link+' .entry-content');
	});
	jQuery('.alink a').on('click', function(e){
		e.preventDefault();
		var link = jQuery(this).attr('href');
		jQuery('#sidebar_home').html('<div class="sidebar_loading"><p>Loading...</p></div>');
		jQuery('#sidebar_home').load(link+' .entry-content');
	});
});


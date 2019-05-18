jQuery(document).ready(function () {
	jQuery('.read').click( function () {
		jQuery(this).attr('href',function(){
			return jQuery('.chapterslist li:first a').attr('href');
		});
	});
	jQuery('.chaps').click( function () {
		jQuery(this).attr('href',function(){
			return jQuery('.mulu .box_title a').attr('href');
		});
	});
});
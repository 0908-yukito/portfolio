
jQuery(function(){
jQuery(window).scroll(function(){
var now = jQuery(window).scrollTop();
if(now > 1000)
jQuery('#page-top').fadeIn('slow');
else{
jQuery('#page-top').fadeOut('slow');
}
});
jQuery('#move-page-top').click(function(){
jQuery('body,html').animate({
scrollTop: 0
}, 1000);
});
});

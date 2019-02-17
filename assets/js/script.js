
jQuery(window).scroll(function () {
 if (jQuery(this).scrollTop() > 185) {
     jQuery(".menuprincipal").addClass("fixo");
 } else {
     jQuery(".menuprincipal").removeClass("fixo");
 }
});
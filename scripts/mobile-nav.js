jQuery(document).ready(function() {
    jQuery('.toggle-nav-icon').click(function(e) {
        jQuery('.mobile-menu').slideToggle(400);

  
        e.preventDefault();
    });  


    jQuery('.toggle-nav-icon').click(function(e) {
        jQuery('#menu-mobile-menu').slideToggle(400);

  
        e.preventDefault();
    }); 
});




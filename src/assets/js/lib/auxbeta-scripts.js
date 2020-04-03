
/* Responsive Nav */
/*
	var nav = responsiveNav(".nav-collapse", { // Selector
	  animate: true, // Boolean: Use CSS3 transitions, true or false
	  transition: 284, // Integer: Speed of the transition, in milliseconds
	  label: "&#9776; Menu", // String: Label for the navigation toggle
	  insert: "before", // String: Insert the toggle before or after the navigation
	  customToggle: "", // Selector: Specify the ID of a custom toggle
	  closeOnNavClick: false, // Boolean: Close the navigation when one of the links are clicked
	  openPos: "relative", // String: Position of the opened nav, relative or static
	  navClass: "nav-collapse", // String: Default CSS class. If changed, you need to edit the CSS too!
	  navActiveClass: "js-nav-active", // String: Class that is added to  element when nav is active
	  jsClass: "js", // String: 'JS enabled' class which is added to  element
	  init: function(){}, // Function: Init callback
	  open: function(){}, // Function: Open callback
	  close: function(){} // Function: Close callback
	});
*/

/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

/* Fit Vids */
    $(".main-container").fitVids();
    
/* Skrollr */
if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && $(window).width() > 767) { // only init skrollr on non-mobile devices
    skrollr.init({
        render: function(data) {
            //Debugging - Log the current scroll position.
            //console.log(data.curTop);
        }
    });
}

/* Flex Vertical Center */
/*
    if (viewport.width >= 768) $('.valign').flexVerticalCenter({ 
		cssAttribute: 'padding-top', 
		parentSelector: '.parent' 
	});
*/

  /*
   * Let's fire off the gravatar function
   * You can remove this if you don't need it
  */


}); /* end of as page load scripts */

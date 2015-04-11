$(window).scroll(function() {
	if ($(".navbar").offset().top > 50) {
        // Shows DECaF logo when scrolling down
        $(".navbar-brand").addClass("brand-shown");
    } 

    else {
        // Hides DECaF logo when scrolling back up
        $(".navbar-brand").removeClass("brand-shown");
    }
});

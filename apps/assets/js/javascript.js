//jQuery do here

/*
//COMMON WAYS
$(".button").on("click", function() {
    // do something here
});

//BEST WAYS  BUT COMPLEX(BETTER USE FOR AJAX AND DYNAMIC)
$(document).on("click", "button", function() { 
    do something here
});
*/

$(document).ready(function() {
    console.log("jquery is on");

    $('#menu-toggle').click(function() {
        var mySidenav = $('#sidenavigation');
        var main = $('#maincontentpage');
        
        if (mySidenav.width() === 0) {
        mySidenav.animate({ width: '250px' });
        main.animate({ marginLeft: '250px' });
        } else {
        mySidenav.animate({ width: '0' });
        main.animate({ marginLeft: '0' });
        }
    });
});
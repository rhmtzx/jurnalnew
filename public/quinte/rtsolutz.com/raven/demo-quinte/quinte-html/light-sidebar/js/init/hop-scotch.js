/* ========================================================================

HopScotch Init

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
var tour;
$(document).ready(function() {
    tour= {
        id: "hello-hopscotch",
        steps: [
            {
                title: "Notofication Area",
                content: "This is the Notificaton for the theme where you can check notification.",
                target: ".navbar-nav-right",
                placement: "left"
            },
            {
                title: "Logo Area",
                content: "The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.",
                target: ".rt_logo",
                placement: "bottom"
            },
            {
                title: "Tour Button",
                content: "The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed",
                target: "startTourBtn",
                placement: "right"
            }
        ]
    }
});
$("#startTourBtn").on("click", function(t) {
    hopscotch.startTour(tour)
});
/*======== End Doucument Ready Function =========*/
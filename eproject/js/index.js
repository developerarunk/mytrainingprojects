$(document).ready(function () {

    $("#main-slider").owlCarousel({
        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        pagination: false,
        autoPlay: 3200

    });

});
$(document).ready(function () {

    var owl = $("#testimonials-slider");

    owl.owlCarousel({
        itemsCustom: [
            [0, 1],
            [450, 1],
            [600, 1],
            [700, 1],
            [1000, 1],
            [1200, 1],
            [1400, 1],
            [1600, 1]
        ],
        navigation: false,
        pagination: true,
        autoHeight: true

    });

    var owl = $("#related-products-slider");

    owl.owlCarousel({
        itemsCustom: [
            [0, 1],
            [450, 2],
            [600, 2],
            [700, 3],
            [1000, 4],
            [1200, 4],
            [1400, 4],
            [1600, 4]
        ],
        navigation: false,
        pagination: true,
        autoHeight: true

    });


});
$("[data-fancybox]").fancybox({
});




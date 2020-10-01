$(document).ready(function(){
    $("#isotope-filters").on("click", "button", function(){
        let filterValue = $(this).attr("data-filter");
        $("#isotope").isotope({
            filter: filterValue
        });
        
        //active button
        $("#isotope-filters").find('.active').removeClass('active');
        $(this).addClass('active');    
    });
});

$(document).ready(function(){
    $("#portfolio-wrapper").magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true, 
            duration: 300,
            easing: 'ease-in-out', 
            opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });
});



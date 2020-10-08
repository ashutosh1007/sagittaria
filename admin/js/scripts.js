function removeSigns() {
    var pin_code = document.getElementById("pin_code");
    input.value = parseInt(input.value.toString().replace('+', '').replace('-', ''));
}
    
//$(document).ready(function () {
//        //active button
//        $("#isotope-filters").find('.active').removeClass('active');
//        $(this).addClass('active');
//    });
//});
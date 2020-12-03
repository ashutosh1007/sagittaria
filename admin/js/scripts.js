function removeSigns() {
    var pin_code = document.getElementById("pin_code");
    input.value = parseInt(input.value.toString().replace('+', '').replace('-', ''));
}
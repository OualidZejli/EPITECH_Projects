const div = document.getElementsByTagName("div")[2];
var carac = "";

document.addEventListener('keydown', function(e) {
    carac = carac + (e.key);
    div.innerHTML = carac.slice(-42);
});
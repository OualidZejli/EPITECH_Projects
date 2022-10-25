const div = document.getElementsByTagName('div')[2]
let click = 0;

div.onclick = function() {
    click++;
    div.innerHTML = click;
}
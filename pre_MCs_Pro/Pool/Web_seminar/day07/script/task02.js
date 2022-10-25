const div = document.getElementsByTagName('div')[2]

div.onclick = function(){
    do {
        nme = prompt("What's your name ?");
    }
    while(nme=="" || nme== null);

    confirmation = confirm("Are you sure that " + nme + " is your name ?");
    if (confirmation) {
        alert("Hello " + nme + " !");
        if (true){
            div.innerHTML = "Hello " + nme + " !";
        }
    }
    
    
}
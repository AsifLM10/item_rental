function toggleMode(){
    var body = document.body;
    var text = document.getElementById("modeText");

    if(body.className == "dark"){
        body.className= "";
        text.innerHTML = "Light Mode";
    } else{
        body.className = "dark";
        text.innerHTML = "Dark Mode";
    }
}
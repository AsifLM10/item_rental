function toggleMode(){
    var body = document.body;
    var text = document.getElementById("modeText");

    if(body.style.backgroundColor == "black"){
        body.style.backgroundColor = "";
        body.style.color = "black";
        text.innerHTML = "Light Mode";
    }
    
}
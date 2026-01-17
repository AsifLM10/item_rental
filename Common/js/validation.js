function loginValidate(){
    var u = document.getElementById("username").value;
    var p = document.getElementById("password").value;

    if(u == "" || p == ""){
        document.getElementById("error").innerHTML = "All fields required";
        return false;
    }
    return true;
}
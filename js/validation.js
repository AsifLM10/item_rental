function loginValidate(){
    var user = document.getElementById("username").value;
    var pass = document.getElementById("password").value;

    if(user == "" || pass == ""){
        document.getElementById("error").innerHTML = "All fields are required!";
        return false;
    }
    return true;
}
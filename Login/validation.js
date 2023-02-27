function validateLoginForm(){
    var username = document.forms["loginForm"]["username"].value;
    var password = document.forms["loginForm"]["password"].value;
 
    if (username == "") {
        alert("Please enter your username");
        return false;
    }
    if (password == "" ) {
        alert("Please enter your password");
        return false;
    }
}

function validateSignupForm(){
    let username = document.forms["signupForm"]["username"];
    let password = document.forms["signupForm"]["password"];
    let pass_err = document.getElementById("pass_err");
    let username_err = document.getElementById("username_err");
    let email = document.forms["signupForm"]["email"];
    let strongPassword = new RegExp('(?=^.{8,}$)(?=.*\\d)(?=.*[!@#$%^&*]+)(?![.\\n])(?=.*[A-Z])(?=.*[a-z]).*$');
    let validator = true;
    console.log(password.value)
    if(username.value == ""){
        username.style.boxShadow ="0px 2px 0px  rgba(255, 24, 24, 0.6)";
        username.style.border ="2px solid red"; 
        username_err.style.display ="block";
        validator= false;
        
    }
    console.log(validator);
    if(email.value == ""){
        validator= false;
    }
    console.log(validator);
    if(!strongPassword.test(password.value)){
        password.style.boxShadow ="0px 2px 0px  rgba(255, 24, 24, 0.6)";
        password.style.border ="2px solid red";
        pass_err.style.display = "block";
        validator =  false;    
    }
    console.log(validator);
    if(validator){
        alert("Submission Sucessful")
        return true;
    }
    else{return false;}
}   

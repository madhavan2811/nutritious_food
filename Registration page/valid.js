function validate() {
    
var fname = document.forms["RegForm"]["FName"];
var lname = document.forms["RegForm"]["LName"];
var email = document.forms["RegForm"]["EMail"];
var phone = document.forms["RegForm"]["phone"];
var lname = document.forms["RegForm"]["LName"];
var dob = document.forms["RegForm"]["DOB"];
var gender=document.forms["RegForm"]["gender"];
var acc = document.forms["RegForm"]["account"];



if (fname.value == "") {
    window.alert("Please enter your First name.");
    fname.focus();
    return false;
}
if (lname.value == "") {
    window.alert("Please enter your Last name");
    lname.focus();
    return false;
}

if (dob.value == "") {
    window.alert("Please enter your Date Of Birth");
    dob.focus();
    return false;
}

gen=false;
for(var i=0;i<gender.length;i++){
    if(gender[i].checked){
        gen=true;
        break;
    }
}

if(gen==false){
    alert("Please enter your gender");
    return false;

}


if (email.value == "") {
    window.alert(
      "Please enter a valid e-mail address.");
    email.focus();
    return false;
}

if (phone.value == "") {
    window.alert(
      "Please enter your phone number");
    phone.focus();
    return false;
}
act=false;
for(var i=0;i<acc.length;i++){
    if(acc[i].checked){
        act=true;
        break;
    }
}
if(act==false){
    alert("Please enter your account type");
    return false;
}

return true;
}
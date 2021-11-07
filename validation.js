function validate(){
    var x=document.forms["login"]["username"].value;
    var pass = document.forms["login"]["password"].value;

    var atposition=x.indexOf("@");  
    var dotposition=x.lastIndexOf(".");  

    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
        alert("Please enter a valid e-mail address");  
        return false;  
  }  
    if(pass==''){
        alert("Please enter your password");
        return false;
    }
    return true;
}
 
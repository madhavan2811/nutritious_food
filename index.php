<html>  
<head> 

    <title>Nutritious food</title>  
<style>
    h1{
        text-align: center;
    }
.error{
    color: red;
}
body{
	background-color:rgb(110, 201, 98);
	font-family: 'Source Sans Pro', sans-serif;
	color: black;
	font-weight: 500;
} 
#frm{  
    border: solid gray 1px;  
    width:25%;  
    border-radius: 10px;  
    margin: 120px auto;  
    background: white;  
    padding: 50px;  

}
#btn{  
    color: #fff;  
    background: #337ab7;  
    padding: 7px;  
    margin-left: 40%;  
}  
#for, #reg,a{
    text-align: center;
    text-decoration: none;
}
</style>   
<?php

$user=$pass='';
$userErr=$passErr='';

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

}

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['user'])){
        $userErr="Please enter the username";
    }
    else{
        $user = test_input($_POST['user']);
    }
    if(empty($_POST['pass'])){
        $passErr = "Please enter your password";
    }
    else{
        $pass = test_input($_POST['pass']);
    }
}

?>
</head>  
<body> 
     
    <div id = "frm">  
        <h1>Welcome</h1> 
        <form name="f1" action = "authentication.php" method = "POST" onsubmit="return validation()">  
            <p>  
                <label> Username: </label>  
                <input type = "text" id ="user" size="30" name  = "user" />  
                <span class="error">* <?php echo $userErr;?></span>
  <br><br>            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" size="30" name  = "pass" />  
                <span class="error">* <?php echo $passErr;?></span>
  <br><br> 
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form> 
        <p id="for"> <a href="Registration page/forgot.php"> Forgot Username/Password ? </a>  </p>


        <p id="reg">	<a href="Registration page/register.html">	 New Registration </a>  </p> 
    </div>  
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html> 
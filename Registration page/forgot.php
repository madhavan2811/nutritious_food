<title>Nutritious Food</title> 

<style>
h{
    font-size: 25px;
}
.error{
    font-size: 20px;
    color: red;
}
.wrap{
    font-size: 25px;
}
body{
	background-color:rgb(110, 201, 98);
	font-family: 'Source Sans Pro', sans-serif;
	color: black;
	font-weight: 500;
} 
</style>

<?php 

//declare variables

$user=$email=$dob=$phone='';
$userErr=$emailErr=$dobErr=$phoneErr='';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['user'])){
        $userErr = "Please enter the username";
    }
    else{
        $user=test_input($_POST['user']);
    }
    if(empty($_POST['email'])){
        $emailErr = "Please enter the Email ID";
    }
    else{
        $email=test_input($_POST['email']);
    }
    if(empty($_POST['dob'])){
        $dobErr = "Please enter the DOB";
    }
    else{
        $dob=test_input($_POST['dob']);
    }
    if(empty($_POST['phone'])){
        $phoneErr = "Please enter the Phone number";
    }
    else{
        $phone=test_input($_POST['phone']);
    }
}


?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="wrap">

Enter the username : <input type="text" name="user"> 
<span class="error" >*<?php echo $userErr ?></span>
<br><br>
Enter the Email ID : <input type="text" name="email"> 
<span class="error" >*  <?php echo $emailErr ?>  </span><br><br>
Enter the DOB : <input type="text" name="dob"> 
<span class="error" >*<?php echo $dobErr ?></span> <br><br>

Enter the Phone number : <input type="text" name="phone"> 
<span class="error" >*<?php echo $phoneErr ?></span>
<br><br>
<input type="submit" >

</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
echo "<h>";

echo "<br>";

echo $user;
echo "<br>";

echo $dob;
echo "<br>";

echo $email;
echo "<br>";

echo $phone;
echo "<br>";
}
?>
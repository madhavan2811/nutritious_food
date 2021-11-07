<head>
<title>Nutritious Food</title> 
    <style>
        h{
            color: blue;
            font-size: 30px;
        }
        p{
            font-size: 30px;
            color: black;
            font-weight: bold;
        }
        body{
	background-color:rgb(110, 201, 98);
	font-family: 'Source Sans Pro', sans-serif;
	color: black;
	font-weight: 500;
    }
    .wrap{
        display:inline-block;
	align-content: center;
    justify-self: center;
    position: relative;
    left: 50px;
    }
    </style>
</head>


<p>Welcome to our webpage,  <?php echo "<h>". $_POST['FName']." ".$_POST['LName']."!" ;  ?> </p>
<br><br>
<div class="wrap">
<p>Your Name is  <?php echo  $_POST['FName']." ".$_POST['LName'];   ?> </p>

<p>Your Date of birth is  <?php echo  $_POST['DOB']   ?> </p>

<p>Your Gender is <?php echo $_POST['gender']    ?></p>

<p>Your Email ID is <?php echo $_POST['EMail']      ?></p>

<p>Your Phone number is <?php echo $_POST['phone']    ?></p>

<p>Your Account type is <?php echo $_POST['account']      ?></p>

</div>





<html>
<head>
<title>Form Validation</title>
</head>
<body>
<center><h2>FORM VALIDATION</h2></center>
<hr width=300>
<pre>
<form name="form" action="#" method="POST">
Name :     <input type="text" name="fname"><br><br>
Email :    <input type="email" name="email"><br><br>
Mob NO :   <input type="tel" name="mob"><br><br>
Username : <input type="text" name="user"><br><br>
Password : <input type="password" name="password"><br><br>
        <input type="submit" value="submit" name="submit">
</pre>
</form>
<?php
if(isset($_POST['submit'])){
	$name = $_POST['fname'];  
        $email = $_POST['email'];  
        $mobile = $_POST['mob'];  
        $user = $_POST['user'];  
        $password = $_POST['password'];

        if(empty($name)){
            echo "<script>alert('Enter First Name ')</script>";
        }
        if(!preg_match("/^[a-zA-Z ]*$/",$name)){
            echo "<script>alert('Enter   Name only!!')</script>";
        }
        if(empty($email)){
            echo "<script>alert('Enter Email !!')</script>";
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
        echo "<script>alert('Enter valid Email !!')</script>";
        }
        if(empty($mobile))
        {
        echo "<script>alert('Enter mobile number !!')</script>";
        }
        if(!preg_match("/^[0-9]*$/",$mobile)){
            echo "<script>alert('Enter Valid Mobile Number !!')</script>";
        }
        if (strlen($mobile) !=10) {
                echo "<script>alert('Enter valid Number...')</script>";
        }
        
        if(empty($user)){
            echo "<script>alert('Enter User Name !!')</script>";
        }
        if(empty($password)){
            echo "<script>alert('Enter Password !!')</script>";
        }
        if (strlen($password) < 8) {
                echo "<script>alert('Your Password Must Contain At Least 8 Characters!')</script>";
        }
        

    
}
?>
</body>
</html>

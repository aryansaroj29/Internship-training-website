<?php include("header.php"); ?>
<?php

$host="localhost";
$user="root";
$password="";
$db="register";
if (isset($_POST['submit'])){

    echo"Registration successful";
}
else{
    // echo"Failed"; 
}



?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>

</head>
<body>

<h1 style="text-align:center;color: #3333cc;">Register Page</h1>
<form method="POST">
<div class="mid">
First Name:<input type="text" placeholder="Enter Your First Name" required><br><br>
Last Name:<input type="text" placeholder="Enter Your Last Name" required><br><br>
Contact No:<input type="number" placeholder="Enter Your Contact no." required><br><br>
Email ID:<input type="email" placeholder="Enter Your email id" required><br><br>
Password:<input type="password" placeholder="Enter Your password" required><br><br>
Select Gender:<input type="radio" name="gender" required>Male
             <input type="radio"name="gender" required>Female
             <br><br>
Language:<input type="checkbox">Java
        <input type="checkbox">Python
        <input type="checkbox">c++
        <br><br>
Select Your City:<select> 
                    <option>Select Your City</option>
                    <option>Mumbai</option>
                    <option>Pune</option>
                    <option>Banglore</option>
                    <option>Hydrabed</option>
                    <option>Chennai</option>
                </select>
                <br><br>
<input type="submit" value="Submit"><br><br> 


</div>

</form>
</body>
</html>
<?php include("footer.php"); ?>
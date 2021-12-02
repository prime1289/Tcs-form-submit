<?php
$insert=false;
if(isset ($_POST['name'])){
$server="localhost";
$username="root";
$password="";
//connection to db
$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to databse is failed" .
    mysqli_connect_error());
}
// echo "connection successful";

//insert $_POST values
$name=$_POST['name'];
$education=$_POST['Education'];
$university=$_POST['University'];
$phone=$_POST['Phone'];
$email=$_POST['Email'];
$des=$_POST['Des'];
$sql="INSERT INTO `trip`.`trip` (`Name`, `Education`, `University/clg`, `Phone no.`, `Email`, `Des`, `Date`) VALUES ('$name','$education','$university','$phone','$email','$des', CURRENT_TIMESTAMP);";

// echo $sql;
//insert in database

if ($con->query($sql)==true){
    // echo "Inserted successfully";
    $insert=true;
}
else{
    echo "ERROR: $sql <br>$con->error";
    
}

$con->close();
}

?>


<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCS NEXT STEP </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=PT+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <img class="bg" src="EP-TCS-1-960x720.jpg" alt="TCS RECRUITMENT">
    <div class="container">
        <div class="heading">
            <h1>TCS RECRUITMENT DRIVE FORM 2021</h1>
            <P>Enter Your Details And Submit Till 30 Nov</P>
        </div>
 <?php
         if($insert==true){
     echo "<P class='Submit'>THANK YOU For Submitting This Form.We'll LEt You Know If You Get Shortlisted By Email</P>";
         }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your name">
            <input type="text" name="Education" id="Education" placeholder="Enter Your Education">
            <input type="text" name="University" id="University" placeholder="Enter Your University/College">
            <input type="Phone" name="Phone" id="Phone" placeholder="Enter Your Phone no.">
            <input type="Email" name="Email" id="Email" placeholder="Enter Your Email">
            <textarea name="Des" id="Des" cols="30" rows="10"placeholder="Why do you think that you are suitable for this job"></textarea>
            <div class="btn1">
                <button class="btn3"><span class="btn">Submit</span></button>
                <button class="btn2 btn3"><span class="btn">Reset</span></button>
            </div>
        </form>
    </div>
    <div class="footerline"></div>
    <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>online shop</h4>
  	 			<ul>
  	 				<li><a href="#">watch</a></li>
  	 				<li><a href="#">bag</a></li>
  	 				<li><a href="#">shoes</a></li>
  	 				<li><a href="#">dress</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
</body>


</html>
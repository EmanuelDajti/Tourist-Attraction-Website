<?php 

//Message Vars

$msg = ' ';
$msgClass = ' ';


if(filter_has_var(INPUT_POST, 'submit')){
    // Get Form Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check Required Fields
    if(!empty($email) && !empty($name) && !empty($message)){
        // Passed
        // Check Email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            // Failed
            $msg = 'Please use a valid email';
            $msgClass = 'alert-danger';
        } else {
            // Passed
            $toEmail = 'dajti49@gmail.com';
            $subject = 'Contact Request From '.$name;
            $body = '<h2>Contact Request</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>
            ';

            // Email Headers
            $headers = "MIME-Version: 1.0" ."\r\n";
            $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

            // Additional Headers
            $headers .= "From: " .$name. "<".$email.">". "\r\n";

            if(mail($toEmail, $subject, $body, $headers)){
                // Email Sent
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
            } else {
                // Failed
                $msg = 'Your email was not sent';
                $msgClass = 'alert-danger';
            }
        }
    } else {
        // Failed
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="web design, professional web design">
<meta name="author" content="Emanuel Dajti">
<title>Contact Us</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
		<script type="text/javascript" src="main.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <link href="bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
	

<style>
body {font-family: 'Raleway';
     font-size: 18px;}
* {box-sizing: border-box;}

label {
    margin-left:26%;
    color:white;
}
p {
  color:white;
}
input[type=text],[type=email], textarea {
  width: 50%;
  margin: auto;
  display: block;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  margin:auto;
  display: block;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #35424a;;
  padding: 20px;
  width:100%;
}

h1 {
  margin-top:1%;
}
@media only screen and (max-width: 600px) {
  h1 {
    margin-top:4%;
  }
}
</style>
</head>
<body>
<header>
  

 <div class="activate">
  <div id="mySidenav" class="sidenav">
  <a href="../../index.html">Home</a>
  <a href="Alps.html">Alps Tour </a>
  <a href="koman.html">Lake Koman Tour</a>
  <a href="valbona.html">Journey To Valbona</a>
  <a href="contact.html">Contact</a>
  <a href="about.html"> About </a>
</div>
</div>

<div class="menu-icon">
  <span class="active"></span>
  <span class="active"></span>  
  <span class="active"></span>
</div>


<h1 style="margin-left: 2%;">wildtouralbania</h1>
   <nav>
    <ul>
    <li><a href="../../index.html">Home</a></li>
   <li><a href="Alps.html">Alps Tour </a></li>
    <li><a href="koman.html">Lake Koman Tour </a></li>
    <li><a href="valbona.html">Journey To Valbona </a></li>
    <li><a href="about.html">About</a></li>
    <li class="current"><a href="contact.html">Contact</a></li>
    </ul>
   </nav>
</header>
<br>
<div class="container">
<?php if($msg != ' '): ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?> </div>
<?php endif; ?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <ul style="list-style-type:none;">
        <li> <label for="fname">First Name</label></li>
        <li> <input type="text" id="fname" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>"></li>
        <li><label>Your Email</label></li>
        <li><input type="email" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>"></li>
        <li><label for="lname">Your Message</label></li>
        <li>  <textarea name="message" ><?php echo isset($_POST['message']) ? $message : ''; ?></textarea></li>
        <li><input type="submit" name="submit" value="Submit"></li>
    </ul>
  </form>
  <br>
  <ul style="list-style-type:none; margin-left:10%;">
    <li><p>Telephone Number: +355 69 211 7117  <br></p></li>
    <li><p>Email: ardittmarku@gmail.com, contact@wildtouralbania.com  <br></p></li>
   
  </ul>
</div>



<div class="mover">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>
</div>
<a href="javascript:void(0)" title="Go to top" id="scroll" style="display: none;"><i class="fa fa-chevron-circle-up"></i></a>
<footer style="position: relative; top:100px;">
	<p>wildtouralbania, CopyRight &copy; 2018</p>
</footer>
</body>
</html>

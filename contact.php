<?php
if(!empty($_REQUEST['name'])) {
	$name = $_REQUEST["name"];
	$email = $_REQUEST["email"];
	$phone = $_REQUEST["phone"];
	$subject = $name . " registered";
	$content = $_REQUEST["description"];
	
	$message = "<table>";
	$message.= "<tr><td>Name : " . $name . "</td></tr>";
	$message.= "<tr><td>Email : " . $email . "</td></tr>";
	$message.= "<tr><td>Phone : " . $phone . "</td></tr>";
	$message.= "<tr><td>content : " . $content . "</td></tr>";
	$message.= "</table>";

	$conn = mysqli_connect("127.0.0.1", "birdpaus_root", "test123","birdpaus_contact") or die ("Connection Error: " . mysqli_connect_error());
	mysqli_query($conn, "INSERT INTO tblcontact (user_name, user_email,phone,subject,content) VALUES ('" . $name. "', '" . $email. "', '" . $phone. "','" . $subject. "','" . $content. "')");
	$insert_id = mysqli_insert_id($conn);

 $headers = "From: Bird Pause<contact@birdpause.com>\r\n";
 $headers.= "Reply-To: Bird Pause<contact@birdpause.com\r\n"; 
 $headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: BirdPause<contact@birdpause.com>'."\r\n".
    'Reply-To: Bird Pause<contact@birdpause.com>'."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message1 = '<html><body>';
$message1.= '<h1 style="color:#f40;">'.$message.'</h1>';
$message1.= '<p style="color:#080;font-size:18px;">Thanks !</p>';
$message1.= '</body></html>';
	
	mail("contact@birdpause.com",$subject, $message1, $headers);
	mail($email,"Query", "Thank you for registering with Bird Pause You will be recieving a confirmation mail soon. Thank You!", $headers);
	
	if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
}
}
//require_once "contact-view.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            contact us
        </title>
        <link rel="stylesheet" href="contact.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="index.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://kit.fontawesome.com/78589fc54e.js" crossorigin="anonymous"></script>
    

    </head>
    <body>

        <!--/////////////////////top nav bar menu\\\\\\\\\\\\\\\\\\\\-->
        <section class="menu col-12">
          <a href="index.html" class="logo ">  
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 932.11 302.71"><defs><style>.cls-1{fill:none;stroke:#FCFAF9;stroke-miterlimit:10;stroke-width:2px;}.cls-2{fill:#FCFAF9;}</style></defs><text x="-433.89" y="-214.42"/><text x="-433.89" y="-214.42"/><polyline class="cls-1" points="237.65 128.98 73.72 143.11 237.65 128.98 375.72 2.69 211.09 1 123.12 87.25 43.47 59.76 2.71 95.75 55.91 94.58 73.72 143.11 194.72 224.29"/><line class="cls-1" x1="43.47" y1="59.76" x2="55.91" y2="94.58"/><path class="cls-1" d="M645,215.42" transform="translate(-433.89 -214.42)"/><polyline class="cls-1" points="211.09 1 237.65 128.98 194.72 224.29"/><line class="cls-1" x1="123.12" y1="87.25" x2="73.72" y2="143.11"/><polygon class="cls-2" points="332.61 282.84 297.84 270.67 209.15 227.77 223.09 197.16 332.61 282.84"/><polygon class="cls-2" points="378.18 302.7 349.35 289.35 228.34 187.19 241.99 155.6 378.18 302.7"/></svg></a>
            <div class="nav" >
                <ul>
                   
                    <li class="drop">services
                        
                        
                        
                      </li>
                      <li ><a href="blog.html"> blog</a></li>
                    <li><a href="">about</a></li>
                    <li><a href="contact.html">contact</a>  </li>
                
                
                </ul>
                
            </div>
            <div class="container" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
              </div>
              
        </section>
        <div class="service">
          <ul>
              <div class="servicesec"> 
                <li class="servicemenu">video editing</li>
          <li class="servicemenu">2D & 3D animation</li>
          <li class="servicemenu">graphic design</li>
          <li class="servicemenu">corporate videos</li></div>
              <div class="servicesec"> <li class="servicemenu">vfx</li>
          <li class="servicemenu">brand videography</li>
          <li class="servicemenu">product videography</li>
           <li class="servicemenu">content writing</li></div>
              <div class="servicesec"><li class="servicemenu">photography</li>
          <li class="servicemenu">informative videos</li>
          <li class="servicemenu">youtube videos</li>
          <li class="servicemenu">drone videography</li></div>
             
         
          
         
          </ul>
      </div>
        <!--////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\-->



        <!--\\\\\\\\\\\\\\\\\\\\\\form//////////////////////////-->
        <section class="centerpos">
        <div class="bg-img">
           <section class="contactform">
            <form class="modal-content" action="" method="post">
              <div class="contain">
                <h1 class="formname">Contact us</h1>
                <hr>
                <p>Please fill in this form</p>
                
                <label for="name"><b>Full Name</b></label><br>
                <input type="text" placeholder="Your name..." name="name" required><br>
                <label for="email"><b>Email</b></label><br>
                <input type="text" placeholder="Enter Email..." name="email" required><br>
                <label for="phone"><b>Phone Number</b></label><br>
                <input type="text" placeholder="Enter phone number..." name="phone" required><br>
          
                
          
                <label for="description"><b> Description</b></label><br>
                <textarea type="text" placeholder="Write a brief description.... " name="description" style="height:100px;width:100%;"></textarea>
                
                
          
                <p class="terms" style="font-size:10px;">By contacting us you agree to our <a href="#" style="color:rgb(255, 100, 100)">Terms & Privacy</a>.</p>
          
                <div class="clearfix">
                  
                  <button type="submit" class="signupbtn">Submit</button>
                </div>
              </div>
            </form>
             
         
    
         </section>
        </div>
        </section>
         <!--\\\\\\\\\\\\\\\\\\\\/////////////////////////-->



         <!--/////////////////////////footer\\\\\\\\\\\\\\\\\\\\\\\\\-->
         <section class="footer2">
            
            <h6><hr class="line2"><small>&copy; copyright | 2020 | birdpause.com</small> </h6> 
           </section>
           <!--///////////////////////\\\\\\\\\\\\\\\\\\\\\\-->



          
          <script src="index.js"></script>
    </body>
</html>
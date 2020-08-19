
<?php require_once "header.php"; 
include_once("header.php");
require_once("function.php");
require_once("db.php");
require_once("session.php");
if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
if(empty($name)&& empty($email)&& empty($message)){
	$success= "	<div class=\"error_message\">Sorry!\r\n\r\n"."\r\n\r\n You Cannot Submit An Empty Message Request To Our Server  Kindly Fill Up The Required Fields";
   echo "$success";
   echo "</div>";
}elseif(strlen($message)>100){
	$success= "	<div class=\"error_message\">Sorry!\r\n\r\n"."\r\n\r\n You Cannot Send More Than 100 Messages";
   echo "$success";
   echo "</div>";
}elseif(!check_email($email)){
	$success= "	<div class=\"error_message\">Sorry!\r\n\r\n"."\r\n\r\n You Are Not A Member, We  Accept Messages From Registered Members Only. ";
	echo "$success";
	echo "</div>";
}else{
	global $conn;
	$query="INSERT INTO contact(name,email,message)VALUES('$name','$email','$message')";
	$inject=mysqli_query($conn,$query);
	if($inject){
              /*  $subject="Contact Form Message";
                $body="Your message has been submited our you will get a feedback soon.";
                  $from="bolivarp601@gmail.com";
				  if(mail($email,$subject,$body,$from)){*/
					$success= "	<div class=\"success_message\">Hi \r\n\r\n"."\r\n\r\n Your Message Request Was  Submitted Successfully You Will Receive An Email Shortly. You  Will Be Redirected To The Index page In 10 Sec!";
					echo "$success";
					echo "</div>";
					header("refresh:10; url=index.php");
				  }else{
					$success= "	<div class=\"error_message\">Sorry!\r\n\r\n"."\r\n\r\n We Could Not Process Your Request At This Time. Contact Us Manually Using\r\n\r\n Support@codedlab.com. ";
					echo "$success";
					echo "</div>";
				  //}
				  
	}
}



}



?>
		<section class="content">
			<div class="page_header">
				<h1>Contact Us</h1>
			</div>
			<div class="center">
				<div class="page_contact">
					
					<div class="contact">
<?php    echo msg();
echo error(); ?>
						<form action="contact.php" method="post">
							<input type="text" name="name" placeholder="Name...">
							<input type="email" name="email" placeholder="Email...">
							<textarea name="message" placeholder="Message:: Maximum 20 Words.."></textarea>
							<input type="submit" name="submit" value="SEND">
						</form>
						<!--<div class="success_message">Message sent successfully!</div>
						<div class="error_message">Failed sending message!</div>-->
					</div>
					<style>
					.msg{
    background-color: green;
    font-family:Times;
    color:white;
	width:fit-content;
	float:center;
}
div{
    float:center;
    width: auto;
}
.error{
    background-color:red;
    font-family:Times;
}

.alt{
    width: auto;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: auto;
    margin: auto;
    margin-left: auto;
    margin-right:auto;
    text-align: center;
  }
</style>
					<aside class="page_sidebar">
						<section class="sidebar_opening_hours">
							<h1>Opening Hours</h1>
							<ul>
								<li><h3>Monday</h3><span>08:00 AM - 18:00 PM</span></li>
								<li><h3>Tuesday</h3><span>08:00 AM - 18:00 PM</span></li>
								<li><h3>Wednesday</h3><span>08:00 AM - 18:00 PM</span></li>
								<li><h3>Thursday</h3><span>08:00 AM - 18:00 PM</span></li>
								<li><h3>Friday</h3><span>08:00 AM - 18:00 PM</span></li>
								<li><h3>Saturday</h3><span>08:00 AM - 18:00 PM</span></li>
							</ul>
						</section>
					</aside>
				</div>
			</div>

			<div class="googlemap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10175.787624092312!2d-73.94900388634959!3d40.689835874075634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2s!4v1535484353154" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			
		</section>

	<?php require_once "footer.php"; ?>
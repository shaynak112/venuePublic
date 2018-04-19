<?php
	include 'header.php';
	include 'nav.php';
	include 'dbConnect.php';
?>

		<section>
			<div class="container">
				
				<div class="row">
					<div class="col-md-12 wow">
						<div class="headline-wrap">
							<h1 class="headline">
							Contact</h1>




             <p>Feel free to contact us!</p><br/><br/>

             

            <div class="row">
					<div class="col-lg-12 wow fadeInLeft">
						
						<form id="contact-form" method="post" enctype="multipart/form-data" class="form afsana-form" role="form" action="">
							<div class="row">
								<div class="col-sm-12 form-group">
									<input class="form-control afsana-style" id="name" name="name" placeholder="Name" type="text" required autofocus />
								</div>
								<div class="col-sm-12 form-group">
									<input class="form-control afsana-style" id="email" name="email" placeholder="Email" type="email" required />
								</div>
								<div class="col-sm-12 form-group">
									<textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
								</div>
								<div class="col-sm-12 form-group">
									 <input class="btn btn-primary afsana-btn" type="submit" value="Submit Message" name="submitMessage" id="submitMessage" />

									<!--<button class="btn btn-primary afsana-btn" type="submit">Submit <i class="ion-arrow-graph-up-right"></i></button>-->
								</div>
							</div>
						</form>


<?php

        ini_set("SMTP","mail.gaia-toronto.com");
        ini_set("smtp_port","25");
        ini_set('sendmail_from', 'test@gaia-toronto.com');

        $from = "Sender <test@gaia-toronto.com>";
        $to = "Contact <contact@gaia-toronto.com>";
        $subject = "Message from Gaia Contact Page";

        $headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject);    

    if(isset($_POST["submitMessage"]))
        {
          
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $fullMessage = "A message from " . $name . " at " . $email . ". The message is: " . $message;
        mail($to,$subject,$fullMessage,$from);

        echo "<br/><div style='color:white;'>Message sent, thank you.</div><br/>";

        }

        

?>




					</div> 

					<div class="col-lg-12  wow fadeInRight">
						<p>Like us on Facebook and Stay updated.</p>
						<div class="facebook-box">
							<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FTechNextit&amp;width&amp;height=258&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:258px;" allowTransparency="true"></iframe>
						</div>
						<div class="social-icons">
							<ul>
								<li class="facebook wow fadeInUp" data-wow-delay="1.1s"><a href="https://www.facebook.com/Gaia-Toronto-219573018801461/"><i class="ion-social-facebook"></i></a></li>
								<li class="twitter wow fadeInUp" data-wow-delay="1.2s"><a href="#"><i class="ion-social-twitter"></i></a></li>
								<li class="instagram wow fadeInUp" data-wow-delay="1.3s"><a href="#"><i class="ion-social-instagram"></i></a></li>
								<!--<li class="snapchat wow fadeInUp" data-wow-delay="1.6s"><a href="#"><i class="ion-social-snapchat"></i></a></li>-->
								<li class="youtube wow fadeInUp" data-wow-delay="1.4s"><a href="#"><i class="ion-social-youtube"></i></a></li>
							</ul>
						</div>
					</div>						
					</div>
						
				</div>
			</div>







			</div>

<br/>
<br/>
<br/>
<br/>
<br/>

			

		</section>


		

		

		

		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<p class="copyright text-left">Copyright © 2018 www.gaia-toronto.com All rights reserved.</p>
					</div>
				</div>
			</div>
		</section>



		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.videoBG.js"></script>
		<script src="js/jquery.sticky-kit.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/kinetic.js"></script>
		<script src="js/jquery.final-countdown.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>
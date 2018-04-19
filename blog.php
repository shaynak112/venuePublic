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
							Gaia Toronto Blog</h1>




              <?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM blog WHERE posted='yes' ORDER BY datePosted DESC";
    $statement = $db->prepare($query);
    $statement->execute();
    $allPosts = $statement->fetchAll(PDO::FETCH_OBJ);


    foreach($allPosts as $g)
    {

    	echo "<div style='vertical-align:top;display:inline-block;width:40%;margin-left:4%;margin-right:4%;margin-bottom:20px;padding:7px;border-radius:10px;border:solid white 2px;background-color:purple;color:white;'>";
    	echo "<h2>" . $g->title . "</h2>";
    	echo "<h3>By " . $g->writer . " on " . $g->datePosted . "</h3>";
    	echo "<div>" . $g->post . "</div>";
    	echo "</div>";

    }


    ?>

							
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
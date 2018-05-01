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
							Afterhours Events</h1>


 <?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM ahEvents WHERE posted='yes' ORDER BY eventDate ASC";
    $statement = $db->prepare($query);
    $statement->execute();
    $upcomingEvents = $statement->fetchAll(PDO::FETCH_OBJ);


    foreach($upcomingEvents as $g)
    {

    	echo "<div style='vertical-align:top;display:inline-block;width:40%;margin-left:4%;margin-right:4%;margin-bottom:20px;padding:7px;border-radius:10px;border:solid white 2px;background-color:#20ce6e;color:white;'>";
    	echo "<div><img src='" . $g->eventBannerURL . "' style='float:right;width:50%;'></div>";
    	echo "<h2>" . $g->eventName . "</h2>";
    	echo "<h3>By " . $g->eventDate . "</h3>";
    	echo "<div><a href='" . $g->facebookLink . "' TARGET='_BLANK'>" . $g->facebookLink . "</a></div>";
    	echo "<div>Featuring DJs: " . $g->djs . "</div>";
    	echo "<br/><div>" . $g->description . "</div>";
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


		

		

		

<?php
	include 'footer.php';
?>
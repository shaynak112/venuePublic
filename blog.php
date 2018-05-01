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

    	echo "<div style='vertical-align:top;display:inline-block;width:40%;margin-left:4%;margin-right:4%;margin-bottom:20px;padding:7px;border-radius:10px;border:solid white 2px;background-color:#20ce6e;color:white;'>";
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


		

		

		

<?php
	include 'footer.php';
?>
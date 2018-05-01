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
							Gaia Toronto Employment</h1>




              <?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM jobPostings ORDER BY dateClose DESC"; //where dateClose<today
    $statement = $db->prepare($query);
    $statement->execute();
    $jobPostings = $statement->fetchAll(PDO::FETCH_OBJ);


    foreach($jobPostings as $g)
    {

    	echo "<div style='vertical-align:top;display:inline-block;width:30%;margin-left:1%;margin-right:1%;margin-bottom:20px;padding:10px;border-radius:10px;border:solid white 2px;background-color:#cd2029;color:white;'>";
    	echo "<h2>" . $g->title . "</h2>";
    	echo "Hourly rate of Pay: $" . $g->rate . "<br/>";
    	echo "Approximate Hours Per Week: " . $g->numHours . "<br/>";
    	echo "Duration: " . $g->duration . "<br/>";
    	echo "Closing Date: " . $g->dateClose . "<br/>";
    	echo $g->description . "<br/>";
    	echo "</div>";

    }


    ?>

							
					</div>
						
				</div>

				<div class='row'>
					<p style='font-size:1.3em;'>Email your resume and cover letter to <a href='mailto:applications@gaia-toronto.com'>applications@gaia-toronto.com</a>.</p>
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
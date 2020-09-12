<?php
 include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
   <head>
	  <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="nishanchettri" content="www.stemduniya.com">
	  <meta http-equiv="Access-Control-Allow-Origin" content="*">
	  
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	 
	 <script type="text/javascript">
	 //This script should not be removed
		document.write([
			"\<script src='",
			("https:" == document.location.protocol) ? "https://" : "http://",
			"ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js' type='text/javascript'>\<\/script>" 
		].join(''));
	 </script>
	
		<!--This script is used to reload the page
		Page Reload Script-->
	  </script>
	        <script type="text/javascript">
			function refreshPage(){
					location.reload();
			}
		</script>

      <title>IOT</title>

   </head>
   <body style="background-color: #f8efa4;">

   <!--Navigation Bar-->
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        stemduniya
      </a>
    </nav>
   <!--Nav Bar End-->
   
   <div class="container card text-center"style="margin-top: 10%;">
	<div class="card-body">
	    
       <form action="" method="get">
              <button type="button" id="D1-on" class="btn btn-outline-success" onclick='refreshPage()'>D1 ON</button>
			  <button type="button" id="D1-off" class="btn btn-outline-danger" onclick='refreshPage()'>D1 OFF</button>
        </form><br>
        
          <div class="card-footer text-muted">
            <?php
                  $query = "SELECT state FROM led WHERE id=1";
                  $data=mysqli_query($conn,$query);
                if ($data)
                 {
                    while ($array = mysqli_fetch_assoc($data)) {
                        $status = $array["state"];
                        echo $status;
                    }
                }
                ///$connection->close();
            ?>
          </div>
         </div>
		<br><br>
	 </div>

	
	<script>
		document.getElementById('D1-on').addEventListener('click', function() {
		       //Add your on or off url here
				var url = "http://easykurz.com/IOT-MAKEATHON/up.php?state=ON&id=1";
				$.getJSON(url, function(data) {
					console.log(data);
				});
		});
		
		document.getElementById('D1-off').addEventListener('click', function() {
				var url = "http://easykurz.com/IOT-MAKEATHON/up.php?state=OFF&id=1";
				$.getJSON(url, function(data) {
					console.log(data);
				});
		});
		
	</script>
	
    </body>
    

</html>

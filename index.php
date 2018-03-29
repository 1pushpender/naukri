<!DOCTYPE html>
<html>
<head>
	<title>naukri.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/font-awesome.css" rel="stylesheet">
    <script src="js/insert.js"></script>
    <script src="js/insert1.js"></script>
    <link rel="stylesheet" href="css/style1.css">
    <script>
function validateForm() {
    var x = document.forms["myForm"]["image"].value;
   
    var z = document.forms["myForm"]["skills"].value;
    if (x == "") {
        alert("images must be required");
        return false;
    }
        else if(z ==""){
            alert("Skill must be select out");
        return false;
    }
}
</script>
</head>
<body>
<script>
$(document).ready(function(){
    $("#button1").click(function(){
        $("#applydiv").toggle();
        
    });
    $("#previous1").click(function(){
    	$("#second").hide();
    	$("#applydiv").show();
    });
    $("#previous2").click(function(){
    	$("#third").hide();
    	$("#second").show();
    });
    $("#tclose").click(function(){
       $("#applydiv").hide();
    });
    $("#tclose2").click(function(){
       $("#second").hide();
    });
    $("#tclose3").click(function(){
       $("#third").hide();
    });
});
$( function() {
    $( "#salutation" ).selectmenu();
  } );
</script>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="margin-top: 25px">
					<a href="index.php"><img src="images/naukri_Logo.png"></a>
				</div>
				<div class="col-md-9">
					<div class="navigation">
					   <nav>
						  <ul>
							<li><a href="">Jobs</a></li>
						    <li><a href="">Recrutors</a></li>
							<li><a href="admin.php">Admin panel</a></li>
							<li><button id="button1">Apply Jobs</button></li>
						  </ul>
					   </nav>
					</div>	
				</div>	
			</div>
		</div>
	</header>
	<section>

			<div class="container"> 
  				<div class="back-img"> 
                          <div class="wrap">
                            <div class="bg1">
                            <h1>DISCOVER THE CITYGEMS</h1>
                            <h2>Find great places to stay Eat,Shop or Visit from local experts.</h2>
                          </div>
                          
                              <div class="search">
                <div class="grid_container">
                  <div class="event1">
                    <input  class="controls textfield" type="text" placeholder="Search jobs or keyword"><Div class="hand"><i class="fa fa-handshake-o" aria-hidden="true"></i></Div> &nbsp;&nbsp;
                    <input class="controls textfield" type="text" id="location1" placeholder="Location or zip code" name = "location"> <i class="fa fa-map-marker" aria-hidden="true"></i>
                    
                  
    
                 <a href="www.google.com/jobs/locations"> <button class="btn2">Search</button></a>
                  </div>
                </div>
              </div>

                               <div class="pc">
                                <img src="images/bnner.png" alt="#">
                                <div class="black">
                                  <h3>We Promote Your Business!</h3>
                                  <a href="#"><button class="button3">CREATE A FREE PAGE</button></a>
                                 </div>
                               </div>
                          </div></div>
		    </div></section>

         <section class="back-imgg">
                         <h5>ABOUT US</h5>
                           <P>Lorem ipsum dolor sit amet,consectetur adipiscing elit.Curabitur eu velit nulla.Etiam dignissim<br>
                            nibh eu metus porttitor vestibulum.Cras fementum dui vel gravida.Nullam ac justo<br>non est sagittis tempor.
                            </P>
                   </section>

                   <section class="last">
                    <div class="wrap">
                      <div class="contact">
                          <h6>CONTACT INFO</h6>
                            <div class="info">&nbsp;&nbsp;Feel free to contact ud,if you have any question.&nbsp;&nbsp;<br>&nbsp;&nbsp;we'll be glad to help</div>&nbsp;&nbsp;
                              <P>&nbsp;&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>  &nbsp; &nbsp;noida,up,945862<br>&nbsp;&nbsp;
                              <i class="fa fa-phone" aria-hidden="true"></i> &nbsp;(012)345 6789<br>&nbsp;&nbsp;
                              <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;adminmail@hestabit.com<br>&nbsp;&nbsp;
                            <i class="fa fa-globe" aria-hidden="true"></i> &nbsp;www.hestabit.com</P>&nbsp;&nbsp;
                      </div>
                       <div class="contactus" style="margin-right: 0px;">
                        <h6>CONTACT US</h6>
                         <div class="forms">
                                          
                                          <input type="text"  placeholder="Name" > &nbsp;&nbsp; 
                                          <input type="text"  placeholder="Email">&nbsp;&nbsp;
                                           <textarea input type="text" placeholder="Massges" style="height:81px; margin: 0px; width: 587px;"></textarea>
                                          <a href="#"><button class="button4" style="margin-bottom: 20px">SUBMIT</button></a>
                                     
                                           </div>
                       </div>
                    </div>
                   </section>


<div id="applydiv">	
	<div class="apply">
		<h1>Apply jobs</h1>
	<form method="post">
          <div class="fields">
					<h5>Firstname:</h5>
					<input type="text" class="textfield" name="Fname" id="Fname" required>
		    </div>
		    <div class="fields">
					<h5>Lastname:</h5>
					<input type="text" class="textfield" name="Lname" id="Lname" required>
		    </div>
		    <div class="fields">
					<h5>Email:</h5>
					<input type="Email" class="textfield" name="Email" id="Email" required>
		    </div>
		    <div class="applybutton">
		    	<input type="button" onclick="first_form();"  name="nxtBtn" value="next">
		    </div>
        <input type="button" id="tclose" name="close" value="X">
	</form>
</div>
</div>

<div id="second">	
	<div class="apply">
		
	<form method="post">
			<div class="fields">
					<h5>Age:</h5>
					<input type="number" class="textfield" name="age"     id="age" required>
		    </div>
		    <div class="fields">
					<h5>Location:</h5>
           <input id="location" class="controls textfield" name = "location" type="text" placeholder="Search Box">
    <div id="map"></div>
    <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('location');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUMmvToUtUWvQQTzlX9lIVO3aLhvFTjTw&libraries=places&callback=initAutocomplete"
         async defer></script>
		    </div>
		    <div class="fields">
					<h5>gender:</h5>
					<select id="gender">
  						<option value="male">male</option>
  						<option value="female">female</option>
  				
					</select>
		    </div>
		    <input type="hidden" id="last_id" value="">
		    <div class="applybutton">
		    	<input type="button"  name="nxtBtn1" value="next" onclick="second_form();">
		    </div>
		    <div class="previousbutton">
		    	<input type="button"  name="Previousbtn" value="Previous" id="previous1">
		    </div>
        <input type="button" id="tclose2" name="close" value="X">
	</form>
</div>
</div>


<div id="third">	
	<div class="apply">
		
	<form name="myForm" method="post">
		    <div class="fields">
					<h5>Upload Image:</h5>
					<input type="file" id="File" name="image">
		    </div><br><br>
			<div class="fields">
        <label for="salutation">SELECT THE EDUCATIONS</label>
					 <?php
require 'database/connection.php';

       function showdata(){
         GLOBAL $conn;
    

    $query="SELECT * FROM `Education`";
    $run = mysqli_query($conn,$query);

    if($run == true){
    ?>
     <select name="salutation" id="education" name="education" >

    <?php
     while($data = mysqli_fetch_assoc($run)){
        ?>
            
            <option><?php echo $data['name'];?></option>
            
    
        <?php
     }
     ?>
      </select><?php
    }
    else{
        echo "error!";
     }
    }
    ?> 
    <option disabled selected>Please pick education</option>  
    <?php showdata();
        ?>
			</div><br><br>
		    <div class="fields">
				<label for="salutation">SELECT THE SKILLS</label>
					<select name="salutation" id="skills">
          <option disabled selected>Please pick one</option>
  						<option value="java">java</option>
  						<option value="php">php</option>
  						<option value="C">C</option>
  						<option value="Swift">Swift</option>

           </select>
		    </div>
		    <div class="submitbutton">
		    	<input type="button"  name="submitBtn"  value="Submit" onclick="third_form();" id="next2">
		    </div>
		    <div class="previousbutton3">
		    	<input type="button"  name="Previousbtn" value="Previous" id="previous2">
		    </div>
        <input type="button" id="tclose3" name="close" value="X">
        	</form>
</div>
</div>

   </section>
   <footer>
	<div class="footer">		
		 <div class="container">
 					


				   <div class="col-md-6">
					  <div class="followus" style="margin-top: 150px">
 							<ul>
                               <h4>Follow Us</h4><br>
                                <li>
 								   <div class="icon">
                <a href="#"<i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"<i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"<i class="fa fa-pinterest" aria-hidden="true"></i></a> <a href="#"<i class="fa fa-google-plus-official" aria-hidden="true"></i></a>
              </div>
                              </li>
  							</ul>
					  </div>					
				   </div>

				<div class="col-md-6s">
					<div class="sections">
						<a href="index.php"><img src="images/naukri_Logo.png"></a><br>
	                       <h5>naukri is the way to change the thinking <br> way to changing the stile of living <br> achivement to achive the carrier</h5>
	                       <h5>1-667-125-132277</h5>
	                       <h5>4rd Floor, hestabit technology noida, india</h5>  
					</div>
				</div>
			</div>
		</div>
</div>

		<div class="disclaimer">
			<h6>All rights reserved &copy 2018 Info Edge (India) Ltd.</h6>	
		</div>
</footer>


</body>
</html>
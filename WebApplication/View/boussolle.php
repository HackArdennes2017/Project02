<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script>

           var latHelpingPerson;
           var longHelpingPerson;
           var latLostPerson;
           var longLostPerson;

            function getPersonposition(position) {

              latHelpingPerson = position.coords.latitude;
              longHelpingPerson = position.coords.longitude;

              latLostPerson = 49.762114;
              longLostPerson = 4.715107;

            }

            //calculates the distance between two coordinates in [km]
            function CalculateDistance(latLostPerson, longLostPerson, latHelpingPerson, longHelpingPerson){
              // constants for distance between meridians and circles of latitude
              var cDLat  = 111.3;
              var cDLong = 71.5;

              // calculate distance in latitude and longitude direction
              var dx = cDLong * (longLostPerson - longHelpingPerson);
              var dy = cDLat * (latLostPerson - latHelpingPerson);

              // calculate the distance between these pg_connection_status
              var distance = Math.sqrt(Math.pow(dx,2) + Math.pow(dy,2));
              // return calculated distance
              //dataDistance.innerHTML = distance

              //return distance;
            }

            // calculates the bearing angle from the searching person towards the lost person in [degrees]
            function CalculateAngleTowardsLostPerson(latLostPerson, longLostPerson, latHelpingPerson, longHelpingPerson){
              // calculate the bearing angle using the haversine formula
              // first convert given coordinates from degrees to radians
              var phiB    = latHelpingPerson * Math.PI / 180;
              var phiA    = latLostPerson * Math.PI / 180;
              var lambdaB = longHelpingPerson * Math.PI / 180;
              var lambdaA = longLostPerson * Math.PI / 180;
              // calculate bearing angle using haversine formula
              var y=Math.sin(lambdaB - lambdaA)*Math.cos(phiB);
              var x=Math.cos(phiA)*Math.sin(phiB)-Math.sin(phiA)*Math.cos(phiB)*Math.cos(lambdaB - lambdaA);
              var brng = Math.atan2(y,x)*180/Math.PI;
              // map angle to range [0 360]

              brng = (brng+180)%360;
              return brng;
            }

            var lastDeltaAngle = 0;

            function init() {
              var deltat;
              var kangle;
              var positionBoussole=0;

              CalculateDistance(latLostPerson, longLostPerson, latHelpingPerson, longHelpingPerson);


              //Check for support for DeviceOrientation event
              if(window.DeviceOrientationEvent) {
                        window.addEventListener('deviceorientation', function(event) {
                        var alpha = event.alpha;
                        var beta = event.beta;
                        var gamma = event.gamma;

                        console.log( "alpha : "+alpha );
                        console.log( "beta : "+beta );
                        console.log( "gamma : "+gamma );


                        if(alpha!=null || beta!=null || gamma!=null){
                          kangle = CalculateAngleTowardsLostPerson(latLostPerson, longLostPerson, latHelpingPerson, longHelpingPerson);
                          deltat = -(kangle-alpha) + 135;
                          lastDeltaAngle = deltat;
                        }
                         // dataContainerOrientation.innerHTML = 'alpha: ' + alpha + '<br/>beta: ' + beta + '<br />gamma: ' + gamma;


                         $('img').css({'transform':'rotate('+lastDeltaAngle+'deg)'});
                      }, false);
              }

            }

    </script>
<style>

html {
    background-image: url("../assets/img/backgrounds/fond_ecran_cut.png");
    background-color: #F1622A;
    background-size: 100% 100%;
		background-size:  cover;
    height: 600px;
    background-repeat: no-repeat;

    position: relative;
    margin-left: auto;
    margin-right: auto;
}
input[type=text], select {
    width: 480px;
    padding: 12px 20px;
    margin: 8px 0;
		font-size: 16px;
		font-style: italic;
    color: #d0cccc;
    display: inline-block;
    border: none;
    border-radius: 40px;
    box-sizing: border-box;
		background-color: #928783;
}

.InputButton{
	background:url("../assets/img/backgrounds/logo_potooutay.png");
	background-repeat: no-repeat;
	background-color: #F1622A;
	background-position: center;
  background-size: 80%;
	cursor:pointer;
	border-radius: 50%;
	border:1px solid #F1622A;
	width:200px;
	height:200px;
	position: relative;
	margin-top: 40%;
	margin-left: 33%;
}
.InputButton:active{
	transform: scale(1.05);
}

.SectionStyle{
  height: 500px;
}

.FooterStyle{
  font-size: 16px;
  font-style: normal;
  color: #d0cccc;
}
.imgboussole{

}
</style>
	<title>Test</title>
</head>
<body>

  <header>

<input type="text" id="lname" name="lastname" placeholder="Rechercher un pseudo">
  </header>




  <section class="SectionStyle">

  <img class="imgboussole" src="../assets/img/backgrounds/fleche_haut.png">

  </section>
<footer class="FooterStyle">
  Messages / Liste des copains
</footer>

</body>
</html>

<script>
// A $( document ).ready() block.
$( document ).ready(function() {


if(navigator.geolocation)
  navigator.geolocation.getCurrentPosition(getPersonposition);
});
init();

</script>

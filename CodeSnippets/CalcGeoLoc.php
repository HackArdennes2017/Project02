<html>
<head><title>Calculate distance and angle based on geolocation data</title></head>
<body>

<?php

function CalculateDistance($latLostPerson, $longLostPerson, $latHelpingPerson, $longHelpingPerson){
	# constants for distance between meridians and circles of latitude
	$cDLat  = 111.3;
	$cDLong = 71.5;

	# calculate distance in latitude and longitude direction
	$dx = $cDLong * ($longLostPerson - $longHelpingPerson);
	$dy = $cDLat * ($latLostPerson - $latHelpingPerson);

	# calculate the distance between these pg_connection_status
	$distance = sqrt(pow($dx,2) + pow($dy,2));
	# return calculated distance
	return $distance;
}


function CalculateAngleTowardsLostPerson($latLostPerson, $longLostPerson, $latHelpingPerson, $longHelpingPerson){
	# constants for distance between meridians and circles of latitude
	$cDLat  = 111.3;
	$cDLong = 71.5;

	# calculate distance in latitude and longitude direction
	$dx = $cDLong * ($longLostPerson - $longHelpingPerson);
	$dy = $cDLat * ($latLostPerson - $latHelpingPerson);
	$dHelp = $dy / $dx;
	$dHelp = $dHelp;
	$angle = 90 - atan($dHelp) * 180/ pi();
	return $angle;
}

  	# operator
		print "<h2>Calculate distance and angle</h2><br />";

		print "Coordinates lost person: ";
		$longLostPers = 4.716444610;
		$latLostPers = 49.75079340;
		echo "$latLostPers ; $longLostPers";
		print "<br> Coordinates of person to help: ";
		$longHelpingPers = 4.714154000;
		$latHelpingPers = 49.74865830;
		echo "$latHelpingPers ; $longHelpingPers";
		print "<br>";
		print "<br>";

		$myDist = CalculateDistance($latLostPers, $longLostPers, $latHelpingPers, $longHelpingPers);
		echo "Distance between lost and helping person: $myDist km";
		$myAngle = CalculateAngleTowardsLostPerson($latLostPers, $longLostPers, $latHelpingPers, $longHelpingPers);
		print "<br>";
		echo "Angle from helping toward lost person: $myAngle °";


?>

</body>
</html>

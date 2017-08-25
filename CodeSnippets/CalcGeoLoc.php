<html>
<head><title>Calculate distance and angle based on geolocation data</title></head>
<body>

<?php

# calculates the distance between two coordinates in [km]
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

# calculates the bearing angle from the searching person towards the lost person in [degrees]
function CalculateAngleTowardsLostPerson($latLostPerson, $longLostPerson, $latHelpingPerson, $longHelpingPerson){
	# calculate the bearing angle using the haversine formula
	# first convert given coordinates from degrees to radians
	$phiB    = $latHelpingPerson * pi() / 180;
	$phiA    = $latLostPerson * pi() / 180;
	$lambdaB = $longHelpingPerson * pi() / 180;
	$lambdaA = $longLostPerson * pi() / 180;
	# calculate bearing angle using haversine formula
	$y=sin($lambdaB - $lambdaA)*cos($phiB);
	$x=cos($phiA)*sin($phiB)-sin($phiA)*cos($phiB)*cos($lambdaB - $lambdaA);
	$brng = atan2($y,$x)*180/pi();
	# map angle to range [0 360]
	$brng = ($brng+180)%360;
	return $brng;
}

  	# operator
		print "<h2>Calculate distance and angle</h2><br />";

		# Test parameters
		#Latitude,Longitude
		$dLatPerson1 = 49.75133413;
		$dLatPerson2 = 49.75132026;
		$dLatPerson3 = 49.75076223;
		$dLatPerson4 = 49.75077263;
		$dLongPerson1 = 4.714776277;
		$dLongPerson2 = 4.715629220;
		$dLongPerson3 = 4.715591669;
		$dLongPerson4 = 4.714824557;

		# Test pattern

		echo "Person 1 is lost, Persons 2 to 4 are searching";

		$myDist =                CalculateDistance($dLatPerson1, $dLongPerson1, $dLatPerson2, $dLongPerson2);
		$myAngle = CalculateAngleTowardsLostPerson($dLatPerson1, $dLongPerson1, $dLatPerson2, $dLongPerson2);
		print "<br>";
		echo "Distance between Person 2 and Person 1 person: $myDist km";
		print "<br>";
		echo "Angle from Person 2 towards Person 1 person: $myAngle °";

		$myDist =                CalculateDistance($dLatPerson1, $dLongPerson1, $dLatPerson3, $dLongPerson3);
		$myAngle = CalculateAngleTowardsLostPerson($dLatPerson1, $dLongPerson1, $dLatPerson3, $dLongPerson3);
		print "<br>";
		echo "Distance between Person 3 and Person 1 person: $myDist km";
		print "<br>";
		echo "Angle from Person 3 towards Person 1 person: $myAngle °";

		$myDist =                CalculateDistance($dLatPerson1, $dLongPerson1, $dLatPerson4, $dLongPerson4);
		$myAngle = CalculateAngleTowardsLostPerson($dLatPerson1, $dLongPerson1, $dLatPerson4, $dLongPerson4);
		print "<br>";
		echo "Distance between Person 4 and Person 1 person: $myDist km";
		print "<br>";
		echo "Angle from Person 4 towards Person 1 person: $myAngle °";
		print "<br>";

		print "<br>";
		print "<br>";

		echo "Person 2 is lost, Persons 1, 3 to 4 are searching";

		$myDist =                CalculateDistance($dLatPerson2, $dLongPerson2, $dLatPerson1, $dLongPerson1);
		$myAngle = CalculateAngleTowardsLostPerson($dLatPerson2, $dLongPerson2, $dLatPerson1, $dLongPerson1);
		print "<br>";
		echo "Distance between Person 1 and Person 2 person: $myDist km";
		print "<br>";
		echo "Angle from Person 1 towards Person 2 person: $myAngle °";

		$myDist =                CalculateDistance($dLatPerson2, $dLongPerson2, $dLatPerson3, $dLongPerson3);
		$myAngle = CalculateAngleTowardsLostPerson($dLatPerson2, $dLongPerson2, $dLatPerson3, $dLongPerson3);
		print "<br>";
		echo "Distance between Person 3 and Person 2 person: $myDist km";
		print "<br>";
		echo "Angle from Person 3 towards Person 2 person: $myAngle °";

		$myDist =                CalculateDistance($dLatPerson2, $dLongPerson2, $dLatPerson4, $dLongPerson4);
		$myAngle = CalculateAngleTowardsLostPerson($dLatPerson2, $dLongPerson2, $dLatPerson4, $dLongPerson4);
		print "<br>";
		echo "Distance between Person 4 and Person 2 person: $myDist km";
		print "<br>";
		echo "Angle from Person 4 towards Person 2 person: $myAngle °";
		print "<br>";

		print "<br>";
		print "<br>";

		echo "Person 3 is lost, Persons 1, 2 & 4 are searching";

		$myDist =                CalculateDistance($dLatPerson3, $dLongPerson3, $dLatPerson1, $dLongPerson1);
		$myAngle = CalculateAngleTowardsLostPerson($dLatPerson3, $dLongPerson3, $dLatPerson1, $dLongPerson1);
		print "<br>";
		echo "Distance between Person 1 and Person 3 person: $myDist km";
		print "<br>";
		echo "Angle from Person 1 towards Person 3 person: $myAngle °";

		$myDist =                CalculateDistance($dLatPerson3, $dLongPerson3, $dLatPerson2, $dLongPerson2);
		$myAngle = CalculateAngleTowardsLostPerson($dLatPerson3, $dLongPerson3, $dLatPerson2, $dLongPerson2);
		print "<br>";
		echo "Distance between Person 2 and Person 3 person: $myDist km";
		print "<br>";
		echo "Angle from Person 2 towards Person 3 person: $myAngle °";

		$myDist =                CalculateDistance($dLatPerson3, $dLongPerson3, $dLatPerson4, $dLongPerson4);
		$myAngle = CalculateAngleTowardsLostPerson($dLatPerson3, $dLongPerson3, $dLatPerson4, $dLongPerson4);
		print "<br>";
		echo "Distance between Person 4 and Person 3 person: $myDist km";
		print "<br>";
		echo "Angle from Person 4 towards Person 3 person: $myAngle °";
		print "<br>";


		print "<br>";
		print "<br>";

		echo "Person 4 is lost, Persons 1 to 3 are searching";

		$myDist =                CalculateDistance($dLatPerson4, $dLongPerson4, $dLatPerson1, $dLongPerson1);
		$myAngle = CalculateAngleTowardsLostPerson($dLatPerson4, $dLongPerson4, $dLatPerson1, $dLongPerson1);
		print "<br>";
		echo "Distance between Person 1 and Person 4 person: $myDist km";
		print "<br>";
		echo "Angle from Person 1 towards Person 4 person: $myAngle °";

		$myDist =                CalculateDistance($dLatPerson4, $dLongPerson4, $dLatPerson2, $dLongPerson2);
		$myAngle = CalculateAngleTowardsLostPerson($dLatPerson4, $dLongPerson4, $dLatPerson2, $dLongPerson2);
		print "<br>";
		echo "Distance between Person 2 and Person 3 person: $myDist km";
		print "<br>";
		echo "Angle from Person 2 towards Person 3 person: $myAngle °";

		$myDist =                CalculateDistance($dLatPerson4, $dLongPerson4, $dLatPerson3, $dLongPerson3);
		$myAngle = CalculateAngleTowardsLostPerson($dLatPerson4, $dLongPerson4, $dLatPerson3, $dLongPerson3);
		print "<br>";
		echo "Distance between Person 3 and Person 4 person: $myDist km";
		print "<br>";
		echo "Angle from Person 3 towards Person 4 person: $myAngle °";
		print "<br>";


?>

</body>
</html>

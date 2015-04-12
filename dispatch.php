<script type="text/javascript">
var count = 0;
function submitFrame(){
	var np = document.getElementById("npeers").value;
	
	for( i=0; i<np; i++){
		var pid = Math.floor((Math.random() * 99999) + 1);
		document.forms["nodeForm"].peerID.value = pid;
		document.forms["nodeForm"].target = 'nodeFrame' + i;
		document.forms["nodeForm"].resultFrameNumber.value = i;
		document.forms["nodeForm"].submit();
	}
}
</script>

<?php
//$peerID = 0;//$_POST['peerID'];
$name = $_POST['name'];
$hash = hash('sha256',$name,false);//$_POST['orgID'];
$orgID = $hash & 65535; //0xFF
$inputData = $_POST['inputData'];
$procedure = $_POST['procedure'];
$result = $_POST['result'];

$npeers = $_POST['inputLength'];
if( $npeers  ){

} else {
	$npeers = 10;
}

if( $peerID ){

} else {
	$peerID = rand(0,99999);
}

echo "<form id=\"nodeForm\" action=\"node.php\" method=\"post\" target=\"nodeFrame0\">";
echo "<input type=\"hidden\" name=\"name\" value=\"$name\">";
echo "<input type=\"hidden\" name=\"resultFrameNumber\" id=\"resultFrameNumber\">";
echo "<input type=\"hidden\" name=\"peerID\" id=\"peerID\">";
echo "<input type=\"hidden\" name=\"procedure\" value=\"$procedure\">";
echo "<input type=\"hidden\" name=\"inputData\" value=\"'$inputData'\">";;
echo "</form>";

//echo "<html><body onload=\"$procedure('$inputData')\">";
echo "<html>";

echo " <head><style>";
echo ".boxed {border: 2px solid black; padding: 10px;}";
echo "</style>
</head>";


echo "<body onload=\"submitFrame()\">";

echo "<form action=\"webapp.html\"><input type=\"submit\" value=\"WebApp\"></form>";

echo "<h3>$name ($orgID) Request</h3>";
echo "<div class=\"boxed\">";
echo "name: $name <br>";
echo "orgID: $orgID <br>";
echo "inputData: $inputData <br>";
echo "procedure: $procedure <br>";
echo "</div>";
echo "<br>";

echo "<h3> Distributed Node Computation </h3>";
echo "<form method=\"post\" action=\"dispatch.php\"><input type=\"hidden\" name=\"npeers\" id=\"npeers\" value=\"$npeers\">";
echo "Using $npeers peers.";
echo "<input type=\"hidden\" name=\"name\" value=\"$name\">";
echo "<input type=\"hidden\" name=\"peerID\" id=\"peerID\">";
echo "<input type=\"hidden\" name=\"orgID\" value=\"$orgID\">";
echo "<input type=\"hidden\" name=\"procedure\" value=\"$procedure\">";
echo "<input type=\"hidden\" name=\"inputData\" value=\"'$inputData'\">";
//echo "<input type=\"submit\"></form><br>";
echo "</form><br>";
for( $i=0; $i<$npeers; $i++){
	echo " <iframe name=\"nodeFrame$i\" width=\"10%\" id=\"nodeFrame$i\" src=\"node.php\"></iframe>";
}
//echo " <iframe name=\"nodeFrame\" width=\"10%\" id=\"nodeFrame\" src=\"node.php\"></iframe><br>";
echo "<br>";

echo "<h3> Backend Processing (Currency Minting) </h3>";
for( $i=0; $i<$npeers; $i++){
	echo " <iframe name=\"resultFrame$i\" width=\"50%\" height=\"175\" id=\"resultFrame$i\" src=\"backend.php\"></iframe><br>";
}
echo "<br>";

echo "</body></html>";
?>
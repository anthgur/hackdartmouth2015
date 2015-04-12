<script type="text/javascript">
function average(inputData){
	var arr = JSON.parse(inputData);
	var sum = 0;
	var index = document.getElementById("resultFrameNumber").value;
	var len = arr[index].length;
	for( i=0; i<len; i++){
		if( arr[index][i] ) sum += arr[index][i];
	}
	//var ave = sum/len;
	var ave = sum/len;
	document.getElementById("result").innerHTML = ave;
	document.getElementById("resultField").value = ave;
	
	document.getElementById("weight").value = 1/len;
	document.getElementById("subset").innerHTML = arr[index];
	document.forms["nodeResult"].submit();
}

function median(inputData){

}

function min(inputData){

}

function max(inputData){

}

</script>

<?php

$peerID = $_POST['peerID'];
$name = $_POST['name'];
$orgID = $_POST['orgID'];
$inputData = $_POST['inputData'];
$procedure = $_POST['procedure'];
$resultFrameNumber = $_POST['resultFrameNumber'];

echo "<form id=\"nodeResult\" action=\"backend.php\" method=\"post\" target=\"resultFrame$resultFrameNumber\">";
echo "<input type=\"hidden\" name=\"name\" value=\"$name\">";
echo "<input type=\"hidden\" name=\"peerID\" value=\"$peerID\">";
echo "<input type=\"hidden\" name=\"procedure\" value=\"$procedure\">";
echo "<input type=\"hidden\" name=\"resultFrameNumber\" id=\"resultFrameNumber\" value=\"$resultFrameNumber\">";
echo "<input type=\"hidden\" name=\"inputData\" value=\"'$inputData'\">";
echo "<input type=\"hidden\" name=\"weight\" id=\"weight\">";
echo "<input type=\"hidden\" name=\"result\" id=\"resultField\" value=\"$result\">";
echo "</form>";

echo "<html><body onload=\"$procedure($inputData)\">";
echo "peerID: $peerID";
echo "<br>";
echo "\"$procedure\" of: <br>[<a id=\"subset\"></a>] <br>";
echo "<br>";
echo "result: <a id=\"result\"></a>";
echo "<br>";
echo "</body></html>";

?>
<script type="text/javascript">
function average(inputData){
	var arr = JSON.parse(inputData);
	var len = arr.length;
	var sum = 0;
	for( i=0; i<len; i++){
		sum += arr[i];
	}
	var average = sum/len;
	document.getElementById("result").innerHTML = average;
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
$result = $_POST['result'];

echo "<html><body onload=\"$procedure('$inputData')\">";

echo "peerID: $peerID <br>";
echo "name: $name <br>";
echo "orgID: $orgID <br>";
echo "inputData: $inputData <br>";
echo "procedure: $procedure <br>";
echo "<br>";
echo "result: $result";

echo "</body></html>";
?>
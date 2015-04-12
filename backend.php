<?php

$peerID = $_POST['peerID'];
$name = $_POST['name'];
$orgID = $_POST['orgID'];
$inputData = $_POST['inputData'];
$procedure = $_POST['procedure'];
$result = $_POST['result'];
$weight = $_POST['weight'];

$verifiedPeerWork = hash_hmac('sha256', $result, $peerID, false);
$verifiedOrgWork = hash_hmac('sha256', $verifiedPeerWork, $orgID, false);
$computeCoinUnit = hash_hmac('sha256', $verifiedOrgWork, 123, false);

//echo "<html><body onload=\"$procedure('$inputData')\">";
echo "<html><body onload=\"\">";
echo "peerID: $peerID<br>";
echo "result: $result<br>";
echo "weight: $weight<br>";//<a id=\"weight\"><a><br>";
echo "<br>";
echo "verifiedPeerWork: $verifiedPeerWork<br>";
echo "verifiedOrgWork: $verifiedOrgWork<br>";
echo "<b>Compute Coin: $computeCoinUnit</b><br>";

$coins = fopen("coins.txt", "a");
if( $peerID != NULL ) fwrite($coins, "$peerID|$computeCoinUnit\n");
fclose($coins);

echo "</body></html>";
?>
<html>
<head></head>
<title>Jezzy's Potion Calculator</title>
<body>
<table style="width:40%">
<tr>
<th width=5%></th>
<th width=45%></th>
<th width=5%></th>
<th width=45%></th>
</tr>
<?php
include 'header.inc';
$server = "brynhildr";
$duskglow_url = "https://xivapi.com/market/$server/items/23182?key=$id";
$azimwater_url = "https://xivapi.com/market/$server/items/24255?key=$id";
$salt_url = "https://xivapi.com/market/$server/items/19907?key=$id" ;
$wc_url = "https://xivapi.com/market/$server/items/19?key=$id" ;
$lc_url = "https://xivapi.com/market/$server/items/18?key=$id" ;
$str_url = "https://xivapi.com/market/$server/items/24261?key=$id";
$dex_url = "https://xivapi.com/market/$server/items/24262?key=$id";
$int_url = "https://xivapi.com/market/$server/items/24264?key=$id";
$mind_url = "https://xivapi.com/market/$server/items/24265?key=$id";
$yanx_url = "https://xivapi.com/market/$server/items/19911?key=$id";
$alysum_url = "https://xivapi.com/market/$server/items/19912?key=$id";
$chickweed_url = "https://xivapi.com/market/$server/items/19914?key=$id";
$nipple_url = "https://xivapi.com/market/$server/items/19915?key=$id";

///////Parse Potion Basics///////
$duskglow_api = file_get_contents($duskglow_url);
$duskglow_price = json_decode($duskglow_api, true)[Prices][0][PricePerUnit];

$azimwater_api = file_get_contents($azimwater_url);
$azimwater_price = json_decode($azimwater_api, true)[Prices][0][PricePerUnit];

$salt_api = file_get_contents($salt_url);
$salt_price = json_decode($salt_api, true)[Prices][0][PricePerUnit];

$wc_api = file_get_contents($wc_url);
$wc_price = json_decode($wc_api, true)[Prices][0][PricePerUnit];

$lc_api = file_get_contents($lc_url);
$lc_price = json_decode($lc_api, true)[Prices][0][PricePerUnit];

$yanx_api = file_get_contents($yanx_url);
$yanx_price = json_decode($yanx_api, true)[Prices][0][PricePerUnit];

$alysum_api = file_get_contents($alysum_url);
$alysum_price = json_decode($alysum_api, true)[Prices][0][PricePerUnit];

$chickweed_api = file_get_contents($chickweed_url);
$chickweed_price = json_decode($chickweed_api, true)[Prices][0][PricePerUnit];

$nipple_api = file_get_contents($nipple_url);
$nipple_price = json_decode($nipple_api, true)[Prices][0][PricePerUnit];

$str_craft = round(($duskglow_price + $azimwater_price + $salt_price + $yanx_price + $wc_price + $lc_price + $wc_price + $lc_price) / 3);
$dex_craft = round(($duskglow_price + $azimwater_price + $salt_price + $alysum_price + $wc_price + $lc_price + $wc_price + $lc_price) / 3);
$int_craft = round(($duskglow_price + $azimwater_price + $salt_price + $chickweed_price + $wc_price + $lc_price + $wc_price + $lc_price) / 3);
$mind_craft = round(($duskglow_price + $azimwater_price + $salt_price + $nipple_price + $wc_price + $lc_price + $wc_price + $lc_price) / 3);

///////Parse STR///////
$str_api = file_get_contents($str_url);
//Search for HQ potion
$strrow = 0;
$str_price = json_decode($str_api, true)[Prices][$strrow];

while ($str_price[IsHQ] != "1") {
$strrow ++;
$str_price = json_decode($str_api, true)[Prices][$strrow];
}
echo "<tr><td><img src=https://xivapi.com/i/020000/020701.png></td><td>Lowest HQ STR: $str_price[PricePerUnit]<br>To Craft: $str_craft</td><td><img src=https://xivapi.com/i/025000/025016.png></td><td>Price: $yanx_price</td></tr>";
///////End STR Parse///////

///////Parse DEX///////
$dex_api = file_get_contents($dex_url);
//Search for HQ potion
$dexrow = 0;
$dex_price = json_decode($dex_api, true)[Prices][$dexrow];

while ($dex_price[IsHQ] != "1") {
$dexrow ++;
$dex_price = json_decode($dex_api, true)[Prices][$dexrow];
}
echo "<tr><td><img src=https://xivapi.com/i/020000/020702.png></td><td>Lowest HQ DEX: $dex_price[PricePerUnit]<br>To Craft: $dex_craft</td><td><img src=https://xivapi.com/i/022000/022627.png></td><td>Price: $alysum_price</td></tr>";
///////End DEX Parse///////

///////Parse INT///////
$int_api = file_get_contents($int_url);
//Search for HQ potion
$introw = 0;
$int_price = json_decode($int_api, true)[Prices][$introw];

while ($int_price[IsHQ] != "1") {
$introw ++;
$int_price = json_decode($int_api, true)[Prices][$introw];
}
echo "<tr><td><img src=https://xivapi.com/i/020000/020704.png></td><td>Lowest HQ INT: $int_price[PricePerUnit]<br>To Craft: $int_craft</td><td><img src=https://xivapi.com/i/025000/025008.png></td><td>Price: $chickweed_price</td></tr>";
///////End INT Parse///////

///////Parse MIND///////
$mind_api = file_get_contents($mind_url);
//Search for HQ potion
$mindrow = 0;
$mind_price = json_decode($mind_api, true)[Prices][$mindrow];

while ($mind_price[IsHQ] != "1") {
$mindrow ++;
$mind_price = json_decode($mind_api, true)[Prices][$mindrow];
}
echo "<tr><td><img src=https://xivapi.com/i/020000/020705.png></td><td>Lowest HQ MIND: $mind_price[PricePerUnit]<br>To Craft: $mind_craft</td><td><img src=https://xivapi.com/i/025000/025030.png></td><td>Price: $nipple_price</td></tr>";
///////End MIND Parse///////

//Duskglow
echo "<tr><td><img src=https://xivapi.com/i/021000/021006.png></td><td>Lowest Duskglow: $duskglow_price</td><td><img src=https://xivapi.com/i/020000/020017.png></td><td>Lowest Lightning Cluster: $lc_price </td></tr>";
//AzimWater
echo "<tr><td><img src=https://xivapi.com/i/022000/022678.png></td><td>Lowest Azim Spring Water: $azimwater_price</td><td><img src=https://xivapi.com/i/020000/020014.png></td><td>Lowest Water Cluster: $wc_price </td></tr>";
//Salt
echo "<tr><td><img src=https://xivapi.com/i/022000/022617.png></td><td>Lowest Ala Mhigan Salt Crystal: $salt_price</td></tr>";

?>
</body>
</html>
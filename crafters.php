<html>
<head></head>
<title>Jezzy's Crafting Gear Calculator</title>
<body>
</tr>
<?php
include 'function.inc';
include 'config.inc';

////////////Setting Gear ID Numbers//////////////
$headid = $CraftLeft_id;
$bodyid = $CraftLeft_id + 1;
$glovesid = $CraftLeft_id + 2;
$legsid = $CraftLeft_id + 3;
$feetid = $CraftLeft_id + 4;
$waistid = $CraftLeft_id + 5;
$earid = $CraftRight_id;
$neckid = $CraftRight_id + 1;
$wristid = $CraftRight_id + 2;
$ringid = $CraftRight_id + 3;
//////////////End Gear ID numbers//////////////


/////////////Gear API URLs/////////////
$GLOBALS['price_head'] = "https://xivapi.com/market/$server/items/$headid?key=$id";
$GLOBALS['price_body'] = "https://xivapi.com/market/$server/items/$bodyid?key=$id";
$GLOBALS['price_gloves'] = "https://xivapi.com/market/$server/items/$glovesid?key=$id" ;
$GLOBALS['price_waist'] = "https://xivapi.com/market/$server/items/$waistid?key=$id" ;
$GLOBALS['price_legs'] = "https://xivapi.com/market/$server/items/$legsid?key=$id" ;
$GLOBALS['price_feet'] = "https://xivapi.com/market/$server/items/$feetid?key=$id";
$GLOBALS['price_ear'] = "https://xivapi.com/market/$server/items/$earid?key=$id";
$GLOBALS['price_neck'] = "https://xivapi.com/market/$server/items/$neckid?key=$id";
$GLOBALS['price_wrist'] = "https://xivapi.com/market/$server/items/$wristid?key=$id";
$GLOBALS['price_ring'] = "https://xivapi.com/market/$server/items/$ringid?key=$id";
/////////////End Gear API URLs/////////////


/////////////Setting up the 6 Column Table/////////////
?>
<table style="width:40%">
<tr>
<th width=5%></th>
<th width=5%></th>
<th width=40%></th>
<th width=5%></th>
<th width=5%></th>
<th width=40%></th>
<?php
/////////////Finish Table/////////////


/////////////Execute Fetch for each Slot/////////////
fetch(head);
fetch(body);
fetch(gloves);
fetch(waist);
fetch(legs);
fetch(feet);
fetch(ear);
fetch(neck);
fetch(wrist);
fetch(ring);
/////////////Finish Fetch for each Slot/////////////

/////////////Echo Slot Variables into table/////////////
echo "<tr><td>$head</tr>";
echo "<tr><td>$body <td>$ear</td></tr>";
echo "<tr><td>$gloves <td>$neck</td></tr>";
echo "<tr><td>$waist <td>$wrist</td></tr>";
echo "<tr><td>$legs <td>$ring</td></tr>";
echo "<tr><td>$feet <td>$ring</td></tr>";
/////////////Finish Table/////////////

?>

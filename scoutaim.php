<html>
<head></head>
<title>Jezzy's Aiming/Scouting Gear Calculator</title>
<body>
</tr>
<?php
include 'function.inc';
include 'config.inc';

////////////Setting Gear ID Numbers//////////////
$headid1 = $AimLeft_id;
$bodyid1 = $AimLeft_id + 1;
$glovesid1 = $AimLeft_id + 2;
$legsid1 = $AimLeft_id + 3;
$feetid1 = $AimLeft_id + 4;
$waistid1 = $AimLeft_id + 5;

$headid2 = $ScoutLeft_id;
$bodyid2 = $ScoutLeft_id + 1;
$glovesid2 = $ScoutLeft_id + 2;
$legsid2 = $ScoutLeft_id + 3;
$feetid2 = $ScoutLeft_id + 4;
$waistid2 = $ScoutLeft_id + 5;

$earid = $AimRight_id;
$neckid = $AimRight_id + 5;
$wristid = $AimRight_id + 10;
$ringid = $AimRight_id + 15;
//////////////End Gear ID numbers//////////////


/////////////Gear API URLs/////////////
$GLOBALS['price_head1'] = "https://xivapi.com/market/$server/items/$headid1?key=$id";
$GLOBALS['price_body1'] = "https://xivapi.com/market/$server/items/$bodyid1?key=$id";
$GLOBALS['price_gloves1'] = "https://xivapi.com/market/$server/items/$glovesid1?key=$id" ;
$GLOBALS['price_legs1'] = "https://xivapi.com/market/$server/items/$legsid1?key=$id" ;
$GLOBALS['price_feet1'] = "https://xivapi.com/market/$server/items/$feetid1?key=$id";
$GLOBALS['price_waist1'] = "https://xivapi.com/market/$server/items/$waistid1?key=$id" ;

$GLOBALS['price_head2'] = "https://xivapi.com/market/$server/items/$headid2?key=$id";
$GLOBALS['price_body2'] = "https://xivapi.com/market/$server/items/$bodyid2?key=$id";
$GLOBALS['price_gloves2'] = "https://xivapi.com/market/$server/items/$glovesid2?key=$id" ;
$GLOBALS['price_legs2'] = "https://xivapi.com/market/$server/items/$legsid2?key=$id" ;
$GLOBALS['price_feet2'] = "https://xivapi.com/market/$server/items/$feetid2?key=$id";
$GLOBALS['price_waist2'] = "https://xivapi.com/market/$server/items/$waistid2?key=$id" ;

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
<th width=20%></th>
<th width=5%></th>
<th width=5%></th>
<th width=20%></th>
<th width=5%></th>
<th width=5%></th>
<th width=35%></th>
<?php
/////////////Finish Table/////////////


/////////////Execute Fetch for each Slot/////////////
fetch(head1);
fetch(body1);
fetch(gloves1);
fetch(waist1);
fetch(legs1);
fetch(feet1);

fetch(head2);
fetch(body2);
fetch(gloves2);
fetch(waist2);
fetch(legs2);
fetch(feet2);

fetch(ear);
fetch(neck);
fetch(wrist);
fetch(ring);
/////////////Finish Fetch for each Slot/////////////

/////////////Echo Slot Variables into table/////////////
echo "<tr><td>$head1<td>$head2</tr>";
echo "<tr><td>$body1<td>$body2 <td>$ear</td></tr>";
echo "<tr><td>$gloves1<td>$gloves2 <td>$neck</td></tr>";
echo "<tr><td>$waist1<td>$waist2 <td>$wrist</td></tr>";
echo "<tr><td>$legs1<td>$legs2 <td>$ring</td></tr>";
echo "<tr><td>$feet1<td>$feet2 <td>$ring</td></tr>";
/////////////Finish Table/////////////

?>

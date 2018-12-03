<html>
<head></head>
<title>Jezzy's Lowest Item On Crystal Locator</title>
<body>
<?php
//$item_id = 23815;  ///Enter Item ID from XIVDB here
$item_id = $_GET["item_id"];


$fetchxivdb  = "https://api.xivdb.com/item/$item_id";
$fetch_api = file_get_contents($fetchxivdb);
$xivdb_api = json_decode($fetch_api, true);
$item_icon = $xivdb_api[craftable][0][icon];
$item_name = $xivdb_api[craftable][0][name];
$row = 0;
include 'function.inc';
include 'config.inc';
$servers = array("Balmung", "Brynhildr", "Coeurl", "Diabolos", "Goblin", "Malboro", "Mateus", "Zalera");
echo "<br> <img src=$item_icon> - $item_name";
foreach ($servers as $server){
$item = "https://xivapi.com/market/$server/items/$item_id?key=$keyid";
$item_api = file_get_contents($item);

$row = 0;
$fetch_price = json_decode($item_api, true)[Prices][$row];


while ($fetch_price[IsHQ] != "1" && $fetch_price[PricePerUnit] != null) {
$row ++;
$fetch_price = json_decode($item_api, true)[Prices][$row];
}
$fetch_ppu = $fetch_price[PricePerUnit];

if ($fetch_ppu == null) {
echo "<br>$server - None Listed";
} else {
echo "<br>$server - $fetch_ppu";
}
}
?>
</body>
</html>

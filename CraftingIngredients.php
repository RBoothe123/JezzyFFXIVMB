<html>
<head></head>
<title>Jezzy's Item Price Crafting Calculator</title>
<body>
<?php
//$item_id = 23815;  ///Enter Item ID from XIVDB here
$item_id = $_GET["item_id"];


include 'config.inc';
$fetchxivdb  = "https://api.xivdb.com/item/$item_id";
$fetch_api = file_get_contents($fetchxivdb);
$fetch_percraft = json_decode($fetch_api, true)[craftable][0][craft_quantity];
$fetch_craft = json_decode($fetch_api, true)[craftable][0][tree];
$fetchMB = "https://xivapi.com/market/brynhildr/items/$item_id?key=$keyid";
$fetchMBJSON =  file_get_contents($fetchMB);
$row = 0;
$fetchMB_craft = json_decode($fetchMBJSON, true)[Prices][$row];
$fetchmb_icon = json_decode($fetchMBJSON, true)[Item][Icon];
$fetch_mbname = json_decode($fetchMBJSON, true)[Item][Name];
$fetchmb_price = json_decode($fetchMBJSON, true)[Prices][$row];

//Find the lowest price HQ
while ($fetchMB_craft[IsHQ] != "1" && $fetch_price[PricePerUnit] != null) {
$row ++;
$fetchmb_price = json_decode($fetchMBJSON, true)[Prices][$row];
}
echo "<br> <img src=https://xivapi.com/$fetchmb_icon> - $fetch_mbname - $fetchmb_price[PricePerUnit] per Item";


/////////////Fetch Ingredient List from XIVDB/////////////
foreach ($fetch_craft as $craft_id){
  $craft_item[] = $craft_id[id];
}

$ingredient_row = 0;
foreach ($craft_item as $ingredient_id){
  $qty_per_craft = $fetch_craft[$ingredient_row][quantity];
  $ingredient_api = "https://xivapi.com/market/$server/items/$ingredient_id?key=$keyid";
  $fetch_ingredient_api = file_get_contents($ingredient_api);
  $fetch_ingredient = json_decode($fetch_ingredient_api, true);
  $ingredient_icon = $fetch_ingredient[Item][Icon];
  $ingredient_name = $fetch_ingredient[Item][Name];
  $fetch_ingredient_ppu = $fetch_ingredient[Prices][0][PricePerUnit];
  $totalcraftprice = $totalcraftprice + ($fetch_ingredient_ppu * $qty_per_craft);
  echo "<br> <img src=https://xivapi.com/$ingredient_icon>x$qty_per_craft - $ingredient_name - $fetch_ingredient_ppu ";
  $ingredient_row ++;
}

$totalcraftpricePU = round($totalcraftprice / $fetch_percraft);
if ($totalcraftpricePU < $fetchmb_price[PricePerUnit]) {
echo "<br> <img src=check.png height=40 width=40>Total Craft Price: $totalcraftpricePU per Item";
} else {
echo "<br> <img src=x.png height=40 width=40>Total Craft Price: $totalcraftpricePU per Item";
}


?>
</body>
</html>

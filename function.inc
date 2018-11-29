<?php
/////////////Fetch Function/////////////
function fetch($slot){
global $character;
global ${ 'price_' . $slot};
$fetch = ${ 'price_' . $slot};
$fetch_api = file_get_contents($fetch);
$row = 0;
$fetch_price = json_decode($fetch_api, true)[Prices][$row];
$fetch_icon = json_decode($fetch_api, true)[Item][Icon];
$fetch_name = json_decode($fetch_api, true)[Item][Name];
if ($fetch_price[PricePerUnit] == null) { 												//Check to see if the item is even up to start
$GLOBALS["$slot"] = "<img src=x.png height=40 width=40></td><td><img src=https://xivapi.com/$fetch_icon title=\"$fetch_name\"></td><td> no $slot available $fetch_price[PricePerUnit]</td>";
} else {
while ($fetch_price[IsHQ] != "1" && $fetch_price[PricePerUnit] != null) {								//Find the lowest price HQ
$row ++;
$fetch_price = json_decode($fetch_api, true)[Prices][$row];
}
if ($fetch_price[PricePerUnit] == null) { 												//Check to see if the item exists after searching for HQ
$GLOBALS["$slot"] = "<img src=x.png height=40 width=40></td><td><img src=https://xivapi.com/$fetch_icon title=\"$fetch_name\"></td><td> no HQ $slot available $fetch_price[PricePerUnit]</td>";
} else {
if ($fetch_price[CraftSignature] == "$character"){											//Check Crafting Signature to match yours
$GLOBALS["$slot"] = "<img src=check.png height=40 width=40></td><td><img src=https://xivapi.com/$fetch_icon title=\"$fetch_name\"></td><td>Lowest HQ: $fetch_price[PricePerUnit]</td>";  //Crafting Sig is yours
} else {
$GLOBALS["$slot"] = "<img src=x.png height=40 width=40></td><td><img src=https://xivapi.com/$fetch_icon title=\"$fetch_name\"></td><td>Lowest HQ: $fetch_price[PricePerUnit]</td>";  //Crafting Sig is NOT yours
}
}
}
}
/////////////End Fetch Function/////////////
?>
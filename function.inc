<?php
/////////////Fetch Function/////////////
function fetch($slot){
global $character;
global ${ 'price_' . $slot};
$fetch = ${ 'price_' . $slot};
$fetch_api = file_get_contents($fetch);
$row = 0;
$rowup = 0;
$fetch_price = json_decode($fetch_api, true)[Prices][$row];
$fetch_up = json_decode($fetch_api, true)[Prices][$rowup];
$fetch_icon = json_decode($fetch_api, true)[Item][Icon];
$fetch_name = json_decode($fetch_api, true)[Item][Name];

//Check to see if the item is even up to start
if ($fetch_price[PricePerUnit] == null) {
$GLOBALS["$slot"] = "<img src=x.png height=40 width=40></td><td<img src=x.png height=40 width=40></td><td><img src=https://xivapi.com/$fetch_icon title=\"$fetch_name\"></td><td> no $slot available $fetch_price[PricePerUnit]</td>";
} else {

//Find the lowest price HQ
while ($fetch_price[IsHQ] != "1" && $fetch_price[PricePerUnit] != null) {
$row ++;
$fetch_price = json_decode($fetch_api, true)[Prices][$row];
}

//Find if YOU have one up on the board WIP
while ($fetch_up[CraftSignature] != "$character" && $fetch_up[PricePerUnit] != null) {
$rowup ++;
$fetch_up = json_decode($fetch_api, true)[Prices][$rowup];
}
if ($fetch_up[CraftSignature] == "$character"){
  $up = "check";
} else {
  $up = "x";
}

//Check to see if the item exists after searching for HQ
if ($fetch_price[PricePerUnit] == null) {
$GLOBALS["$slot"] = "<img src=$up.png height=40 width=40></td><td><img src=x.png height=40 width=40></td><td><img src=https://xivapi.com/$fetch_icon title=\"$fetch_name\"></td><td> no HQ $slot available $fetch_price[PricePerUnit]</td>";
} else {
//Check Crafting Signature to match yours
if ($fetch_price[CraftSignature] == "$character"){
$GLOBALS["$slot"] = "<img src=$up.png height=40 width=40></td><td><img src=check.png height=40 width=40></td><td><img src=https://xivapi.com/$fetch_icon title=\"$fetch_name\"></td><td>Lowest HQ: $fetch_price[PricePerUnit]</td>";  //Crafting Sig is yours

} else {
$GLOBALS["$slot"] = "<img src=$up.png height=40 width=40></td><td><img src=x.png height=40 width=40></td><td><img src=https://xivapi.com/$fetch_icon title=\"$fetch_name\"></td><td>Lowest HQ: $fetch_price[PricePerUnit]</td>";  //Crafting Sig is NOT yours
}
}
}
}
/////////////End Fetch Function/////////////
?>

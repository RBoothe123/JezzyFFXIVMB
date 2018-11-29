<html>
<head></head>
<title>Jezzy's Battle Weapons Gear Calculator</title>
<body>
</tr>
<?php
include 'function.inc';
include 'config.inc';

////////////Setting Gear ID Numbers//////////////
$pldid = $Weapon_id;
$mnkid = $Weapon_id + 1;
$warid = $Weapon_id + 2;
$drgid = $Weapon_id + 3;
$brdid = $Weapon_id + 4;
$ninid = $Weapon_id + 5;
$drkid = $Weapon_id + 6;
$mchid = $Weapon_id + 7;
$whmid = $Weapon_id + 8;
$blmid = $Weapon_id + 9;
$smnid = $Weapon_id + 10;
$schid = $Weapon_id + 11;
$astid = $Weapon_id + 12;
$samid = $Weapon_id + 13;
$rdmid = $Weapon_id + 14;

$crpMid = $CraftWeaponMH_id;
$bsmMid = $CraftWeaponMH_id +1;
$armMid = $CraftWeaponMH_id + 2;
$gsmMid = $CraftWeaponMH_id + 3;
$ltwMid = $CraftWeaponMH_id + 4;
$wvrMid = $CraftWeaponMH_id + 5;
$alcMid = $CraftWeaponMH_id + 6;
$culMid = $CraftWeaponMH_id + 7;

$crpOid = $CraftWeaponOH_id;
$bsmOid = $CraftWeaponOH_id +1;
$armOid = $CraftWeaponOH_id + 2;
$gsmOid = $CraftWeaponOH_id + 3;
$ltwOid = $CraftWeaponOH_id + 4;
$wvrOid = $CraftWeaponOH_id + 5;
$alcOid = $CraftWeaponOH_id + 6;
$culOid = $CraftWeaponOH_id + 7;
//////////////End Gear ID numbers//////////////


/////////////Gear API URLs/////////////
$GLOBALS['price_pld'] = "https://xivapi.com/market/$server/items/$pldid?key=$id";
$GLOBALS['price_mnk'] = "https://xivapi.com/market/$server/items/$mnkid?key=$id";
$GLOBALS['price_war'] = "https://xivapi.com/market/$server/items/$warid?key=$id" ;
$GLOBALS['price_drg'] = "https://xivapi.com/market/$server/items/$drgid?key=$id" ;
$GLOBALS['price_brd'] = "https://xivapi.com/market/$server/items/$brdid?key=$id" ;
$GLOBALS['price_nin'] = "https://xivapi.com/market/$server/items/$ninid?key=$id";
$GLOBALS['price_drk'] = "https://xivapi.com/market/$server/items/$drkid?key=$id";
$GLOBALS['price_mch'] = "https://xivapi.com/market/$server/items/$mchid?key=$id";
$GLOBALS['price_whm'] = "https://xivapi.com/market/$server/items/$whmid?key=$id";
$GLOBALS['price_blm'] = "https://xivapi.com/market/$server/items/$blmid?key=$id";
$GLOBALS['price_smn'] = "https://xivapi.com/market/$server/items/$smnid?key=$id";
$GLOBALS['price_sch'] = "https://xivapi.com/market/$server/items/$schid?key=$id";
$GLOBALS['price_ast'] = "https://xivapi.com/market/$server/items/$astid?key=$id";
$GLOBALS['price_sam'] = "https://xivapi.com/market/$server/items/$samid?key=$id";
$GLOBALS['price_rdm'] = "https://xivapi.com/market/$server/items/$rdmid?key=$id";

$GLOBALS['price_crpM'] = "https://xivapi.com/market/$server/items/$crpMid?key=$id";
$GLOBALS['price_bsmM'] = "https://xivapi.com/market/$server/items/$bsmMid?key=$id";
$GLOBALS['price_armM'] = "https://xivapi.com/market/$server/items/$armMid?key=$id";
$GLOBALS['price_gsmM'] = "https://xivapi.com/market/$server/items/$gsmMid?key=$id";
$GLOBALS['price_ltwM'] = "https://xivapi.com/market/$server/items/$ltwMid?key=$id";
$GLOBALS['price_wvrM'] = "https://xivapi.com/market/$server/items/$wvrMid?key=$id";
$GLOBALS['price_alcM'] = "https://xivapi.com/market/$server/items/$alcMid?key=$id";
$GLOBALS['price_culM'] = "https://xivapi.com/market/$server/items/$culMid?key=$id";

$GLOBALS['price_crpO'] = "https://xivapi.com/market/$server/items/$crpOid?key=$id";
$GLOBALS['price_bsmO'] = "https://xivapi.com/market/$server/items/$bsmOid?key=$id";
$GLOBALS['price_armO'] = "https://xivapi.com/market/$server/items/$armOid?key=$id";
$GLOBALS['price_gsmO'] = "https://xivapi.com/market/$server/items/$gsmOid?key=$id";
$GLOBALS['price_ltwO'] = "https://xivapi.com/market/$server/items/$ltwOid?key=$id";
$GLOBALS['price_wvrO'] = "https://xivapi.com/market/$server/items/$wvrOid?key=$id";
$GLOBALS['price_alcO'] = "https://xivapi.com/market/$server/items/$alcOid?key=$id";
$GLOBALS['price_culO'] = "https://xivapi.com/market/$server/items/$culOid?key=$id";
/////////////End Gear API URLs/////////////


/////////////Execute Fetch for each Slot/////////////
fetch(wvrM);
echo "$wvrM";
/////////////Finish Fetch for each Slot/////////////

/////////////Echo Slot Variables into table/////////////$wrvM<td>
/////////////Finish Table/////////////

?>

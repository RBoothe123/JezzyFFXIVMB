<html>
<head></head>
<title>Jezzy's Weapons Calculator</title>
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
$bsmMid = $CraftWeaponMH_id + 1;
$armMid = $CraftWeaponMH_id + 2;
$gsmMid = $CraftWeaponMH_id + 3;
$ltwMid = $CraftWeaponMH_id + 4;
$wvrMid = $CraftWeaponMH_id + 5;
$alcMid = $CraftWeaponMH_id + 6;
$culMid = $CraftWeaponMH_id + 7;

$crpOid = $CraftWeaponOH_id;
$bsmOid = $CraftWeaponOH_id + 1;
$armOid = $CraftWeaponOH_id + 2;
$gsmOid = $CraftWeaponOH_id + 3;
$ltwOid = $CraftWeaponOH_id + 4;
$wvrOid = $CraftWeaponOH_id + 5;
$alcOid = $CraftWeaponOH_id + 6;
$culOid = $CraftWeaponOH_id + 7;

$minMid = $GathWeaponMH_id;
$btnMid = $GathWeaponMH_id + 1;
$fshMid = $GathWeaponMH_id + 2;

$minOid = $GathWeaponOH_id;
$btnOid = $GathWeaponOH_id + 1;
//////////////End Gear ID numbers//////////////


/////////////Gear API URLs/////////////
$GLOBALS['price_pld'] = "https://xivapi.com/market/$server/items/$pldid?key=$keyid";
$GLOBALS['price_mnk'] = "https://xivapi.com/market/$server/items/$mnkid?key=$keyid";
$GLOBALS['price_war'] = "https://xivapi.com/market/$server/items/$warid?key=$keyid" ;
$GLOBALS['price_drg'] = "https://xivapi.com/market/$server/items/$drgid?key=$keyid" ;
$GLOBALS['price_brd'] = "https://xivapi.com/market/$server/items/$brdid?key=$keyid" ;
$GLOBALS['price_nin'] = "https://xivapi.com/market/$server/items/$ninid?key=$keyid";
$GLOBALS['price_drk'] = "https://xivapi.com/market/$server/items/$drkid?key=$keyid";
$GLOBALS['price_mch'] = "https://xivapi.com/market/$server/items/$mchid?key=$keyid";
$GLOBALS['price_whm'] = "https://xivapi.com/market/$server/items/$whmid?key=$keyid";
$GLOBALS['price_blm'] = "https://xivapi.com/market/$server/items/$blmid?key=$keyid";
$GLOBALS['price_smn'] = "https://xivapi.com/market/$server/items/$smnid?key=$keyid";
$GLOBALS['price_sch'] = "https://xivapi.com/market/$server/items/$schid?key=$keyid";
$GLOBALS['price_ast'] = "https://xivapi.com/market/$server/items/$astid?key=$keyid";
$GLOBALS['price_sam'] = "https://xivapi.com/market/$server/items/$samid?key=$keyid";
$GLOBALS['price_rdm'] = "https://xivapi.com/market/$server/items/$rdmid?key=$keyid";

$GLOBALS['price_crpM'] = "https://xivapi.com/market/$server/items/$crpMid?key=$keyid";
$GLOBALS['price_bsmM'] = "https://xivapi.com/market/$server/items/$bsmMid?key=$keyid";
$GLOBALS['price_armM'] = "https://xivapi.com/market/$server/items/$armMid?key=$keyid";
$GLOBALS['price_gsmM'] = "https://xivapi.com/market/$server/items/$gsmMid?key=$keyid";
$GLOBALS['price_ltwM'] = "https://xivapi.com/market/$server/items/$ltwMid?key=$keyid";
$GLOBALS['price_wvrM'] = "https://xivapi.com/market/$server/items/$wvrMid?key=$keyid";
$GLOBALS['price_alcM'] = "https://xivapi.com/market/$server/items/$alcMid?key=$keyid";
$GLOBALS['price_culM'] = "https://xivapi.com/market/$server/items/$culMid?key=$keyid";

$GLOBALS['price_crpO'] = "https://xivapi.com/market/$server/items/$crpOid?key=$keyid";
$GLOBALS['price_bsmO'] = "https://xivapi.com/market/$server/items/$bsmOid?key=$keyid";
$GLOBALS['price_armO'] = "https://xivapi.com/market/$server/items/$armOid?key=$keyid";
$GLOBALS['price_gsmO'] = "https://xivapi.com/market/$server/items/$gsmOid?key=$keyid";
$GLOBALS['price_ltwO'] = "https://xivapi.com/market/$server/items/$ltwOid?key=$keyid";
$GLOBALS['price_wvrO'] = "https://xivapi.com/market/$server/items/$wvrOid?key=$keyid";
$GLOBALS['price_alcO'] = "https://xivapi.com/market/$server/items/$alcOid?key=$keyid";
$GLOBALS['price_culO'] = "https://xivapi.com/market/$server/items/$culOid?key=$keyid";

$GLOBALS['price_minM'] = "https://xivapi.com/market/$server/items/$minMid?key=$keyid";
$GLOBALS['price_btnM'] = "https://xivapi.com/market/$server/items/$btnMid?key=$keyid";
$GLOBALS['price_fshM'] = "https://xivapi.com/market/$server/items/$fshMid?key=$keyid";

$GLOBALS['price_minO'] = "https://xivapi.com/market/$server/items/$minOid?key=$keyid";
$GLOBALS['price_btnO'] = "https://xivapi.com/market/$server/items/$btnOid?key=$keyid";


/////////////End Gear API URLs/////////////

include 'tablesetup.inc';

/////////////Execute Fetch for each Slot/////////////
fetch(pld);
fetch(mnk);
fetch(war);
fetch(drg);
fetch(brd);
fetch(nin);
fetch(drk);
fetch(mch);
fetch(whm);
fetch(blm);
fetch(smn);
fetch(sch);
fetch(ast);
fetch(sam);
fetch(rdm);

fetch(crpM);
fetch(bsmM);
fetch(armM);
fetch(gsmM);
fetch(ltwM);
fetch(wvrM);
fetch(alcM);
fetch(culM);

fetch(crpO);
fetch(bsmO);
fetch(armO);
fetch(gsmO);
fetch(ltwO);
fetch(wvrO);
fetch(alcO);
fetch(culO);

fetch(minM);
fetch(btnM);
fetch(fshM);

fetch(minO);
fetch(btnO);
/////////////Finish Fetch for each Slot/////////////

/////////////Echo Slot Variables into table/////////////
echo "<tr><td>$pld<td> $mnk</td></tr>";
echo "<tr><td>$war<td> $drg</td></tr>";
echo "<tr><td>$brd<td> $nin</td></tr>";
echo "<tr><td>$drk<td> $mch</td></tr>";
echo "<tr><td>$whm<td> $blm</td></tr>";
echo "<tr><td>$smn<td> $sch</td></tr>";
echo "<tr><td>$sam<td> $rdm</td></tr>";
echo "<tr><td>$ast<td> $fshM</td></tr>";
echo "<tr><td>$crpM<td> $crpO</td></tr>";
echo "<tr><td>$bsmM<td> $bsmO</td></tr>";
echo "<tr><td>$armM<td> $armO</td></tr>";
echo "<tr><td>$gsmM<td> $gsmO</td></tr>";
echo "<tr><td>$ltwM<td> $ltwO</td></tr>";
echo "<tr><td>$wvrM<td> $wvrO</td></tr>";
echo "<tr><td>$alcM<td> $alcO</td></tr>";
echo "<tr><td>$culM<td> $culO</td></tr>";
echo "<tr><td>$minM<td> $minO</td></tr>";
echo "<tr><td>$btnM<td> $btnO</td></tr>";
/////////////Finish Table/////////////

?>

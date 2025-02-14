<?php
// php onustate.php &
// Initialize a variable into domain name
$lokasi = snmpwalk("2.0.21.200", "grahamedia", ".1.3.6.1.4.1.3902.1012.3.28.1.1.3"); 
//$status = snmpwalk("2.0.21.200", "grahamedia", "ZXGPON-SERVICE-MIB::zxGponOntPhaseState"); 
//$lastonline = snmpwalk("2.0.21.200", "grahamedia", "ZXGPON-SERVICE-MIB::zxGponOnuLastOnlineTime"); 
//$lastoffline = snmpwalk("2.0.21.200", "grahamedia", "ZXGPON-SERVICE-MIB::zxGponOnuLastOfflineTime");
$onurx = snmpwalk("2.0.21.200", "grahamedia", ".1.3.6.1.4.1.3902.1012.3.50.12.1.1.10");
$onutx = snmpwalk("2.0.21.200", "grahamedia", ".1.3.6.1.4.1.3902.1012.3.50.12.1.1.14");

print_r($lokasi);
print_r($onurx);

?>

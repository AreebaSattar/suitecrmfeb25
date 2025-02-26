<?php

if (!defined('sugarEntry')) define('sugarEntry', true);
require_once('include/entryPoint.php');

// Load beans
$opp = BeanFactory::newBean('Opportunities');
$brand = BeanFactory::getBean('new_Brands');

echo "<h2>Module Class Names</h2>";
echo "Opportunities class: " . get_class($opp) . "<br>";
echo "new_Brands class: " . get_class($brand) . "<br>";

echo "<h2>Checking Link Fields in Opportunities</h2>";
echo "<pre>";
var_dump(isset($opp->field_defs['opportunities_brands']));
if (isset($opp->field_defs['opportunities_brands'])) {
    var_dump($opp->field_defs['opportunities_brands']);
}
echo "</pre>";

echo "<h2>Checking Link Fields in new_Brands</h2>";
echo "<pre>";
var_dump(isset($brand->field_defs['opportunities_brands']));
if (isset($brand->field_defs['opportunities_brands'])) {
    var_dump($brand->field_defs['opportunities_brands']);
}
echo "</pre>";

echo "<h2>All Opportunities Fields</h2>";
echo "<pre>";
print_r(array_keys($opp->field_defs));
echo "</pre>";

echo "<h2>All new_Brands Fields</h2>";
echo "<pre>";
print_r(array_keys($brand->field_defs));
echo "</pre>";
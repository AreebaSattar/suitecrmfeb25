<?php

if (!defined('sugarEntry')) define('sugarEntry', true);
require_once('include/entryPoint.php');

// Get instances of each module
$opp = BeanFactory::newBean('Opportunities');
$brand = BeanFactory::newBean('new_Brands');

// Print all fields, focusing on links
echo "<h2>Opportunities Fields:</h2>";
echo "<pre>";
print_r(array_filter($opp->field_defs, function ($f) {
    return isset($f['type']) && $f['type'] == 'link';
}));
echo "</pre>";

echo "<h2>new_Brands Fields:</h2>";
echo "<pre>";
print_r(array_filter($brand->field_defs, function ($f) {
    return isset($f['type']) && $f['type'] == 'link';
}));
echo "</pre>";
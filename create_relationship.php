<?php
// File: create_relationship.php
// Place this file in your SugarCRM root directory and run with PHP

// Define the relationship details
$lhs_module = 'Opportunities';
$rhs_module = 'new_Brands';
$relationship_name = 'opportunities_brands';

// Create directories if they don't exist
$directories = [
    'custom/Extension/modules/Relationships/relationships',
    'custom/Extension/modules/Relationships/vardefs',
    "custom/Extension/modules/{$lhs_module}/Ext/Vardefs",
    "custom/Extension/modules/{$rhs_module}/Ext/Vardefs",
    "custom/Extension/modules/{$lhs_module}/Ext/Language",
    "custom/Extension/modules/{$rhs_module}/Ext/Language",
    "custom/Extension/modules/{$lhs_module}/Ext/Layoutdefs",
    "custom/Extension/modules/{$rhs_module}/Ext/Layoutdefs",
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
        echo "Created directory: {$dir}\n";
    }
}

// Create the relationship metadata file
$metadata_file = 'custom/Extension/modules/Relationships/relationships/' . $relationship_name . 'MetaData.php';
$metadata_content = '<?php
$dictionary["' . $relationship_name . '"] = array(
    "true_relationship_type" => "many-to-many",
    "from_studio" => true,
    "relationships" => array(
        "' . $relationship_name . '" => array(
            "lhs_module" => "' . $lhs_module . '",
            "lhs_table" => "' . strtolower($lhs_module) . '",
            "lhs_key" => "id",
            "rhs_module" => "' . $rhs_module . '",
            "rhs_table" => "' . strtolower($rhs_module) . '",
            "rhs_key" => "id",
            "relationship_type" => "many-to-many",
            "join_table" => "' . $relationship_name . '",
            "join_key_lhs" => "' . strtolower($lhs_module) . '_id",
            "join_key_rhs" => "' . strtolower($rhs_module) . '_id",
        ),
    ),
    "table" => "' . $relationship_name . '",
    "fields" => array(
        "id" => array(
            "name" => "id",
            "type" => "varchar",
            "len" => 36,
        ),
        "date_modified" => array(
            "name" => "date_modified",
            "type" => "datetime",
        ),
        "deleted" => array(
            "name" => "deleted",
            "type" => "bool",
            "len" => "1",
            "default" => "0",
            "required" => true,
        ),
        "' . strtolower($lhs_module) . '_id" => array(
            "name" => "' . strtolower($lhs_module) . '_id",
            "type" => "varchar",
            "len" => 36,
        ),
        "' . strtolower($rhs_module) . '_id" => array(
            "name" => "' . strtolower($rhs_module) . '_id",
            "type" => "varchar",
            "len" => 36,
        ),
    ),
    "indices" => array(
        array(
            "name" => "' . $relationship_name . '_pk",
            "type" => "primary",
            "fields" => array("id"),
        ),
        array(
            "name" => "' . $relationship_name . '_ida1",
            "type" => "index",
            "fields" => array("' . strtolower($lhs_module) . '_id"),
        ),
        array(
            "name" => "' . $relationship_name . '_idb2",
            "type" => "index",
            "fields" => array("' . strtolower($rhs_module) . '_id"),
        ),
        array(
            "name" => "' . $relationship_name . '_ida1_deleted",
            "type" => "index",
            "fields" => array("' . strtolower($lhs_module) . '_id", "deleted"),
        ),
        array(
            "name" => "' . $relationship_name . '_idb2_deleted",
            "type" => "index",
            "fields" => array("' . strtolower($rhs_module) . '_id", "deleted"),
        ),
    ),
);
';

file_put_contents($metadata_file, $metadata_content);
echo "Created file: {$metadata_file}\n";

// Create LHS vardefs file
$lhs_vardefs_file = 'custom/Extension/modules/' . $lhs_module . '/Ext/Vardefs/' . $relationship_name . '.php';
$lhs_vardefs_content = '<?php
$dictionary["' . $lhs_module . '"]["fields"]["' . strtolower($rhs_module) . '"] = array(
    "name" => "' . strtolower($rhs_module) . '",
    "type" => "link",
    "relationship" => "' . $relationship_name . '",
    "module" => "' . $rhs_module . '",
    "bean_name" => "' . $rhs_module . '",
    "source" => "non-db",
    "vname" => "LBL_' . strtoupper($rhs_module) . '",
);
';

file_put_contents($lhs_vardefs_file, $lhs_vardefs_content);
echo "Created file: {$lhs_vardefs_file}\n";

// Create RHS vardefs file
$rhs_vardefs_file = 'custom/Extension/modules/' . $rhs_module . '/Ext/Vardefs/' . $relationship_name . '.php';
$rhs_vardefs_content = '<?php
$dictionary["' . $rhs_module . '"]["fields"]["' . strtolower($lhs_module) . '"] = array(
    "name" => "' . strtolower($lhs_module) . '",
    "type" => "link",
    "relationship" => "' . $relationship_name . '",
    "module" => "' . $lhs_module . '",
    "bean_name" => "' . $lhs_module . '",
    "source" => "non-db",
    "vname" => "LBL_' . strtoupper($lhs_module) . '",
);
';

file_put_contents($rhs_vardefs_file, $rhs_vardefs_content);
echo "Created file: {$rhs_vardefs_file}\n";

// Create language files
$lhs_lang_file = 'custom/Extension/modules/' . $lhs_module . '/Ext/Language/en_us.' . $relationship_name . '.php';
$lhs_lang_content = '<?php
$mod_strings["LBL_' . strtoupper($rhs_module) . '"] = "' . $rhs_module . '";
';

file_put_contents($lhs_lang_file, $lhs_lang_content);
echo "Created file: {$lhs_lang_file}\n";

$rhs_lang_file = 'custom/Extension/modules/' . $rhs_module . '/Ext/Language/en_us.' . $relationship_name . '.php';
$rhs_lang_content = '<?php
$mod_strings["LBL_' . strtoupper($lhs_module) . '"] = "' . $lhs_module . '";
';

file_put_contents($rhs_lang_file, $rhs_lang_content);
echo "Created file: {$rhs_lang_file}\n";

// Create layoutdefs files
$lhs_layout_file = 'custom/Extension/modules/' . $lhs_module . '/Ext/Layoutdefs/' . $relationship_name . '.php';
$lhs_layout_content = '<?php
$layout_defs["' . $lhs_module . '"]["subpanel_setup"]["' . strtolower($rhs_module) . '"] = array(
    "order" => 100,
    "module" => "' . $rhs_module . '",
    "subpanel_name" => "default",
    "sort_order" => "asc",
    "sort_by" => "name",
    "title_key" => "LBL_' . strtoupper($rhs_module) . '",
    "get_subpanel_data" => "' . strtolower($rhs_module) . '",
    "top_buttons" => array(
        array("widget_class" => "SubPanelTopButtonQuickCreate"),
        array("widget_class" => "SubPanelTopSelectButton", "mode" => "MultiSelect"),
    ),
);
';

file_put_contents($lhs_layout_file, $lhs_layout_content);
echo "Created file: {$lhs_layout_file}\n";

$rhs_layout_file = 'custom/Extension/modules/' . $rhs_module . '/Ext/Layoutdefs/' . $relationship_name . '.php';
$rhs_layout_content = '<?php
$layout_defs["' . $rhs_module . '"]["subpanel_setup"]["' . strtolower($lhs_module) . '"] = array(
    "order" => 100,
    "module" => "' . $lhs_module . '",
    "subpanel_name" => "default",
    "sort_order" => "asc",
    "sort_by" => "name",
    "title_key" => "LBL_' . strtoupper($lhs_module) . '",
    "get_subpanel_data" => "' . strtolower($lhs_module) . '",
    "top_buttons" => array(
        array("widget_class" => "SubPanelTopButtonQuickCreate"),
        array("widget_class" => "SubPanelTopSelectButton", "mode" => "MultiSelect"),
    ),
);
';

file_put_contents($rhs_layout_file, $rhs_layout_content);
echo "Created file: {$rhs_layout_file}\n";

echo "\nAll files created successfully.\n";
echo "Now run a Quick Repair and Rebuild through the Admin interface.\n";
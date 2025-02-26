<?php

// Defining the link field for the Brand
$dictionary['new_Brands']['fields']['opportunities'] = array(
    'name' => 'opportunities',
    'type' => 'link',
    'relationship' => 'opportunities_brands',
    'module' => 'Opportunities',
    'bean_name' => 'Opportunity',
    'source' => 'non-db',
    'vname' => 'LBL_OPPORTUNITIES',
);
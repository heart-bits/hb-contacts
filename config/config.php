<?php

/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['contacts'] = array(
	'tables' => array('tl_contacts'),
	'icon'   => 'system/modules/hb-contacts/assets/images/contacts.png'
);

$GLOBALS['BE_MOD']['content']['companies'] = array(
	'tables' => array('tl_companies'),
	'icon'   => 'system/modules/hb-contacts/assets/images/companies.png'
);

/**
 * Content elements
 */
$GLOBALS['TL_CTE']['contact'] = array
(
 'contact'   => 'Contact'
);

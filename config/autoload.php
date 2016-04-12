<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package Contacts
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'Contao\Contact'    				 => 'system/modules/hb-contacts/elements/Contact.php'
));


/**
 * Register the templates
 */
 TemplateLoader::addFiles(array
 (
 	'ce_contact' => 'system/modules/hb-contacts/templates',
 ));

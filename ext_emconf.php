<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "cag_solrkeywords".
 *
 * Auto generated 10-06-2014 17:11
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Connecta AG Solr Keywords',
	'description' => 'Influence your solr index: Boost or exclude pages with keywords given in page properties',
	'category' => 'services',
	'author' => 'Jörg Hambuch (Connecta AG)',
	'author_email' => 'kontakt@connecta.ag',
	'shy' => '',
	'dependencies' => 'solr',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'pages',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => 'Connecta AG',
	'version' => '1.0.2',
	'constraints' => 
	array (
		'depends' => 
		array (
			'solr' => '2.8.3-',
			'typo3' => '4.5.0-6.2.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:10:{s:9:"ChangeLog";s:4:"441a";s:12:"ext_icon.gif";s:4:"9d53";s:14:"ext_tables.php";s:4:"9119";s:14:"ext_tables.sql";s:4:"2b37";s:13:"locallang.xml";s:4:"8647";s:16:"locallang_db.xml";s:4:"2139";s:10:"README.txt";s:4:"ee2d";s:14:"doc/manual.sxw";s:4:"2c57";s:46:"static/connecta_ag_solr_keywords/constants.txt";s:4:"9a5b";s:42:"static/connecta_ag_solr_keywords/setup.txt";s:4:"c248";}',
	'suggests' => 
	array (
	),
);

?>

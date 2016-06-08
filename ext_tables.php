<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array(
	'tx_cagsolrkeywords_keywords_lfactor' => array(		
		'exclude' => 0,		
		'label' => 'LLL:EXT:cag_solrkeywords/locallang_db.xml:pages.tx_cagsolrkeywords_keywords_lfactor',		
		'config' => array(
			'type' => 'input',	
			'size' => '80',	
			'eval' => 'trim',
		)
	),
	'tx_cagsolrkeywords_keywords_mfactor' => array(		
		'exclude' => 0,		
		'label' => 'LLL:EXT:cag_solrkeywords/locallang_db.xml:pages.tx_cagsolrkeywords_keywords_mfactor',		
		'config' => array(
			'type' => 'input',	
			'size' => '80',	
			'eval' => 'trim',
		)
	),
	'tx_cagsolrkeywords_keywords_hfactor' => array(		
		'exclude' => 0,		
		'label' => 'LLL:EXT:cag_solrkeywords/locallang_db.xml:pages.tx_cagsolrkeywords_keywords_hfactor',		
		'config' => array(
			'type' => 'input',	
			'size' => '80',	
			'eval' => 'trim',
		)
	),
    'tx_cagsolrkeywords_keywords_exclude' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:cag_solrkeywords/locallang_db.xml:pages.tx_cagsolrkeywords_keywords_exclude',
        'config' => array(
            'type' => 'input',
            'size' => '80',
            'eval' => 'trim',
        )
    ),
);


t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('pages','--div--;LLL:EXT:cag_solrkeywords/locallang.xml:title, tx_cagsolrkeywords_keywords_lfactor;;;;1-1-1, tx_cagsolrkeywords_keywords_mfactor, tx_cagsolrkeywords_keywords_hfactor, tx_cagsolrkeywords_keywords_exclude');

t3lib_div::loadTCA('pages_language_overlay');
t3lib_extMgm::addTCAcolumns('pages_language_overlay',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('pages_language_overlay','--div--;LLL:EXT:cag_solrkeywords/locallang.xml:title, tx_cagsolrkeywords_keywords_lfactor;;;;1-1-1, tx_cagsolrkeywords_keywords_mfactor, tx_cagsolrkeywords_keywords_hfactor, tx_cagsolrkeywords_keywords_exclude');

t3lib_extMgm::addStaticFile($_EXTKEY,'static/connecta_ag_solr_keywords/', 'Connecta AG Solr Keywords');
?>

<?php

defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
	't3up_table', 
	'Configuration/TypoScript/Setup', 
	'T3UP - Table-Setup'
	);

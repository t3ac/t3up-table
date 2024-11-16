<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function () {
	ExtensionManagementUtility::addPageTsConfig(
		"@import 'EXT:t3up_table/Configuration/TsConfig/TCETables.tsconfig'"
    	);
    	ExtensionManagementUtility::addTypoScript(
       		't3up-table',
        	'setup',
       	 	"@import 'EXT:t3up-table/Configuration/TypoScript/Setup/setup.typoscript'",
    	);
});

<?php

/*
 * This file is part of the package T3UP.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function () {

	ExtensionManagementUtility::addPageTsConfig(
		"@import 'EXT:t3up_table/Configuration/TsConfig/TCETables.tsconfig'"
    );
});
	
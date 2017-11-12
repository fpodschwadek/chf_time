<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// DATERANGES

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_chftime_domain_model_dateranges',
    'EXT:chf_time/Resources/Private/Language/locallang_csh_tx_chftime_domain_model_dateranges.xlf'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
    'tx_chftime_domain_model_dateranges'
);

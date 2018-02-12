<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// TYPOSCRIPT

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('chf_time', 'Configuration/TypoScript/', 'Cultural Heritage Framework: Time Component');

// TSCONFIG

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:chf_time/Configuration/TSConfig/setup.txt">
');

// TABLE REGISTRATION

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
    'tx_chftime_domain_model_dateranges'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
    'tx_chftime_domain_model_temporal_entity'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
    'tx_chftime_domain_model_calendar'
);

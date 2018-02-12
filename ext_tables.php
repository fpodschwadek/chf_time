<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// TYPOSCRIPT

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('chf_time', 'Configuration/TypoScript/', 'Cultural Heritage Framework: Time Component');

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

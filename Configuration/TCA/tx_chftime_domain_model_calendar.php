<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_calendar',
        'label' => 'name',
        'default_sortby' => 'ORDER BY name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => 2,
        'versioning_followPages' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'searchFields' => 'persistent_identifier,name,name_variants,source,description',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('chf_time') . 'Resources/Public/Icons/tx_chftime_domain_model_calendar.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => '
            sys_language_uid,
            l10n_parent,
            l10n_diffsource,
            hidden,
            persistent_identifier,
            name,
            name_variants,
            description
        ',
    ),
    'types' => array(
        '1' => array(
            'showitem' => '
            --div--;LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_calendar.div1,
                hidden,
                persistent_identifier,
                name,
                name_variants,
                description,
            --div--;LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_calendar.div2,
                sys_language_uid,
                l10n_parent,
                l10n_diffsource
            '
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ],
                ],
                'default' => 0,
            ]
        ],
        'l10n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_chftime_domain_model_calendar',
                'foreign_table_where' => 'AND tx_chftime_domain_model_calendar.pid=###CURRENT_PID### AND tx_chftime_domain_model_calendar.sys_language_uid IN (-1,0)',
            ),
        ),
        'l10n_diffsource' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        't3ver_label' => array(
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            )
        ),
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'persistent_identifier' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_calendar.persistent_identifier',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ),
        ),
        'name' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xml:tx_chftime_domain_model_calendar.name',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'name_variants' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xml:tx_chftime_domain_model_calendar.name_variants',
            'config' => array(
                'type' => 'text',
                'cols' => 30,
                'rows' => 10,
                'eval' => 'trim'
            ),
        ),
        'description' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xml:tx_chftime_domain_model_calendar.description',
            'config' => array(
                'type' => 'text',
                'cols' => 30,
                'rows' => 15,
                'eval' => 'trim'
            ),
        ),
    ),
);

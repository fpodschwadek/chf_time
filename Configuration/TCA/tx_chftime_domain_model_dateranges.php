<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_dateranges',
        'label' => 'label',
        'default_sortby' => 'ORDER BY label',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'versioningWS' => 2,
        'versioning_followPages' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'searchFields' => 'label,dating_from,precision_from,dating_to,precision_to,dating_point,method,duration,calendar,period',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('chf_time') . 'Resources/Public/Icons/tx_chftime_domain_model_dateranges.png'
    ),
    'interface' => array(
        'showRecordFieldList' => '
            sys_language_uid,
            l10n_parent,
            l10n_diffsource,
            hidden,
            label,
            dating_from,
            precision_from,
            dating_to,
            precision_to,
            dating_point,
            method,
            certainty,
            duration,
            calendar,
            period,
        ',
    ),
    'types' => array(
        '1' => array(
            'showitem' => '
            --div--;LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_dateranges.div1,
                hidden,
                label,
                dating_from,
                precision_from,
                dating_to,
                precision_to,
                dating_point,
                method,
                certainty,
                duration,
                calendar,
                period,
            --div--;LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_dateranges.div2,
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
        'sys_language_uid' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
                ),
            ),
        ),
        'l10n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_chftime_domain_model_dateranges',
                'foreign_table_where' => 'AND tx_chftime_domain_model_dateranges.pid=###CURRENT_PID### AND tx_chftime_domain_model_dateranges.sys_language_uid IN (-1,0)',
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
        'label' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_dateranges.label',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'dating_from' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_dateranges.dating_from',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'precision_from' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_dateranges.precision_from',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'dating_to' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_dateranges.dating_to',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'precision_to' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_dateranges.precision_to',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'dating_point' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_dateranges.dating_point',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'method' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_dateranges.method',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'certainty' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_dateranges.certainty',
            'config' => array(
                'type' => 'input',
                'size' => 5,
                'eval' => 'trim,int'
            ),
        ),
        'duration' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_dateranges.duration',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'calendar' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_dateranges.calendar',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'period' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_dateranges.period',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'parent' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        'tablename' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        'fieldname' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
    ),
);

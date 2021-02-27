<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_temporal_entity',
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
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('chf_time') . 'Resources/Public/Icons/tx_chftime_domain_model_temporal_entity.svg'
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
            type,
            parent,
            date_range,
            spatial_extent,
            source,
            description
        ',
    ),
    'types' => array(
        '1' => array(
            'showitem' => '
            --div--;LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_temporal_entity.div1,
                hidden,
                persistent_identifier,
                name,
                name_variants,
                type,
                parent,
                date_range,
                spatial_extent,
                source,
                description
            --div--;LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_temporal_entity.div2,
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
                'foreign_table' => 'tx_chftime_domain_model_temporal_entity',
                'foreign_table_where' => 'AND tx_chftime_domain_model_temporal_entity.pid=###CURRENT_PID### AND tx_chftime_domain_model_temporal_entity.sys_language_uid IN (-1,0)',
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
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_temporal_entity.persistent_identifier',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ),
        ),
        'name' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xml:tx_chftime_domain_model_temporal_entity.name',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'name_variants' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xml:tx_chftime_domain_model_temporal_entity.name_variants',
            'config' => array(
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
                'eval' => 'trim'
            ),
        ),
        'type' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xml:tx_chftime_domain_model_temporal_entity.type',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', '0'),
                    array(
                        'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xml:tx_chftime_domain_model_temporal_entity.type.I.10',
                        '10'
                    ),
                    array(
                        'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xml:tx_chftime_domain_model_temporal_entity.type.I.20',
                        '20'
                    ),
                    array(
                        'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xml:tx_chftime_domain_model_temporal_entity.type.I.30',
                        '30'
                    ),
                    array(
                        'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xml:tx_chftime_domain_model_temporal_entity.type.I.40',
                        '40'
                    ),
                    array(
                        'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xml:tx_chftime_domain_model_temporal_entity.type.I.50',
                        '50'
                    ),
                ),
                'minitems' => 0,
                'maxitems' => 1,
            ),
        ),
        'parent' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_temporal_entity.parent',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array (
                    array('', '0'),
                ),
                'foreign_table' => 'tx_chftime_domain_model_temporal_entity',
                'foreign_table_where' => 'AND tx_chftime_domain_model_temporal_entity.pid IN (###PAGE_TSCONFIG_IDLIST###) ORDER BY name',
                'minitems' => 0,
                'maxitems' => 1,
            ),
        ),
        'date_range' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_temporal_entity.date_range',
            'config' => array(
                'type' => 'inline',
                'foreign_table' => 'tx_chftime_domain_model_dateranges',
                'foreign_field' => 'parent',
                'foreign_table_field' => 'tablename',
                'minitems' => 0,
                'maxitems' => 1,
                'behaviour' => array(
                    'disableMovingChildrenWithParent' => 1,
                ),
                'appearance' => array(
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                    'newRecordLinkAddTitle' => 1,
                    'newRecordLinkPosition' => 'bottom',
                    'levelLinksPosition' => 'bottom',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ),
            ),
        ),
        'spatial_extent' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xml:tx_chftime_domain_model_temporal_entity.spatial_extent',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_chfgeo_domain_model_toponym',
                'foreign_table' => 'tx_chfgeo_domain_model_toponym',
                'maxitems' => 1,
                'size' => 1,
                'wizards' => array(
                    'suggest' => array(
                        'type' => 'suggest',
                        'default' => array(
                            'pidList' => '###PLACEHOLDER###',
                        ),
                    ),
                    'add' => array(
                        'type' => 'popup',
                        'JSopenParams' => 'height=550,width=780,status=0,menubar=0,scrollbars=1',
                        'module' => array(
                            'name' => 'wizard_add',
                        ),
                        'title' => 'Create new record',
                        'icon' => 'actions-add',
                        'params' => array(
                            'table' => 'tx_chfgeo_domain_model_toponym',
                            'pid' => '###PAGE_TSCONFIG_ID###',
                            'setValue' => 'prepend'
                        ),
                    ),
                    'edit' => array(
                        'type' => 'popup',
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        'popup_onlyOpenIfSelected' => 1,
                        'module' => array(
                            'name' => 'wizard_edit',
                        ),
                        'title' => 'Edit',
                        'icon' => 'actions-open',
                    ),
                ),
            ),
        ),
        'source' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xlf:tx_chftime_domain_model_temporal_entity.source',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ),
        ),
        'description' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_time/Resources/Private/Language/locallang_db.xml:tx_chftime_domain_model_temporal_entity.description',
            'config' => array(
                'type' => 'text',
                'cols' => 30,
                'rows' => 15,
                'eval' => 'trim'
            ),
        ),
    ),
);

<?php
return array (
  'ctrl' => 
  array (
    'title' => 'LLL:EXT:sd_slider/Resources/Private/Language/locallang_db.xlf:tx_sdslider_slide',
    'label' => 'tx_sdslider_slideheadline',
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'cruser_id' => 'cruser_id',
    'dividers2tabs' => true,
    'versioningWS' => true,
    'languageField' => 'sys_language_uid',
    'transOrigPointerField' => 'l10n_parent',
    'transOrigDiffSourceField' => 'l10n_diffsource',
    'delete' => 'deleted',
    'enablecolumns' => 
    array (
      'disabled' => 'hidden',
      'starttime' => 'starttime',
      'endtime' => 'endtime',
    ),
    'searchFields' => 'tx_sdslider_slideimage,tx_sdslider_slideheadline,tx_sdslider_slidetext',
    'dynamicConfigFile' => '',
    'iconfile' => 'EXT:sd_slider/ext_icon.png',
    'hideTable' => true,
  ),
  'interface' => 
  array (
    'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, tx_sdslider_slideimage, tx_sdslider_slideheadline, tx_sdslider_slidetext',
  ),
  'types' => 
  array (
    1 => 
    array (
      'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,tx_sdslider_slideimage,tx_sdslider_slideheadline,tx_sdslider_slidetext,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
    ),
  ),
  'palettes' => 
  array (
    1 => 
    array (
      'showitem' => '',
    ),
  ),
  'columns' => 
  array (
    'sys_language_uid' => 
    array (
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
      'config' => 
      array (
        'type' => 'select',
        'renderType' => 'selectSingle',
        'foreign_table' => 'sys_language',
        'foreign_table_where' => 'ORDER BY sys_language.title',
        'items' => 
        array (
          0 => 
          array (
            0 => 'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
            1 => -1,
          ),
          1 => 
          array (
            0 => 'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
            1 => 0,
          ),
        ),
        'default' => 0,
      ),
    ),
    'l10n_parent' => 
    array (
      'displayCond' => 'FIELD:sys_language_uid:>:0',
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
      'config' => 
      array (
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => 
        array (
          0 => 
          array (
            0 => '',
            1 => 0,
          ),
        ),
        'foreign_table' => 'tx_sdslider_slide',
        'foreign_table_where' => 'AND tx_sdslider_slide.pid=###CURRENT_PID### AND tx_sdslider_slide.sys_language_uid IN (-1,0)',
      ),
    ),
    'l10n_diffsource' => 
    array (
      'config' => 
      array (
        'type' => 'passthrough',
      ),
    ),
    't3ver_label' => 
    array (
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
      'config' => 
      array (
        'type' => 'input',
        'size' => 30,
        'max' => 255,
      ),
    ),
    'hidden' => 
    array (
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
      'config' => 
      array (
        'type' => 'check',
      ),
    ),
    'starttime' => 
    array (
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
      'config' => 
      array (
        'behaviour' => 
        array (
          'allowLanguageSynchronization' => true,
        ),
        'renderType' => 'inputDateTime',
        'type' => 'input',
        'size' => 13,
        'eval' => 'datetime',
        'checkbox' => 0,
        'default' => 0,
        'range' => 
        array (
          'lower' => 1501452000,
        ),
      ),
    ),
    'endtime' => 
    array (
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
      'config' => 
      array (
        'behaviour' => 
        array (
          'allowLanguageSynchronization' => true,
        ),
        'renderType' => 'inputDateTime',
        'type' => 'input',
        'size' => 13,
        'eval' => 'datetime',
        'checkbox' => 0,
        'default' => 0,
        'range' => 
        array (
          'lower' => 1501452000,
        ),
      ),
    ),
    'parentid' => 
    array (
      'config' => 
      array (
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => 
        array (
          0 => 
          array (
            0 => '',
            1 => 0,
          ),
        ),
        'foreign_table' => 'tt_content',
        'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1,###REC_FIELD_sys_language_uid###)',
      ),
    ),
    'parenttable' => 
    array (
      'config' => 
      array (
        'type' => 'passthrough',
      ),
    ),
    'sorting' => 
    array (
      'config' => 
      array (
        'type' => 'passthrough',
      ),
    ),
    'tx_sdslider_slideimage' => 
    array (
      'config' => 
      array (
        'type' => 'inline',
        'foreign_table' => 'sys_file_reference',
        'foreign_field' => 'uid_foreign',
        'foreign_sortby' => 'sorting_foreign',
        'foreign_table_field' => 'tablenames',
        'foreign_match_fields' => 
        array (
          'fieldname' => 'tx_sdslider_slideimage',
        ),
        'foreign_label' => 'uid_local',
        'foreign_selector' => 'uid_local',
        'overrideChildTca' => 
        array (
          'columns' => 
          array (
            'uid_local' => 
            array (
              'config' => 
              array (
                'appearance' => 
                array (
                  'elementBrowserType' => 'file',
                  'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                ),
              ),
            ),
          ),
          'types' => 
          array (
            0 => 
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            1 => 
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            2 => 
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            3 => 
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            4 => 
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            5 => 
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
          ),
        ),
        'filter' => 
        array (
          0 => 
          array (
            'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
          ),
        ),
        'appearance' => 
        array (
          'headerThumbnail' => 
          array (
            'field' => 'uid_local',
            'width' => '45',
            'height' => '45c',
          ),
          'enabledControls' => 
          array (
            'info' => 'tx_sdslider_slideimage',
            'dragdrop' => 'tx_sdslider_slideimage',
            'hide' => 'tx_sdslider_slideimage',
            'delete' => 'tx_sdslider_slideimage',
          ),
          'fileUploadAllowed' => 'false',
        ),
        'behaviour' => 
        array (
          'localizeChildrenAtParentLocalization' => 'tx_sdslider_slideimage',
        ),
        'minitems' => '1',
        'maxitems' => '1',
      ),
      'exclude' => '1',
      'l10n_mode' => 'copy',
      'label' => 'LLL:EXT:sd_slider/Resources/Private/Language/locallang_db.xlf:tx_sdslider_slide.tx_sdslider_slideimage',
    ),
    'tx_sdslider_slideheadline' => 
    array (
      'config' => 
      array (
        'type' => 'input',
        'eval' => 'trim',
      ),
      'exclude' => '1',
      'label' => 'LLL:EXT:sd_slider/Resources/Private/Language/locallang_db.xlf:tx_sdslider_slide.tx_sdslider_slideheadline',
    ),
    'tx_sdslider_slidetext' => 
    array (
      'config' => 
      array (
        'type' => 'text',
        'eval' => 'trim',
        'richtextConfiguration' => 'default',
        'enableRichtext' => '1',
        'cols' => '5',
        'rows' => '4',
      ),
      'exclude' => '1',
      'label' => 'LLL:EXT:sd_slider/Resources/Private/Language/locallang_db.xlf:tx_sdslider_slide.tx_sdslider_slidetext',
    ),
  ),
);
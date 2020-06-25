<?php
$tempColumns = array (
  'tx_sdslider_slide' =>
  array (
    'config' =>
    array (
      'type' => 'inline',
      'foreign_table' => 'tx_sdslider_slide',
      'foreign_field' => 'parentid',
      'foreign_table_field' => 'parenttable',
      'foreign_sortby' => 'sorting',
      'appearance' =>
      array (
        'enabledControls' =>
        array (
          'dragdrop' => '1',
        ),
        'levelLinksPosition' => 'top',
      ),
    ),
    'exclude' => '1',
    'l10n_mode' => 'copy',
    'label' => 'LLL:EXT:sd_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_sdslider_slide',
  ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
    'LLL:EXT:sd_slider/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._sdslider_',
    '--div--',
);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
    'LLL:EXT:sd_slider/Resources/Private/Language/locallang_db.xlf:tt_content.CType.sdslider_slickslider',
    'sdslider_slickslider',
    'tx_sdslider_slickslider',
);
$tempTypes = array (
  'sdslider_slickslider' =>
  array (
    'columnsOverrides' =>
    array (
      'bodytext' =>
      array (
        'config' =>
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_sdslider_slide,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
  ),
);
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'sd_slider',
    'Configuration/TypoScript/',
    'sd_slider for Zilliken'
);

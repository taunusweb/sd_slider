mod.wizards.newContentElement.wizardItems.common {
    elements {
            slickslider {
                iconIdentifier = tx_sdslider_slickslider
                title = LLL:EXT:sd_slider/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.slickslider_title
                description = LLL:EXT:sd_slider/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.slickslider_description
                tt_content_defValues {
                    CType = sdslider_slickslider
                }
            }
    }
    show := addToList(slickslider)
}

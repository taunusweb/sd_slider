tt_content.sdslider_slickslider = FLUIDTEMPLATE
tt_content.sdslider_slickslider {
    layoutRootPaths.0 = EXT:sd_slider/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_sdslider.view.layoutRootPath}
    partialRootPaths.0 = EXT:sd_slider/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_sdslider.view.partialRootPath}
    templateRootPaths.0 = EXT:sd_slider/Resources/Private/Templates/Content/
    templateRootPaths.1 = {$plugin.tx_sdslider.view.templateRootPath}
    templateName = Slickslider
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_sdslider_slide
        table = tx_sdslider_slide
        pidInList.field = pid
        where = parentid=###uid### AND deleted=0 AND hidden=0
        orderBy = sorting
        markers {
            uid.field = uid
        }
        as = data_tx_sdslider_slide
    }
dataProcessing.10 {
        dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_sdslider_slideimage
        references {
            fieldName = tx_sdslider_slideimage
            table = tx_sdslider_slide
        }
        as = data_tx_sdslider_slideimage
    }

}
}
page.includeCSS {
    slick = EXT:sd_slider/Resources/Public/Vendor/slick/slick.css
    slicktheme = EXT:sd_slider/Resources/Public/Css/slick-theme.css
}

page.includeJSFooter {
    slick = EXT:sd_slider/Resources/Public/Vendor/slick/slick.min.js
    slickinit = EXT:sd_slider/Resources/Public/JavaScript/main.js

}

<?php
include_once XOOPS_ROOT_PATH . '/modules/tadtools/language/' . $GLOBALS['xoopsConfig']['language'] . '/theme_common.php';

/**自訂設定之語系**/
define("TF_SHOW_VAR", "Display themes vars.");
define("TF_SHOW_VAR_DESC", "Display all variable of tad_themes module that you could use it to design theme.");
define("TF_FONT_FAMILY", "Theme fonts");
define("TF_FONT_FAMILY_DEFAULT", "\"Helvetica Neue\",Helvetica,Arial,sans-serif");
define("TF_FONT_FAMILY_DESC", "CSS font-family setup.ex:" . TF_FONT_FAMILY_DEFAULT);
define("TF_FOOTER_BGCOLOR", "Footer background color");
define("TF_FOOTER_BGCOLOR_DESC", "Set footer background color.");
define("TF_FOOTER_COLOR", "Footer font color");
define("TF_FOOTER_COLOR_DESC", "Set footer font color.");
define("TF_FOOTER_IMG", "Footer backgorund image");
define("TF_FOOTER_IMG_DESC", "Please upload a background image.");
define("TF_FOOTER_STYLE", "Custom styles");
define("TF_FOOTER_STYLE_DESC", "You can design footer style by CSS.");
define("TF_FOOTER_BLOCKS", "Bottom blocks");
define("TF_FOOTER_BLOCKS_DEFAULT", '[\n{"title":"User Menu","bid":"1"},\n{"title":"Online Users","bid":"7"},\n{"title":"Themes","bid":"12"},\n{"title":"Search","bid":"3"}\n]');
define("TF_FOOTER_BLOCKS_DESC", 'Suggest four blocks, written in json format: [{"title": "title", "bid": "block number"}, {second set of settings ...}, ...], bid from Block management observation, if this is empty, will automatically be left and right block to replace it.');
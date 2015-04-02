<?php
/*
 * configuration metadata
 *
 */

$meta['sidebarPosition']   = array('multichoice', '_choices' => array('left', 'right'));
$meta['showTranslation']   = array('onoff');
$meta['inverseNavbar']     = array('onoff');
$meta['fixedTopNavbar']    = array('onoff');
$meta['bootstrapTheme']    = array('multichoice', '_choices' => array('default', 'default+optional', 'bootswatch', 'custom'));
$meta['customTheme']       = array('string');
$meta['bootswatchTheme']   = array('multichoice', '_choices' => array('cerulean','cosmo','cyborg','darkly','flatly','journal','lumen','paper','readable','sandstone','simplex','slate','spacelab','superhero','united','yeti'));
$meta['showThemeSwitcher'] = array('onoff');
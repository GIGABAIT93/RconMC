<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/tree/v2/
 *  NamelessMC version 2.0.0-pr7
 *
 *  License: MIT
 *
 *  RconMC By xGIGABAITx
 */

$INFO_MODULE = array(
	'name' => 'RconMC',
	'author' => '<a href="https://tensa.co.ua" target="_blank" rel="nofollow noopener">xGIGABAITx</a>',
	'module_ver' => '1.2.1',
	'nml_ver' => '2.0.0-pr12',
);

$RconMCLanguage = new Language(ROOT_PATH . '/modules/' . $INFO_MODULE['name'] . '/language', LANGUAGE);

$GLOBALS['RconMCLanguage'] = $RconMCLanguage;

require_once(ROOT_PATH . '/modules/' . $INFO_MODULE['name'] . '/module.php');

$module = new RconMC_Module($language, $pages, $INFO_MODULE);

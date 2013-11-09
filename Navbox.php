<?php
if (!defined('MEDIAWIKI')) {
	die('This is a MediaWiki extension and cannot be run standalone');
}
require_once 'ExtNavbox.php';
$wgHooks['ParserFirstCallInit'][] = 'ExtNavboxHooks::init';

$wgExtensionCredits['Navbox'][] = array(
	'path' => __file__,
	'name' => 'Navbox',
	'author' => '[[User:Lethosor|Lethosor]]',
	'url' => 'https://github.com/lethosor/Navbox',
	'description' => 'Simplifies navbox creation',
	'version' => '0.0'
);

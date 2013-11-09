<?php

class Navbox {
	
}

class ExtNavboxHooks {
	static public function init($parser) {
		$parser->setHook('navbox', 'ExtNavboxHooks::createNavbox');
		return true;
	}
	static public function createNavbox($content) {
		$navbox = new Navbox($content);
		return $navbox->toHTML();
	}
}

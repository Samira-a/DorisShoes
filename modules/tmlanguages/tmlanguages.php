<?php
if (!defined('_CAN_LOAD_FILES_'))
	exit;
class TMLanguages extends Module
{
	function __construct()
	{
		$this->name = 'tmlanguages';
		$this->tab = 'front_office_features';
		$this->version = 1.0;
		$this->author = 'TM';
		parent::__construct();
		$this->displayName = $this->l('TM Language block');
		$this->description = $this->l('Adds a block for selecting a language.');
	}
	function install()
	{
		return (parent::install() AND $this->registerHook('leftColumn'));
	}
	function hookLeftColumn($params)
	{
		global $smarty;
		$languages = Language::getLanguages();
		if (!sizeof($languages))
			return '';
		$smarty->assign('languages', $languages);
		return $this->display(__FILE__, 'tmlanguages.tpl');
	}
}
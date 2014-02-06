<?php
class TMFlashblock extends Module
{
	public function __construct()
	{
		$this->name = 'tmflashblock';
		$this->tab = 'front_office_features';
		$this->version = 1.0;
		$this->author = 'TM';
		parent::__construct();
		$this->displayName = $this->l('TM Flash Block');
		$this->description = $this->l('Adds a block to display a flash content.');
	}
	public function install()
	{
		if (!parent::install() OR !$this->registerHook('home'))
			return false;
		return true;
	}
	function hookHome($params)
	{
		global $smarty;
		return $this->display(__FILE__, 'tmflashblock.tpl');
	}
}
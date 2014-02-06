<?php
if (!defined('_CAN_LOAD_FILES_'))
	exit;
class TMCurrencies extends Module
{
	public function __construct()
	{
		$this->name = 'tmcurrencies';
		$this->tab = 'front_office_features';
		$this->version = 1.0;
		$this->author = 'TM';
		parent::__construct();
		$this->displayName = $this->l('TM Currency block');
		$this->description = $this->l('Adds a block for selecting a currency.');
	}
	public function install()
	{
		return (parent::install() AND $this->registerHook('leftColumn'));
	}
	public function hookLeftColumn($params)
	{
		if (Configuration::get('PS_CATALOG_MODE'))
			return ;
		global $smarty;
		$currencies = Currency::getCurrencies();
		if (!sizeof($currencies))
			return '';
		$smarty->assign('currencies', $currencies);
		return $this->display(__FILE__, 'tmcurrencies.tpl');
	}
}
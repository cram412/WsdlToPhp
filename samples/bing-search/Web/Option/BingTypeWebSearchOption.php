<?php
/**
 * Class file for BingTypeWebSearchOption
 * @date 02/07/2012
 */
/**
 * Class BingTypeWebSearchOption
 * @date 02/07/2012
 */
class BingTypeWebSearchOption extends BingWsdlClass
{
	/**
	 * Constant for value 'DisableHostCollapsing'
	 * @return string 'DisableHostCollapsing'
	 */
	const VALUE_DISABLEHOSTCOLLAPSING = 'DisableHostCollapsing';
	/**
	 * Constant for value 'DisableQueryAlterations'
	 * @return string 'DisableQueryAlterations'
	 */
	const VALUE_DISABLEQUERYALTERATIONS = 'DisableQueryAlterations';
	/**
	 * Constructor
	 * @return BingTypeWebSearchOption
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_DISABLEHOSTCOLLAPSING,self::VALUE_DISABLEQUERYALTERATIONS));
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>
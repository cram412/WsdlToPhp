<?php
/**
 * Class file for SPSearchTypeGetQuerySuggestions
 * @date 06/07/2012
 */
/**
 * Class SPSearchTypeGetQuerySuggestions
 * @date 06/07/2012
 */
class SPSearchTypeGetQuerySuggestions extends SPSearchWsdlClass
{
	/**
	 * The queryXml
	 * @var string
	 */
	public $queryXml;
	/**
	 * Constructor
	 * @param string queryXml
	 * @return SPSearchTypeGetQuerySuggestions
	 */
	public function __construct($_queryXml = null)
	{
		parent::__construct(array('queryXml'=>$_queryXml));
	}
	/**
	 * Set queryXml
	 * @param string queryXml
	 * @return string
	 */
	public function setQueryXml($_queryXml)
	{
		return ($this->queryXml = $_queryXml);
	}
	/**
	 * Get queryXml
	 * @return string
	 */
	public function getQueryXml()
	{
		return $this->queryXml;
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
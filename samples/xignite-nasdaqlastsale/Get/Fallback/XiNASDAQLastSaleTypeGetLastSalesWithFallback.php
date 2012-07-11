<?php
/**
 * Class file for XiNASDAQLastSaleTypeGetLastSalesWithFallback
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleTypeGetLastSalesWithFallback
 * @date 08/07/2012
 */
class XiNASDAQLastSaleTypeGetLastSalesWithFallback extends XiNASDAQLastSaleWsdlClass
{
	/**
	 * The Symbols
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbols;
	/**
	 * Constructor
	 * @param string Symbols
	 * @return XiNASDAQLastSaleTypeGetLastSalesWithFallback
	 */
	public function __construct($_Symbols = null)
	{
		parent::__construct(array('Symbols'=>$_Symbols));
	}
	/**
	 * Set Symbols
	 * @param string Symbols
	 * @return string
	 */
	public function setSymbols($_Symbols)
	{
		return ($this->Symbols = $_Symbols);
	}
	/**
	 * Get Symbols
	 * @return string
	 */
	public function getSymbols()
	{
		return $this->Symbols;
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
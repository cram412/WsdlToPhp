<?php
/**
 * Class file for XiCurrenciesTypeChartBinary
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeChartBinary
 * @date 08/07/2012
 */
class XiCurrenciesTypeChartBinary extends XiCurrenciesTypeCommon
{
	/**
	 * The ByteArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $ByteArray;
	/**
	 * Constructor
	 * @param base64Binary ByteArray
	 * @return XiCurrenciesTypeChartBinary
	 */
	public function __construct($_ByteArray = null)
	{
		XiCurrenciesWsdlClass::__construct(array('ByteArray'=>$_ByteArray));
	}
	/**
	 * Set ByteArray
	 * @param base64Binary ByteArray
	 * @return base64Binary
	 */
	public function setByteArray($_ByteArray)
	{
		return ($this->ByteArray = $_ByteArray);
	}
	/**
	 * Get ByteArray
	 * @return base64Binary
	 */
	public function getByteArray()
	{
		return $this->ByteArray;
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
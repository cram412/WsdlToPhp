<?php
/**
 * Class file for OvhTypeDedicatedNetbootGetAvailableResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedNetbootGetAvailableResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedNetbootGetAvailableResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedNetbootStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedNetbootStructType return
	 * @return OvhTypeDedicatedNetbootGetAvailableResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedNetbootStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedNetbootStructType return
	 * @return MyArrayOfDedicatedNetbootStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedNetbootStructType
	 */
	public function getReturn()
	{
		return $this->return;
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
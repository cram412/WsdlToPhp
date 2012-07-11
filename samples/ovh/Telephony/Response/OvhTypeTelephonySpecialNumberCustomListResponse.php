<?php
/**
 * Class file for OvhTypeTelephonySpecialNumberCustomListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySpecialNumberCustomListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonySpecialNumberCustomListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonySpecialNumberCustomListReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonySpecialNumberCustomListReturn return
	 * @return OvhTypeTelephonySpecialNumberCustomListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonySpecialNumberCustomListReturn return
	 * @return telephonySpecialNumberCustomListReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonySpecialNumberCustomListReturn
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
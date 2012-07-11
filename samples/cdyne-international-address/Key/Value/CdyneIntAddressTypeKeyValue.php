<?php
/**
 * Class file for CdyneIntAddressTypeKeyValue
 * @date 03/07/2012
 */
/**
 * Class CdyneIntAddressTypeKeyValue
 * @date 03/07/2012
 */
class CdyneIntAddressTypeKeyValue extends CdyneIntAddressWsdlClass
{
	/**
	 * The Key
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Key;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Value;
	/**
	 * Constructor
	 * @param string Key
	 * @param string Value
	 * @return CdyneIntAddressTypeKeyValue
	 */
	public function __construct($_Key = null,$_Value = null)
	{
		parent::__construct(array('Key'=>$_Key,'Value'=>$_Value));
	}
	/**
	 * Set Key
	 * @param string Key
	 * @return string
	 */
	public function setKey($_Key)
	{
		return ($this->Key = $_Key);
	}
	/**
	 * Get Key
	 * @return string
	 */
	public function getKey()
	{
		return $this->Key;
	}
	/**
	 * Set Value
	 * @param string Value
	 * @return string
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return string
	 */
	public function getValue()
	{
		return $this->Value;
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
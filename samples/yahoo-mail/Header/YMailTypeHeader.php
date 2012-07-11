<?php
/**
 * Class file for YMailTypeHeader
 * @date 02/07/2012
 */
/**
 * Class YMailTypeHeader
 * @date 02/07/2012
 */
class YMailTypeHeader extends YMailWsdlClass
{
	/**
	 * The name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * The value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var string
	 */
	public $value;
	/**
	 * Constructor
	 * @param string name
	 * @param string value
	 * @return YMailTypeHeader
	 */
	public function __construct($_name = null,$_value = null)
	{
		parent::__construct(array('name'=>$_name,'value'=>$_value));
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set value
	 * @param string value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
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
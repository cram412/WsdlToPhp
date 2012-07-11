<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyBillingAccountInfoChildrenStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyBillingAccountInfoChildrenStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyBillingAccountInfoChildrenStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyBillingAccountInfoChildrenStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyBillingAccountInfoChildrenStruct item
	 * @return OvhTypeMyArrayOfTelephonyBillingAccountInfoChildrenStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyBillingAccountInfoChildrenStruct item
	 * @return telephonyBillingAccountInfoChildrenStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyBillingAccountInfoChildrenStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyBillingAccountInfoChildrenStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyBillingAccountInfoChildrenStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyBillingAccountInfoChildrenStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyBillingAccountInfoChildrenStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyBillingAccountInfoChildrenStruct
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'item'
	 */
	public function getAttributeName()
	{
		return 'item';
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
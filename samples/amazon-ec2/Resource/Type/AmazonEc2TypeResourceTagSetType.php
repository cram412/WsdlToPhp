<?php
/**
 * Class file for AmazonEc2TypeResourceTagSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeResourceTagSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeResourceTagSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeResourceTagSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeResourceTagSetItemType item
	 * @return AmazonEc2TypeResourceTagSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param ResourceTagSetItemType item
	 * @return ResourceTagSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeResourceTagSetItemType
	 */
	public function getItem()
	{
		return $this->item;
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
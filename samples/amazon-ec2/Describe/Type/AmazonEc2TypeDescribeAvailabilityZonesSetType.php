<?php
/**
 * Class file for AmazonEc2TypeDescribeAvailabilityZonesSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeAvailabilityZonesSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeAvailabilityZonesSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeAvailabilityZonesSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeAvailabilityZonesSetItemType item
	 * @return AmazonEc2TypeDescribeAvailabilityZonesSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeAvailabilityZonesSetItemType item
	 * @return DescribeAvailabilityZonesSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeAvailabilityZonesSetItemType
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
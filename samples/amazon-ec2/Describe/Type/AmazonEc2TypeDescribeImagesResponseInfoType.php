<?php
/**
 * Class file for AmazonEc2TypeDescribeImagesResponseInfoType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeImagesResponseInfoType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeImagesResponseInfoType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeImagesResponseItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeImagesResponseItemType item
	 * @return AmazonEc2TypeDescribeImagesResponseInfoType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeImagesResponseItemType item
	 * @return DescribeImagesResponseItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeImagesResponseItemType
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
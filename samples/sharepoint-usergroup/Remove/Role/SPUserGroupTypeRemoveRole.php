<?php
/**
 * Class file for SPUserGroupTypeRemoveRole
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeRemoveRole
 * @date 06/07/2012
 */
class SPUserGroupTypeRemoveRole extends SPUserGroupWsdlClass
{
	/**
	 * The roleName
	 * @var string
	 */
	public $roleName;
	/**
	 * Constructor
	 * @param string roleName
	 * @return SPUserGroupTypeRemoveRole
	 */
	public function __construct($_roleName = null)
	{
		parent::__construct(array('roleName'=>$_roleName));
	}
	/**
	 * Set roleName
	 * @param string roleName
	 * @return string
	 */
	public function setRoleName($_roleName)
	{
		return ($this->roleName = $_roleName);
	}
	/**
	 * Get roleName
	 * @return string
	 */
	public function getRoleName()
	{
		return $this->roleName;
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
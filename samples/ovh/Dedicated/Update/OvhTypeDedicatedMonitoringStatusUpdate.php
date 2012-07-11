<?php
/**
 * Class file for OvhTypeDedicatedMonitoringStatusUpdate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMonitoringStatusUpdate
 * @date 02/07/2012
 */
class OvhTypeDedicatedMonitoringStatusUpdate extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The disabled
	 * @var boolean
	 */
	public $disabled;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param boolean disabled
	 * @return OvhTypeDedicatedMonitoringStatusUpdate
	 */
	public function __construct($_session = null,$_hostname = null,$_disabled = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'disabled'=>$_disabled));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set hostname
	 * @param string hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get hostname
	 * @return string
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set disabled
	 * @param boolean disabled
	 * @return boolean
	 */
	public function setDisabled($_disabled)
	{
		return ($this->disabled = $_disabled);
	}
	/**
	 * Get disabled
	 * @return boolean
	 */
	public function getDisabled()
	{
		return $this->disabled;
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
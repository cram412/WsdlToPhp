<?php
/**
 * Class file for OvhTypeDedicatedIPForUDPMove
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedIPForUDPMove
 * @date 02/07/2012
 */
class OvhTypeDedicatedIPForUDPMove extends OvhWsdlClass
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
	 * The hostnameTo
	 * @var string
	 */
	public $hostnameTo;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string hostnameTo
	 * @param string ip
	 * @return OvhTypeDedicatedIPForUDPMove
	 */
	public function __construct($_session = null,$_hostname = null,$_hostnameTo = null,$_ip = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'hostnameTo'=>$_hostnameTo,'ip'=>$_ip));
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
	 * Set hostnameTo
	 * @param string hostnameTo
	 * @return string
	 */
	public function setHostnameTo($_hostnameTo)
	{
		return ($this->hostnameTo = $_hostnameTo);
	}
	/**
	 * Get hostnameTo
	 * @return string
	 */
	public function getHostnameTo()
	{
		return $this->hostnameTo;
	}
	/**
	 * Set ip
	 * @param string ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get ip
	 * @return string
	 */
	public function getIp()
	{
		return $this->ip;
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
<?php
/**
 * Class file for SONcoaLiveTypeRunNCOALive
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeRunNCOALive
 * @date 06/07/2012
 */
class SONcoaLiveTypeRunNCOALive extends SONcoaLiveWsdlClass
{
	/**
	 * The Addresses
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONcoaLiveTypeArrayOfNCOAAddress
	 */
	public $Addresses;
	/**
	 * The JobId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $JobId;
	/**
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * Constructor
	 * @param SONcoaLiveTypeArrayOfNCOAAddress Addresses
	 * @param string JobId
	 * @param string LicenseKey
	 * @return SONcoaLiveTypeRunNCOALive
	 */
	public function __construct($_Addresses = null,$_JobId = null,$_LicenseKey = null)
	{
		parent::__construct(array('Addresses'=>new SONcoaLiveTypeArrayOfNCOAAddress($_Addresses),'JobId'=>$_JobId,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set Addresses
	 * @param ArrayOfNCOAAddress Addresses
	 * @return ArrayOfNCOAAddress
	 */
	public function setAddresses($_Addresses)
	{
		return ($this->Addresses = $_Addresses);
	}
	/**
	 * Get Addresses
	 * @return SONcoaLiveTypeArrayOfNCOAAddress
	 */
	public function getAddresses()
	{
		return $this->Addresses;
	}
	/**
	 * Set JobId
	 * @param string JobId
	 * @return string
	 */
	public function setJobId($_JobId)
	{
		return ($this->JobId = $_JobId);
	}
	/**
	 * Get JobId
	 * @return string
	 */
	public function getJobId()
	{
		return $this->JobId;
	}
	/**
	 * Set LicenseKey
	 * @param string LicenseKey
	 * @return string
	 */
	public function setLicenseKey($_LicenseKey)
	{
		return ($this->LicenseKey = $_LicenseKey);
	}
	/**
	 * Get LicenseKey
	 * @return string
	 */
	public function getLicenseKey()
	{
		return $this->LicenseKey;
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
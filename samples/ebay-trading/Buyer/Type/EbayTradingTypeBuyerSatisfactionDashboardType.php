<?php
/**
 * Class file for EbayTradingTypeBuyerSatisfactionDashboardType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBuyerSatisfactionDashboardType
 * Documentation : Container for fields related to buyer satisfaction.
 * @date 04/07/2012
 */
class EbayTradingTypeBuyerSatisfactionDashboardType extends EbayTradingWsdlClass
{
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Your buyer satisfaction rating, as a qualitative summary. To determine this rating, eBay considers your detailed seller ratings, your overall feedback rating, and whatever buyer protection claims might exist on your account. eBay uses the buyer satisfaction rating to see if you are eligible for certain rewards, or if you need additional guidance to help you give better service.
	 * @var EbayTradingTypeBuyerSatisfactionStatusCodeType
	 */
	public $Status;
	/**
	 * The Alert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A message to help you understand your buyer satisfaction status. Not returned if there are no existing alerts.
	 * @var EbayTradingTypeSellerDashboardAlertType
	 */
	public $Alert;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeBuyerSatisfactionStatusCodeType Status
	 * @param EbayTradingTypeSellerDashboardAlertType Alert
	 * @param DOMDocument any
	 * @return EbayTradingTypeBuyerSatisfactionDashboardType
	 */
	public function __construct($_Status = null,$_Alert = null,$_any = null)
	{
		parent::__construct(array('Status'=>$_Status,'Alert'=>$_Alert,'any'=>$_any));
	}
	/**
	 * Set Status
	 * @param BuyerSatisfactionStatusCodeType Status
	 * @return BuyerSatisfactionStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeBuyerSatisfactionStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeBuyerSatisfactionStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Alert
	 * @param SellerDashboardAlertType Alert
	 * @return SellerDashboardAlertType
	 */
	public function setAlert($_Alert)
	{
		return ($this->Alert = $_Alert);
	}
	/**
	 * Get Alert
	 * @return EbayTradingTypeSellerDashboardAlertType
	 */
	public function getAlert()
	{
		return $this->Alert;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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
<?php
/**
 * Class file for XiChartTypeDrawCapitalizationChartPreset
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawCapitalizationChartPreset
 * @date 08/07/2012
 */
class XiChartTypeDrawCapitalizationChartPreset extends XiChartWsdlClass
{
	/**
	 * The Identifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifier;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiChartTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The PeriodType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiChartTypePeriodTypes
	 */
	public $PeriodType;
	/**
	 * The Width
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Width;
	/**
	 * The Height
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Height;
	/**
	 * The Preset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Preset;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiChartTypeIdentifierTypes IdentifierType
	 * @param XiChartTypePeriodTypes PeriodType
	 * @param int Width
	 * @param int Height
	 * @param string Preset
	 * @return XiChartTypeDrawCapitalizationChartPreset
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_PeriodType,$_Width,$_Height,$_Preset = null)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'PeriodType'=>$_PeriodType,'Width'=>$_Width,'Height'=>$_Height,'Preset'=>$_Preset));
	}
	/**
	 * Set Identifier
	 * @param string Identifier
	 * @return string
	 */
	public function setIdentifier($_Identifier)
	{
		return ($this->Identifier = $_Identifier);
	}
	/**
	 * Get Identifier
	 * @return string
	 */
	public function getIdentifier()
	{
		return $this->Identifier;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiChartTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiChartTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set PeriodType
	 * @param PeriodTypes PeriodType
	 * @return PeriodTypes
	 */
	public function setPeriodType($_PeriodType)
	{
		return ($this->PeriodType = XiChartTypePeriodTypes::valueIsValid($_PeriodType)?$_PeriodType:null);
	}
	/**
	 * Get PeriodType
	 * @return XiChartTypePeriodTypes
	 */
	public function getPeriodType()
	{
		return $this->PeriodType;
	}
	/**
	 * Set Width
	 * @param int Width
	 * @return int
	 */
	public function setWidth($_Width)
	{
		return ($this->Width = $_Width);
	}
	/**
	 * Get Width
	 * @return int
	 */
	public function getWidth()
	{
		return $this->Width;
	}
	/**
	 * Set Height
	 * @param int Height
	 * @return int
	 */
	public function setHeight($_Height)
	{
		return ($this->Height = $_Height);
	}
	/**
	 * Get Height
	 * @return int
	 */
	public function getHeight()
	{
		return $this->Height;
	}
	/**
	 * Set Preset
	 * @param string Preset
	 * @return string
	 */
	public function setPreset($_Preset)
	{
		return ($this->Preset = $_Preset);
	}
	/**
	 * Get Preset
	 * @return string
	 */
	public function getPreset()
	{
		return $this->Preset;
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
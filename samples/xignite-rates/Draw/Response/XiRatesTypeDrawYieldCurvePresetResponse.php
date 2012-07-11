<?php
/**
 * Class file for XiRatesTypeDrawYieldCurvePresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeDrawYieldCurvePresetResponse
 * @date 08/07/2012
 */
class XiRatesTypeDrawYieldCurvePresetResponse extends XiRatesWsdlClass
{
	/**
	 * The DrawYieldCurvePresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeYieldCurveChart
	 */
	public $DrawYieldCurvePresetResult;
	/**
	 * Constructor
	 * @param XiRatesTypeYieldCurveChart DrawYieldCurvePresetResult
	 * @return XiRatesTypeDrawYieldCurvePresetResponse
	 */
	public function __construct($_DrawYieldCurvePresetResult = null)
	{
		parent::__construct(array('DrawYieldCurvePresetResult'=>$_DrawYieldCurvePresetResult));
	}
	/**
	 * Set DrawYieldCurvePresetResult
	 * @param YieldCurveChart DrawYieldCurvePresetResult
	 * @return YieldCurveChart
	 */
	public function setDrawYieldCurvePresetResult($_DrawYieldCurvePresetResult)
	{
		return ($this->DrawYieldCurvePresetResult = $_DrawYieldCurvePresetResult);
	}
	/**
	 * Get DrawYieldCurvePresetResult
	 * @return XiRatesTypeYieldCurveChart
	 */
	public function getDrawYieldCurvePresetResult()
	{
		return $this->DrawYieldCurvePresetResult;
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
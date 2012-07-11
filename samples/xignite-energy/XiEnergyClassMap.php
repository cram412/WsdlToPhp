<?php
/**
 * ClassMap 
 * @date 08/07/2012
 */
/**
 * ClassMap
 * @date 08/07/2012
 */
class XiEnergyClassMap
{
	final public static function classMap()
	{
		return array (
  'ListEnergySwaps' => 'XiEnergyTypeListEnergySwaps',
  'ListEnergySwapsResponse' => 'XiEnergyTypeListEnergySwapsResponse',
  'ArrayOfFuture' => 'XiEnergyTypeArrayOfFuture',
  'Future' => 'XiEnergyTypeFuture',
  'Common' => 'XiEnergyTypeCommon',
  'Header' => 'XiEnergyTypeHeader',
  'GetAvailableEnergySwaps' => 'XiEnergyTypeGetAvailableEnergySwaps',
  'GetAvailableEnergySwapsResponse' => 'XiEnergyTypeGetAvailableEnergySwapsResponse',
  'ListEnergyFutures' => 'XiEnergyTypeListEnergyFutures',
  'ListEnergyFuturesResponse' => 'XiEnergyTypeListEnergyFuturesResponse',
  'GetAvailableEnergyFutures' => 'XiEnergyTypeGetAvailableEnergyFutures',
  'GetAvailableEnergyFuturesResponse' => 'XiEnergyTypeGetAvailableEnergyFuturesResponse',
  'GetDelayedEnergySwap' => 'XiEnergyTypeGetDelayedEnergySwap',
  'GetDelayedEnergySwapResponse' => 'XiEnergyTypeGetDelayedEnergySwapResponse',
  'FutureQuote' => 'XiEnergyTypeFutureQuote',
  'GetDelayedEnergyFuture' => 'XiEnergyTypeGetDelayedEnergyFuture',
  'GetDelayedEnergyFutureResponse' => 'XiEnergyTypeGetDelayedEnergyFutureResponse',
  'GetDelayedEnergyFrontFuture' => 'XiEnergyTypeGetDelayedEnergyFrontFuture',
  'GetDelayedEnergyFrontFutureResponse' => 'XiEnergyTypeGetDelayedEnergyFrontFutureResponse',
  'GetAllDelayedEnergyFutures' => 'XiEnergyTypeGetAllDelayedEnergyFutures',
  'GetAllDelayedEnergyFuturesResponse' => 'XiEnergyTypeGetAllDelayedEnergyFuturesResponse',
  'ArrayOfFutureQuote' => 'XiEnergyTypeArrayOfFutureQuote',
  'GetTopDelayedEnergyFutures' => 'XiEnergyTypeGetTopDelayedEnergyFutures',
  'GetTopDelayedEnergyFuturesResponse' => 'XiEnergyTypeGetTopDelayedEnergyFuturesResponse',
  'GetDelayedEnergyFutures' => 'XiEnergyTypeGetDelayedEnergyFutures',
  'GetDelayedEnergyFuturesResponse' => 'XiEnergyTypeGetDelayedEnergyFuturesResponse',
  'GetDelayedEnergyFutureStrip' => 'XiEnergyTypeGetDelayedEnergyFutureStrip',
  'GetDelayedEnergyFutureStripResponse' => 'XiEnergyTypeGetDelayedEnergyFutureStripResponse',
  'Strip' => 'XiEnergyTypeStrip',
  'GetHistoricalEnergyFutureStrip' => 'XiEnergyTypeGetHistoricalEnergyFutureStrip',
  'GetHistoricalEnergyFutureStripResponse' => 'XiEnergyTypeGetHistoricalEnergyFutureStripResponse',
  'GetHistoricalEnergySwapStrip' => 'XiEnergyTypeGetHistoricalEnergySwapStrip',
  'GetHistoricalEnergySwapStripResponse' => 'XiEnergyTypeGetHistoricalEnergySwapStripResponse',
  'GetDelayedEnergySpot' => 'XiEnergyTypeGetDelayedEnergySpot',
  'GetDelayedEnergySpotResponse' => 'XiEnergyTypeGetDelayedEnergySpotResponse',
  'GetDelayedEnergySpots' => 'XiEnergyTypeGetDelayedEnergySpots',
  'GetDelayedEnergySpotsResponse' => 'XiEnergyTypeGetDelayedEnergySpotsResponse',
  'GetDelayedEnergyFutureBySession' => 'XiEnergyTypeGetDelayedEnergyFutureBySession',
  'GetDelayedEnergyFutureBySessionResponse' => 'XiEnergyTypeGetDelayedEnergyFutureBySessionResponse',
  'GetAllDelayedEnergyFuturesBySession' => 'XiEnergyTypeGetAllDelayedEnergyFuturesBySession',
  'GetAllDelayedEnergyFuturesBySessionResponse' => 'XiEnergyTypeGetAllDelayedEnergyFuturesBySessionResponse',
  'GetDelayedEnergyFuturesBySession' => 'XiEnergyTypeGetDelayedEnergyFuturesBySession',
  'GetDelayedEnergyFuturesBySessionResponse' => 'XiEnergyTypeGetDelayedEnergyFuturesBySessionResponse',
  'GetHistoricalEnergyFuture' => 'XiEnergyTypeGetHistoricalEnergyFuture',
  'GetHistoricalEnergyFutureResponse' => 'XiEnergyTypeGetHistoricalEnergyFutureResponse',
  'GetHistoricalEnergyFutures' => 'XiEnergyTypeGetHistoricalEnergyFutures',
  'GetHistoricalEnergyFuturesResponse' => 'XiEnergyTypeGetHistoricalEnergyFuturesResponse',
  'GetAllHistoricalEnergyFutures' => 'XiEnergyTypeGetAllHistoricalEnergyFutures',
  'GetAllHistoricalEnergyFuturesResponse' => 'XiEnergyTypeGetAllHistoricalEnergyFuturesResponse',
  'GetHistoricalEnergyFutureRange' => 'XiEnergyTypeGetHistoricalEnergyFutureRange',
  'GetHistoricalEnergyFutureRangeResponse' => 'XiEnergyTypeGetHistoricalEnergyFutureRangeResponse',
  'FutureQuotes' => 'XiEnergyTypeFutureQuotes',
  'GetHistoricalEnergySwap' => 'XiEnergyTypeGetHistoricalEnergySwap',
  'GetHistoricalEnergySwapResponse' => 'XiEnergyTypeGetHistoricalEnergySwapResponse',
  'GetHistoricalEnergySwapRange' => 'XiEnergyTypeGetHistoricalEnergySwapRange',
  'GetHistoricalEnergySwapRangeResponse' => 'XiEnergyTypeGetHistoricalEnergySwapRangeResponse',
  'GetHistoricalEnergySwaps' => 'XiEnergyTypeGetHistoricalEnergySwaps',
  'GetHistoricalEnergySwapsResponse' => 'XiEnergyTypeGetHistoricalEnergySwapsResponse',
  'GetAllHistoricalEnergySwaps' => 'XiEnergyTypeGetAllHistoricalEnergySwaps',
  'GetAllHistoricalEnergySwapsResponse' => 'XiEnergyTypeGetAllHistoricalEnergySwapsResponse',
  'GetHistoricalEnergyCommodityRange' => 'XiEnergyTypeGetHistoricalEnergyCommodityRange',
  'GetHistoricalEnergyCommodityRangeResponse' => 'XiEnergyTypeGetHistoricalEnergyCommodityRangeResponse',
  'GetHistoricalEnergySpotRange' => 'XiEnergyTypeGetHistoricalEnergySpotRange',
  'GetHistoricalEnergySpotRangeResponse' => 'XiEnergyTypeGetHistoricalEnergySpotRangeResponse',
  'GetEnergyTick' => 'XiEnergyTypeGetEnergyTick',
  'GetEnergyTickResponse' => 'XiEnergyTypeGetEnergyTickResponse',
  'SingleTick' => 'XiEnergyTypeSingleTick',
  'GetEnergyTicks' => 'XiEnergyTypeGetEnergyTicks',
  'GetEnergyTicksResponse' => 'XiEnergyTypeGetEnergyTicksResponse',
  'Ticks' => 'XiEnergyTypeTicks',
  'ArrayOfTick' => 'XiEnergyTypeArrayOfTick',
  'Tick' => 'XiEnergyTypeTick',
  'GetHistoricalEnergyTicks' => 'XiEnergyTypeGetHistoricalEnergyTicks',
  'GetHistoricalEnergyTicksResponse' => 'XiEnergyTypeGetHistoricalEnergyTicksResponse',
  'GetIntradayEnergyFutureChart' => 'XiEnergyTypeGetIntradayEnergyFutureChart',
  'GetIntradayEnergyFutureChartResponse' => 'XiEnergyTypeGetIntradayEnergyFutureChartResponse',
  'IntradayChart' => 'XiEnergyTypeIntradayChart',
  'StockChart' => 'XiEnergyTypeStockChart',
  'ChartDesign' => 'XiEnergyTypeChartDesign',
  'GetIntradayEnergyFutureChartBinary' => 'XiEnergyTypeGetIntradayEnergyFutureChartBinary',
  'GetIntradayEnergyFutureChartBinaryResponse' => 'XiEnergyTypeGetIntradayEnergyFutureChartBinaryResponse',
  'ChartBinary' => 'XiEnergyTypeChartBinary',
  'GetIntradayEnergyFutureChartCustom' => 'XiEnergyTypeGetIntradayEnergyFutureChartCustom',
  'GetIntradayEnergyFutureChartCustomResponse' => 'XiEnergyTypeGetIntradayEnergyFutureChartCustomResponse',
  'GetIntradayEnergyFutureChartCustomBinary' => 'XiEnergyTypeGetIntradayEnergyFutureChartCustomBinary',
  'GetIntradayEnergyFutureChartCustomBinaryResponse' => 'XiEnergyTypeGetIntradayEnergyFutureChartCustomBinaryResponse',
  'GetHistoricalEnergyFutureChart' => 'XiEnergyTypeGetHistoricalEnergyFutureChart',
  'GetHistoricalEnergyFutureChartResponse' => 'XiEnergyTypeGetHistoricalEnergyFutureChartResponse',
  'HistoricalChart' => 'XiEnergyTypeHistoricalChart',
  'GetHistoricalEnergyFutureChartBinary' => 'XiEnergyTypeGetHistoricalEnergyFutureChartBinary',
  'GetHistoricalEnergyFutureChartBinaryResponse' => 'XiEnergyTypeGetHistoricalEnergyFutureChartBinaryResponse',
  'GetHistoricalEnergyFutureChartCustom' => 'XiEnergyTypeGetHistoricalEnergyFutureChartCustom',
  'GetHistoricalEnergyFutureChartCustomResponse' => 'XiEnergyTypeGetHistoricalEnergyFutureChartCustomResponse',
  'GetHistoricalEnergyFutureChartCustomBinary' => 'XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinary',
  'GetHistoricalEnergyFutureChartCustomBinaryResponse' => 'XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinaryResponse',
  'GetHistoricalEnergyCommodityChart' => 'XiEnergyTypeGetHistoricalEnergyCommodityChart',
  'GetHistoricalEnergyCommodityChartResponse' => 'XiEnergyTypeGetHistoricalEnergyCommodityChartResponse',
  'GetHistoricalEnergyCommodityChartBinary' => 'XiEnergyTypeGetHistoricalEnergyCommodityChartBinary',
  'GetHistoricalEnergyCommodityChartBinaryResponse' => 'XiEnergyTypeGetHistoricalEnergyCommodityChartBinaryResponse',
  'GetHistoricalEnergyCommodityChartCustom' => 'XiEnergyTypeGetHistoricalEnergyCommodityChartCustom',
  'GetHistoricalEnergyCommodityChartCustomResponse' => 'XiEnergyTypeGetHistoricalEnergyCommodityChartCustomResponse',
  'GetHistoricalEnergyCommodityChartCustomBinary' => 'XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinary',
  'GetHistoricalEnergyCommodityChartCustomBinaryResponse' => 'XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinaryResponse',
  'GetIntradayChartDesign' => 'XiEnergyTypeGetIntradayChartDesign',
  'GetIntradayChartDesignResponse' => 'XiEnergyTypeGetIntradayChartDesignResponse',
  'GetHistoricalChartDesign' => 'XiEnergyTypeGetHistoricalChartDesign',
  'GetHistoricalChartDesignResponse' => 'XiEnergyTypeGetHistoricalChartDesignResponse',
  'GetTopEnergyHeadlines' => 'XiEnergyTypeGetTopEnergyHeadlines',
  'GetTopEnergyHeadlinesResponse' => 'XiEnergyTypeGetTopEnergyHeadlinesResponse',
  'MarketHeadlines' => 'XiEnergyTypeMarketHeadlines',
  'ArrayOfMarketHeadline' => 'XiEnergyTypeArrayOfMarketHeadline',
  'MarketHeadline' => 'XiEnergyTypeMarketHeadline',
  'Security' => 'XiEnergyTypeSecurity',
  'ReleaseSource' => 'XiEnergyTypeReleaseSource',
  'GetTodaysEnergyHeadlines' => 'XiEnergyTypeGetTodaysEnergyHeadlines',
  'GetTodaysEnergyHeadlinesResponse' => 'XiEnergyTypeGetTodaysEnergyHeadlinesResponse',
  'GetLastEnergyHeadlines' => 'XiEnergyTypeGetLastEnergyHeadlines',
  'GetLastEnergyHeadlinesResponse' => 'XiEnergyTypeGetLastEnergyHeadlinesResponse',
  'GetFutureOption' => 'XiEnergyTypeGetFutureOption',
  'GetFutureOptionResponse' => 'XiEnergyTypeGetFutureOptionResponse',
  'FutureOption' => 'XiEnergyTypeFutureOption',
  'GetFutureOptionChain' => 'XiEnergyTypeGetFutureOptionChain',
  'GetFutureOptionChainResponse' => 'XiEnergyTypeGetFutureOptionChainResponse',
  'ArrayOfFutureOption' => 'XiEnergyTypeArrayOfFutureOption',
  'GetFutureOptionsByStrikePrice' => 'XiEnergyTypeGetFutureOptionsByStrikePrice',
  'GetFutureOptionsByStrikePriceResponse' => 'XiEnergyTypeGetFutureOptionsByStrikePriceResponse',
  'OutcomeTypes' => 'XiEnergyTypeOutcomeTypes',
  'FutureTypes' => 'XiEnergyTypeFutureTypes',
  'Currencies' => 'XiEnergyTypeCurrencies',
  'StripTypes' => 'XiEnergyTypeStripTypes',
  'SessionTypes' => 'XiEnergyTypeSessionTypes',
  'TickPeriod' => 'XiEnergyTypeTickPeriod',
  'HistoricalPeriods' => 'XiEnergyTypeHistoricalPeriods',
  'StockChartStyles' => 'XiEnergyTypeStockChartStyles',
  'LinePattern' => 'XiEnergyTypeLinePattern',
  'ImageFrameType' => 'XiEnergyTypeImageFrameType',
  'PredefinedProjection' => 'XiEnergyTypePredefinedProjection',
  'HorzAlign' => 'XiEnergyTypeHorzAlign',
  'PredefinedLightModel' => 'XiEnergyTypePredefinedLightModel',
  'HistoricalChartTypes' => 'XiEnergyTypeHistoricalChartTypes',
  'IndustryTypes' => 'XiEnergyTypeIndustryTypes',
  'ReleaseSourceTypes' => 'XiEnergyTypeReleaseSourceTypes',
  'OptionTypes' => 'XiEnergyTypeOptionTypes',
);
	}
}
?>
<?php
/**
 * ClassMap 
 * @date 08/07/2012
 */
/**
 * ClassMap
 * @date 08/07/2012
 */
class XiGlobalHistoricalClassMap
{
	final public static function classMap()
	{
		return array (
  'GetGlobalLastClosingPrice' => 'XiGlobalHistoricalTypeGetGlobalLastClosingPrice',
  'GetGlobalLastClosingPriceResponse' => 'XiGlobalHistoricalTypeGetGlobalLastClosingPriceResponse',
  'GlobalHistoricalQuote' => 'XiGlobalHistoricalTypeGlobalHistoricalQuote',
  'AbstractGlobalHistoricalObject' => 'XiGlobalHistoricalTypeAbstractGlobalHistoricalObject',
  'Common' => 'XiGlobalHistoricalTypeCommon',
  'Security' => 'XiGlobalHistoricalTypeSecurity',
  'Header' => 'XiGlobalHistoricalTypeHeader',
  'GetGlobalLastClosingPrices' => 'XiGlobalHistoricalTypeGetGlobalLastClosingPrices',
  'GetGlobalLastClosingPricesResponse' => 'XiGlobalHistoricalTypeGetGlobalLastClosingPricesResponse',
  'ArrayOfGlobalHistoricalQuote' => 'XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote',
  'GetGlobalHistoricalQuote' => 'XiGlobalHistoricalTypeGetGlobalHistoricalQuote',
  'GetGlobalHistoricalQuoteResponse' => 'XiGlobalHistoricalTypeGetGlobalHistoricalQuoteResponse',
  'GetEndOfDayQuote' => 'XiGlobalHistoricalTypeGetEndOfDayQuote',
  'GetEndOfDayQuoteResponse' => 'XiGlobalHistoricalTypeGetEndOfDayQuoteResponse',
  'EndOfDayQuote' => 'XiGlobalHistoricalTypeEndOfDayQuote',
  'GetEndOfDayQuotes' => 'XiGlobalHistoricalTypeGetEndOfDayQuotes',
  'GetEndOfDayQuotesResponse' => 'XiGlobalHistoricalTypeGetEndOfDayQuotesResponse',
  'ArrayOfEndOfDayQuote' => 'XiGlobalHistoricalTypeArrayOfEndOfDayQuote',
  'GetGlobalHistoricalQuotes' => 'XiGlobalHistoricalTypeGetGlobalHistoricalQuotes',
  'GetGlobalHistoricalQuotesResponse' => 'XiGlobalHistoricalTypeGetGlobalHistoricalQuotesResponse',
  'GetGlobalHistoricalQuotesAsOf' => 'XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf',
  'GetGlobalHistoricalQuotesAsOfResponse' => 'XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOfResponse',
  'GlobalHistoricalQuotes' => 'XiGlobalHistoricalTypeGlobalHistoricalQuotes',
  'GetGlobalHistoricalQuotesRange' => 'XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange',
  'GetGlobalHistoricalQuotesRangeResponse' => 'XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeResponse',
  'GetGlobalHistoricalQuotesRangeExtended' => 'XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended',
  'GetGlobalHistoricalQuotesRangeExtendedResponse' => 'XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtendedResponse',
  'GlobalHistoricalQuotesExtended' => 'XiGlobalHistoricalTypeGlobalHistoricalQuotesExtended',
  'ArrayOfGlobalHistoricalQuoteExtended' => 'XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuoteExtended',
  'GlobalHistoricalQuoteExtended' => 'XiGlobalHistoricalTypeGlobalHistoricalQuoteExtended',
  'GetGlobalHistoricalWeeklyQuotesRange' => 'XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange',
  'GetGlobalHistoricalWeeklyQuotesRangeResponse' => 'XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeResponse',
  'GetGlobalHistoricalWeeklyQuotesRangeExtended' => 'XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended',
  'GetGlobalHistoricalWeeklyQuotesRangeExtendedResponse' => 'XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtendedResponse',
  'GetGlobalHistoricalQuarterlyQuotesRange' => 'XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange',
  'GetGlobalHistoricalQuarterlyQuotesRangeResponse' => 'XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRangeResponse',
  'GetGlobalHistoricalStatistics' => 'XiGlobalHistoricalTypeGetGlobalHistoricalStatistics',
  'GetGlobalHistoricalStatisticsResponse' => 'XiGlobalHistoricalTypeGetGlobalHistoricalStatisticsResponse',
  'GlobalHistoricalStatistics' => 'XiGlobalHistoricalTypeGlobalHistoricalStatistics',
  'GetGlobalHistoricalMonthlyQuotesRange' => 'XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange',
  'GetGlobalHistoricalMonthlyQuotesRangeResponse' => 'XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeResponse',
  'GetGlobalHistoricalMonthlyQuotesRangeExtended' => 'XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended',
  'GetGlobalHistoricalMonthlyQuotesRangeExtendedResponse' => 'XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtendedResponse',
  'GetTopMoversByExchange' => 'XiGlobalHistoricalTypeGetTopMoversByExchange',
  'GetTopMoversByExchangeResponse' => 'XiGlobalHistoricalTypeGetTopMoversByExchangeResponse',
  'ArrayOfGlobalTop' => 'XiGlobalHistoricalTypeArrayOfGlobalTop',
  'GlobalTop' => 'XiGlobalHistoricalTypeGlobalTop',
  'GetTopGainersByExchange' => 'XiGlobalHistoricalTypeGetTopGainersByExchange',
  'GetTopGainersByExchangeResponse' => 'XiGlobalHistoricalTypeGetTopGainersByExchangeResponse',
  'GetTopLosersByExchange' => 'XiGlobalHistoricalTypeGetTopLosersByExchange',
  'GetTopLosersByExchangeResponse' => 'XiGlobalHistoricalTypeGetTopLosersByExchangeResponse',
  'GetAllSplitsByExchange' => 'XiGlobalHistoricalTypeGetAllSplitsByExchange',
  'GetAllSplitsByExchangeResponse' => 'XiGlobalHistoricalTypeGetAllSplitsByExchangeResponse',
  'ArrayOfSplitHistory' => 'XiGlobalHistoricalTypeArrayOfSplitHistory',
  'SplitHistory' => 'XiGlobalHistoricalTypeSplitHistory',
  'ArrayOfSplit' => 'XiGlobalHistoricalTypeArrayOfSplit',
  'Split' => 'XiGlobalHistoricalTypeSplit',
  'GetSplitRatio' => 'XiGlobalHistoricalTypeGetSplitRatio',
  'GetSplitRatioResponse' => 'XiGlobalHistoricalTypeGetSplitRatioResponse',
  'SplitRatio' => 'XiGlobalHistoricalTypeSplitRatio',
  'GetSplitHistory' => 'XiGlobalHistoricalTypeGetSplitHistory',
  'GetSplitHistoryResponse' => 'XiGlobalHistoricalTypeGetSplitHistoryResponse',
  'GetAllCashDividendsByExchange' => 'XiGlobalHistoricalTypeGetAllCashDividendsByExchange',
  'GetAllCashDividendsByExchangeResponse' => 'XiGlobalHistoricalTypeGetAllCashDividendsByExchangeResponse',
  'ArrayOfDividendHistory' => 'XiGlobalHistoricalTypeArrayOfDividendHistory',
  'DividendHistory' => 'XiGlobalHistoricalTypeDividendHistory',
  'ArrayOfDividend' => 'XiGlobalHistoricalTypeArrayOfDividend',
  'Dividend' => 'XiGlobalHistoricalTypeDividend',
  'GetCashDividendTotal' => 'XiGlobalHistoricalTypeGetCashDividendTotal',
  'GetCashDividendTotalResponse' => 'XiGlobalHistoricalTypeGetCashDividendTotalResponse',
  'DividendTotal' => 'XiGlobalHistoricalTypeDividendTotal',
  'GetCashDividendHistory' => 'XiGlobalHistoricalTypeGetCashDividendHistory',
  'GetCashDividendHistoryResponse' => 'XiGlobalHistoricalTypeGetCashDividendHistoryResponse',
  'GetAllCorporateActionsByExchange' => 'XiGlobalHistoricalTypeGetAllCorporateActionsByExchange',
  'GetAllCorporateActionsByExchangeResponse' => 'XiGlobalHistoricalTypeGetAllCorporateActionsByExchangeResponse',
  'ArrayOfCorporateActionHistory' => 'XiGlobalHistoricalTypeArrayOfCorporateActionHistory',
  'CorporateActionHistory' => 'XiGlobalHistoricalTypeCorporateActionHistory',
  'ArrayOfCorporateAction' => 'XiGlobalHistoricalTypeArrayOfCorporateAction',
  'CorporateAction' => 'XiGlobalHistoricalTypeCorporateAction',
  'GetCorporateActionHistory' => 'XiGlobalHistoricalTypeGetCorporateActionHistory',
  'GetCorporateActionHistoryResponse' => 'XiGlobalHistoricalTypeGetCorporateActionHistoryResponse',
  'IdentifierTypes' => 'XiGlobalHistoricalTypeIdentifierTypes',
  'OutcomeTypes' => 'XiGlobalHistoricalTypeOutcomeTypes',
  'Currencies' => 'XiGlobalHistoricalTypeCurrencies',
  'EndOfDayPriceMethods' => 'XiGlobalHistoricalTypeEndOfDayPriceMethods',
  'EndOfDayPriceMethodsUsed' => 'XiGlobalHistoricalTypeEndOfDayPriceMethodsUsed',
  'EndOfDayPriceTimings' => 'XiGlobalHistoricalTypeEndOfDayPriceTimings',
  'EndOfDayPriceSources' => 'XiGlobalHistoricalTypeEndOfDayPriceSources',
  'PeriodTypes' => 'XiGlobalHistoricalTypePeriodTypes',
  'ExchangeTypes' => 'XiGlobalHistoricalTypeExchangeTypes',
  'GlobalTopTypes' => 'XiGlobalHistoricalTypeGlobalTopTypes',
  'DividendTypes' => 'XiGlobalHistoricalTypeDividendTypes',
  'DividendPaymentFrequencies' => 'XiGlobalHistoricalTypeDividendPaymentFrequencies',
  'CorporateActionTypes' => 'XiGlobalHistoricalTypeCorporateActionTypes',
);
	}
}
?>
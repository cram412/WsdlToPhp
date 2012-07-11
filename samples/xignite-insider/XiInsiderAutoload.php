<?php
/**
 * AutoloadFile 
 * @date 08/07/2012
 */
/**
 * AutoloadFile
 * @date 08/07/2012
 */
require_once dirname(__FILE__) . '/XiInsiderWsdlClass.php';
require_once dirname(__FILE__) . '/Common/XiInsiderTypeCommon.php';
require_once dirname(__FILE__) . '/Get/Transactions/XiInsiderTypeGetInsiderTransactions.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetInsiderTransactionsResponse.php';
require_once dirname(__FILE__) . '/Transaction/XiInsiderTypeTransaction.php';
require_once dirname(__FILE__) . '/Get/Summary/XiInsiderTypeGetInsiderTransactionSummary.php';
require_once dirname(__FILE__) . '/Array/Transaction/XiInsiderTypeArrayOfTransaction.php';
require_once dirname(__FILE__) . '/Insider/Transactions/XiInsiderTypeInsiderTransactions.php';
require_once dirname(__FILE__) . '/Insider/Summary/XiInsiderTypeInsiderTransactionSummary.php';
require_once dirname(__FILE__) . '/Get/Summary/XiInsiderTypeGetIssuerTransactionSummary.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetIssuerTransactionSummaryResponse.php';
require_once dirname(__FILE__) . '/Transaction/Summary/XiInsiderTypeTransactionSummary.php';
require_once dirname(__FILE__) . '/Array/Summary/XiInsiderTypeArrayOfTransactionSummary.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetAllInsiderTransactionsResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetInsiderTransactionSummaryResponse.php';
require_once dirname(__FILE__) . '/Insider/Ownership/XiInsiderTypeInsiderOwnership.php';
require_once dirname(__FILE__) . '/Array/Ownership/XiInsiderTypeArrayOfIssuerOwnership.php';
require_once dirname(__FILE__) . '/Issuer/Ownership/XiInsiderTypeIssuerOwnership.php';
require_once dirname(__FILE__) . '/Shares/Of/XiInsiderTypeSharesAsOf.php';
require_once dirname(__FILE__) . '/Issuer/Ownerships/XiInsiderTypeIssuerOwnerships.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetIssuerOwnershipsResponse.php';
require_once dirname(__FILE__) . '/Get/Ownership/XiInsiderTypeGetInsiderOwnership.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetInsiderOwnershipResponse.php';
require_once dirname(__FILE__) . '/Array/Ownership/XiInsiderTypeArrayOfInsiderOwnership.php';
require_once dirname(__FILE__) . '/Issuer/Summary/XiInsiderTypeIssuerTransactionSummary.php';
require_once dirname(__FILE__) . '/Insider/Ownerships/XiInsiderTypeInsiderOwnerships.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetInsiderOwnershipsResponse.php';
require_once dirname(__FILE__) . '/Get/Ownerships/XiInsiderTypeGetInsiderOwnerships.php';
require_once dirname(__FILE__) . '/Get/Transactions/XiInsiderTypeGetAllInsiderTransactions.php';
require_once dirname(__FILE__) . '/Get/Transactions/XiInsiderTypeGetIssuerTransactions.php';
require_once dirname(__FILE__) . '/SECB/Address/XiInsiderTypeSECBusinessAddress.php';
require_once dirname(__FILE__) . '/Array/Name/XiInsiderTypeArrayOfSECFormerCompanyName.php';
require_once dirname(__FILE__) . '/SECF/Values/XiInsiderTypeSECFilingValues.php';
require_once dirname(__FILE__) . '/SICC/Ode/XiInsiderTypeSICCode.php';
require_once dirname(__FILE__) . '/SECC/Data/XiInsiderTypeSECCompanyData.php';
require_once dirname(__FILE__) . '/SECF/Name/XiInsiderTypeSECFormerCompanyName.php';
require_once dirname(__FILE__) . '/Outcome/Types/XiInsiderTypeOutcomeTypes.php';
require_once dirname(__FILE__) . '/Ownership/Types/XiInsiderTypeOwnershipTypes.php';
require_once dirname(__FILE__) . '/Form/Types/XiInsiderTypeFormTypes.php';
require_once dirname(__FILE__) . '/Security/Types/XiInsiderTypeSecurityTypes.php';
require_once dirname(__FILE__) . '/Transaction/Codes/XiInsiderTypeTransactionCodes.php';
require_once dirname(__FILE__) . '/Identifier/Types/XiInsiderTypeIdentifierTypes.php';
require_once dirname(__FILE__) . '/SECF/Iler/XiInsiderTypeSECFiler.php';
require_once dirname(__FILE__) . '/SECH/Eader/XiInsiderTypeSECHeader.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetAllIssuerTransactionsResponse.php';
require_once dirname(__FILE__) . '/Get/Range/XiInsiderTypeGetAllIssuerTransactionsRange.php';
require_once dirname(__FILE__) . '/Get/Transactions/XiInsiderTypeGetAllIssuerTransactions.php';
require_once dirname(__FILE__) . '/Issuer/Transactions/XiInsiderTypeIssuerTransactions.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetIssuerTransactionsResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetAllIssuerTransactionsRangeResponse.php';
require_once dirname(__FILE__) . '/Array/Change/XiInsiderTypeArrayOfIssuerChange.php';
require_once dirname(__FILE__) . '/Filing/Text/XiInsiderTypeFilingAsText.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetFilingAsTextResponse.php';
require_once dirname(__FILE__) . '/Get/Text/XiInsiderTypeGetFilingAsText.php';
require_once dirname(__FILE__) . '/Issuer/Change/XiInsiderTypeIssuerChange.php';
require_once dirname(__FILE__) . '/Get/Ownerships/XiInsiderTypeGetIssuerOwnerships.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetCEOResponse.php';
require_once dirname(__FILE__) . '/Footnote/XiInsiderTypeFootnote.php';
require_once dirname(__FILE__) . '/Transaction/Amounts/XiInsiderTypeTransactionAmounts.php';
require_once dirname(__FILE__) . '/Array/Footnote/XiInsiderTypeArrayOfFootnote.php';
require_once dirname(__FILE__) . '/Transaction/Coding/XiInsiderTypeTransactionCoding.php';
require_once dirname(__FILE__) . '/Footnote/Id/XiInsiderTypeFootnoteId.php';
require_once dirname(__FILE__) . '/Underlying/Security/XiInsiderTypeUnderlyingSecurity.php';
require_once dirname(__FILE__) . '/Post/Amounts/XiInsiderTypePostTransactionAmounts.php';
require_once dirname(__FILE__) . '/Array/Table/XiInsiderTypeArrayOfNonDerivativeTable.php';
require_once dirname(__FILE__) . '/Non/Table/XiInsiderTypeNonDerivativeTable.php';
require_once dirname(__FILE__) . '/Derivative/Holding/XiInsiderTypeDerivativeHolding.php';
require_once dirname(__FILE__) . '/Array/Holding/XiInsiderTypeArrayOfDerivativeHolding.php';
require_once dirname(__FILE__) . '/Ownership/Nature/XiInsiderTypeOwnershipNature.php';
require_once dirname(__FILE__) . '/Value/XiInsiderTypeValue.php';
require_once dirname(__FILE__) . '/Derivative/Transaction/XiInsiderTypeDerivativeTransaction.php';
require_once dirname(__FILE__) . '/Array/Owner/XiInsiderTypeArrayOfReportingOwner.php';
require_once dirname(__FILE__) . '/Reporting/Owner/XiInsiderTypeReportingOwner.php';
require_once dirname(__FILE__) . '/Issuer/XiInsiderTypeIssuer.php';
require_once dirname(__FILE__) . '/Ownership/Document/XiInsiderTypeOwnershipDocument.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetOwnershipFormResponse.php';
require_once dirname(__FILE__) . '/Rpt/Id/XiInsiderTypeRptOwnerId.php';
require_once dirname(__FILE__) . '/Rpt/Address/XiInsiderTypeRptOwnerAddress.php';
require_once dirname(__FILE__) . '/Array/Transaction/XiInsiderTypeArrayOfDerivativeTransaction.php';
require_once dirname(__FILE__) . '/Derivative/Table/XiInsiderTypeDerivativeTable.php';
require_once dirname(__FILE__) . '/Array/Table/XiInsiderTypeArrayOfDerivativeTable.php';
require_once dirname(__FILE__) . '/Rpt/Relationship/XiInsiderTypeRptOwnerRelationship.php';
require_once dirname(__FILE__) . '/Array/Transaction/XiInsiderTypeArrayOfNonDerivativeTransaction.php';
require_once dirname(__FILE__) . '/Non/Transaction/XiInsiderTypeNonDerivativeTransaction.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetRoleResponse.php';
require_once dirname(__FILE__) . '/Get/Roster/XiInsiderTypeGetRoster.php';
require_once dirname(__FILE__) . '/Get/Role/XiInsiderTypeGetRole.php';
require_once dirname(__FILE__) . '/Security/XiInsiderTypeSecurity.php';
require_once dirname(__FILE__) . '/Relationship/XiInsiderTypeRelationship.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetRosterResponse.php';
require_once dirname(__FILE__) . '/Roster/XiInsiderTypeRoster.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetOfficersResponse.php';
require_once dirname(__FILE__) . '/Get/CEO/XiInsiderTypeGetCEO.php';
require_once dirname(__FILE__) . '/Get/Officers/XiInsiderTypeGetOfficers.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetDirectorsResponse.php';
require_once dirname(__FILE__) . '/Get/Directors/XiInsiderTypeGetDirectors.php';
require_once dirname(__FILE__) . '/Role/XiInsiderTypeRole.php';
require_once dirname(__FILE__) . '/Array/Role/XiInsiderTypeArrayOfRole.php';
require_once dirname(__FILE__) . '/Header/XiInsiderTypeHeader.php';
require_once dirname(__FILE__) . '/Get/Insiders/XiInsiderTypeGetInsiders.php';
require_once dirname(__FILE__) . '/Owner/Signature/XiInsiderTypeOwnerSignature.php';
require_once dirname(__FILE__) . '/Non/Holding/XiInsiderTypeNonDerivativeHolding.php';
require_once dirname(__FILE__) . '/Array/Holding/XiInsiderTypeArrayOfNonDerivativeHolding.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetInsidersResponse.php';
require_once dirname(__FILE__) . '/Array/Insider/XiInsiderTypeArrayOfInsider.php';
require_once dirname(__FILE__) . '/Get/Response/XiInsiderTypeGetRolesResponse.php';
require_once dirname(__FILE__) . '/Get/Roles/XiInsiderTypeGetRoles.php';
require_once dirname(__FILE__) . '/Address/XiInsiderTypeAddress.php';
require_once dirname(__FILE__) . '/Insider/XiInsiderTypeInsider.php';
require_once dirname(__FILE__) . '/Get/Form/XiInsiderTypeGetOwnershipForm.php';
require_once dirname(__FILE__) . '/Get/XiInsiderServiceGet.php';
require_once dirname(__FILE__) . '/XiInsiderClassMap.php';
?>